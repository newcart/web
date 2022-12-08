<section class="banner-area section-padding">
    <div class="container">
        @foreach ($images as $image)
            <a href="#">
                <img class="lazyload fluid-img" data-src="{{ $image['desktop'] }}"
                     data-srcset="{{ $image['desktop'] }} 800w, {{ $image['mobile'] }} 320w"
                     sizes="(min-width: 768px) 400px,160px" width="1110" height="120" alt="Banner">
            </a>
        @endforeach
    </div>
</section>
