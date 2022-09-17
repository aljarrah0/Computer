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
</h1>index Page</h1>

    <a  href="{{route('ComputersPath.create')}}">create</a>
    <br><br>
    <ul>
    @foreach($computers as $computer)
    <li>
    <a href="{{route('ComputersPath.show',$computer['id'])}}">

    <!-- <a href="{{route('ComputersPath.show',$computer->id)}}"> -->

    {{$computer['computer_name']}} ({{$computer['computer_origin']}}) ${{$computer['computer_price']}}
</a>
</li><br>
    @endforeach
    
</ul>
</body>
</html>