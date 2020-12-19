@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Leaderboards</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a class="nav-link" href="/leaderboards/individual">Individual</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/leaderboards/department">Department</a>
                        </li>
                    </ul>

                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <br>
                    <p>Total points are divided by number of players in each department.</p>
                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Points per player</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php $position = 0; ?>
                            @foreach ($departmentInfos as $departmentInfo)
                                <?php $position++; ?>
                                <tr>
                                    <td>
                                        {{ $position }} 
                                        @switch($position)
                                            @case(1)
                                                <img src="/img/medals/goldSm.png" alt="Gold medal" width="25"></img>
                                                @break
                                        
                                            @case(2)
                                                <img src="/img/medals/silverSm.png" alt="Silver medal" width="25"></img>
                                                @break
                                            
                                            @case(3)
                                                <img src="/img/medals/bronzeSm.png" alt="Bronze medal" width="25"></img>
                                                @break
                                            @default
                                        @endswitch
                                    </td>
                                    <td>{{ $departmentInfo->department }}</td>
                                    <td>{{ $departmentInfo->points}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
