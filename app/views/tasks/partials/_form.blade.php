{{ Form::open(['url' => '/tasks']) }}

<div>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
</div>

<div>
    <label for="body">Body:</label>
    <textarea name="body" id="body" cols="40" rows="6"></textarea>
</div>

<div>
    <label for="assign">Assign To:</label>
    <select name="assign" id="assign">
        @foreach ($users as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>

<div>
    <input type="submit" value="Create Task">
</div>

{{ Form::close() }}