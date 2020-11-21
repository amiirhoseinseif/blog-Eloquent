@include('.partials.header')
    @for( $x=0 ; $x < Count($posts[0]['posts']) ; $x++ )
        <div class='container'>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-8'>
                    <div class='firma-card row'>
                        <div class='col-md-5 img-padding-no'>
                            <div class='firma-resim'><a href=localhost:8000/post/{{$posts[0]['id']}}/>{{$posts[0]['id']}}</a>
                            </div>
                        </div>
                        <div class='col-md-7'>
                            <div class='firma-aciklama card-body'>
                                <ul class='yacht-info__list space-2'>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><a href=localhost:8000/post/{{$posts[0]['posts'][$x]['id']}}>{{$posts[0]['posts'][$x]['title']}}</a></span>
                                    </li>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'>{{$posts[0]['posts'][$x]['caption']}}</span>
                                    </li>
                                    <li>
                                        <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                        <span class'vertical-align-mid'><?php echo \Morilog\Jalali\Jalalian::forge($posts[0]['posts'][$x]['date']);?></span>
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
