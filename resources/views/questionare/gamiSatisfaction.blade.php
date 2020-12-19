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
                <div class="panel-heading">Questionare 1</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/questionare/submit">
                        {{ csrf_field() }}
                        <div class="container">
                            <input type="hidden" name="questionareID" value="Gamification satisfaction"/>
                            <input type="hidden" name="countQ" value="5"/>
                            <div class="row">
                                <div class="col-sm-7">

                                    <div id="section1" class="section">
                                        <h1>Question 1</h1>
                                        <hr />
                                        <p>Were you familiar with the term “gamification” (before this web app "gamiFerrero") and its’ principle?</p>
                                        <input type="hidden" name="question1" value="Were you familiar with the term “gamification” (before this web app 'gamiFerrero') and its’ principle?"/>
                                        <div class="form-group">
                                            <input type="radio" name="answer1" value="1 Strongly disagree" required> Strongly disagree <br>
                                            <input type="radio" name="answer1" value="2 Disagree" required> Disagree<br>
                                            <input type="radio" name="answer1" value="3 Agree" required> Agree<br>
                                            <input type="radio" name="answer1" value="4 Strongly agree" required> Strongly agree<br>
                                        </div>
                                    </div>

                                    <div id="section2" class="section">
                                        <h1>Question 2</h1>
                                        <hr />
                                        <p>Collecting badges, achievements and points motivates you.</p>
                                        <input type="hidden" name="question2" value="Is collecting badges, achievements and points enough to motivate you?"/>
                                        <div class="form-group">
                                            <input type="radio" name="answer2" value="1 Strongly disagree" required> Strongly disagree <br>
                                            <input type="radio" name="answer2" value="2 Disagree" required> Disagree<br>
                                            <input type="radio" name="answer2" value="3 Agree" required> Agree<br>
                                            <input type="radio" name="answer2" value="4 Strongly agree" required> Strongly agree<br>
                                        </div>
                                    </div>

                                    <div id="section3" class="section">
                                        <h1>Question 3</h1>
                                        <hr />
                                        <p>Competing against others (through leaderboard) motivates you.</p>
                                        <input type="hidden" name="question3" value="Is competing against others (through leaderboard) enough to motivate you?"/>
                                        <div class="form-group">
                                            <input type="radio" name="answer3" value="1 Strongly disagree" required> Strongly disagree <br>
                                            <input type="radio" name="answer3" value="2 Disagree" required> Disagree<br>
                                            <input type="radio" name="answer3" value="3 Agree" required> Agree<br>
                                            <input type="radio" name="answer3" value="4 Strongly agree" required> Strongly agree<br>
                                        </div>
                                    </div>

                                    <div id="section4" class="section">
                                        <h1>Question 4</h1>
                                        <hr />
                                        <p>Can you see this format of gamification (used in this web application) being useful in your department in terms of motivating employees? For example to learn about network security, marketing plan etc.</p>
                                        <input type="hidden" name="question4" value="Can you see this format of gamification (used in this web application) being useful in your department in terms of motivating employees? For example to learn about network security, marketing plan etc."/>
                                        <div class="form-group">
                                            <input type="radio" name="answer4" value="1 Strongly disagree" required> Strongly disagree <br>
                                            <input type="radio" name="answer4" value="2 Disagree" required> Disagree<br>
                                            <input type="radio" name="answer4" value="3 Agree" required> Agree<br>
                                            <input type="radio" name="answer4" value="4 Strongly agree" required> Strongly agree<br>
                                        </div>
                                    </div>

                                    <div id="section5" class="section">
                                        <h1>Question 5</h1>
                                        <hr />
                                        <p>What should the employees in your department learn more about? If you wanted to test them in some knowledge area, what would it be? (network security, marketing plan etc.)</p>
                                        <input type="hidden" name="question5" value="What should the employees in your department learn more about? If you wanted to test them in some knowledge area, what would it be? (network security, marketing plan etc.)"/>
                                        <div class="form-group">
                                            <label for="answer5">Answer:</label>
                                            <input type="text" class="form-control" name="answer5" required/>
                                        </div>
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
