@extends('layouts.default')
@section('head')
    <title>Akilliphone - Online Store</title>

    <link rel="stylesheet" href="product-filter.css">
    <link rel="stylesheet" href="{{ url('assets/css/product-filter.css') }}?_v={{ env('ASSETS_VER') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script>
        var app;
    </script>
@endsection
@section('content')
    <section class="filter-section section-padding">
        <div class="container">
            <h1 class="title">Akıllı Aksesuarlar</h1>
            <div class="breadcrumb">
                <nav>
                    <ul>
                        <li><a href="#"><img src="assets/images/home-icon.svg"></a></li>
                        <li><a href="#">Tüm Ürünler</a></li>
                        <li><a href="#">Aksesuarlar</a></li>
                        <li><a href="#">Akıllı Aksesuarlar</a></li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <aside id="sidenav" class="left">
                    <span id="close"><svg width="20" height="20" viewBox="0 0 512 512"><path fill="currentColor" d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208s208-93.31 208-208S370.69 48 256 48Zm86.63 272L320 342.63l-64-64l-64 64L169.37 320l64-64l-64-64L192 169.37l64 64l64-64L342.63 192l-64 64Z"/></svg></span>
                    <div class="filtermenu-box">
                        <div class="title">Aksesuarlar</div>
                        <div class="content">
                            <a href="">Araç Aksesuarları</a>
                            <a href="">Selfie Ve Standlar</a>
                            <a href="">Stylus Kalemler</a>
                            <a href="">Oyun Aksesuarları</a>
                            <a href="">Bluetooth Klavye</a>
                            <a href="">Universal Kılıfları</a>
                            <a href="">Tablet Kılıfları</a>
                            <a href="">Sticker Kaplamalar</a>
                        </div>
                    </div>
                    <div class="filtermenu-box">
                        <div class="title">markalar</div>
                        <div class="content">
                            <input class="search" type="text" placeholder="Marka Ara">
                            <label for="ally">
                                <input type="checkbox" class="option-input" id="ally" >
                                Ally
                            </label>
                            <label for="Baseus">
                                <input type="checkbox" class="option-input" id="baseus">
                                Baseus
                            </label>
                            <label for="DUX DUCİS">
                                <input type="checkbox" class="option-input" id="DUX DUCİS"  >
                                DUX DUCİS
                            </label>
                            <label for="Ezere">
                                <input type="checkbox" class="option-input" id="Ezere" >
                                Ezere
                            </label>
                        </div>
                    </div>
                    <div class="filtermenu-box">
                        <div class="title">fiyat aralığı</div>
                        <div class="content">
                            <label for="ten">
                                <input type="radio" class="option-input" id="ten"  name="fiyat" >
                                0 - 10 TL
                            </label>
                            <label for="25">
                                <input type="radio" class="option-input" id="25"  name="fiyat">
                                10 - 25 TL
                            </label>
                            <label for="hundred">
                                <input type="radio" class="option-input" id="hundred"  name="fiyat">
                                25 - 100 TL
                            </label>
                            <label for="thousand">
                                <input type="radio" class="option-input" id="thousand"  name="fiyat">
                                100 - 1.000 TL
                            </label>
                        </div>
                    </div>
                    <div class="filtermenu-box">
                        <div class="title">teslimat</div>
                        <div class="content">
                            <label for="freeshipping">
                                <input type="checkbox" class="option-input" id="freeshipping">
                                Ücretsiz Kargo
                            </label>
                            <label for="superfast">
                                <input type="checkbox" class="option-input" id="superfast">
                                Süper Hızlı
                            </label>
                            <label for="todayshipping">
                                <input type="checkbox" class="option-input" id="todayshipping">
                                Bugün Teslimat
                            </label>
                        </div>
                    </div>
                    <div class="filtermenu-box">
                        <div class="title">renk</div>
                        <div class="content">
                            <label for="Turkuaz">
                                <input type="checkbox" class="color forfilter" id="Turkuaz" style="background-color:#27BC9C;">
                                Turkuaz
                            </label>
                            <label for="Mint Yeşil">
                                <input type="checkbox" class="color forfilter" id="Mint Yeşil" style="background-color:#36CC73;">
                                Mint Yeşil
                            </label>
                            <label for="Sarı">
                                <input type="checkbox" class="color forfilter" id="Sarı" style="background-color:#F0C32C;">
                                Sarı
                            </label>
                            <label for="Turuncu">
                                <input type="checkbox" class="color forfilter" id="Turuncu" style="background-color:#E47D2E;">
                                Turuncu
                            </label>
                            <label for="Mavi">
                                <input type="checkbox" class="color forfilter" id="Mavi" style="background-color:#2E80B7;">
                                Mavi
                            </label>
                            <label for="Kırmızı">
                                <input type="checkbox" class="color" id="Kırmızı" style="background-color:#E54A41;">
                                Kırmızı
                            </label>
                        </div>
                    </div>
                </aside>
                <div class="right">
                    <div class="categories">
                        <div class="categories-title">Öne Çıkan Kategoriler</div>
                        <div class="category-wrapper">
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-1.svg" alt="Multimedya">
                                <div class="category-title">Multimedya</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-2.svg" alt="Telefon Kılıfları">
                                <div class="category-title">Telefon Kılıfları</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-3.svg" alt="Koruyucu Cam">
                                <div class="category-title">Koruyucu Cam</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-4.svg" alt="Kulaklık Aksesuar">
                                <div class="category-title">Kulaklık Aksesuar</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-5.svg" alt="USB Kablo">
                                <div class="category-title">USB Kablo</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-6.svg" alt="Kablosuz Şarj">
                                <div class="category-title">Kablosuz Şarj</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-7.svg" alt="Araç Şarjları">
                                <div class="category-title">Araç Şarjları</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-8.svg" alt="PowerBank">
                                <div class="category-title">PowerBank</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-9.svg" alt="Standlar">
                                <div class="category-title">Standlar</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-10.svg" alt="Çoğaltıcılar">
                                <div class="category-title">Çoğaltıcılar</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-11.svg" alt="Pc Aksesuar">
                                <div class="category-title">Pc Aksesuar</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-12.svg" alt="Oyuncu Aksesuar">
                                <div class="category-title">Oyuncu Aksesuar</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-13.svg" alt="Tripodlar">
                                <div class="category-title">Tripodlar</div>
                            </a>
                            <a class="category-box" href="#">
                                <img src="assets/images/categories/logo-14.svg" alt="Bakım & Temizlik">
                                <div class="category-title">Bakım & Temizlik</div>
                            </a>
                        </div>
                    </div>
                    <div class="three-category-block">
                        <a href="#">
                            <img class="lazyload fluid-img" data-srcset="assets/images/category/category1.png 1x, assets/images/category/category1@2x.png 2x" data-src="assets/images/category/category1.png" alt="Category">
                        </a>
                        <a href="#">
                            <img class="lazyload fluid-img" data-srcset="assets/images/category/category2.png 1x, assets/images/category/category2@2x.png 2x" data-src="assets/images/category/category2.png" alt="Category">
                        </a>
                        <a href="#">
                            <img class="lazyload fluid-img" data-srcset="assets/images/category/category3.png 1x, assets/images/category/category3@2x.png 2x" data-src="assets/images/category/category3.png" alt="Category">
                        </a>
                    </div>
                    <div class="filter-buttons">
                        <div id="listbox" class="list">
                            <svg width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="m16 28l-7-7l1.41-1.41L16 25.17l5.59-5.58L23 21l-7 7zm0-24l7 7l-1.41 1.41L16 6.83l-5.59 5.58L9 11l7-7z"/></svg>
                            Sırala
                        </div>
                        <div id="burgermenu" class="side-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20q-.425 0-.712-.288Q10 19.425 10 19v-6L4.2 5.6q-.375-.5-.112-1.05Q4.35 4 5 4h14q.65 0 .913.55q.262.55-.113 1.05L14 13v6q0 .425-.287.712Q13.425 20 13 20Z"/></svg>
                            Filtrele
                        </div>
                    </div>
                    <div id="tab-btns" class="tab-section">
                        <div class="tab block">
                            <button class="tabSpec active" onclick="openSpec(event, 'bestSell')">Çok satanlar</button>
                            <button class="tabSpec" onclick="openSpec(event, 'newest')">En yeniler</button>
                            <button class="tabSpec" onclick="openSpec(event, 'lowPrice')">En düşük fiyat</button>
                            <button class="tabSpec" onclick="openSpec(event, 'highPrice')">En yüksek fiyat</button>
                        </div>
                        <div class="tab-right">
                            <select name="more">
                                <option value="" disabled selected hidden>Diğer</option>
                                <option value="">Sıralama 1</option>
                                <option value="">Sıralama 2</option>
                            </select>
                            <!-- <div class="view-buttons">
                              <button class="list-btn"><img src="assets/images/list.svg" alt=""></button>
                              <button class="grid-btn"><img src="assets/images/grid.svg" alt=""></button>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="bestSell" class="tabDetails" style="display:block;">
                            <div class="product-items">
                                <div class="product-wrapper" >
                                    <template v-for="item in data.items">
                                        <div class="product-item" >
                                            <a href="#">
                                                <div class="product-image">
                                                    <img class="lazyload" width="160" height="160" :src="item.image" alt="product image">
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-name">
                                                        <span v-text="item.name"></span>
                                                    </div>
                                                    <div class="product-price" v-text="item.newPrice"></div>
                                                    <div class="product-old-price" v-text="item.oldPrice"></div>
                                                </div>
                                            </a>
                                            <div class="add-to-cart">
                                                <button>Sepete Ekle</button>
                                            </div>
                                        </div>
                                    </template>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
$(document).on('change', '.forfilter', function(){
    let url_filter = [];
    const renkler = renkal();
    if(renkler){
        url_filter.push('color=' + renkler) ;
    }
    url_filter.push('text=hello');
    url_filter.push('ofset=100');
    url_filter.push('limit=20');
    console.log( 'https://json.akilliphone.com/urunler?'  + url_filter.join('&'));
});
function renkal(){
    let colors = []
    $('.color').each(function(){
        if($(this).is(':checked')){
            colors.push($(this).attr('id'))
        }
    });
    console.log(colors);
    return colors.join(',');
}

        $(document).ready(function(){
            const { createApp } = Vue;
            app = createApp({
                data() {
                    return {
                        data: [
                            {
                                items:[]
                            }
                        ]
                    }
                }
            }).mount('#app-basic');
            getFilteredProduct();
        });
        $('body').on('click', '.option-input', function(){
            getFilteredProduct();
        });

        function getFilteredProduct(){
            var settings = {
                "url": "https://json.akilliphone.com/product/products/",
                'cache': false,
                "async": true,
                "crossDomain": true,
                "method": "GET",
                "headers": {
                    "Access-Control-Allow-Origin":"*"
                }
            };

            $.ajax(settings).done(function (response) {
                app.data = response.data;
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>

    <script>
        const sideNav = document.getElementById("sidenav");
        const filterMenu = document.getElementById("burgermenu");
        const close = document.getElementById("close");
        filterMenu.addEventListener("click", function () {
            sideNav.classList.toggle("opened");
        });
        close.addEventListener("click", function () {
            sideNav.classList.toggle("opened");
        });
    </script>
    <script>
        const listbox = document.getElementById("listbox");
        const tab = document.getElementById("tab-btns")
        listbox.addEventListener("click", function () {
            tab.classList.toggle("block");
        });
    </script>
    <script>
        lazyload();
    </script>
    <!-- // Tab function javascript -->
    <script>
        function openSpec(evt, tabName) {
            var i, tabDetails, tabSpec;
            tabDetails = document.getElementsByClassName("tabDetails");
            for (i = 0; i < tabDetails.length; i++) {
                tabDetails[i].style.display = "none";
            }
            tabSpec = document.getElementsByClassName("tabSpec");
            for (i = 0; i < tabSpec.length; i++) {
                tabSpec[i].className = tabSpec[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <!-- Three category slider -->
    <script>
        $(document).ready(function () {
            $(".three-category").owlCarousel({
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        startPosition: 1,
                        stagePadding: 30,
                        margin: 16,
                    },
                    768: {
                        items: 1,
                        startPosition: 1,
                        stagePadding: 130,
                        margin: 30
                    },
                    1200: {
                        items: 3,
                        margin: 30,
                        drag: false,
                        mouseDrag: false,
                    }
                }
            });
        });
    </script>
    <!-- Three category slider -->
    <!-- Product Slider -->
    <script>
        $(document).ready(function () {
            $(".product-slider").owlCarousel({
                responsiveClass: true,
                dotsClass: 'owl-dots',
                responsive: {
                    0: {
                        items: 2,
                        margin: 8,
                        dots: true,
                    },
                    425: {
                        items: 2,
                        margin: 15,
                    },
                    500: {
                        items: 3,
                        margin: 20,
                    },
                    768: {
                        items: 4,
                        margin: 15,
                    },
                    1024: {
                        items: 5,
                        margin: 10,
                    },
                    1200: {
                        items: 6,
                        margin: 30,
                        dots: false,
                        drag: false,
                        mouseDrag: false,
                    }
                }
            });
        });
    </script>

    <!-- Product Slider -->
@endsection
