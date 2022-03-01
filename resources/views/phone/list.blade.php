<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<a href="{{route('logout')}}">Log out</a>
<body>
<a href="{{route('phone.create')}}">Create</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($phones as $phone)
            <tr>
                <td>{{$phone->id}}</td>
                <td>{{$phone->name}}</td>
                <td>{{$phone->quantity}}</td>
                <td>{{$phone->price}}</td>
                <td><a href="{{route('phone.detail',$phone->id)}}">Detail</a></td>
                <td><a href="{{route('phone.update',$phone->id)}}">Update</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
