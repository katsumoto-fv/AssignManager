@extends('adminlte::page')

@section('title', '要員登録')

@section('content_header')
    <h1>要員登録</h1>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible">
            {{-- エラーの表示 --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 登録画面 --}}
    <div class="card">
        <form action="{{ route('workers.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">氏名（スペースなし）</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="田中太郎" />
                </div>
                <div class="form-group">
                    <label for="price">所属部署</label>
                    <select class="form-control" id="price" name="price">
                        <option>選択してください</option>
                        <option value="1" {{ old('price') == 1 ? 'selected' : '' }}>システム開発部</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <a class="btn btn-default" href="{{ route('workers.index') }}" role="button">戻る</a>
                    <div class="ml-auto">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </div>
            </div>
        </form>
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