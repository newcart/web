var webService = {
    'init': function(){
        console.log('init');
    },
    'getFilteredProducts': function(url){
        var settings = {
            "url": url,
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
    },
    'fiyatal': function(){
        let price = []
        $('.forfilter.price').each(function(){
            if($(this).is(':checked')){
                price.push($(this).attr('value'))
            }
        });
        return price.join(',');
    },
    'markaal': function(){

    },
    'kargoal': function(){
        let brand = []
        $('.forfilter.shippings').each(function(){
            if($(this).is(':checked')){
                brand.push($(this).attr('value'))
            }
        });
        return brand.join(',');
    },
    'createFilter': function(){
        let url_filter = [];
        // create selected color filter
        let colors = []
        $('.color').each(function(){
            if($(this).is(':checked')){
                colors.push($(this).attr('id'))
            }
        });
        const renkler = colors.join(',');

        const fiyatlar = webService.fiyatal();

        // create selected brand filter
        let brand = []
        $('.forfilter.brands').each(function(){
            if($(this).is(':checked')){
                brand.push($(this).attr('value'))
            }
        });
        const markalar = brand.join(',');
        const kargolar = webService.kargoal();
        if(kargolar){
            url_filter.push('shipping=' + kargolar) ;
        }
        if(renkler){
            url_filter.push('color=' + renkler) ;
        }
        if(fiyatlar){
            url_filter.push('newPrice=' + fiyatlar) ;
        } if(markalar){
            url_filter.push('brands=' + markalar) ;
        }
        url_filter.push('ofset=100');
        url_filter.push('limit=20');
        console.log(url_filter.join('&'));
        return url_filter.join('&');
    }
}
webService.init();
