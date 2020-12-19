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
                    
                    Questionare complete.<br>

                    Thank you for your time!<br>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
