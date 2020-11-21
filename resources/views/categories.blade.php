@include('.partials.header')
    @for($c=0 ;$c <count ($categories) ;$c++ )
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-8'>
                                <div class='firma-card row'>
                                    <div class='col-md-5 img-padding-no'>
                                        <div class='firma-resim'><a href=localhost:8000/category/{$categories[$c]['id']}>{{$categories[$c][0]['id']}}</a>
                                        </div>
                                    </div>
                                    <div class='col-md-7'>
                                        <div class='firma-aciklama card-body'>
                                            <ul class='yacht-info__list space-2'>
                                                <li>
                                                    <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                    <span class'vertical-align-mid'><a href=localhost:8000/category/{{$categories[$c][0]['id']}}><h3>{{$categories[$c][0]['name']}}</h3></a></span>
                                                        @for ($p =0 ;$p <count($categories[$c][0]) ;$p++)
                                                            <li>
                                                                <i class='search-boat-icon fa search-captain vertical-align-mid'></i>
                                                                <span class'vertical-align-mid'><a href=localhost:8000/post/{{$categories[$c][0]['posts'][$p]['id']}}>{{$categories[$c][0]['posts'][$p]['title']}}</a></span>
                                                            </li>
                                                        @endfor
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
