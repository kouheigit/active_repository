@extends('layouts.testapp')

@section('title', '掲示板')

@section('content')
    <form method="GET" action="{{ route('test.index') }}" enctype="multipart/form-data">
        <b>検索</b>
        <input type="search" class="search" id="search" name="search" value="{{ old('search') }}">
        <input type="submit" />
    </form>

    <a href="{{ route('test.index', ['order' => $order === 'asc' ? 'desc' : 'asc', 'search' => request('search')]) }}">
        並び順: {{ $order === 'asc' ? '昇順 ▲' : '降順 ▼' }}
    </a>

    @if(count($errors) > 0)
        <p>入力に問題があります</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @foreach($threads as $thread)
        <div class="thread d-flex justify-content-between align-items-center">
            <p>ID: {{ $thread->id }}</p>
            <p>タイトル: {{ $thread->title }}</p>
            <p>名前: {{ $thread->name }}</p>
            <p>日時: {{ $thread->created_at }}</p>
            <p>投稿ID: {{ $thread->generateid }}</p>
        </div>
        <div class="thread-comment">
            <b>コメント:</b>
            <p>{{ $thread->comment }}</p>
        </div>
        @if(!empty($thread->filename))
            <img src="{{ asset('images/' . $thread->filename) }}" alt="投稿画像">
        @endif
    @endforeach

    <form method="POST" action="{{ route('test.store') }}" enctype="multipart/form-data">
        @csrf
        <p>タイトル</p>
        <input type="text" class="title" id="title" name="title" value="{{ old('title') }}">
        <p>名前</p>
        <input type="text" class="name" id="name" name="name" value="{{ old('name') }}">
        <p>コメント</p>
        <textarea name="comment" class="comment" id="comment" cols="30" rows="10">{{ old('comment') }}</textarea>
        <p>画像</p>
        <input type="file" id="image" name="image">
        <input type="submit" />
    </form>

    {{ $threads->appends(request()->input())->links() }}
@endsection


