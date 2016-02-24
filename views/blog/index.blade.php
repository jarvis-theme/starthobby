        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3">
                @if(count(list_blog_category()) > 0)
                <div class="left-sidebar">
                    <ul id="category"> 
                    @foreach(list_blog_category() as $kat)
                        @if(!empty($kat->nama)) 
                        <li>
                            <a href="{{blog_category_url($kat)}}">{{$kat->nama}} </a>
                        </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                @endif
                @if(count(new_product()) > 0)
                <div class="left-section">
                    <div class="header-left-section">
                        <h1>Produk Baru</h1>
                    </div>
                    <div class="product">
                        <ul id="tab-product-new">
                            @foreach(new_product() as $newproduk)
                            <li>
                                <div class="product-new">
                                    <a href="{{product_url($newproduk)}}">
                                        {{HTML::image(product_image_url($newproduk->gambar1,'thumb'),$newproduk->nama)}}
                                    </a>
                                    <div class="tab-product-name">
                                        <h3 class="product-name">
                                            <a href="{{product_url($newproduk)}}">
                                                {{short_description($newproduk->nama,55)}}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="tab-price">
                                        <h3 class="price">{{price($newproduk->hargaJual)}}</h3>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <a href="{{url('produk')}}" class="link-more-product">Lihat Semua</a>
                    </div>
                </div>
                @endif
                @if(count(vertical_banner()) > 0)
                <div class="banner-left">
                    @foreach(vertical_banner() as $banners)
                        <a href="{{URL::to($banners->url)}}">
                            {{HTML::image(banner_image_url($banners->gambar),'Info Promo')}}
                        </a>
                    @endforeach
                </div>
                @endif
                {{ Theme::partial('subscribe') }}
            </div>
            <div class="col-sm-8 col-md-9 col-lg-9">
                <div class="row">
                    <div id="single-typical" class="blogs">
                        <div class="tabs-title-typical">
                        </div>
                            <div class="tabs-description">
                            @if(count(list_blog(null,@$blog_category)) > 0)
                                @foreach(list_blog(null,@$blog_category) as $blogs)
                                    <h1>{{$blogs->judul}}</h1>
                                    <p>
                                        <small><i class="fa fa-calendar"></i> {{waktuTgl($blogs->created_at)}}</small>&nbsp;&nbsp;
                                        @if(!empty($blogs->kategori->nama))
                                        <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blogs->kategori)}}">{{@$blogs->kategori->nama}}</a></span>
                                        @endif
                                    </p>
                                    <p>
                                        {{shortDescription($blogs->isi,300)}}<br>
                                        <a href="{{blog_url($blogs)}}" class="theme">Baca Selengkapnya →</a>
                                    </p>
                                @endforeach
                                {{list_blog(null,@$blog_category)->links()}}
                            @else
                            <article class="noresult">Blog tidak ditemukan.</article>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>