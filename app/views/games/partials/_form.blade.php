<ul>
    <li>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['placeholder' => 'Call of Duty']) }}
        {{ errors_for('title', $errors) }}
    </li>
    <li>
        {{ Form::label('publisher', 'Publisher') }}
        {{ Form::text('publisher', null, ['placeholder' => 'Activision']) }}
        {{ errors_for('publisher', $errors) }}
    </li>
    <li>
        {{ Form::label('completed', 'Completed?') }}
        {{ Form::checkbox('completed') }}
    </li>
    <li>
        {{ Form::submit(isset($buttonText) ? $buttonText : 'Create Game') }}
        {{ link_to_route('games.index', 'Cancel') }}
    </li>
</ul>