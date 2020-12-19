@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Click on the button to start!


                    @switch($user->rounds)
                        @case(0)
                            <?php $round1 = "btn-primary" ?>
                            <?php $round2 = "btn-default disabled" ?>
                            <?php $round3 = "btn-default disabled" ?>
                            @break
                    
                        @case(1)
                            <?php $round1 = "btn-default disabled" ?>
                            <?php $round2 = "btn-primary" ?>
                            <?php $round3 = "btn-default disabled" ?>
                            @break
                        
                        @case(2)
                            <?php $round1 = "btn-default disabled" ?>
                            <?php $round2 = "btn-default disabled" ?>
                            <?php $round3 = "btn-primary" ?>
                            @break
                        @default
                        <?php $round1 = "btn-default disabled" ?>
                        <?php $round2 = "btn-default disabled" ?>
                        <?php $round3 = "btn-default disabled" ?>
                    @endswitch

                    <br>

                        <div class="album py-5 bg-light">
                            <div class="container">

                                @if($user->isAdmin == 1)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-4 box-shadow">
                                                <div class="card-body">
                                                    <p class="card-text">Questionare results</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        Results: <a href='/questionare/results' class='btn btn-primary' role='button'>View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                @endif

                                
                                <h2>Games:</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                            <img class="card-img-top" src='/img/hr.jpg' alt="Card image cap">
                                            <div class="card-body">
                                                <p class="card-text">Try out your knowledge with Human Resources questions!</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Round 1: {!! "<a href='/game/1' class='btn $round1' role='button'>Start</a>" !!}
                                                    @if($user->rounds == 0)
                                                        {{"Start here!"}}
                                                    @else
                                                        {{"&#10004;"}}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                            <img class="card-img-top" src='/img/it.png' alt="Card image cap">
                                            <div class="card-body">
                                                <p class="card-text">How well do you understand IT? Test yourself in this second round!</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Round 2: {!! "<a href='/game/2' class='btn $round2' role='button'>Start</a>" !!}
                                                    @if($user->rounds == 1)
                                                        {{"Continue here!"}}
                                                    @elseif($user->rounds > 1)
                                                        {{"&#10004;"}}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                            <img class="card-img-top" src='/img/nutella.jpg' alt="Card image cap">
                                            <div class="card-body">
                                                <p class="card-text">Ferrero history and products, that is the theme of last round!</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                        Round 3: {!! "<a href='/game/3' class='btn $round3' role='button'>Start</a>" !!}
                                                        @if($user->rounds == 2)
                                                            {{"Continue here!"}}
                                                        @elseif($user->rounds > 2)
                                                            {{"&#10004;"}}
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <h2>Questionares:</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                            <img class="card-img-top" src='/img/medals/goldSm.png' alt="Card image cap" width="100">
                                            <div class="card-body">
                                                <p class="card-text">Please fill out this gamification questionare. <br> Data will analyzed in my bachelor thesis and it will help future development of this web application. Thank you!</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                        Questionare: <a href='/questionare/gamiSatisfaction' class='btn btn-primary' role='button'>Start</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
