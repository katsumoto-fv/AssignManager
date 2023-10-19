@extends('adminlte::page')

@section('title', '部署管理　一覧')

@section('content_header')
    <h1>部署管理　一覧</h1>
@stop

@section('content')
<!-- データテーブル -->
@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="card">
    <div class="card-header">
            <a class="btn btn-primary" href="{{ route('divisions.create') }}" role="button">新規登録</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>部署名</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $divisions as $division)
                <tr>
                    <td>{{ $division->name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('divisions.edit', $division->id) }}" class="btn btn-primary btn-sm">編集</a>
                        <form class="ml-2" action="{{ route('divisions.destroy', $division->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？")'>削除</button>
                        </form>
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