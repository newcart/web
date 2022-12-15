@extends('layouts.default')
@section('head')
    <title>Akilliphone - Online Store</title>
    <link rel="stylesheet" href="{{ url('assets/css/product-details.css') }}?_v={{ env('ASSETS_VER') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
@endsection
@section('content')
    <section class="product-details">
        <div class="container">
            <div class="breadcrumb">
                <nav>
                    <ul>
                        <li><a href="#"><img src="{{ url('assets/images/home-icon.svg') }}"></a></li>
                        <li><a href="#">Tüm Ürünler</a></li>
                        <li><a href="#">Kablosuz Kulaklıklar</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-product-header">
                <div class="mobile-product-header-inner">
                    <div class="brand">BASEUS</div>
                    <h1 class="product-title">********</h1>
                    <div class="rating-area">
                        <div class="stars">
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/empty-star.svg') }}" alt=""></span>
                        </div>
                        <a href="">Yorum Yap</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="left">
                    <div thumbsSlider="" class="swiper product-detail-thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img width="97" height="97" src="{{ url('assets/images/1.png') }}" alt=""></div>
                            <div class="swiper-slide"><img width="97" height="97" src="{{ url('assets/images/2.png') }}" alt=""></div>
                            <div class="swiper-slide"><img width="97" height="97" src="{{ url('assets/images/3.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="swiper product-detail-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ url('assets/images/1.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('assets/images/2.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('assets/images/3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination d-none"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="product-details-area">
                        <div class="details-top">
                            <ul class="details-top-left">
                                <li><span>STOKTA</span></li>
                                <li class="comment"><a href="#">Yorum Yap</a></li>
                            </ul>
                            <ul class="details-top-right">
                                <li>Barcode:<br>
                                    1000058453192
                                </li>
                                <li>
                                    Ürün Kodu:<br>
                                    261311
                                </li>
                            </ul>
                        </div>
                        <div class="detail-title-area">
                            <h1 class="product-title"><span>Baseus</span> <span v-text="product.name"></span></h1>

                                <img width="93" height="42" src="{{ url('assets/images/baseus.svg') }}" alt="">
                        </div>
                        <div class="rating-area">
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/full-star.svg') }}" alt=""></span>
                            <span><img src="{{ url('assets/images/empty-star.svg') }}" alt=""></span>
                        </div>
                        <div class="product-price-area align-items-baseline">
                            <div class="product-price-area-top ">
                                <div class="product-price ">19.90 <span>TL</span></div>
                                <div class="product-oldprice ">29.90 <span>TL </span></div>
                            </div>
                            <div class="mobil-taksit-info"><span>290,03 TL x 9 ay’a varan Taksit seçenekleri</span></div>
                            <div class="product-color-btn">
                                <span class="title">Renk:</span>
                                <div class="color-btn" data-id="1">
                                    <button style="background:#808080;"></button>
                                </div>
                                <div class="color-btn" data-id="2">
                                    <button style="background:#000000;"></button>
                                </div>
                                <div class="color-btn">
                                    <button style="background:#8FA4C1;"></button>
                                </div>
                                <div class="color-btn">
                                    <button style="background:#D5B79F;"></button>
                                </div>
                            </div>
                            <div class="product-price-area-bottom">
                                <div class="qty-input">
                                    <button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
                                    <input class="product-qty" type="number" name="product-qty" min="1" max="10" value="1">
                                    <button class="qty-count qty-count--add" data-action="add" type="button">+</button>
                                </div>
                                <div class="addtocart"><button>Sepete Ekle</button></div>
                                <div class="iconcart">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16.5" height="16.5"
                                                     viewBox="0 0 16.5 16.5">
                                            <path id="noun_Heart_2102871_1_" data-name="noun_Heart_2102871 (1)"
                                                  d="M17.679,6A4.631,4.631,0,0,0,14.25,7.554,4.631,4.631,0,0,0,10.821,6,5.045,5.045,0,0,0,6,11.233c0,4.212,7.478,10.817,7.8,11.1a.688.688,0,0,0,.9.008c.319-.27,7.805-6.664,7.805-11.1A5.045,5.045,0,0,0,17.679,6ZM14.257,20.9c-2.271-2.079-6.882-6.877-6.882-9.663a3.673,3.673,0,0,1,3.446-3.858,3.361,3.361,0,0,1,2.843,1.679.687.687,0,0,0,1.172,0,3.362,3.362,0,0,1,2.843-1.679,3.673,3.673,0,0,1,3.446,3.858C21.125,14.179,16.527,18.876,14.257,20.9Z"
                                                  transform="translate(-6 -6)" fill="#d8d8d8" />
                                        </svg>
                                    </a>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="17.982" height="17.962"
                                                     viewBox="0 0 17.982 17.962">
                                            <path id="share"
                                                  d="M14.462,10.976a3.487,3.487,0,0,0-2.873,1.515l-4.871-2.2a3.423,3.423,0,0,0,0-2.61L11.586,5.47a3.487,3.487,0,1,0-.619-1.978,3.467,3.467,0,0,0,.06.588L5.855,6.431a3.493,3.493,0,1,0-.011,5.109l5.185,2.341a3.544,3.544,0,0,0-.059.587,3.493,3.493,0,1,0,3.492-3.492Zm0-9.48a2,2,0,1,1-2,2,2,2,0,0,1,2-2ZM3.486,10.976a2,2,0,1,1,2-2,2,2,0,0,1-2,2Zm10.976,5.488a2,2,0,1,1,2-2,2,2,0,0,1-2,2Z"
                                                  transform="translate(0.026 0.001)" fill="#d8d8d8" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="shipping-tabs">
                                <div class="tab">
                                    <button class="tablinks active" onclick="openCity(event, 'shipping')">Aynı Gün<br>Kargo <img
                                            src="{{ url('assets/images/ayni-gun.svg') }}" alt=""></button>
                                    <button class="tablinks" onclick="openCity(event, 'freeShipping')">Kargo<br>Bedava <img
                                            src="{{ url('assets/images/ucretsiz-kargo.svg') }}" alt=""></button>
                                    <button class="tablinks" onclick="openCity(event, 'rebate')">Kolay<br>İade <img
                                            src="{{ url('assets/images/kolay-iade.svg') }}" alt=""></button>
                                    <button class="tablinks" onclick="openCity(event, 'hirePurch')">Taksit<br>İmkanı <img
                                            src="{{ url('assets/images/kredikarti.svg') }}" alt=""></button>
                                </div>
                                <div id="shipping" class="tabcontent" style="display:block;">
                                    Saat 16:00’a kadar verdiğiniz siparişleri aynı gün kargoya teslim ediyoruz. <br>
                                    Kargo Seçenekleri: Siparişleriniz tercihinize göre ister Yurtiçi Kargo ister <br>
                                    MNG kargo ile gönderimi sağlanabilir.
                                </div>
                                <div id="freeShipping" class="tabcontent">
                                </div>
                                <div id="rebate" class="tabcontent">
                                </div>
                                <div id="hirePurch" class="tabcontent">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="product-spec-tabs">
                <div class="tab">
                    <button class="tabSpec active" onclick="openSpec(event, 'Aciklama')">Açıklama</button>
                    <button class="tabSpec" onclick="openSpec(event, 'Yorum')">Yorumlar (2)</button>
                    <button class="tabSpec" onclick="openSpec(event, 'Soru')">Soru & Cevap</button>
                    <button class="tabSpec" onclick="openSpec(event, 'Taksit')">Taksit Seçenekleri</button>
                </div>
                <div id="Aciklama" class="tabDetails" style="display:block;">
                    <p>2’si 1 Arada Mini USB Hava Soğutucu Taşınabilir Klima Nemlendirici Arıtma 3 Modlu Masaüstü
                        Soğutma Fanı - Beyaz <br>
                        Her yerde serin, temiz havanın tadını çıkarın
                    </p>
                    <ul>
                        <li>Farklı talebinizi karşılayabilecek 3 mod hızı</li>
                        <li>Sadece suyla doldurun, herhangi bir standart duvar prizine veya USB bağlantı noktasına takın ve keyfini
                            çıkarın</li>
                        <li>Bu kişisel alan hava soğutucusu, küçük bir fanın boyutunu ve güç tüketimini kullanırken aslında en çok
                            ihtiyacınız olan etrafınızdaki havayı soğutur.</li>
                    </ul>
                    <span style="font-size: 20px;color: #000;">Genel Bilgiler:</span>
                    <ul>
                        <li>Güç kaynağı modu: USB</li>
                        <li>Anma gerilimi: 3.7V</li>
                        <li>Nominal güç: 3.7W</li>
                        <li>Uygulanabilir alan: 20 metrekare içinde</li>
                        <li>Gürültü: 36dB veya daha az</li>
                        <li>Hava besleme yöntemi: yaprakları çevirin</li>
                        <li>Rüzgar hızı modu: üçüncü modlar</li>
                        <li>Çalışma modu: mekanik</li>
                        <li>Şarjı destekleyip desteklemeyeceği: destek</li>
                        <li>Düşerken otomatik olarak dur: desteklenmiyor</li>
                        <li>Dahili pil kapasitesi: 1500mAh lityum pil</li>
                        <li>Malzeme: Plastik</li>
                        <li>Öne çıkan işlev: fan/nemlendirici</li>
                    </ul>
                    <span style="font-size: 20px;color: #000;">Paket İçeriği:</span>
                    <ul>
                        <li>Güç kaynağı modu: USB</li>
                        <li>Anma gerilimi: 3.7V</li>
                        <li>Nominal güç: 3.7W</li>
                    </ul>
                    <table class="product_table">
                        <tr class="header_table">
                            <th>Genel Bilgiler</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Marka</td>
                            <td>Yok</td>
                        </tr>
                        <tr>
                            <td>Sertifika</td>
                            <td>CE</td>
                        </tr>
                        <tr>
                            <td>Renk</td>
                            <td>Beyaz</td>
                        </tr>
                        <tr>
                            <td>Perakende Ambalaj</td>
                            <td>Renkli Kutu</td>
                        </tr>
                        <tr>
                            <td>Kullanım Kılavuzu (Dil)</td>
                            <td>İngilizce ve Çince</td>
                        </tr>
                        <tr>
                            <td>Brüt Ağırlık</td>
                            <td>0.728kg</td>
                        </tr>
                        <tr>
                            <td>Hacim Ağırlığı</td>
                            <td>0.238kg</td>
                        </tr>
                        <tr>
                            <td>Paket Uzunluğu</td>
                            <td>16.300cm</td>
                        </tr>
                        <tr>
                            <td>Paket Genişliği</td>
                            <td>12.300cm</td>
                        </tr>
                        <tr>
                            <td>Paket Yüksekliği</td>
                            <td>5.300cm</td>
                        </tr>
                        <tr>
                            <td>Bir Paket Ağırlığı</td>
                            <td>0.650kg</td>
                        </tr>
                        <tr>
                            <td>Barkod</td>
                            <td>654846451</td>
                        </tr>
                    </table>

                    <div class="product-images">
                        <img class="lazyload" width="790" height="890" data-src="{{ url('assets/images/details-images/1.png') }}" alt="">
                        <img class="lazyload" width="790" height="890" data-src="{{ url('assets/images/details-images/2.png') }}" alt="">
                        <img class="lazyload" width="790" height="890" data-src="{{ url('assets/images/details-images/3.png') }}" alt="">
                        <img class="lazyload" width="790" height="890" data-src="{{ url('assets/images/details-images/4.png') }}" alt="">
                        <img class="lazyload" width="790" height="890" data-src="{{ url('assets/images/details-images/5.png') }}" alt="">
                        <img class="lazyload" width="790" height="890" data-src="{{ url('assets/images/details-images/6.png') }}" alt="">
                    </div>
                </div>

                <div id="Yorum" class="tabDetails">
                    <p>İçerik bulunamadı</p>
                </div>

                <div id="Soru" class="tabDetails">
                    <p>İçerik bulunamadı</p>
                </div>

                <div id="Taksit" class="tabDetails">
                    <p>İçerik bulunamadı</p>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var productThumb = new Swiper(".product-detail-thumb", {
            slidesPerView: 3,
            direction: "vertical",
            watchSlidesProgress: true,
        });
        var swiper = new Swiper(".product-detail-slider", {
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 38,
            navigation: true,
            thumbs: {
                swiper: productThumb,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                992: {
                    pagination: false,
                },
            },

        });
    </script>
    <script>
        // Product Page Shipping Tabs
        function openCity(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Product Spec and Comment
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
        // Ürün ekle butonu
        var QtyInput = (function () {
            var $qtyInputs = $(".qty-input");
            if (!$qtyInputs.length) {
                return;
            }
            var $inputs = $qtyInputs.find(".product-qty");
            var $countBtn = $qtyInputs.find(".qty-count");
            var qtyMin = parseInt($inputs.attr("min"));
            var qtyMax = parseInt($inputs.attr("max"));

            $inputs.change(function () {
                var $this = $(this);
                var $minusBtn = $this.siblings(".qty-count--minus");
                var $addBtn = $this.siblings(".qty-count--add");
                var qty = parseInt($this.val());

                if (isNaN(qty) || qty <= qtyMin) {
                    $this.val(qtyMin);
                    $minusBtn.attr("disabled", true);
                } else {
                    $minusBtn.attr("disabled", false);

                    if (qty >= qtyMax) {
                        $this.val(qtyMax);
                        $addBtn.attr('disabled', true);
                    } else {
                        $this.val(qty);
                        $addBtn.attr('disabled', false);
                    }
                }
            });

            $countBtn.click(function () {
                var operator = this.dataset.action;
                var $this = $(this);
                var $input = $this.siblings(".product-qty");
                var qty = parseInt($input.val());

                if (operator == "add") {
                    qty += 1;
                    if (qty >= qtyMin + 1) {
                        $this.siblings(".qty-count--minus").attr("disabled", false);
                    }

                    if (qty >= qtyMax) {
                        $this.attr("disabled", true);
                    }
                } else {
                    qty = qty <= qtyMin ? qtyMin : (qty -= 1);

                    if (qty == qtyMin) {
                        $this.attr("disabled", true);
                    }

                    if (qty < qtyMax) {
                        $this.siblings(".qty-count--add").attr("disabled", false);
                    }
                }
                $input.val(qty);
            });
        })();
    </script>
    <script>
        var product = <?php echo json_encode($product, JSON_UNESCAPED_UNICODE)?>;
        const { createApp } = Vue;
        var app = createApp({
            data() {
                return {
                    product: product
                }
            }
        }).mount('#app');

        $('.color-btn').on('click', function(){

            var settings = {
                "url": "https://json.akilliphone.com/product/" + $(this).data('id') + "/",
                'cache': false,
                "async": true,
                "crossDomain": true,
                "method": "GET",
                "headers": {
                    "Access-Control-Allow-Origin":"*"
                }
            };

            $.ajax(settings).done(function (response) {
                app.product = response.data;
                window.history.pushState("nextState", response.data.name, 'https://ex.akilliphone.com/' + response.data.url);
            });
        });

    </script>
@endsection
