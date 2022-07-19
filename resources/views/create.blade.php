@extends('layout')

@section('content')

<form action="{{route('store')}}" method="post">
    @csrf

    <fieldset class="d-flex p-2 flex-column">
        <legend>Add Task</legend>
        <input type="date" name="date" /><br />
        <input type="time" name="time" /><br />
        <textarea name="taskDetails" style="width: 100%; height: 20vh"></textarea><br />

        <input type="submit" class="btn btn-primary" value="Add Task" />
    </fieldset>
</form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Task Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>


    @if (count($tasks))
    @foreach ($tasks as $task)
    <tr>
        <td>{{$task->date}}</td>
        <td>{{$task->time}}</td>
        <td>{{$task->taskDetails}}</td>
        <td>
            <a href="{{route('edit', $task->id)}}" class="btn btn-secondary">Edit</a>
        </td>

        <td>
            <form action="{{route('destroy', $task->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger ">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach


</table>
@endif

<!-- @if (count($tasks))
@foreach ($tasks as $task)
<ul>
    <li class="list-group-item">

        {{$task->date}}
        {{$task->time}}
        {{$task->taskDetails}}
        <form action="{{route('destroy', $task->id)}}" method="post">



            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger ">Delete</button>
        </form>
    </li>
</ul>


@endforeach

@endif -->


@endsection