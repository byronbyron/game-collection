<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Call of Duty']) }}
    {{ $errors->first('title', '<span class="text-danger">:message</span>') }}
</div>
<div class="form-group">
    {{ Form::label('publisher', 'Publisher') }}
    {{ Form::text('publisher', null, ['class' => 'form-control', 'placeholder' => 'Activision']) }}
    {{ $errors->first('publisher', '<span class="text-danger">:message</span>') }}
</div>
<div class="checkbox">
    {{ Form::label('completed', 'Completed?') }}
    {{ Form::checkbox('completed') }}
</div>
<div class="form-group">
    {{ Form::submit(isset($buttonText) ? $buttonText : 'Create Game', ['class' => 'btn btn-primary']) }}
    {{ link_to_route('games.index', 'Cancel', null, ['class' => 'btn btn-default']) }}
</div>