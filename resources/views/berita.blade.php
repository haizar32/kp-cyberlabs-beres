@extends('layouts.template')

@section('content')
<div class="p-0 m-0">
    <div
        class="hero min-h-screen"
        style="background-image: url('https://casaindonesia.com/lkgallery/teaser/6-inspirasi-rumah-gaya-seperti-villa-bali-casa-indonesia-1_33_20210820151311igaydj.jpg');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Berita Kami</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary" onclick="document.getElementById('baca').scrollIntoView({ behavior: 'smooth' });">Get Started</button>
            </div>
        </div>
    </div>


    <div class="hero bg-base-200 p-10">

        <div id="baca" class="hero-content flex-col lg:flex-row lg:justify-between w-full gap-10">
            <div class="flex items-center gap-4">
                <img class="max-w-sm object-cover rounded-lg shadow-2xl" src="{{ asset('gl3.jpg') }}" alt="">
            </div>
            <div>
                <h1 class="text-3xl font-bold uppercase">Apa Saja Kelengkapan Dari Penginapan Kami ?</h1>
                <p class="py-6 gap-2">
                    Saung Aden Menyediakan Tempat yang akan membuatmu nyaman seperti di rumah sendiri,
                    Fasilitas yang disediakan pun sangat lengap Mulai dari Kolam berenang Umun Ruang meeting dan banyak lagi.
                </p>
                <button class="btn bg-black text-white" onclick="document.getElementById('berita').scrollIntoView({ behavior: 'smooth' });" >Baca Selengkapnya</button>
            </div>
        </div>
    </div>        

    <span id="berita" class="p-10 text-3xl font-bold uppercase">Berita Lainnya</span>
    <div class="grid grid-cols-4 gap-10 place-content-center p-10">
        <div class="card bg-base-100 w-80 shadow-xl">
            <img src="{{ asset('p1.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Kolam Renang Umum</h2>
                <p class="text-center">Di Saung Aden terdapat Kolam Renang Umum bisa digunakan oleh Teman-temanp>
            </div>
        </div>
        <div class="card bg-base-100 w-80 shadow-xl">
            <img src="{{ asset('p2.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Playground</h2>
                <p class="text-center">Bagi kamu yang punya anak disini juga ada playground jadi anak anda bebas bermain</p>
            </div>
        </div>
        <div class="card bg-base-100 w-80 shadow-xl">
            <img src="{{ asset('p3.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Meeting Room</h2>
                <p class="text-center">Untuk Kamu yang heeling sambil bekerja fasilitas meeting room disediakan untukmu</p>
            </div>
        </div>
        <div class="card bg-base-100 w-80 shadow-xl">
            <img src="{{ asset('p4.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Main dining Room</h2>
                <p class="text-center">Fasilitas lainnya adalah main dining room ketika kamu untuk umum bisa dipakai untuk umum</p>
            </div>
        </div>
    

    </div>
</div>

@endsection