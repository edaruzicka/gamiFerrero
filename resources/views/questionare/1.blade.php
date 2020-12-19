@extends('layouts.scrollSpy')

@section('content')



<div class="container">
    <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Question 1</a></li>
            <li class="active"><a href="#section2">Question 2</a></li>
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
                            <input type="hidden" name="questionareID" value="1"/>
                            <input type="hidden" name="countQ" value="2"/>
                            <div class="row">
                                <div class="col-sm-7">

                                    <div id="section1" class="section">
                                        <h1>Question 1</h1>
                                        <hr />
                                        <p>What do you think about this page?</p>
                                        <input type="hidden" name="question1" value="What do you think about this page?"/>
                                        <div class="form-group">
                                            <label for="answer1">Answer:</label>
                                            <input type="text" class="form-control" name="answer1" required/>
                                        </div>
                                    </div>

                                    <div id="section2" class="section">
                                        <h1>Question 2</h1>
                                        <hr />
                                        <p>What do you think about this question?</p>
                                        <input type="hidden" name="question2" value="What do you think about this question?"/>
                                        <div class="form-group">
                                            <label for="answer2">Answer:</label>
                                            <input type="text" class="form-control" name="answer2" required/>
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
