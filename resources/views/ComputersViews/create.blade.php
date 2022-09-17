<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="{{url('/css/styles.css')}}">
      
</head>
<body>
</h1>create page</h1>
<nav>  
 <a href="{{route('ComputersPath.index')}}">Home Page</a>
</nav>
<br>
<form action='{{route("ComputersPath.store")}}' method="POST">
    @csrf
  <label for="computer-name">Computer name:</label><br>
  <input id="computer-name" type="text"  name="computer-name" value="{{old('computer-name')}}"><br>
  @error('computer-name')
    {{$message}}
  @enderror
<br>
  <label for="computer-origin">Origin:</label><br>
  <input id="computer-origin" type="text"  name="computer-origin" value="{{old('computer-origin')}}"><br>
  
  @error('computer-origin')
   {{$message}}
  @enderror
  <br>
  <label for="computer-price">Price:</label><br>
  <input id="computer-price" type="number"  name="computer-price" value="{{old('computer-price')}}"><br>
  @error('computer-price')
    {{$message}}
  @enderror
  <br>

  <input type="submit" value="Submit">
</form>

</body>
</html>