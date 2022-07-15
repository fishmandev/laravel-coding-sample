@extends('layouts.bootstrap')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($post, ['action' => ['App\Http\Controllers\PostController@update', $post->id]]) !!}
    @method('put')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {!! Form::label('title', 'Title', ['class' => 'form-control']); !!}
                {!! Form::text('title') !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {!! Form::label('body', 'Body', ['class' => 'form-control']); !!}
                {!! Form::textarea('body') !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {!! Form::select('status', \App\Models\Post::$statuses, null, ['class'=>'form-control', 'placeholder' => 'Select Status']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {{ Form::close() }}
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
    </div>
@endsection
