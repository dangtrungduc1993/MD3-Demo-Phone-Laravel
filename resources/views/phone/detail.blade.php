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
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$phone->id}}</td>
            <td>{{$phone->name}}</td>
            <td>{{$phone->quantity}}</td>
            <td>{{$phone->price}}</td>
        </tr>
    </tbody>
</table>

</body>
</html>
