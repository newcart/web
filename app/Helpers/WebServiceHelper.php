<?php
use Illuminate\Support\Facades\Http;
class WebService{
    protected $server = 'https://newcart.akilliphone.com/webservice/';
    protected $userName = '';
    protected $userPassword = '';
    public static function auth_login(){

    }
    public static function auth_logout(){

    }
    public static function home_main_slider(){
        self::request('home/main-slider');
    }
    public static function section_category($number){

    }
    public static function section_grid($number){

    }
    public static function section_carousel($number){

    }
    public static function favorite_brands(){

    }
    private static function request($endpoint, $data=[], $method='GET', $token_required=false){
        $request = new Http();
        $request::accept('application/json');
        if($token_required){
            $request::withHeaders([
                'X-First' => 'foo',
                'X-Second' => 'bar'
            ]);
        }
        if($method=='GET'){
            $response = $request::get($endpoint);
        }elseif($method=='POST'){
            $response = $request::post($endpoint, $data);
        }elseif($method=='PUT'){
            $response = $request::put($endpoint, $data);
        }elseif($method=='DELETE'){
            $response = $request::delete($endpoint, $data);
        } else {

        }
        dd($response);
        return $response;
    }
}
