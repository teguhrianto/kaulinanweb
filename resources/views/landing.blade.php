@extends('layouts.master')

@section('title')
    Kaulinan - Mainan Berkualitas untuk Pendidikan Anak
@endsection

@section('content')
    <div class="page-landing">
        <section class="page-landing__hero bg-gradient bg-wave bg-wave--top bg-wave--bottom">
            <div class="container">
                <div class="page-landing__hero-caption">
                    <h2>Kaulinan</h2>
                    <h1>
                        Mainan Terbaik untuk Buah Hati Anda
                    </h1>

                    <a href="#sectionShop" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
            <img src="{{Vite::asset('resources/img/hero/img.png')}}" alt="Kaulinan, Mainan Terbaik untuk Buah Hati Anda" class="page-landing__hero-img">
        </section>

        <section class="page-landing__category-age">
            <div class="container">
                <div class="section-title">
                    <h3>Kategori Kelompok Usia</h3>
                    <p>Membimbing Setiap Tahapan Perkembangan Anak</p>
                </div>
                <div class="grid-container">
                    <div class="lg:col-span-3 md:col-span-6 col-span-6">
                        <x-card.age />
                    </div>
                    <div class="lg:col-span-3 md:col-span-6 col-span-6">
                        <a href="#" class="card card--age">
                            <div class="card-body">
                                <div class="card-title bg-primary">
                                    <h4>4-6</h4>
                                </div>
                                <p>Tahun</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-3 md:col-span-6 col-span-6">
                        <a href="#" class="card card--age">
                            <div class="card-body">
                                <div class="card-title bg-secondary">
                                    <h4>6-8</h4>
                                </div>
                                <p>Tahun</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-3 md:col-span-6 col-span-6">
                        <a href="#" class="card card--age">
                            <div class="card-body">
                                <div class="card-title bg-primary">
                                    <h4>8-12</h4>
                                </div>
                                <p>Tahun</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-landing__category-by">
            <div class="container">
                <div class="grid-container">
                    <div class="lg:col-span-5 md:col-span-6 col-span-12">
                        <a href="#" class="card card--category">
                            <img src="{{Vite::asset('resources/img/category/bg-1.png')}}" alt="Category" class="card-img">
                            <div class="card-body">
                                <h4>Terbaru</h4>
                                <h5>Lihat Produk Terbaru</h5>
                                <p class="text-secondary">Beli Sekarang</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-7 md:col-span-6 col-span-12">
                        <a href="#" class="card card--category">
                            <img src="{{Vite::asset('resources/img/category/bg-2.png')}}" alt="Category" class="card-img">
                            <div class="card-body">
                                <h4>Kids Toy</h4>
                                <h5>Lihat Produk Kids Toy</h5>
                                <p class="text-primary">Beli Sekarang</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-7 md:col-span-6 col-span-12">
                        <a href="#" class="card card--category">
                            <img src="{{Vite::asset('resources/img/category/bg-3.png')}}" alt="Category" class="card-img">
                            <div class="card-body">
                                <h4>Aksesoris</h4>
                                <h5>Lihat Produk Aksesoris</h5>
                                <p class="text-secondary">Beli Sekarang</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-5 md:col-span-6 col-span-12">
                        <a href="#" class="card card--category">
                            <img src="{{Vite::asset('resources/img/category/bg-4.png')}}" alt="Category" class="card-img">
                            <div class="card-body">
                                <h4>Trending</h4>
                                <h5>Lihat Produk Trending</h5>
                                <p class="text-primary">Beli Sekarang</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="sectionShop" class="page-landing__products bg-wave bg-wave--top bg-wave--bottom">
            <div class="container">
                <div class="section-title">
                    <h3>Produk Terbaru</h3>
                    <p>
                        Pastikan anak-anak Anda siap untuk sukses dengan barang-barang ini.<br />
                        Ideal untuk anak-anak prasekolah, taman kanak-kanak, dan siswa kelas satu.
                    </p>
                </div>
                <div class="grid-container">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--product">
                            <span class="badge badge-secondary">Sale</span>
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/products/1.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Desert Cake Toy</h4>
                                <img src="{{Vite::asset('resources/img/products/rating.png')}}" alt="5 Rating" class="card-rating">
                                <h5 class="card-price">
                                    IDR 230.000
                                </h5>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--product">
                            <span class="badge badge-secondary">New</span>
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/products/2.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Wooden Coffee Maker</h4>
                                <img src="{{Vite::asset('resources/img/products/rating.png')}}" alt="5 Rating" class="card-rating">
                                <h5 class="card-price">
                                    IDR 150.000
                                    <span>IDR 200.000</span>
                                </h5>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--product">
                            <span class="badge badge-grey">Sold Out</span>
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/products/3.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Wooden Kitchen Set</h4>
                                <img src="{{Vite::asset('resources/img/products/rating.png')}}" alt="5 Rating" class="card-rating">
                                <h5 class="card-price">
                                    IDR 330.000
                                </h5>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--product">
                            <span class="badge badge-danger">Hot</span>
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/products/4.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Ice Cream Stall</h4>
                                <img src="{{Vite::asset('resources/img/products/rating.png')}}" alt="5 Rating" class="card-rating">
                                <h5 class="card-price">
                                    IDR 250.000
                                </h5>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--product">
                            <span class="badge badge-secondary">New</span>
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/products/5.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Naughty Furry</h4>
                                <img src="{{Vite::asset('resources/img/products/rating.png')}}" alt="5 Rating" class="card-rating">
                                <h5 class="card-price">
                                    IDR 145.000
                                </h5>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--product">
                            <span class="badge badge-secondary">Sale</span>
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/products/6.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rhino Tosca</h4>
                                <img src="{{Vite::asset('resources/img/products/rating.png')}}" alt="5 Rating" class="card-rating">
                                <h5 class="card-price">
                                    IDR 120.000
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="page-landing__cta">
                    <a href="#" class="btn btn-primary">Lihat Lebih Banyak</a>
                </div>
            </div>
        </section>

        <section id="sectionAbout" class="page-landing__about">
            <div class="container">
                <div class="grid-container items-center">
                    <div class="lg:col-span-6 md:col-span-12 col-span-12">
                        <img src="{{Vite::asset('resources/img/about.png')}}" alt="Tentang Kaulinan" class="img-full">
                    </div>
                    <div class="lg:col-span-6 md:col-span-12 col-span-12">
                        <div class="page-landing__about-caption">
                            <h3>Pembelajaran yang menyenangkan</h3>
                            <p>
                                Kaulinan dengan bangga menawarkan mainan berkualitas tinggi yang dirancang khusus
                                untuk mendorong perkembangan kreatif anak-anak balita Anda. Kami menggabungkan
                                prinsip-prinsip Montessori dengan inovasi terbaru dalam pembuatan mainan untuk
                                memberikan pengalaman belajar yang mendalam dan menyenangkan.
                            </p>
                        </div>
                        <blockquote class="card card--quote">
                            <p>“Kami percaya bahwa anak-anak memiliki kesempatan untuk mengeksplorasi, belajar, dan
                                berkembang setiap saat mereka bermain.”</p>
                            <h6>- Kaulinan</h6>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-landing__features bg-wave bg-wave--top bg-wave--bottom">
            <div class="container">
                <div class="section-title">
                    <h3>Kenapa Kaulinan Terbaik</h3>
                    <p>
                        Kami mendedikasikan diri untuk memberikan pengalaman belajar dan bermain<br />
                        yang luar biasa bagi anak-anak Anda
                    </p>
                </div>
                <div class="page-landing__features-items">
                    <div class="grid-container">
                        <div class="lg:col-span-3 md:col-span-6 col-span-12">
                            <div class="card card--feature">
                                <div class="card-img">
                                    <img src="{{Vite::asset('resources/img/features/1.svg')}}" alt="Feature">
                                </div>
                                <h4>Kualitas Terbaik</h4>
                                <p>Bahan berkualitas tinggi yang aman dan ramah lingkungan</p>
                            </div>
                        </div>
                        <div class="lg:col-span-3 md:col-span-6 col-span-12">
                            <div class="card card--feature">
                                <div class="card-img">
                                    <img src="{{Vite::asset('resources/img/features/2.svg')}}" alt="Feature">
                                </div>
                                <h4>Inovasi</h4>
                                <p>Menerapkan inovasi terbaru dalam desain dan teknologi</p>
                            </div>
                        </div>
                        <div class="lg:col-span-3 md:col-span-6 col-span-12">
                            <div class="card card--feature">
                                <div class="card-img">
                                    <img src="{{Vite::asset('resources/img/features/3.svg')}}" alt="Feature">
                                </div>
                                <h4>Kepuasan Pelanggan</h4>
                                <p>Kepuasan pelanggan adalah prioritas utama kami</p>
                            </div>
                        </div>
                        <div class="lg:col-span-3 md:col-span-6 col-span-12">
                            <div class="card card--feature">
                                <div class="card-img">
                                    <img src="{{Vite::asset('resources/img/features/4.svg')}}" alt="Feature">
                                </div>
                                <h4>Gratis Ongkir</h4>
                                <p>Layanan pengiriman gratis ke seluruh penjuru negeri</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sectionBlog" class="page-landing__blog">
            <div class="container">
                <div class="section-title">
                    <h3>Kaulinan Blog</h3>
                    <p>
                        Inspirasi dan Panduan Pendidikan Anak Terbaik di Kaulinan Blog
                    </p>
                </div>
                <div class="grid-container">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--article">
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/articles/1.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <ul class="card-meta">
                                    <li>
                                        <i class="fa-solid fa-user"></i> by Prof. Utami
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-comment-dots"></i> 04 Komentar
                                    </li>
                                </ul>
                                <h4 class="card-title">
                                    Tips Memahami Anak Anda Lebih Baik - Panduan Orang Tua!
                                </h4>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--article">
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/articles/2.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <ul class="card-meta">
                                    <li>
                                        <i class="fa-solid fa-user"></i> by dr. Frescil
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-comment-dots"></i> 14 Komentar
                                    </li>
                                </ul>
                                <h4 class="card-title">
                                    Mengapa Mainan untuk anak pra sekolah Penting
                                </h4>
                            </div>
                        </a>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <a href="#" class="card card--article">
                            <div class="card-img">
                                <img src="{{Vite::asset('resources/img/articles/3.png')}}" alt="Product">
                            </div>
                            <div class="card-body">
                                <ul class="card-meta">
                                    <li>
                                        <i class="fa-solid fa-user"></i> by Ust. Adi
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-comment-dots"></i> 02 Komentar
                                    </li>
                                </ul>
                                <h4 class="card-title">
                                    Mainan Mana yang Terbaik untuk Pra Sekolah
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="page-landing__cta">
                    <a href="#" class="btn btn-primary">Lihat Lebih Banyak</a>
                </div>
            </div>
        </section>
    </div>
@endsection
