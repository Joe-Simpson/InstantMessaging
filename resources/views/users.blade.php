@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-deck">
                @foreach ($users as $user)
                    <div class="card">
                        <div class="card-header">{{ $user->name }}</div>
                        <div class="card-body">{{ $user->email }}</div>
                        <div class="card-footer">{{ $user->role }}</div>
                    </div>
                @endforeach
            </div>
            <a href="{{ url('/home') }}">back</a>
        </div>
    </div>
</div>
@endsection
