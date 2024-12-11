@extends('layouts.fronthome')

@section('content')
<!-- hero-area-start -->
<section class="hero-area tphero__bg" data-background="https://html.hixstudio.net/orfarm/assets/img/banner/banner-7.png">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-7 order-2 order-sm-1 order-xs-1">
            <div class="tphero__wrapper p-relative">
            <h5 class="tphero__sub-title mb-40">Selamat Datang</h5>
            <h3 class="tphero__title mb-25">Selamat Datang <br> Di UMKMBiz.</h3>
            <p>Website ini merupakan sebuah platform yang ditujukan untuk menjadi <br> sarana para pengusaha UMKM untuk menyalurkan produk <br> mereka dengan jaringan yang lebih luas dan terjamin.</p>
            <div class="tphero__btn">
                <a href="{{ route('register') }}" class="tp-btn banner-btn">Daftar Sekarang</a>
            </div>
            <div class="tphero__wrapper-shape pera tphero__thumb-img">
                <img data-depth="1.3" src="https://html.hixstudio.net/orfarm/assets/img/shape/fruits-1.png" alt="">
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5 order-1 order-sm-2 order-xs-2">
            <div class="tphero__thumb tphero__pt p-relative pt-80">
            <div class="pera2 ">
                <img data-depth="1" src="https://html.hixstudio.net/orfarm/assets/img/shape/coca1.png" alt="coca-shape-1">
            </div>
            <div class="tphero__thumb-shape  d-none d-md-block">
                <div class="tphero__thumb-shape-one pera3 tphero__thumb-img">
                    <img data-depth="2.4" src="https://html.hixstudio.net/orfarm/assets/img/shape/coca2.png" alt="coca-shape-2">
                </div>
                <div class="tphero__thumb-shape-three pera4 tphero__thumb-img  d-none d-xxl-block">
                    <img data-depth="1.3" src="https://html.hixstudio.net/orfarm/assets/img/shape/fruits-2.png" alt="coca-shape-2">
                </div>
                <div class="tphero__thumb-shape-four pera5 tphero__thumb-img  d-none d-md-block">
                    <img data-depth="5" src="https://html.hixstudio.net/orfarm/assets/img/shape/tree-leaf-7.png" alt="coca-shape-2">
                </div>
                <div class="tphero__thumb-shape-five pera6 tphero__thumb-img  d-none d-md-block">
                    <img data-depth="1.8" src="https://html.hixstudio.net/orfarm/assets/img/shape/tree-leaf-8.png" alt="coca-shape-2">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- hero-area-end -->

<!-- about-area-start -->
<section class="about-area pt-55">
<div class="container">
    <div class="tpabout__border pb-35">
        <div class="row">
            <div class="col-md-12">
            <div class="tpabout__title-img text-center mb-45">
                <img class="tpcbout__thumb-title mb-25" src="https://html.hixstudio.net/orfarm/assets/img/shape/about-img-2.png" alt="">
                <p>Selamat datang di platform terobosan kami. <br> Platform ini merupakan platform yang dapat menampung para UMKM yang ingin memasarkan produk mereka <br>dengan jangkauan yang lebih luas dan terjamin.</p>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="tpabout__item text-center mb-40">
                <div class="tpabout__icon mb-15">
                    <img src="assets/img/icon/about-svg1.svg" alt="">
                </div>
                <div class="tpabout__content">
                    <h4 class="tpabout__title">Tujuan Awal</h4>
                    <p>Platform ini digunakan sebagai wadah bagi para pengusaha UMKM untuk membuka kesempatan jual dan memasarkan produk mereka ke skala yang lebih luas.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="tpabout__item text-center mb-40">
                <div class="tpabout__icon mb-15">
                    <img src="assets/img/icon/about-svg2.svg" alt="">
                </div>
                <div class="tpabout__content">
                    <h4 class="tpabout__title">Konsep Aplikasi</h4>
                    <p>Konsep aplikasi yang kami bawa merupakan <br> sebuah konsep yang diambil dari permasalahan yang terjadi di kalangan pengusaha UMKM.
                    </p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="tpabout__item text-center mb-40">
                <div class="tpabout__icon mb-15">
                    <img src="assets/img/icon/about-svg3.svg" alt="">
                </div>
                <div class="tpabout__content">
                    <h4 class="tpabout__title">Pelayanan Baik </h4>
                    <p>Aplikasi ini juga menawarkan pelayanan yang baik <br> baik bagi penjual / pengusaha UMKM maupun juga bagi pelanggan.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- about-area-end -->

<!-- product-coundown-area-start -->
<section class="product-coundown-area tpcoundown__bg tpcoundown__bg-green pb-25" data-background="https://html.hixstudio.net/orfarm/assets/img/banner/coundpwn-bg-1.png">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="tpcoundown p-relative ml-175">
            <div class="section__content mb-35">
                <span class="section__sub-title mb-10">~ Mari bergabung bersama kami ~</span>
                <h2 class="section__title mb-25">Mari Bergabung <br> Menjadi Mitra Kami</h2>
                <p>Mari bergabung menjadi mitra bersama kami di aplikasi UMKMBiz <br>
                    dan dapatkan benefitnya!.</p>
            </div>
            <div class="tpcoundown__count">
                <h4 class="tpcoundown__count-title">hurry up! Offer End In:</h4>
                <div class="tpcoundown__countdown" data-countdown="2024/12/13"></div>
                <div class="tpcoundown__btn mt-50">
                    <a class="whight-btn" href="shop-details-top.html">Bergabung Menjadi Mitra Kami</a>
                </div>
            </div>
            <div class="tpcoundown__shape d-none d-lg-block">
                <img class="tpcoundown__shape-one" src="assets/img/shape/tree-leaf-1.svg" alt="">
                <img class="tpcoundown__shape-two" src="assets/img/shape/tree-leaf-2.svg" alt="">
                <img class="tpcoundown__shape-three" src="assets/img/shape/tree-leaf-3.svg" alt="">
                <img class="tpcoundown__shape-four" src="assets/img/shape/fresh-shape-1.svg" alt="">
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- product-coundown-area-end -->

<!-- blog-area-start -->
<section class="blog-area pt-75 pb-30">
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="tpsection mb-35">
            <h4 class="tpsection__sub-title">~ Ayo Membaca ~</h4>
            <h4 class="tpsection__title">Berita Terbaru dari Kami</h4>
            <p>Kami menyediakan berita berita ter update yang kami miliki.</p>
            </div>
        </div>
    </div>
    <div class="swiper-container tpblog-active">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-1.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">Avocado Grilled Salmon, Rich In Nutrients For The Body</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-2.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                        Fresh Beef For Womens Health</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-3.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits &
                        Seafoods Good For Pregnancy</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-4.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Shopping</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">Summer Breakfast For The Healthy  Morning With Tomatoes</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-5.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="#">Foods</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">Popular Reasons You Must Drinks Juice Everyday</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-6.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">Perfect Quality Reasonable Price For Your  Family</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-7.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Dairy Farm</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits Seafoods Good For Pregnancy</a></h4>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="tpblog__item">
                <div class="tpblog__thumb fix">
                    <a href="blog-details.html"><img src="assets/img/blog/blog-bg-8.jpg" alt=""></a>
                </div>
                <div class="tpblog__wrapper">
                    <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="#">organis</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                    </div>
                    <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of Fresh Beef For Women’s Health</a></h4>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- blog-area-end -->

<!-- subscribe-area-start -->
<div class="subscribe-area">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xxl-8 col-xl-10 col-lg-12 col-sm-12">
            <div class="tpsubscribe__item">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="tpsubscribe__content">
                        <p>Subscribe to the Orfarm mailing list to receive updates <br>
                        on new arrivals & other information.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="tpsubscribe__form p-relative">
                        <form action="#">
                        <span><i><img src="assets/img/shape/message-1.svg" alt=""></i></span>
                        <input type="email" placeholder="Your email address...">
                        <button class="tpsubscribe__form-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- subscribe-are-end -->

@endsection
