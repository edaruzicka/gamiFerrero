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
            <li><a href="#section6">Question 6</a></li>
            <li><a href="#section7">Question 7</a></li>
            <li><a href="#section8">Question 8</a></li>
            <li><a href="#section9">Question 9</a></li>
            <li><a href="#section10">Question 10</a></li>
        </ul>
    </nav>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Game 1</div>

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
                                    <input type="hidden" name="round" value=0> <!-- anti multi submi formi hidden value minus 1 -->
                                    <div id="section1" class="section">
                                        <h1>Question 1</h1>
                                        <hr />
                                        <p>How many business cars does Ferrero lease up to date?</p>
                                        <fieldset>
                                                <input type="radio" name="answer1" value="CiHLOXJyfx" required> 36<br>
                                                <input type="radio" name="answer1" value="gUiadJGiKq" required> 32<br>
                                                <input type="radio" name="answer1" value="Xpb7TLq3i4" required> 28<br>
                                        </fieldset>
                                    </div>
                                    <div id="section2" class="section"> 
                                        <h1>Question 2</h1>
                                        <hr />
                                        <p>What is the average age of a Ferrero employee?</p>
                                        <fieldset>
                                                <input type="radio" name="answer2" value="uYIiW5VlCc" required> 41<br>
                                                <input type="radio" name="answer2" value="yEszDVgrhl" required> 38<br>
                                                <input type="radio" name="answer2" value="8lTl7TmSjA" required> 35<br>
                                        </fieldset>
                                    </div>        
                                    <div id="section3" class="section">         
                                        <h1>Question 3</h1>
                                        <hr />
                                        <p>How many days of holiday did Ferrero employees claim in January 2018?</p>
                                        <fieldset>
                                                <input type="radio" name="answer3" value="lf7aXm24BD" required> 64<br>
                                                <input type="radio" name="answer3" value="fKqvEfJFQA" required> 59<br>
                                                <input type="radio" name="answer3" value="HBUzyr2xre" required> 54<br>
                                        </fieldset>
                                    </div>
                                    <div id="section4" class="section">
                                        <h1>Question 4</h1>
                                        <hr />
                                        <p>Who is the tallest person in Ferrero?</p>
                                        <fieldset>
                                            <input type="radio" name="answer4" value="NBrerjqcli" required> Pepa Benedikt<br>
                                            <input type="radio" name="answer4" value="SVTZbKlii4" required> Petra Rowlandová<br>
                                            <input type="radio" name="answer4" value="rLYJKslAKr" required> Marian Lukášik<br>
                                        </fieldset>
                                    </div>
                                    <div id="section5" class="section">
                                        <h1>Question 5</h1>
                                        <hr />
                                        <p>How many litres of milk do we drink every month?</p>
                                        <fieldset>
                                            <input type="radio" name="answer5" value="NBrerjqcli" required> 85 litres<br>
                                            <input type="radio" name="answer5" value="SVuZbKliiz" required> 78 litres<br>
                                            <input type="radio" name="answer5" value="rLYJKslAKr" required> 67 litres<br>
                                        </fieldset>
                                    </div>
                                    <div id="section6" class="section">
                                        <h1>Question 6</h1>
                                        <hr />
                                        <p>Which gender is represented more in Ferrero (without maternity leaves)?</p>
                                        <fieldset>
                                            <input type="radio" name="answer6" value="NBrerjqcli" required> Males<br>
                                            <input type="radio" name="answer6" value="SuTZbKliib" required> Females<br>
                                            <input type="radio" name="answer6" value="rLYJKslAKr" required> Both same<br>
                                        </fieldset>
                                    </div>
                                    <div id="section7" class="section">
                                        <h1>Question 7</h1>
                                        <hr />
                                        <p>How many language courses are currently in progress in Ferrero?</p>
                                        <fieldset>
                                            <input type="radio" name="answer7" value="NBrerjqcli" required> 12<br>
                                            <input type="radio" name="answer7" value="SVTZbKliiu" required> 19<br>
                                            <input type="radio" name="answer7" value="rLYJKslAKr" required> 15<br>
                                        </fieldset>
                                    </div>
                                    <div id="section8" class="section">
                                        <h1>Question 8</h1>
                                        <hr />
                                        <p>What colour are the chair seats in our Ferrero kitchen?</p>
                                        <fieldset>
                                            <input type="radio" name="answer8" value="NBrerjqcli" required> Grey<br>
                                            <input type="radio" name="answer8" value="SVTZbKlii8" required> Brown<br>
                                            <input type="radio" name="answer8" value="rLYJKslAUr" required> White<br>
                                        </fieldset>
                                    </div>
                                    <div id="section9" class="section">
                                        <h1>Question 9</h1>
                                        <hr />
                                        <p>How many people in Ferrero celebrate birthday in January?</p>
                                        <fieldset>
                                            <input type="radio" name="answer9" value="NBrerjqcli" required> 2<br>
                                            <input type="radio" name="answer9" value="SVTZbKlii9" required> 4<br>
                                            <input type="radio" name="answer9" value="rLUJKslAKr" required> 5<br>
                                        </fieldset>
                                    </div>
                                    <div id="section10" class="section">
                                        <h1>Question 10</h1>
                                        <hr />
                                        <p>What is the average employee seniority in Ferrero (in years)?</p>
                                        <fieldset>
                                            <input type="radio" name="answer10" value="NBrerjqcli" required> 6<br>
                                            <input type="radio" name="answer10" value="SVTZbKluia" required> 8<br>
                                            <input type="radio" name="answer10" value="rLYJKslAKr" required> 10<br>
                                        </fieldset>
                                    </div>
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
