@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Dashboard</div>

                    <a class="btn btn-primary" href="{{ url('post\create') }}">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if (count($posts) > 0)     
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td><a href="{{ url('post/'.$post->id. '/edit' ) }}" class="btn btn-defaut">Edit</a></td>
                                    <td>{!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST','class'=>'pull-right']) !!}
                                        {{ Form::hidden('_method','DELETE') }}
                                        {{Form::submit('delete',['class'=> 'btn btn-danger'])}}</td>
                                </tr>
                                
                            @endforeach
                
                        </table>
                    @else <h3>No Posts Yet</h3>
                    @endif        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
