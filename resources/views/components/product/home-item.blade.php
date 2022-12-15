<div class="product-item">
    <div class="product-image">
        <a href="{{ $item['url'] }}">
            <img class="lazyload" width="160" height="160" data-src="{{ $item['image'] }}" alt="product image" src="{{ $item['image'] }}">
        </a>
    </div>
    <div class="product-info">
        <div class="product-name">{{ $item['name'] }}</div>
        <div class="product-price">{{ $item['price'] }}</div>
        <div class="product-old-price">{{ $item['old_price'] }}</div>
    </div>
</div>
