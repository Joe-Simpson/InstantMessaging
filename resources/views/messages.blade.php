@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Messaging</div>

                <div class="card-body">

                    <!-- Message Display -->
                    <div class="col">
                        <ul>
                        @foreach( $messages as $message )
                            <li>{{ $message->body }} & {{ $message->user_id }}</li>
                        @endforeach
                        </ul>
                    </div>

                    <!-- Message Input -->
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-inline justify-content-center" method="POST" action="">
                                @csrf
                                <input type="text" class="form-control input-lg" id="user1" placeholder="user 1">
                                <input type="text" class="form-control input-lg" id="user2" placeholder="user 2">
                                <input type="text" class="form-control input-lg" id="message" placeholder="message" autofocus>
                                <button type="submit" class="btn btn-primary">Submit</button>            
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
