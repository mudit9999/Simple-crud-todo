@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <h2>Tasks List</h2>
            <a href="add" class="btn btn-primary">Add new Task</a>
            <table class="table">
                <thead><tr>
                    <th colspan="2">Tasks</th>
                </tr>
                </thead>
                <tbody>@foreach($user->tasks as $task)
                    <tr>
                        <td>
                            {{$task->description}}
                        </td>
                        <td>

                            <form action="task/{{$task->id}}">
                                <button type="submit" name="edit" formmethod="get" class="btn btn-primary">Edit</button>
                                {{--<button type="submit" name="delete" formmethod="post" class="btn btn-danger">Delete</button>--}}
                                {{ csrf_field() }}
                            </form>
                            <form action="tasks/{{$task->id}}">
                                <button type="submit" name="delete" formmethod="post" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>


                @endforeach</tbody>
            </table>
        @else
            <h3>You need to log in. <a href="/todomaster/public/login">Click here to login</a></h3>
        @endif

    </div>

@endsection
