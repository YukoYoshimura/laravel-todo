@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{ route('todo.store') }}" method="POST">
            @csrf
              <div class="form-group">
                  <label>タスク</label>
                  <input type="text" class="form-control" placeholder="タスクを入力して下さい" name="title">
              </div>
              <div class="form-group">
                <label>期日</label>
                <input type="date" class="form-control" value="2022-04-16" name="due_date">
            </div>
              <button type="submit" class="btn btn-primary">作成</button>
          </form>
          <a href="{{ route('todo.index') }}" class="btn btn-gray">
            一覧にもどる
          </a>
      </div>
  </div>
</div>
@endsection