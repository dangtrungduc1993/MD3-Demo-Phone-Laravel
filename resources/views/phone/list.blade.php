<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
                <td><a href="{{route('phone.show',$phone->id)}}">Detail</a></td>
                <td><a href="{{route('phone.edit',$phone->id)}}">Update</a></td>
                <td><a href="{{route('phone.destroy',$phone->id)}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
