<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="app.css">
 

</head>
<body>
  
    @foreach ($posts as $post)
        
        <article>
            <h1>
                <a href="/posts/{{ $post->slug}}">
                     {{ $post->tittle }}
                </a>
            </h1>
            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> 
           <div>
            {{ $post->excerpt }}
           </div>

        </article>

    @endforeach

</body>
</html> 