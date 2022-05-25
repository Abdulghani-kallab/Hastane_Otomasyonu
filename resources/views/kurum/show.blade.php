@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
<<<<<<< HEAD
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon">Otomasyon</a></span> <span>Kurum</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Kurum'a Göre hastalar</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bu Sayfada kuruma Göre Hastaların Dosyasını Ön Görüntüleyebilirsiniz.</p>
=======
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon">Otomasyon</a></span> <span>Hasta Tipleri</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Hasta Tipine Göre Hastalar</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bu Sayfada Hasta Tipine Göre Hasta Dosyasını Ön Görüntüleyebilirsiniz.</p>
>>>>>>> 23e78e6f08545bb24945f779f5e04e55bb126d48
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/otomasyon/hastalar/create" class="btn btn-primary px-4 py-3">Yeni Hasta Ekle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
<<<<<<< HEAD
                    <h2 class="mb-3">Kurum'a Göre Hastalar</h2>
                </div>
                <div class="offset-8 col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box indexsearch">
                        <form method="GET" action="{{ route('kurum.search') }}" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="Kurum Ara">
=======
                    <h2 class="mb-3">hastaTipi'a Göre hastalar</h2>
                </div>
                <div class="offset-8 col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box indexsearch">
                        <form method="GET" action="{{ route('hastaTipi.search') }}" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="hastaTipi Ara">
>>>>>>> 23e78e6f08545bb24945f779f5e04e55bb126d48
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($hastalar as $hasta)
                    <div class="col-md-3 ftco-animate">
                        <div class="pricing-entry pb-5 text-center">
                            <div>
                                <p><span class="price">{{$hasta->hastaID}}</span></p>
                                <h3 class="mb-4">{{$hasta->hastaAd}} {{$hasta->hastaSad}}</h3>
                            </div>
                            <ul>
<<<<<<< HEAD
                                <li>{{$hasta->kurum->kurumAd}}</li>
                                <li>{{$hasta->hastaTc}}</li>
                                <li>{{$hasta->hastaTel}}</li>
                                <li>{{$hasta->email}}</li>
=======
                                <li>{{$hasta->hastaTipi->hastaTipiAd}}</li>
                                <li>{{$hasta->hastaTc}}</li>
                                <li>{{$hasta->hastaTel}}</li>
>>>>>>> 23e78e6f08545bb24945f779f5e04e55bb126d48
                            </ul>
                            <p class="button text-center"><a href="/otomasyon/hastalar/{{$hasta->id}}" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
