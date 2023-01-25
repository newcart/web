@extends('layouts.default')
@section('head')
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <title>E-Posta ile Üye ol - Akıllıphone</title>

@endsection
@section('content')

    <section class="sign-up" >
        <div class="container">
            <div class="signup-title">
                <h1>E-Posta ile Üye Ol</h1>
                Size Size özel kupon, indirim ve diğer avantajlardan yararlanın.
            </div>
            <form action="">
                <div class="form-wrapper">
                    <div class="signup-input">
                        <span class="label">Adı<span>&nbsp;*</span></span>
                        <input type="text">
                    </div>
                    <div class="signup-input">
                        <span class="label">Soyadı<span>&nbsp;*</span></span>
                        <input type="text">
                    </div>
                    <div class="signup-input">
                        <span class="label">E-Posta Adresi<span>&nbsp;*</span></span>
                        <input type="text">
                    </div>
                    <div class="signup-input">
                        <div class="signup-select">
                            <span class="label">Cinsiyet<span>&nbsp;*</span></span>
                            <select>
                                <option value="0"></option>
                                <option value="1">Erkek</option>
                                <option value="2">Kadın</option>
                            </select>
                        </div>
                    </div>
                    <div class="signup-input">
                        <span class="label">Doğum Tarihi<span>&nbsp;*</span></span>
                        <input type="text" id="date-picker">
                    </div>
                    <div class="signup-input">
                        <span class="label">Cep Tel<span>&nbsp;*</span></span>
                        <input id="mobilePhone" type="text">
                    </div>
                    <div class="signup-agreement">
                        <label for="membership">
                            <input class="option-input checkbox" type="checkbox" id="membership" required>
                            Üyelik Sözleşmesi şartlarını okudum ve kabul ediyorum.
                        </label>
                        <label for="permission">
                            <input class="option-input checkbox" type="checkbox" id="permission" required>
                            Tarafımla pazarlama ve tanıtım amaçlı iletişime geçilmesine izin veriyorum.
                        </label>
                    </div>
                    <div class="signup-buttons">
                        <a class="submit-btn" href="#">Hemen Üye Ol</a>
                        <a href="#">Üye misin? Hemen Giriş Yap</a>
                    </div>
                    <a class="kvkk" href="#">KVKK kapsamında akilliphone.com Kişisel Verilerin Korunması ve İşlenmesi Şartları na buradan ulaşabilirsiniz.</a>
                </div>
            </form>
        </div>
    </section>

@endsection
@section('js')
    <script src="./assets/js/signup-select.js"></script>
    <script src="./assets/js/flatpickr.min.js"></script>
    <script src="./assets/js/mask.min.js" ></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/tr.js"></script>
    <script>
        flatpickr.localize(flatpickr.l10ns.tr);
        flatpickr("#date-picker", {
            dateFormat: "d/m/Y",
            disableMobile: "true",
            minDate: "1.1.1930",
            maxDate: "today"
        });
    </script>
    <script>
        var element = document.getElementById('mobilePhone');
        var maskOptions = {
            mask: '+{9\\0} (000)0000000',
            lazy: true,
        };
        var mask = IMask(element, maskOptions);
    </script>
@endsection
