@extends('layouts.template')

@section('content')

<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hubungi Kami </h1>
            <p class="py-6">
            Apakah Anda memiliki pertanyaan mengenai penginapan kami? Tim kami siap membantu Anda! Jangan ragu untuk menghubungi kami melalui WhatsApp
             untuk mendapatkan informasi lebih lanjut mengenai ketersediaan kamar.
            </p>

            <a href="https://wa.me/+6283871497833" target="_blank" class="block text-center mt-10">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="Chat WhatsApp" class="w-24 mx-auto ">
            </a>
        </div>
    </div>
</div>







<div class="hero bg-base-200 p-10">
    <div class="hero-content flex-col lg:flex-row lg:justify-between w-full gap-10">
        <div class="w-full rounded-lg overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8825891561937!2d-122.41941868468168!3d37.77492927975928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808d9c3e9b57%3A0x9d8e9438e0e7c034!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1658323739442!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>



@endsection