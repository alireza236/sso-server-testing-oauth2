@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                                <div class="col-sm-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">E-SAKIP</h5>
                                            <p class="card-text">Login with Single sign on</p>
                                            <a href="http://127.0.0.1:9797/authsso" class="btn btn-primary">Go</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
        </div>
    </div>
</div>
@endsection
