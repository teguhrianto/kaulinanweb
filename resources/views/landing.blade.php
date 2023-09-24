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
            <img src="{{ Vite::asset('resources/img/hero/img.png') }}" alt="Kaulinan, Mainan Terbaik untuk Buah Hati Anda"
                class="page-landing__hero-img">
        </section>

        <section class="page-landing__category-age">
            <div class="container">
                <div class="section-title">
                    <h3>Kategori Kelompok Usia</h3>
                    <p>Membimbing Setiap Tahapan Perkembangan Anak</p>
                </div>
                <div class="grid-container">
                    @foreach ($categoriesByAge as $category)
                        <div class="lg:col-span-3 md:col-span-6 col-span-6">
                            <x-card.age :name="$category['name']" :slug="$category['slug']" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="page-landing__category-by">
            <div class="container">
                <div class="grid-container">
                    @foreach ($categoriesByGeneral as $index => $category)
                        <div class="lg:col-span-{{ $index === 1 || $index === 2 ? '7' : '5' }} md:col-span-6 col-span-12">
                            <x-card.category :name="$category['name']" :slug="$category['slug']" :image="$category['image_url']" />
                        </div>
                    @endforeach
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
                    @foreach ($products as $product)
                        <div class="lg:col-span-4 md:col-span-6 col-span-12">
                            <x-card.product
                                :slug="$product['slug']"
                                :image="$product['image_url']"
                                :name="$product['name']"
                                :originalPrice="$product['original_price']"
                                :discountedPrice="$product['discounted_price']"
                                :badge="$product['badge']" />
                        </div>
                    @endforeach
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
                        <img src="{{ Vite::asset('resources/img/about.png') }}" alt="Tentang Kaulinan" class="img-full">
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
                        @foreach ($features as $feature)
                            <div class="lg:col-span-3 md:col-span-6 col-span-12">
                                <x-card.feature :image="$feature['image_url']" :title="$feature['title']" :description="$feature['description']" />
                            </div>
                        @endforeach
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
                    @foreach ($featuredBlogs as $featuredBlog)
                        <div class="lg:col-span-4 md:col-span-6 col-span-12">
                            <x-card.blog :slug="$featuredBlog['slug']" :author="$featuredBlog['author']['name']" :image="$featuredBlog['image_url']" :title="$featuredBlog['title']" />
                        </div>
                    @endforeach
                </div>

                <div class="page-landing__cta">
                    <a href="#" class="btn btn-primary">Lihat Lebih Banyak</a>
                </div>
            </div>
        </section>
    </div>
@endsection
