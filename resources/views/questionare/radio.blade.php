@extends('layouts.scrollSpy')

@section('content')



<div class="container">
    <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Question 1</a></li>
            <li><a href="#section2">Question 2</a></li>
            <li><a href="#section3">Question 3</a></li>
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

                            <!-- EDIT THESE ACCORDINGLY -->
                            <input type="hidden" name="questionareID" value="Both types of Q"/>
                            <input type="hidden" name="countQ" value="3"/>

                            <div class="row">
                                <div class="col-sm-7">

                                    <div id="section1" class="section">
                                        <h1>Question 1</h1>
                                        <hr />
                                        <p>What do you think about this page?</p>
                                        <input type="hidden" name="question1" value="What do you think about this page?"/>
                                        <div class="form-group">
                                            <input type="radio" name="answer1" value="4 Bad" required>4 Bad<br>
                                            <input type="radio" name="answer1" value="3 Ok" required>3 Ok<br>
                                            <input type="radio" name="answer1" value="2 Good" required>2 Good<br>
                                            <input type="radio" name="answer1" value="1 Great" required>1 Great<br>
                                        </div>
                                    </div>

                                    <div id="section2" class="section">
                                        <h1>Question 2</h1>
                                        <hr />
                                        <p>What do you think about this question?</p>
                                        <input type="hidden" name="question2" value="What do you think about this question?"/>
                                        <div class="form-group">
                                            <input type="radio" name="answer2" value="4 Bad" required>4 Bad<br>
                                            <input type="radio" name="answer2" value="3 Ok" required>3 Ok<br>
                                            <input type="radio" name="answer2" value="2 Good" required>2 Good<br>
                                            <input type="radio" name="answer2" value="1 Great" required>1 Great<br>
                                        </div>
                                    </div>

                                    <div id="section3" class="section">
                                        <h1>Question 3</h1>
                                        <hr />
                                        <p>How do you feel?</p>
                                        <input type="hidden" name="question3" value="How do you feel?"/>
                                        <div class="form-group">
                                            <label for="answer3">Answer:</label>
                                            <input type="text" class="form-control" name="answer3" required/>
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
