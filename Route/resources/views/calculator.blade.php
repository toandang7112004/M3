  <div>
      <form action="{{route('Calculator')}}" method="post">
        @csrf
        numberOne:<input type="text" name="numberOne" id="">
        <br>
        <select name="calculator" id="">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <br>
        numberTwo:<input type="text" name="numberTwo" id="">
        <br>
        <input type="submit" value="Calculator">
      </form>
      @if(isset($result))
      {{ $result }}
      @endif
  </div>