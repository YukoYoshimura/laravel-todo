@extends('layouts.app_original')
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="taskbox-title">
              <ul class="tasklist">
                <li class="task-title">タスク</li>
                <li class="task-detail">担当</li>
                <li class="task-detail">期日</li>
                <li class="task-detail">チェック</li>
              </ul>
            </div>
          @foreach($todos as $value)
            <div class="taskbox">
              <ul class="tasklist">
                <li class="task-title">{{ $value->title }}</li>
                <li class="task-detail">{{ $value->user->name }}</li>
                <li class="task-detail">{{ $value->due_date }}</li>
                <li class="task-detail">
                  <form action="{{ route('todo.destroy', $value->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <input type="submit" value="完了" class="btn btn-gray" onclick='return confirm("完了するとタスクは削除されます");'>
                  </form>
                </li>
              </ul>
          </div>
          @endforeach
      <div>
        <a href="{{ route('todo.create') }}" class="btn btn-primary">
          タスク作成
        </a>
      </div>
      </div>
      
  </div>
</div>
@endsection