<section class="section-padding mx-24" style="overflow:hidden;">
    <div class="home-slider owl-carousel owl-theme">

        @foreach ($slider as $sliders)
        <div class="slider-wrapper" style="background-color:#BA2727;" data-dot="<img src='{{ $sliders['thumb'] }}'/>">
            <div class="container">
                <div class="content">
                    <div class="product-name">{{ $sliders['title'] }}</div>
                    <a class="product-link" href="#">Acele et kaçırma</a>
                    <span class="share-btn">
                            <img width="17" height="22" src="assets/images/svg/share-btn.svg" alt="">
                            <ul class="share-links">
                                <li>
                                    <a href="#" class="share-link">
                                        <div class="icon"></div>
                                        <div class="name">Whatsapp'dan paylaş</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="share-link">
                                        <div class="icon"></div>
                                        <div class="name">Facebook'ta paylaş</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="share-link">
                                        <div class="icon"></div>
                                        <div class="name">Twitter'da paylaş</div>
                                    </a>
                                </li>
                            </ul>
                        </span>
                </div>
                <div class="product-img">
                    <img class="fluid-img" width="1110" height="390" src="{{ $sliders['desktopImage'] }}"
                         srcset="{{ $sliders['desktopImage'] }} 800w, {{ $sliders['mobileImage'] }} 320w"
                         sizes="(min-width: 768px) 400px,160px" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
