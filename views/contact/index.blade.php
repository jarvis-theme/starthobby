        <div class="tab-title-top">
            <h1 class="center">Hubungi Kami</h1>
        </div>
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
                                        {{HTML::image(product_image_url($newproduk->gambar1,'medium'))}}
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
                    <a href="{{url($banners->url)}}">
                        {{HTML::image(banner_image_url($banners->gambar),'banner')}}
                    </a>
                    @endforeach
                </div>
                @endif
                {{ Theme::partial('subscribe') }}
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div id="single-typical" class="kontak">
                        <div class="tabs-title-typical">
                            <!-- <h1>Kontak</h1> -->
                        </div>
                        <div class="tabs-description">
                            <div class="col-md-12 col-xs-12" id="map-info">
                                <div class="maps" >
                                    <h2 class="title"></h2>
                                    @if($kontak->lat!='0' || $kontak->lng!='0')
                                        <iframe class="map-detail" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                                    @else
                                        <iframe class="map-detail" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                                    @endif
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <!-- <div class="contact-us" > -->
                                    <div class="col-md-12 contact-desc">
                                        @if(!empty($kontak->alamat))
                                            <strong>Alamat :</strong> {{$kontak->alamat}}<br>
                                        @endif
                                        @if(!empty($kontak->telepon))
                                            <strong>Telepon :</strong> {{$kontak->telepon}}<br>
                                        @endif
                                        @if(!empty($kontak->hp))
                                            <strong>SMS :</strong> {{$kontak->hp}}<br>
                                        @endif
                                        @if(!empty($kontak->bb))
                                            <strong>BBM :</strong> {{$kontak->bb}}<br>
                                        @endif
                                        @if(!empty($kontak->email))
                                            <strong>Email :</strong><a href="mailto:{{$kontak->email}}"> {{$kontak->email}}</a>
                                        @endif
                                        <div class="clr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <form class="contact-form" action="{{url('kontak')}}" method="post">
                                            <p class="form-group">
                                            <input class="form-control" placeholder="Nama" name="namaKontak" type="text" required>
                                            </p>
                                            <p class="form-group">
                                            <input class="form-control" placeholder="Email" name="emailKontak" type="email" required>
                                            </p>
                                            <p class="form-group">
                                            <textarea class="form-control" placeholder="Pesan" name="messageKontak" required></textarea>
                                            </p>
                                            <button class="btn btn-success submitnewletter">Kirim</button>
                                        </form>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>