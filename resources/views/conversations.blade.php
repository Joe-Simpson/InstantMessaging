@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">Conversations</div>

                <div class="card-body">
                    <div class="row justify-content-start">
                        <ul>
                            @foreach( $conversations as $conversation )
                                <li>{{ $conversations->user1 }} to {{ $conversations->user2 }}</li>
                            @endforeach
                        </ul>
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
