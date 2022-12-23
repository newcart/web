<section class="section-11 section-padding mx-24">
    <div class="container">
        <div class="left-column">
            <a href=""><img class="lazyload" width="255" height=183 data-src="./assets/images/retro/retro2@2x.png"
                            alt="retro"></a>
            <a href=""><img class="lazyload" width="255" height=183 data-src="./assets/images/retro/akilli.png"
                            alt="retro"></a>
            <a href=""><img class="lazyload" width="255" height=70 data-src="./assets/images/retro/suggest.png"
                            alt="retro"></a>
        </div>
        <div class="right-column">
            <div class="section-title section-padding">
                Sezon Sonu İndirimi
                <a class="link" href="#">Tümünü Gör</a>
            </div>
            <div class="group-product-slider owl-carousel owl-theme">

                @for ($i = 1; $i<=12; $i++)
                    <div class="countdown-product">
                        <div class="image">
                            <img class="lazyload fluid-img" width="160" height="160"
                                 src="{{ url('assets/images/product-images/6.png') }}" alt="Gerisayım">
                        </div>
                        <div class="name">ALLY Magnetic Air VentMıknatıslı Araç Tutucu Kablo Klipsli-SİYAH   {{$i}}</div>
                        <div class="prices">
                            <span class="old">85.56TL</span>
                            <span class="current">42.42TL</span>
                        </div>
                        <div class="sub-title">
                            Kampanya Bitimine
                        </div>
                        <div class="countdown-area">
                            <div class="column" >
                                <span class="number" id="gun{{$i}}" data-value="{{$i*1000}}"></span>
                                <span class="time">Gün</span>
                            </div>
                            <div class="column">
                                <span class="number" id="saat{{$i}}">17</span>
                                <span class="time">Saat</span>
                            </div>
                            <div class="column">
                                <span class="number" id="dakika{{$i}}">34</span>
                                <span class="time">Dakika</span>
                            </div>
                            <div class="column">
                                <span class="number" id="saniye{{$i}}">11</span>
                                <span class="time">Saniye</span>
                            </div>
                        </div>
                        <div class="discount">
                            %15
                        </div>
                    </div>


                @endfor
                <script>

                    for (let i = 1; i <= 12; i++) {

                        const gun = document.getElementById("gun"+i);
                        const gunn = gun.getAttribute('data-value');// DATA VALUE DAKİKA CİNSİNDEN OLACAK
                        document.getElementById("gun"+i).textContent=gunn;

                        let istenilensure=gunn;
                        let toplamSaniye=istenilensure*60;
                        let sayacBaslat = setInterval(() => {

                            toplamSaniye--;
                            const gun=Math.floor(toplamSaniye/3600/24);
                            const saat=Math.floor(toplamSaniye/3600)%24;
                            const dakika=Math.floor(toplamSaniye/60)%60;
                            const saniye=Math.floor(toplamSaniye%60);
                            document.getElementById("gun"+i).textContent=gun;
                            document.getElementById("saat"+i).textContent=saat;
                            document.getElementById("dakika"+i).textContent=dakika;
                            document.getElementById("saniye"+i).textContent=saniye;


                        },1000);





                    }
                </script>

            </div>
            <div class="custom-dots">
                <button role="button" class="dot active"><span>%15</span></button>
                <button role="button" class="dot"><span>%25</span></button>
                <button role="button" class="dot"><span>%35</span></button>
                <button role="button" class="dot"><span>%50</span></button>
            </div>
        </div>
    </div>
</section>
