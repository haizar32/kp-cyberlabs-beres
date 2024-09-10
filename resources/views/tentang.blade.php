@extends('layouts.template')

@section('content')
<div class="p-0 m-0">
    <div
        class="hero min-h-screen"
        style="background-image: url(https://casaindonesia.com/lkgallery/teaser/6-inspirasi-rumah-gaya-seperti-villa-bali-casa-indonesia-1_33_20210820151311igaydj.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Tentang Kami</h1>
                <p class="mb-5">
                    Pilihan Rekomendasi kamar yang Diperlukan 
                    Dilengkapi dengan Fasilitas yang nyaman.
                </p>
                <button class="btn btn-primary" onclick="document.getElementById('holly-yeay').scrollIntoView({ behavior: 'smooth' });">Get Started</button>
            </div>
        </div>
    </div>

    <!-- Bagian target scroll -->
    <div id="holly-yeay" class="hero bg-base-200 p-10">
        <div class="hero-content flex-col lg:flex-row lg:justify-between w-full">
            <div>
                <h1 class="text-5xl font-bold">Holly Yeay</h1>
                <p class="py-6 gap-2 leading-relaxed text-justify text-center">
                     Rekomendasi kamar untuk 4 orang, dilengkapi dengan 4 tempat tidur,
                <br> Televisi, Free Wifi dan banyak lagi. Pilihan kamar yang Recomended banget   </br>
                <br> Untuk kamu dan teman-teman. </br>
            </div>
            <div class="flex items-center gap-4">
                <img class="max-w-xl rounded-lg shadow-2xl" src="{{ asset('holly-yeay.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Bagian lainnya -->
    <div class="hero bg-base-200 p-10">
        <div class="hero-content flex-col lg:flex-row lg:justify-between w-full">
            <div class="flex items-center gap-4">
                <img class="max-w-xs rounded-lg shadow-2xl" src="{{ asset('1v.jpeg') }}" alt="">
                <img class="max-w-xs rounded-lg shadow-2xl" src="{{ asset('klm.jpg') }}" alt="">
            </div>
            <div class="ml-20">
                <h1 class="text-5xl font-bold">Staycation</h1>
                <p class="py-6 gap-2">
                    Buat kamu yang bingung nyari tempat buat staycation bersama pasangan,  
                    Saung Aden solusinya, disinih khusus untuk pilihan kamar stacation Ada Kolam Renang Privat loh. 
                    Jadi Tunggu Apalagi.
                </p>
            </div>
        </div>
    </div>

    <div class="hero bg-base-200 p-10">
        <div class="hero-content flex-col lg:flex-row lg:justify-between w-full">
            <div class="ml-20">
                <h1 class="text-5xl font-bold">Self Healing</h1>
                <p class="py-6 gap-2">
                    Pilihan Selanjutnya Ada Kamar untuk kamu yang Butuh kesunyian dan Refresh pikiran,
                    Di era gempuran Kapan Wisuda? Kapan Nikah? Udah bisa apa aja? Pilihan kamar Self Healing cocok bagi kamu. 
                </p>
            </div>
            <div class="flex items-center gap-4">
                <img class="max-w-xl rounded-lg shadow-2xl" src="{{ asset('self-healing.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="hero bg-base-200 p-10">
        <div class="hero-content flex-col lg:flex-row lg:justify-between w-full">
            <div class="flex items-center gap-4">
                <img class="max-w-xs rounded-lg shadow-2xl" src="{{ asset('fm1.jpg') }}" alt="">
                <img class="max-w-xs rounded-lg shadow-2xl" src="{{ asset('fm2.jpg') }}" alt="">
            </div>
            <div class="ml-20">
                <h1 class="text-5xl font-bold">Familly</h1>
                <p class="py-6 gap-2 ">
                    Untuk Kamu yang Sudah punya keluarga pilihan kamar Familly cocok buat kamu loh,
                    Dilengkapi dengan kasur tambahan untuk anak Umur 3 bulan sampai 7 tahun.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
