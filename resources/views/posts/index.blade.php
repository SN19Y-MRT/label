<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        [<a href='/posts/create'>create</a>]
        
</html>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <a href="">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button> 
                    </form>
                </div>
            @endforeach
                 
        </div>
        

        <div>
        @foreach($questions as $question)
            <div>
              <a href="https://teratail.com/questions/{{ $question['id'] }}">
                {{ $question['title'] }}
              </a>
             </div>
        @endforeach
    </div>
        
        
      
    </body>
    
