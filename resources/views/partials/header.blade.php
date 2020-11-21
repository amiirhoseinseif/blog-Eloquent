<html>
<head>
    <header>
        <?php
            $pagename= explode("/",url ()->current ());
            echo view ('header',['pagename'=>$pagename[3]]);
        ?>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="./posts.css" rel="stylesheet">
    </header>
</head>
<body>
<div class='firmalar'>
    <div class="firma-card col-md-2" style="top: 100px;">
        @if(count($post) < 10)
            <h4>
                <a href=localhost:8000/posts>NEWEST POSTS</a>
            </h4>
            @for($x=0 ;$x <count ($post); $x++){
            <div>
                <a href=localhost:8000/post/{{$post[$x]->id}}>{{$post[$x]->title}}</a>
            </div>
            @endfor
        @else
            <h4>
                <a href=localhost:8000/posts>10 NEWEST POSTS</a>
            </h4>
            @for($x=0 ;$x <10; $x++)
                <div>
                    <a href=localhost:8000/post/{{$post[$x]->id}}>{{$post[$x]->title}}</a>
                </div>
            @endfor
        @endif
        @if(count($category) <10)
            <h5>
                <a href=localhost:8000/posts>NEWEST CATEGORIES</a>
            </h5>
            @for($x=0 ;$x <count ($category); $x++)
                <div>
                    <a href=localhost:8000/category/{{$category[$x]->id}}>{{$category[$x]->name}}</a>
                </div>
            @endfor
        @else
            <h5>
                <a href=localhost:8000/posts>10 NEWEST CATEGORIES</a>
            </h5>
            @for($x=0 ;$x <10; $x++)
                <div>
                    <a href=localhost:8000/category/{{$category[$x]->id}}>{{$category[$x]->name}}</a>
                </div>
            @endfor
        @endif
    </div>
<body>
