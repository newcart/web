<?php
use Illuminate\Support\Facades\Http;
class WebService{
    const WEBSERVICE_SERVER = 'https://json.akilliphone.com/';
    protected $userName = '';
    protected $userPassword = '';
    public static function auth_login(){

    }
    public static function auth_logout(){

    }
    public static function products($filter){
        return self::request('product');
    }
    public static function product($product_id){
        return self::request('product/'.$product_id);
    }
    public static function home_main_slider(){
        return self::request('home/main-slider');
    }
    public static function home_section_category($number){
        return self::request('home/section-category'.$number);
    }
    public static function home_section_grid($number){
        return self::request('home/section-grid'.$number);
    }
    public static function home_section_carousel($number){
        return self::request('home/section-carousel'.$number);
    }
    public static function home_favorite_brands(){
        return self::request('home/favorite-brands');
    }
    public static function contact_us(){
        return self::request('config/general');
    }
    private static function request($endpoint, $data=[], $method='GET', $token_required=false){
        $result = [];
        try{
            $url = self::WEBSERVICE_SERVER.$endpoint;
            $request = new Http();
            $request::accept('application/json');
            $headers['Cache-Control'] = 'no-cache';
            if($token_required){
                $headers['X-First'] = 'foo';
                $headers['X-Second'] = 'bar';
            }
            $request::withHeaders($headers);
            if($method=='GET'){
                $response = $request::get($url);
            }elseif($method=='POST'){
                $response = $request::post($url, $data);
            }elseif($method=='PUT'){
                $response = $request::put($url, $data);
            }elseif($method=='DELETE'){
                $response = $request::delete($url, $data);
            } else {

            }
            $body = $response->body();
            if($body){
                $json = json_decode($body, 1);
                if($json['status']){
                    $result = $json['data'];
                } else{
                    $result = [];
                }
            }
        } catch (\Exception $ex){

        }
        return $result;
    }
}
