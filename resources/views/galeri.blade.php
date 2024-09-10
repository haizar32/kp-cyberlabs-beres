@extends('layouts.template')

@section('content')
<div class="p-0 m-0">
    <!-- Hero Section -->
    <div
        class="hero min-h-screen"
        style="background-image: url('https://casaindonesia.com/lkgallery/teaser/6-inspirasi-rumah-gaya-seperti-villa-bali-casa-indonesia-1_33_20210820151311igaydj.jpg');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Galeri Kami</h1>
                <p class="mb-5">
                    Saung aden memiliki banyak sekali pilihan kamar dengan fasilitas yang di perlukan.
                    Pastikan agar anda menginap dengan nyaman.

                </p>
                <button class="btn btn-primary" onclick="document.getElementById('holly-yeay').scrollIntoView({ behavior: 'smooth' });">Get Started</button>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="hero bg-base-200 p-10">
        <div class="relative">
            <div class="carousel w-full h-96">
                <!-- Slide 1 -->
                <div id="slide1" class="carousel-item relative w-full">
                    <img
                        src="{{ asset('k1.jpg') }}" class="w-full rounded-lg" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide4" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div id="slide2" class="carousel-item relative w-full">
                    <img
                         src="{{ asset('k2.jpg') }}"
                        class="w-full rounded-lg" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div id="slide3" class="carousel-item relative w-full">
                    <img
                         src="{{ asset('k6.jpg') }}"
                        class="w-full rounded-lg" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide2" class="btn btn-circle">❮</a>
                        <a href="#slide4" class="btn btn-circle">❯</a>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div id="slide4" class="carousel-item relative w-full">
                    <img
                        src="{{ asset('k0.jpg') }}"
                        class="w-full rounded-lg" />
                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                        <a href="#slide3" class="btn btn-circle">❮</a>
                        <a href="#slide1" class="btn btn-circle">❯</a>
                    </div>
                </div>
            </div>
            <!-- Gallery Section -->
            <div id="holly-yeay" class="flex flex-col items-center justify-center p-10">
                <div class="wrapper-title w-1/2 h-full flex flex-col items-center px-24 gap-4 mt-6">
                    <h2 class="text-3xl font-bold">Galeri Kami</h2>
                    <p class="text-center">Selamat datang di galeri kami! Di sini, Anda dapat menjelajahi berbagai foto yang menampilkan keindahan dan kenyamanan penginapan kami.
                        Kami bangga menawarkan akomodasi yang dirancang dengan perhatian terhadap detail, memastikan pengalaman menginap yang menyenangkan dan memuaskan.</p>
                    <hr class="border-2 border-slate-900 w-[128px]">
                </div>
                <div class="grid grid-cols-3 gap-6 mt-6">
                    <img src="{{ asset('gl1.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded-2xl" />
                    <img src="{{ asset('gl2.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded-2xl" />
                    <img src="{{ asset('gl3.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded-2xl" />

                </div>
            </div>
        </div>
    </div>
</div>
@endsection