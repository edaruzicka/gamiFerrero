@extends('layouts.scrollSpy')

@section('content')



<div class="container">
    <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Question 1</a></li>
            <li><a href="#section2">Question 2</a></li>
            <li><a href="#section3">Question 3</a></li>
            <li><a href="#section4">Question 4</a></li>
        </ul>
    </nav>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Game 3</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/game/submit">
                        {{ csrf_field() }}
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <input type="hidden" name="round" value=3> <!-- anti multi submi formi hidden, value = "Game number MINUS 1" -->
                                    <input type="hidden" name="imgPoints" id="imgPoints" value=0>

                                    <img id="ferrero" src="/img/ferrero.gif" draggable="true" ondragstart="drag(event)">
                                    <img id="nutella" src="/img/nutella.jpg" draggable="true" ondragstart="drag(event)">
                                    <img id="kinder" src="/img/kinder.jpg" draggable="true" ondragstart="drag(event)">
                                    <img id="pralines" src="/img/pralines.jpg" draggable="true" ondragstart="drag(event)">
                                    <img id="tictac" src="/img/tictac.jpg" draggable="true" ondragstart="drag(event)">
                                    <br>
                                    <div class="ferrero" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div class="nutella" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div class="kinder" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div class="pralines" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div class="tictac" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
