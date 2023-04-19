<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
   

</head>
<body>

<h1>{{$post->tittle }}</h1>

<p>
   By <a href="#">Arun sharma</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> 

</p>
<div>
{!! $post->body !!}
</div>




<a href="/"><button>Go back</button></a>
</body>
</html>