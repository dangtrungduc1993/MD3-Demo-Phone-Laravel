<form action="{{route('phone.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên điện thoại">
    <input type="text" name="quantity" placeholder="Nhập số lượng điện thoại">
    <input type="text" name="price" placeholder="Nhập giá điện thoại">
    <button type="submit">Create</button>
</form>
