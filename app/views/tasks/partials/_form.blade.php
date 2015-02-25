{{ Form::open(['url' => '/tasks']) }}

<div>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ Input::old('title') }}">
    {{ $errors->first('title', '<span>:message</span>') }}
</div>

<div>
    <label for="body">Body:</label>
    <textarea name="body" id="body" cols="40" rows="6">{{ Input::old('body') }}</textarea>
    {{ $errors->first('body') }}
</div>

<div>
    <label for="user_id">Assign To:</label>
    <select name="user_id" id="user_id">
        @foreach ($users as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>

<div>
    <input type="submit" value="Create Task">
</div>

{{ Form::close() }}