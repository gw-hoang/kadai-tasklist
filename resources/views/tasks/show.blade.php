@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のTask詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {{-- Task編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このTaskを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {{-- Task削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection