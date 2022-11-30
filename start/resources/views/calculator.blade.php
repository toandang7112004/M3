<form action="/xu-ly-calculator" method="post">
    @csrf
    <div>
        <label for="">product description</label>
        <input type="text" name="product_description" >
    </div>
    <div>
        <label for="">list price</label>
        <input type="text" name="list_price" >
    </div>
    <div>
        <label for="">discount percent</label>
        <input type="text" name="discount_percent" >
    </div>
    <div>
        <button type="submit">Tính Toán</button>
    </div>
</form>