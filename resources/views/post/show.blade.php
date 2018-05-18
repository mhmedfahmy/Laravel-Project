@extends('layouts.app')

@section('content')
    <a href="{{ url('post') }}" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:30%" src="<?php echo asset("storage/cover_images/$post->cover_image")?>">
    <br> <br>
            <div class="container">
            <h3>{{$post->body}} </h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
            <hr>
            @if (!Auth::guest())
                @if (Auth::user()->id == $post->user_id)
                    <a href="{{ url('post/'.$post->id. '/edit' ) }}" class="btn btn-defaut">Edit</a>
                    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST','class'=>'pull-right']) !!}
                    {{ Form::hidden('_method','DELETE') }}
                    {{Form::submit('delete',['class'=> 'btn btn-danger'])}} 
                @endif     
            @endif  
@endsection