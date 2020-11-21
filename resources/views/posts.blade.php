@include('.partials.header')
    @for( $x=0 ; $x < Count($posts) ; $x++ )
        <div class='container'>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-8'>
                    <div class='firma-card row'>
                        <div class='col-md-5 img-padding-no'>
                            <div class='firma-resim'><a href=localhost:8000/post/{$posts[$x]['id']}/>{{$posts[$x]['id']}}</a>
                            </div>
                        </div>
                        <div class='col-md-7'>
                            <div class='firma-aciklama card-body'>
                                <ul class='yacht-info__list space-2'>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><a href=localhost:8000/post/{{$posts[$x]['id']}}>{{$posts[$x]['title']}}</span>
                                    </li>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'>{{$posts[$x]['caption']}}</span>
                                    </li>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><a href='localhost:8000/category/{{$posts[$x]['category_id']}}/'>{{$posts[$x]['category_of_posts'][0]['name']}}</a></span>
                                    </li>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><?php echo \Morilog\Jalali\Jalalian::forge($posts[$x]['date']);?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-2'></div>
            </div>
        </div>
    @endfor
@include('.partials.footer')
