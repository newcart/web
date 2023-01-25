@extends('layouts.default')
@section('head')
    <title>Bize Ulaşın - AkıllıPhone</title>
    <link rel="stylesheet" href="assets/css/contact-us.css">

@endsection
@section('content')

    <section class="contact-us mx-24">
        <div class="container">
            <div class="contact-us-title">
                <h1>Bize Ulaşın</h1>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <form action="">
                        <div class="input-group">
                            <input type="text" placeholder="İsim Soyisim" required id="isim">
                        </div>
                        <div class="input-group">
                            <input type="email" placeholder="E-Posta Adresiniz" id="email" required >
                        </div>
                        <div class="input-group">
                            <textarea type="email" rows="10" placeholder="Mesajınız" required id="message"></textarea>
                        </div>
                        <div class="button-group" id="sendMessage">
                            <a class="submit-btn" href="#" onclick="sendMessage()">Gönder</a>
                            <a class="whatsapp" href=""></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="map" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.6372486727098!2d28.67357537101174!3d41.04600775298027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa0ac44eb2abf%3A0xe323fdf29fc0136e!2sAkilliphone.com!5e0!3m2!1str!2str!4v1666004561871!5m2!1str!2str" width="100%" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="address-info">
                        <div class="row">
                            <div class="address-box left">
                                <div class="title">Adres:</div>
                                <a href="https://goo.gl/maps/pRqh2XgayihMwyxZ8">

                                        {{$config_general['address']}}


                                </a>

                            </div>
                            <div class="address-box right">
                                <div class="title">İletişim</div>
                                <div class="link">
                                    <a href="tel:08504609070">T:&nbsp;{{$config_general['phone1']}}</a>
                                </div>
                                <div class="link">
                                    <a href="mailto:info@akilliphone.com">T: {{$config_general['email']}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="title">Çalışma Saatleri</div>
                            Pazartesi-Cumartesi günleri 09:00 - 19:00 arasında hizmet vermekteyiz.
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script type="text/javascript">

        
                function sendMessage() {

                let name = document.getElementById("isim").value;
                let mail = document.getElementById("email").value;
                let message = document.getElementById("message").value;

                getSupport.getMessage(name, mail, message);

                     }


    </script>
@endsection
