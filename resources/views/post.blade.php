@include('.partials.header')
<div class='container'>
    <div class='row'>
        <div class='col-md-2'></div>
        <div class='col-md-8'>
            <div class='firma-card row'>
                <div class='col-md-5 img-padding-no'>
                    <div class='firma-resim'><a href=localhost:8000/post/{{$posts[0]['id']}}>{{$posts[0]['id']}}</a>
                    </div>
                </div>
                <div class='col-md-7'>
                    <div class='firma-aciklama card-body'>
                        <ul class='yacht-info__list space-2'>
                            <li>
                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                <span class'vertical-align-mid'>{{$posts[0]['title']}}</span>
                            </li>
                            <li>
                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                <span class'vertical-align-mid'>{{$posts[0]['caption']}}</span>
                            </li>
                            <li>
                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                <span class'vertical-align-mid'><a href='localhost:8000/category/{{$posts[0]['category_id']}}}/'>{{$posts[0]['category_of_posts'][0]['name']}}</a></span>
                            </li>
                            <li>
                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                <span class'vertical-align-mid'><?php echo\Morilog\Jalali\Jalalian::forge($posts[0]['date']);?></span>
                            </li>
                            <h3>comments:</h3>
                            @for ($c =0 ;$c <count ($posts[0]['comments_of_posts']) ;$c++)
                                <li>
                                    <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                    <span class'vertical-align-mid'>{{$posts[0]['comments_of_posts'][$c]['text']}}</span>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-2'></div>
    </div>
</div>
@include('.partials.footer')
