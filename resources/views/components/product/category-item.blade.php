<a href="#" class="big-product-card">
    <div class="card-category">
        <img width="232" height="147" src="{{ $item['banner'] }}" alt="">
    </div>
    <div class="card-details">
        <div class="product-image">
            <img width="82" height="82" src="{{ $item['product']['image'] }}" alt="">
        </div>
        <div class="product-info">
            <div class="product-name">{{ $item['product']['name'] }}</div>
            <div class="product-prices">
                <div class="current">
                    <span class="price">{{ $item['product']['price'] }}</span>
                    <span class="discount">%50</span>
                </div>
                <div class="old">{{ $item['product']['old_price'] }}</div>
            </div>
        </div>
    </div>
</a>
