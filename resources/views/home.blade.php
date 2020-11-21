@include('.partials.header')
<div class='container'>
    <div class='row'>
        <div class='col-md-2'></div>
        <div class='col-md-8'>
            <div class='firma-card row'>
                <div class='col-md-5 img-padding-no'>
                    <div class='firma-resim'><a href=localhost:8000/categories>categories</a>
                    </div>
                </div>
                <div class='col-md-7'>
                    <div class='firma-aciklama card-body'>
                        <ul class='yacht-info__list space-2'>
                            <h2><a href="localhost:8000/categories">categories</a></h2>
                            @if ( count($categories) < 5)
                                @for ($c =0 ;$c <count($categories) ;$c++)
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><a href=localhost:8000/category/{{$categories[$c][$c]['id']}}>{{$categories[$c][$c]['name']}}</a></span>
                                    </li>
                                @endfor
                            @else
                                @for ($c =0 ;$c <5 ;$c++)
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><a href=localhost:8000/category/{{$categories[$c][$c]['id']}}>{{$categories[$c][$c]['name']}}</a></span>
                                    </li>
                                @endfor
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class='col-md-2'></div>
    </div>
</div>
<div class='container'>
<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8'>
        <div class='firma-card row'>
            <div class='col-md-5 img-padding-no'>
                <div class='firma-resim'><a href=localhost:8000/posts>posts</a>
            </div>
        </div>
        <div class='col-md-7'>
            <div class='firma-aciklama card-body'>
                <ul class='yacht-info__list space-2'>
                    <h2><a href="localhost:8000/categories">posts</a></h2>
                    @if (count($posts)< 5)
                        @for ($p =0 ;$p < Count($posts) ;$p++)
                            <li>
                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                <span class'vertical-align-mid'><a href=localhost:8000/post/{{$posts[$p][$p]['id']}}>{{$posts[$p][$p]['title']}}</a></span>
                            </li>
                        @endfor
                    @else
                        @for ($p =0 ;$p <5 ;$p++)
                            <li>
                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                <span class'vertical-align-mid'><a href=localhost:8000/post/{{$posts[$p][$p]['id']}}>{{$posts[$p][$p]['title']}}</a></span>
                            </li>
                        @endfor
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class='col-md-2'></div>
</div>
</div>
@include('.partials.footer')
