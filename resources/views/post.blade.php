<html>
<head>
    <header>
        <?php
        echo view ('header',['pagename'=>"post"]);
        ?>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="./posts.css" rel="stylesheet">
    </header>
</head>
<body>
<div class='firmalar'>
    <div class="firma-card col-md-2" style="top: 100px;">
        <?php
        $posts= \App\Http\Controllers\UserController::AllPosts();
        //                dd($posts);
        $CountPosts= count($posts);
        if ($CountPosts<=10){
            echo "<h3><a href=localhost:8000/posts>NEWEST POSTS</a></h3>";
            for ($x=$CountPosts-1 ;$x>= 0; $x--){
                echo "<div><a href=localhost:8000/post/{$posts[$x]['id']}>{$posts[$x]['title']}</a></div>";
            }
        }
        else{
            echo "<h4><a href=localhost:8000/posts>10 NEWEST POSTS</a></h4>";
            for ($x=10 ;$x>= 0; $x--){
                echo "<div><a href=localhost:8000/post/{$posts[$x]['id']}>{$posts[$x]['title']}</a></div>";
            }
        }
        $categories= \App\Http\Controllers\UserController::AllCategories();
        //            dd($categories);
        $CountCategories= count($categories);
        if ($CountCategories<=5){
            echo "<h5><a href=localhost:8000/categories>NEWEST CATEGORIES</a></h5>";
            for ($x=$CountCategories-1 ;$x>= 0; $x--){
                echo "<div><a href=localhost:8000/category/{$categories[$x]['id']}>{$categories[$x]['name']}</a></div>";
            }
        }
        else{
            echo "<h6><a href=localhost:8000/categories>10 NEWEST CATEGORIES</a></h6>";
            for ($x=5 ;$x>= 0; $x--){
                echo "<div><a href=localhost:8000/category/{$categories[$x]['id']}>{$categories[$x]['name']}</a></div>";
            }
        }
        ?>
    </div>

    <?php
//    for( $x=0 ; $x < Count($post) ; $x++ )
//    {
//    dd ($Post);
        echo "
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-8'>
                                <div class='firma-card row'>
                                    <div class='col-md-5 img-padding-no'>
                                        <div class='firma-resim'><a href=localhost:8000/post/{$Post[0]['id']}/>{$Post[0]['id']}</a>
                                        </div>
                                    </div>
                                    <div class='col-md-7'>
                                        <div class='firma-aciklama card-body'>
                                            <ul class='yacht-info__list space-2'>
                                                <li>
                                                    <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                    <span class'vertical-align-mid'>{$Post[0]['title']}</span>
                                                </li>
                                                <li>
                                                    <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                    <span class'vertical-align-mid'>{$Post[0]['caption']}</span>
                                                </li>
                                                <li>
                                                    <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                    <span class'vertical-align-mid'><a href='localhost:8000/category/{$Post[0]['category_id']}}/'>{$Post[0]['category'][0]['name']}</a></span>
                                                </li>
                                                <li>
                                                    <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                    <span class'vertical-align-mid'>".\Morilog\Jalali\Jalalian::forge($Post[0]['date'])."</span>
                                                </li>
                                                <h3>comments:</h3>";
                                                $CountComment =count ($Post[0]['comments']);
                                                for ($c =0 ;$c <$CountComment ;$c++){
                                                    echo"<li>
                                                             <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                             <span class'vertical-align-mid'>{$Post[0]['comments'][$c]['text']}</span>
                                                         </li>";
                                                }
                                            echo"</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-2'></div>
                        </div>
                    </div>";
//    }
    ?>
</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<footer>
    <?php
    echo view ('footer');
    ?>
</footer>
</html>