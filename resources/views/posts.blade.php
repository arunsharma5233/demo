



  <x-layout>


    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            
       
        <x-posts-grid :posts="$posts"/>
        @else
        <h1>No Post here... please check the post...</h1>
        @endif

      
    </main> 
  </x-layout>

  {{-- <div class="lg:grid lg:grid-cols-3">
           
    <x-post-card/>
    <x-post-card/>
    <x-post-card/>
   
</div> --}}




    {{-- @foreach ($posts as $post)
        
        <article>
            <h1>
                <a href="/posts/{{ $post->slug}}">
                     {{ $post->tittle }}
                </a>
            </h1>
 
<p>
    By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> 
 
 </p>
           <div>
            {{ $post->excerpt }}
           </div>

        </article>

    @endforeach --}}
    

