@extends('adminlte::page')

@section('title', '人員管理　一覧')

@section('content_header')
    <h1>人員管理　一覧</h1>
@stop

@section('content')
<!-- データテーブル -->
<div class="card">
    <div class="card-header">
            <a class="btn btn-primary" href="{{ route('workers.create') }}" role="button">新規登録</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>部署</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $workers as $worker)
                <tr>
                    <td>{{ $worker->name }}</td>
                    <td>{{ $worker->division_id }}</td>
                    <td>
                    <a href="#" class="btn btn-primary btn-sm">編集</a>
                    <a href="#" class="btn btn-danger btn-sm">削除</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script> console.log('ページごとJSの記述'); </script>
@stop