<h1>テスト掲示板</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<form method="GET" action="{{ route('test.index') }}" enctype="multipart/form-data">
    <b>検索</b>
    <input type="search" class="search" id="search" name="search" value="{{old("search")}}">
    <input type="submit" />
</form>
<a href="{{ route('test.index', ['order' => $order === 'asc' ? 'desc' : 'asc']) }}">
    並び順: {{ $order === 'asc' ? '昇順 ▲' : '降順 ▼' }}
</a>


@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif

@foreach($threads as $thread)
    <p>{{ $thread->id }}</p>
   {{-- <p>{{$thread->created_at->format('md') }}</p>--}}
    <p>{{ $thread->created_at }}</p>
    <b>名前</b>
    <p>{{ $thread->name }}</p>
    <b>タイトル</b>
    <p>{{ $thread->title }}</p>
    <b>コメント</b>
    <p>{{ $thread->comment }}</p>
    <b>ID</b>
    <p>{{ $thread->generateid }}</p>
    @if(!empty($thread->filename))
        <img src="{{ asset('images/' . $thread->filename) }}" alt="サンプル画像">
    @endif
@endforeach




<form method="POST" action="{{ route('test.store') }}" enctype="multipart/form-data">
    @csrf
    <p>タイトル</p>
   <input type="text" class="title" id="title" name="title" value="{{old("title")}}">
    <p>名前</p>
    <input type="text" class="name" id="name" name="name" value="{{old("name")}}">
    <p>コメント</p>
    <textarea name="comment"class="comment" id="comment" cols="30" rows="10">{{old("comment")}}</textarea>
    <p>画像</p>
    <input type="file" id="image" name="image">
    <input type="submit" />
</form>
{{ $threads->links('pagination::bootstrap-5') }}

{{--{{ $threads->links('pagination::tailwind') }}--}}



