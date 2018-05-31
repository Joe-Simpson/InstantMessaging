@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messaging</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 justify-content-center">
                            <p>That's my face sir</p>
                        </div>
                        <div class="col-md-6 justify-content-center">
                            <p>That's my face sir</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-inline" method="POST" action="">
                                @csrf
                                <input type="text" class="form-control input-lg" id="message" placeholder="Type your message here" autofocus>
                                <button type="submit" class="btn btn-primary">Search</button>            
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="{{ url('/home') }}">back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
