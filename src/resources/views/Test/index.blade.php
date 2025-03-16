<h1>Test Blade</h1>

@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif

@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

@foreach($threads as $thread)
    <p>{{ $thread->title }}</p>
    <p>{{ $thread->name }}</p>
    <p>{{ $thread->comment }}</p>
    <p>{{ $thread->filename }}</p>
    <p>{{ $thread->generateid }}</p>
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


