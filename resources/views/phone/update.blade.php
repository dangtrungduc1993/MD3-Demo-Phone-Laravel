<form action="{{route('phone.update',$phone->id)}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{$phone->name}}">
    <input type="text" name="quantity" placeholder="quantity" value="{{$phone->quantity}}">
    <input type="text" name="price" placeholder="price" value="{{$phone->price}}">
    <button type="submit">Update</button>
</form>
