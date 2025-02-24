<h1>Test Blade</h1>

@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif

@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

<form method="GET" action="{{ route('test.create') }}">
   <input type="text" class="title" id="title" name="title" value="{{old("title")}}">
    <input type="text" class="name" id="name" name="name" value="{{old("name")}}">
    <input type="textarea" class="comment" id="comment" name="comment" value="{{old("name")}}">
</form>
<input type="submit" />
