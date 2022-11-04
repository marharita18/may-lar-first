@extends('layouts.app')
@section('content')
    <h2>All tasks</h2>
    <a href="{{route('task.create')}}">Create new task</a>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Заголовок таблицы -->
                    <thead>

                    </thead>
                    <tr>
                        <th>ID</th>
                        <th>Name;</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Имя задачи -->
                            <td class="table-text">
                                <div>{{ $task->id }}</div>
                            </td>
                            <td>
                                <div>{{$task->name}}</div>
                            </td>
                            <td>
                                <!-- TODO: Кнопка Удалить -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection