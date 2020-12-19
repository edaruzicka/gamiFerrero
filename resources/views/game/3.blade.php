@extends('layouts.scrollSpy')

@section('content')



<div class="container">
    <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Question 1</a></li>
            <li><a href="#section2">Question 2</a></li>
            <li><a href="#section3">Question 3</a></li>
            <li><a href="#section4">Question 4</a></li>
            <li><a href="#section5">Question 5</a></li>
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
                                    <input type="hidden" name="round" value=2> <!-- anti multi submi formi hidden, value = "Game number MINUS 1" -->
                                    <div id="section1" class="section">
                                        <h1>Question 1</h1>
                                        <hr />
                                        <p>Cream of hazelnuts and cocoa made in 1946 by Pietro Ferrero was called:</p>
                                        <fieldset>
                                            <input type="radio" name="answer1" value="CiHLOXJyfx" required> Piedmontese<br>
                                            <input type="radio" name="answer1" value="gTiadJGiKq" required> Caffarel<br>
                                            <input type="radio" name="answer1" value="Xpb7TLq3i4" required> Marionette<br>
                                            <input type="radio" name="answer1" value="Xpb7ULq3i4" required> Giandujot<br>
                                        </fieldset>
                                    </div>
                                    <div id="section2" class="section"> 
                                        <h1>Question 2</h1>
                                        <hr />
                                        <p>Spreadable version of this creme was called:</p>
                                        <fieldset>
                                            <input type="radio" name="answer2" value="aYIiW5VlCc" required> Cremasuper<br>
                                            <input type="radio" name="answer2" value="yEszDVgrhl" required> NutaCrema<br>
                                            <input type="radio" name="answer2" value="8lTl7TuSjA" required> Supercrema<br>
                                            <input type="radio" name="answer2" value="8lTl7TmSjA" required> CocoNuta<br>
                                        </fieldset>
                                    </div>        
                                    <div id="section3" class="section">         
                                        <h1>Question 3</h1>
                                        <hr />
                                        <p>Ferrero bought up ___ of global hazelnut production in 2014.</p>
                                        <fieldset>
                                            <input type="radio" name="answer3" value="HBUzyr2xre" required> 25%<br>
                                            <input type="radio" name="answer3" value="fKqvEfJFQA" required> 35%<br>
                                            <input type="radio" name="answer3" value="lf7aXm24BD" required> 15%<br>
                                            <input type="radio" name="answer3" value="HBtzyr2xre" required> 5%<br>
                                        </fieldset>
                                    </div>
                                    <div id="section4" class="section">
                                        <h1>Question 4</h1>
                                        <hr />
                                        <p>How many flavours of Tic Tac are now available in Czech Republic?</p>
                                        <fieldset>
                                            <input type="radio" name="answer4" value="NBrerjqcli" required> 6<br>
                                            <input type="radio" name="answer4" value="SVTZuKlii4" required> 5<br>
                                            <input type="radio" name="answer4" value="rLYJKslAKr" required> 4<br>
                                            <input type="radio" name="answer4" value="rLYJAslAKr" required> 3<br>
                                        </fieldset>
                                    </div>
                                    <div id="section5" class="section">
                                        <h1>Question 5</h1>
                                        <hr />
                                        <p>Why is Kinder Surprise banned in the USA?</p>
                                        <fieldset>
                                            <input type="radio" name="answer5" value="NBrerjqcli" required> The US law does not allow egg-shaped products.<br>
                                            <input type="radio" name="answer5" value="SVzZbKliiz" required> Kids in the US used to overdose on chocolate thanks to K. Surprise.<br>
                                            <input type="radio" name="answer5" value="rLYJKslAKr" required> Toys inside the Surprise eggs caused a crash of the US Toy industry.<br>
                                            <input type="radio" name="answer5" value="rLuJKslAKr" required> Any food with a ‘non-nutritive object embedded’ is strictly illegal in the US.<br>
                                        </fieldset>
                                    </div>
                                    <input type="hidden" name="answer6" value=0>
                                    <input type="hidden" name="answer7" value=0>
                                    <input type="hidden" name="answer8" value=0>
                                    <input type="hidden" name="answer9" value=0>
                                    <input type="hidden" name="answer10" value=0>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg"></input>
                        </div>
                    </form>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
