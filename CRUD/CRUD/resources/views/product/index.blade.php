<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <a href="{{route('products.create')}}" class="btn btn-danger">Thêm sản phẩm</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">category_id</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
          <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$product['name']}}</td>
            <td>{{$product['price']}}</td>
            <td>{{$product['category_id']}}</td>
            <td>{{$product['created_at']}}</td>
            <td>{{$product['updated_at']}}</td>
            <td>
              <form action="{{route('products.destroy',[$product->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Bạn có chắc chắn xóa không?');" class="btn btn-danger">Xóa</button>
                <a href="{{route('products.edit',[$product->id])}}" class="btn btn-danger">Edit </a>
              </form>
            </td>
          </tr>
          @endforeach 
        </tbody>
      </table>
  </body>
</html>