        <div class="tab-title-top">
            <h1><!-- All Produk --></h1>
        </div>
        @if(count(new_product()) > 0)
        <div class="tab-title-category second-category">
            <h3>Produk Baru</h3>
        </div>
        <div class="tab-post">
            @foreach(new_product() as $newproduk)
            <div class="post">
                <a href="{{product_url($newproduk)}}">
                    {{HTML::image(product_image_url($newproduk->gambar1,'medium'), $newproduk->nama)}}
                </a>
                <div class="tab-title">
                    <h2>{{short_description($newproduk->nama,22)}}</h2>
                    <h3><strong>{{price($newproduk->hargaJual)}}</strong></h3>
                    <a href="{{product_url($newproduk)}}" class="add-chart">Lihat</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        @if(count(home_product()) > 0)
        <div class="tab-title-category second-category">
            <h3>Produk Pilihan</h3>
        </div>
        <div class="tab-post">
            @foreach(home_product() as $homeproduk)
            <div class="post">
                <a href="{{product_url($homeproduk)}}">
                    {{HTML::image(product_image_url($homeproduk->gambar1,'medium'), $homeproduk->nama)}}
                </a>
                <div class="tab-title">
                    <h2>{{short_description($homeproduk->nama,22)}}</h2>
                    <h3><strong>{{price($homeproduk->hargaJual)}}</h3>
                    <a href="{{product_url($homeproduk)}}" class="add-chart">Lihat</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        @if(count(list_product()) > 0)
        <div class="tab-title-category third-category">
            <h3>Produk Populer</h3>
        </div>
        <div class="tab-post">
            @foreach(list_product() as $listproduk)
            <div class="post">
                <a href="{{product_url($listproduk)}}">
                    {{HTML::image(product_image_url($listproduk->gambar1,'medium'), $listproduk->nama)}}
                </a>
                <div class="tab-title">
                    <h2>{{short_description($listproduk->nama,22)}}</h2>
                    <h3><strong>{{price($listproduk->hargaJual)}}</strong></h3>
                    <a href="{{product_url($listproduk)}}" class="add-chart">Lihat</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif