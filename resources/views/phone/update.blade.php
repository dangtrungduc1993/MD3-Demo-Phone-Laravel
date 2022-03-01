<form action="{{route('phone.update')}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$phone->name}}">
    <input type="text" name="quantity" value="{{$phone->quantity}}">
    <input type="text" name="price" value="{{$phone->price}}">
    <button type="submit">Update</button>
</form>
