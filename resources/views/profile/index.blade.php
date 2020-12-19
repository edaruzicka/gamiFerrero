@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                        <li class="list-group-item">Name: <?= $user->name; ?> </li>
                        <li class="list-group-item">Department: <?= $user->department  ?> </li>
                        <li class="list-group-item">Email: <?= $user->email; ?> </li>
                        <li class="list-group-item list-group-item-warning">Points: <?= $user->points; ?> </li>
                    </ul>
                    
                    <div class="container">
                        <h2>Achievements</h2>
                        <p>Here is the list of all your earned and available achievements.</p>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="thumbnail">
                                    <img src="/img/gami/3-star.png" alt="Bronze star" style="<?php if($user->rounds < 1) echo("opacity:0.15") ?>">
                                    <div class="caption">
                                        <p>Complete the first round.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="thumbnail">
                                    <img src="/img/gami/2-star.png" alt="Silver star" style="<?php if($user->rounds < 2) echo("opacity:0.15") ?>">
                                    <div class="caption">
                                        <p>Complete the second round.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="thumbnail">
                                    <img src="/img/gami/1-star.png" alt="Gold star" style="<?php if($user->rounds < 3) echo("opacity:0.15") ?>">
                                    <div class="caption">
                                        <p>Complete the third round.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="thumbnail">
                                    <img src="/img/gami/3-crown.png" alt="Bronze crown" style="<?php if($user->points < 7) echo("opacity:0.15") ?>">
                                    <div class="caption">
                                        <p>Gain 7 points.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="thumbnail">
                                    <img src="/img/gami/2-crown.png" alt="Silver crown" style="<?php if($user->points < 14) echo("opacity:0.15") ?>">
                                    <div class="caption">
                                        <p>Gain 14 points.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="thumbnail">
                                    <img src="/img/gami/1-crown.png" alt="Gold crown" style="<?php if($user->points < 21) echo("opacity:0.15") ?>">
                                    <div class="caption">
                                        <p>Gain 21 points.</p>
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
