@extends('layout')

@section('content')

<form action="{{route('update', $task->id)}}" method="post">
    @csrf
    @method('POST')

    <fieldset class="d-flex p-2 flex-column">
        <legend>Update Task</legend>
        <input type="date" name="date" /><br />
        <input type="time" name="time" /><br />
        <textarea name="taskDetails" style="width: 100%; height: 20vh"></textarea><br />

        <button type="submit" class="btn btn-primary" value={}>Update Task</input>
    </fieldset>
</form>

@endsection