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
                <div class="panel-heading">Game 2</div>

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
                                    <input type="hidden" name="round" value=1> <!-- anti multi submi formi hidden value minus 1 -->
                                    <div id="section1" class="section">
                                        <h1>Question 1</h1>
                                        <hr />
                                        <p>Microsoft Corporation was founded by:</p>
                                        <fieldset>
                                                <input type="radio" name="answer1" value="CiHLOXJyfx" required> Steve Jobs<br>
                                                <input type="radio" name="answer1" value="gTiadJGiKq" required> Michele Ferrero<br>
                                                <input type="radio" name="answer1" value="Xpb7ULq3i4" required> Bill Gates<br>
                                                <input type="radio" name="answer1" value="Xpb7TLq3i4" required> Eminem<br>
                                        </fieldset>
                                    </div>
                                    <div id="section2" class="section"> 
                                        <h1>Question 2</h1>
                                        <hr />
                                        <p>If you spill water on your computer, it will:</p>
                                        <fieldset>
                                                <input type="radio" name="answer2" value="aYIiW5VlCc" required> erase your Credit card<br>
                                                <input type="radio" name="answer2" value="yEszDVgrhl" required> send alert to your boss<br>
                                                <input type="radio" name="answer2" value="8lTl7TmSjA" required> become washer mashine<br>
                                                <input type="radio" name="answer2" value="8lTl7TuSjA" required> probably cause damage to it<br>
                                        </fieldset>
                                    </div>        
                                    <div id="section3" class="section">         
                                        <h1>Question 3</h1>
                                        <hr />
                                        <p>Phishing is:</p>
                                        <fieldset>
                                                <input type="radio" name="answer3" value="HBUzyr2xre" required> technique of social engineering used to deceive users, and exploits weaknesses in current web security<br>
                                                <input type="radio" name="answer3" value="fKqvEfJFQA" required> special technique to catch tuna fish<br>
                                                <input type="radio" name="answer3" value="lf7aXm24BD" required> forgotten martial art of the Far East<br>
                                                <input type="radio" name="answer3" value="HBtzyr2xre" required> an animal used to attract fish in Sea parks<br>
                                        </fieldset>
                                    </div>
                                    <div id="section4" class="section">
                                        <h1>Question 4</h1>
                                        <hr />
                                        <p>Is your computer powered by steam?</p>
                                        <fieldset>
                                            <input type="radio" name="answer4" value="NBrerjqcli" required> Yes<br>
                                            <input type="radio" name="answer4" value="SVTZuKlii4" required> No<br>
                                            <input type="radio" name="answer4" value="rLYJKslAKr" required> Sometimes<br>
                                            <input type="radio" name="answer4" value="rLYJAslAKr" required> I prefer squirels<br>
                                        </fieldset>
                                    </div>
                                    <div id="section5" class="section">
                                        <h1>Question 5</h1>
                                        <hr />
                                        <p>Spam is:</p>
                                        <fieldset>
                                            <input type="radio" name="answer5" value="NBuerjqcli" required> abbreviation for spiced ham<br>
                                            <input type="radio" name="answer5" value="SVrZbKliiz" required> one of Marvel Superheroes (special power: Trash Talking)<br>
                                            <input type="radio" name="answer5" value="rLYJKslAKr" required> technique of cyber robbery<br>
                                            <input type="radio" name="answer5" value="rLYJKslAKr" required> producer of bike components<br>
                                        </fieldset>
                                    </div>
                                    <div id="section6" class="section">
                                        <h1>Question 6</h1>
                                        <hr />
                                        <p>Firewall in computer is used for:</p>
                                        <fieldset>
                                            <input type="radio" name="answer6" value="NBreujqcli" required> Security<br>
                                            <input type="radio" name="answer6" value="SSTZbKliib" required> Data Transmission<br>
                                            <input type="radio" name="answer6" value="rLYJKslAKr" required> Authetication<br>
                                            <input type="radio" name="answer6" value="rLYJKslAAr" required> Monitoring<br>
                                        </fieldset>
                                    </div>
                                    <div id="section7" class="section">
                                        <h1>Question 7</h1>
                                        <hr />
                                        <p>The main page of a Web site is known as:</p>
                                        <fieldset>
                                            <input type="radio" name="answer7" value="NBrerjqcli" required> Content page<br>
                                            <input type="radio" name="answer7" value="SVTZbKliiu" required> Home page<br>
                                            <input type="radio" name="answer7" value="rLYJKslAKr" required> Book mark page<br>
                                            <input type="radio" name="answer7" value="rLYJKslAKr" required> Navigator page<br>
                                        </fieldset>
                                    </div>
                                    <div id="section8" class="section">
                                        <h1>Question 8</h1>
                                        <hr />
                                        <p>The GUI means:</p>
                                        <fieldset>
                                            <input type="radio" name="answer8" value="NBrerjqcli" required> General User Interaction<br>
                                            <input type="radio" name="answer8" value="SVTZbKlii8" required> Guided User Interface<br>
                                            <input type="radio" name="answer8" value="rLYJKslAUr" required> Graphical User Interface<br>
                                            <input type="radio" name="answer8" value="SVTZssbKi8" required> General User Interface<br>
                                        </fieldset>
                                    </div>
                                    <div id="section9" class="section">
                                        <h1>Question 9</h1>
                                        <hr />
                                        <p>What does the letter "S" stand for in the Web terminology "HTTPS"?</p>
                                        <fieldset>
                                            <input type="radio" name="answer9" value="NBrerjqcli" required> Safe<br>
                                            <input type="radio" name="answer9" value="SVTZbKlii9" required> Super<br>
                                            <input type="radio" name="answer9" value="rLUJKslAKr" required> Secure<br>
                                            <input type="radio" name="answer9" value="IdKZbKlii9" required> Short<br>
                                        </fieldset>
                                    </div>
                                    <div id="section10" class="section">
                                        <h1>Question 10</h1>
                                        <hr />
                                        <p>MS Word is an example of:</p>
                                        <fieldset>
                                            <input type="radio" name="answer10" value="NBrerjqcli" required> Operating System<br>
                                            <input type="radio" name="answer10" value="SVTZbKluia" required> Application Software<br>
                                            <input type="radio" name="answer10" value="rLYJKslAKr" required> Input Device<br>
                                            <input type="radio" name="answer10" value="aBrerjqcli" required> Computer Accessory<br>
                                        </fieldset>
                                    </div>
                                    <input type="hidden" name="imgPoints" id="imgPoints" value=0>
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
