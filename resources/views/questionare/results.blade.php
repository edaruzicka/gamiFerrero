@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Questionares results</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <?php 
                        $names = DB::table('questionare')->select('name')->groupBy('name')->get();
                        $questionares = DB::table('questionare')->select('questionareID')->groupBy('questionareID')->get();
                    ?>

                    <form method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="questionareDrop">Select questionare:</label>
                            <select class="form-control" name="questionareDrop">
                                <option>Everything</option>
                                @foreach($questionares as $questionare)
                                    <option>{{ $questionare->questionareID }}</option>
                                @endforeach
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Show results"></input>
                        </div>
                    </form>

                    <br>
                    
                    @if (isset($_POST['questionareDrop']))
                        @if($_POST['questionareDrop'] !== "Everything")
                            <?php $results = DB::table('questionare')->where('questionareID', $_POST['questionareDrop'])->get() ?>
                        @else
                            <?php $results = DB::table('questionare')->get() ?>
                        @endif
                    @else
                        <?php $results = DB::table('questionare')->get() ?>
                    @endif

                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Questionare</th>
                                <th>Name</th>
                                <th>Question</th>
                                <th>Answer</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach ($results as $result)
                                <tr>
                                    <td>{{ $result->questionareID }}</td>
                                    <td>{{ $result->name }}</td>
                                    <td>{{ $result->question }}</td>
                                    <td style="word-wrap: break-word;max-width: 360px;">{{ $result->answer }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
