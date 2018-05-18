@extends('layouts.app')

@section('content')
<title>{{config('app.name')}}</title>
    <div class="jumbotran text-center">
        <h1>Welcome</h1>
        <h3>This is a Blog, You simply create your own account and then start making posts</h3>
        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button"> Login </a> <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a></p>
    </div>       
@endsection