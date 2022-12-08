<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_main_slider()
    {
         $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "slider Bilgileri",
    "count": 1,
    "data": [
    {
        "desktopImage": "assets/images/ms-desktop1.png",
        "mobileImage": "assets/images/ms-mobil1.webp",
        "url": "hakkimizda",
        "title":"Lets Go İWatch 6-5 44MM - 42MM Bilezik Kordon Kayış",
        "thumb": "assets/images/dots/dot1.png"
    },
    {
    "desktopImage": "assets/images/ms-desktop2.png",
        "mobileImage": "assets/images/ms-mobil2.webp",
        "url": "bize-ulasin",
        "title":"Lets Go İWatch 6-5 44MM - 42MM Bilezik Kordon Kayış",
        "thumb": "assets/images/dots/dot1.png"
    }
    ],
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_category1()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "data": [
    {
        "image": "assets/images/product-category1.png",
         "product": [
            {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1
            }
        ]
    },
     {
        "image": "assets/images/product-category2.png",
         "product": [
            {
                "image": "assets/images/product-images/2.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1
            }
        ]
    },
     {
        "image": "assets/images/product-category3.png",
         "product": [
            {
                "image": "assets/images/product-images/3.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1
            }
        ]
    },
     {
        "image": "assets/images/product-category4.png",
         "product": [
            {
                "image": "assets/images/product-images/4.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1
            }
        ]
    }
    
    ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_grid1()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "Sonbahar Fırsatı",
    "image": "assets/images/vertical-banner.png",
    "url": "hakkimizda",
    "product": [
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }, 
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
               
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }
     ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_grid2()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "Yılbaşı Fırsatı ",
    "url": "hakkimizda",
    "product": [
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }, 
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }
     ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_grid3()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "Süper Fırsatlar",
    "url": "hakkimizda",
    "product": [
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }, 
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }
     ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_carousel1()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "İndirime Girenler",
    "url": "hakkimizda",
    "product": [
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }, 
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }
     ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_carousel2()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "Yeniden Stokta",
    "url": "hakkimizda",
    "product": [
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }, 
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }
     ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }

    public function section_carousel3()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "Süper Fırsatlar",
    "url": "hakkimizda",
    "product": [
    {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }, 
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   },
       {
                "image": "assets/images/product-images/1.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
                
   }
     ],
    
    "errors": []
}';



        return json_decode($jsonstr,1);
    }
    public function favorite_brands()
    {
        $jsonstr='{
        "status": 1,
    "cached": 0,
    "message": "section_category1 Bilgileri",
    "count": 1,
    "title": "Favori Markaların ",
    "url": "hakkimizda",
    "brands": [
    {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    },
     {
        "image": "assets/images/brands/1.png",
        "name": "baseus",
        "url": "hakkimizda"
    }
      ],
      
       "product": [
    {
                "image": "assets/images/card-image.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
    },
       {
                "image": "assets/images/card-image.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
    },
       {
                "image": "assets/images/card-image.png",
                "oldPrice":52,
                "newPrice":48,
                "discountRate":50,
                "currency":"₺",
                "inStock":1,
                "brandName":"Baseus",
                "brandImage":"assets/images/brands/1.png"
    }
    ],
    "errors": []
}';



        return json_decode($jsonstr,1);
    }



    public function bizeulasin()
    {

        return view('page.bize-ulasin');
    }
}
