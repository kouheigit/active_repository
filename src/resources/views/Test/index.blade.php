<h1>Test Blade</h1>

@if(count($errors) > 0)
    <p>入力に問題があります</p>
@endif

@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

<form method="GET" action="{{ route('test.addvalue') }}">
   {{--<input type="text" class="tax" id="tax" name="tax" value="{{old("tax")}}">--}}--}}
</form>
<input type="submit" />
