@extends('layouts.scrollSpy')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All done!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="alert alert-info">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        
                        @switch($user->rounds)
                        @case(0)
                            <img src="/img/gami/3-star.png" alt="Bronze star" style="width:7%;"/>
                            @break
                        @case(1)
                            <img src="/img/gami/2-star.png" alt="Silver star" style="width:7%;"/>
                            @break
                        @case(2)
                            <img src="/img/gami/1-star.png" alt="Gold star" style="width:7%;"/>
                            @break
                        @default
                    @endswitch
                    <strong>Achievement!</strong> 
                        An achievement was added to your profile.
                    </div>
                    
                    @switch(true)
                        @case(($user->points + $points)>=21)
                            <div class="alert alert-info">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <img src="/img/gami/1-crown.png" alt="Gold crown" style="width:7%;"/>
                                <strong>Achievement!</strong> 
                                An achievement was added to your profile.
                            </div>
                            @break
                        @case(($user->points + $points)>=14)
                            <div class="alert alert-info">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <img src="/img/gami/2-crown.png" alt="Silver crown" style="width:7%;"/>
                                <strong>Achievement!</strong> 
                                An achievement was added to your profile.
                            </div>
                            @break
                        @case(($user->points + $points) >= 7)
                            <div class="alert alert-info">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <img src="/img/gami/3-crown.png" alt="Bronze crown" style="width:7%;"/>
                                <strong>Achievement!</strong> 
                                An achievement was added to your profile.
                            </div>
                            @break
                        @default
                    @endswitch
                    
                    Thank you for participation, go to <a href="/profile">profile</a> for your results or check out the <a href="/leaderboards/individual">leaderboards</a>.<br><br>

                    You got <strong>{{ $points }} point(s)</strong> this time!<br>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
