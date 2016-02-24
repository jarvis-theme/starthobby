        <div class="row">
            <div class="col-sm-3">
                @if(count(list_category()) > 0)
                <div class="left-sidebar">
                    <ul id="category">
                    @foreach(list_category() as $side_menu)
                        @if($side_menu->parent == '0')
                        <li>
                            <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}
                            @if($side_menu->anak->count() != 0)
                            <i class="vnavright fa fa-caret-right"></i>
                            @endif
                            </a>
                            @if($side_menu->anak->count() != 0)
                            <ul id="submenu-left">
                                @foreach($side_menu->anak as $submenu)
                                    @if($submenu->parent == $side_menu->id)
                                    <li>
                                        <a href="{{category_url($submenu)}}" class="transparent">{{$submenu->nama}}</a>
                                        @if($submenu->anak->count() != 0)
                                        <ul id="submenu-left">
                                            @foreach($submenu->anak as $submenu2)
                                            @if($submenu2->parent == $submenu->id)
                                            <li>
                                                <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                            @endif
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
                                        {{HTML::image(product_image_url($newproduk->gambar1,'thumb'), $newproduk->nama)}}
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
                @if(count(recentBlog()) > 0)
                <div class="left-section">
                    <div class="header-left-section">
                        <h1>Artikel</h1>
                    </div>
                    @foreach(recentBlog(null,3) as $artikel)
                    <div class="product">
                        <div class="tips-post">
                            <h3><a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 20)}}</a></h3>
                            <p>{{short_description($artikel->isi, 46)}}<a href="{{blog_url($artikel)}}" class="read-more">Selengkapnya</a></p>
                            <span class="date">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                {{ Theme::partial('subscribe') }}
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div id="single-typical">
                        <div class="tabs-title-typical">
                            <h1>{{$data->judul}}</h1>
                        </div>
                        <div class="tabs-description">
                            {{$data->isi}}
                        </div>
                    </div>
                </div>
            </div>
        </div>