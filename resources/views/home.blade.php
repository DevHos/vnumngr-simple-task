@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                <span>Please select a location:</span>
                <input type="text" id="txtPlaces" style="width: 250px" placeholder="Enter a location" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
