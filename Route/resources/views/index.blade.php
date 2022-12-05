<div>
    <form action="{{route('checkemail')}}" method="post">
        @csrf
        Email:<input type="text" name="email" id="">
        <input type="submit" value="check">
    </form>
    @if(isset($check_email))
    {{ $check_email ? 'hợp lệ':'không hợp lệ'}}
    @endif

</div>