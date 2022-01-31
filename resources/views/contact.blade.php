@extends('layout')
@section('content')
    <main class="contact">
        <section>
            <div class="container">
                <h1>Kontakt</h1>
                <h3>Zavolejte nám</h3>
                <div class="row">
                        <div class="col-md-6">
                            <a href="tel:+420603701417" class="contact-card">
                                <div class="img">
                                    <img src="img/img.png" alt="">
                                </div>
                                <h4>Bc. Renata Vašicová</h4>
                                <p>+420 603 701 417</p>
                            </a>
                        </div>
                    <div class="col-md-6">
                        <a href="tel:+420723996072" class="contact-card">
                            <div class="img">
                                <img src="img/img.png" alt="">
                            </div>
                            <h4>Bc. Klára Hýsková</h4>
                            <p>+420 723 996 072</p>
                        </a>
                    </div>
                </div>
                <div class="row email">
                    <div class="col-12">
                        <a href="mailto:uporodniasistentky@gmail.com">uporodniasistentky@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="address">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Kde nás najdete</h4>
                        <p>Dvůr krásy</p>
                        <p>Havlíčkova 836/9</p>
                        <p>Hradec Králové</p>
                        <p>500 02</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Nejbližší zastávky MHD</h4>
                        <p>Muzeum - 250m</p>
                        <p>Centrál - 400m/9</p>
                        <p>Ulrichovo nám. - 450m</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Parkování</h4>
                        <p>Havlíčkova ulice</p>
                        <p>Tylovo nábřeží</p>
                        <p>u náměstí 5. května</p>
                        <p><strong>Bohužel nelze parkovat u nás ve dvoře.</strong></p>
                    </div>
                </div>
                <div class="row map">
                    <div id="mapa" style="width:100%; height:600px;"></div>
                    <script type="text/javascript">
                        var stred = SMap.Coords.fromWGS84(15.8261729, 50.2116514);
                        var mapa = new SMap(JAK.gel("mapa"), stred, 17);
                        mapa.addDefaultLayer(SMap.DEF_BASE).enable();
                        mapa.addDefaultControls();
                        var layer = new SMap.Layer.Marker();
                        mapa.addLayer(layer);
                        layer.enable();
                        var options = {};
                        var marker = new SMap.Marker(stred, "myMarker", options);
                        layer.addMarker(marker);
                    </script>
                </div>
            </div>
        </section>
        @include('contactForm')
    </main>
@endsection
