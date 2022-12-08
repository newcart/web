<section class="four-product-slider section-padding mx-24">
    <div class="container">
        <div class="four-slider owl-carousel owl-theme">
            @foreach ($items as $item)
                    <x-product.category-item :item="$item" />
            @endforeach
        </div>
    </div>
</section>
