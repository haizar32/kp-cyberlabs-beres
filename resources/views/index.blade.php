@extends('layouts.template')

@section('content')
<div class="p-0 m-0">
    <!-- Hero Section -->
    <div
        class="wrapper-hero h-[70vh] flex bg-slate-200">
        <!-- Left Column -->
        <div class="wrapper-title w-1/2 h-full flex flex-col justify-center px-24 gap-3">
            <h2 class="text-5xl">Saung<br><span class="font-bold">Aden</span></h2>
            <p>Staycation penuh ketenangan? Saung Aden solusinya!</p>
            <a class="btn btn-neutral bg-slate-900 uppercase font-bold rounded-none w-fit" onclick="document.getElementById('tentang').scrollIntoView({ behavior: 'smooth' });">
                Tentang Kami
            </a>

        </div>
        <!-- Right Column -->
        <div class="w-full md:w-[800px] h-[300px] md:h-[449px] overflow-hidden rounded-tr-[80px] rounded-bl-[80px] mt-10 ml-0">
            <img src="{{ asset('gl2.jpg') }}" class="w-full h-full object-cover object-left-top" />
        </div>



    </div>

    <!-- About Section -->
    <div id="tentang"  class="flex flex-col items-center justify-center py-8">
        <div class="wrapper-title w-1/2 h-full flex flex-col items-center gap-4">
            <h2 class="text-3xl font-bold">Tentang Kami</h2>
            <p class="text-center">Selamat datang di Saung Aden, tempat sempurna untuk pengalaman menginap yang nyaman dan tak terlupakan. Kami adalah penginapan yang menawarkan kehangatan pelayanan dan suasana yang tenang, terletak di Sawarna.
                Di Saung Aden, kami memahami bahwa kenyamanan dan kepuasan tamu adalah prioritas utama. Oleh karena itu, kami menyediakan berbagai fasilitas terbaik, seperti fasilitas Wi-Fi gratis, sarapan lengkap, layanan kamar, dan kolam renang. Kamar-kamar kami dirancang dengan gaya modern dan dilengkapi dengan segala kebutuhan untuk memastikan Anda merasa seperti di rumah.</p>
            <hr class="border-2 border-slate-900 w-[128px]">
        </div>
    </div>

    <!-- Cards Section -->
    <div class="flex items-center justify-between gap-10 p-10">
        <div class="card bg-base-100 w-96 shadow-xl">
            <img src="{{ asset('self-healing.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Self Healing</h2>
                <p class="text-center font-bold">Mulai Dari Rp 299.000/Malam</p>
            </div>
        </div>
        <div class="card bg-base-100 w-96 shadow-xl">
            <img src="{{ asset('d1.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Staycation</h2>
                <p class="text-center font-bold">Mulai Dari Rp 150.00/Malam</p>
            </div>
        </div>
        <div class="card bg-base-100 w-96 shadow-xl">
            <img src="{{ asset('d2.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Familly</h2>
                <p class="text-center font-bold">Mulai Dari Rp 350.00/Malam</p>
            </div>
        </div>
        <div class="card bg-base-100 w-96 shadow-xl">
            <img src="{{ asset('holly-yeay.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded" />
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Holly Yeay</h2>
                <p class="text-center font-bold">Mulai Dari Rp 550.00/Malam</p>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="flex flex-col items-center justify-center p-10">
        <div class="wrapper-title w-1/2 h-full flex flex-col items-center px-24 gap-4 mt-6">
            <h2 class="text-3xl font-bold">Galeri Kami</h2>
            <p class="text-center">Selamat datang di Galeri Kami, tempat Anda dapat melihat sekilas keindahan dan kenyamanan yang ditawarkan oleh Saung Aden. Setiap sudut penginapan kami dirancang dengan penuh perhatian, menciptakan suasana yang hangat dan mengundang.</p>
            <hr class="border-2 border-slate-900 w-[128px]">
        </div>
        <div class="grid grid-cols-3 gap-6 mt-6">
            <img src="{{ asset('gl1.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded-2xl " />
            <img src="{{ asset('gl2.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded-2xl" />
            <img src="{{ asset('gl3.jpg') }}" alt="makanan-6" class="w-full h-full object-cover rounded-2xl" />
        </div>
    </div>
</div>
@endsection