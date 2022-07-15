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
