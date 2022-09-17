<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="{{url('/css/styles.css')}}">

</head>
<body>
</h1>show Page</h1>
<nav>  
    <ul>
       <li> <a  href="{{route('ComputersPath.index')}}">Home Page</a>
</li>
</ul>
</nav>
<p>{{$computer['computer_name']}} <strong>({{$computer['computer_origin']}})</strong> 
${{$computer['computer_price']}}.</p>
<form action="{{route('ComputersPath.edit',$computer['id'])}}" method="GET">
<input type="submit" value="edit">
</form>

<form action="{{route('ComputersPath.destroy',$computer['id'])}}" method="POST">
    @csrf
    @method('delete')
<input type="submit" value="Delete">
</form>

</body>
</html>