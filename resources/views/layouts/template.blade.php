<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Saung Aden </title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            font-family: "Urbanist", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-start fixed top-0 z-10 w-full text-dark justify-start px-5 py-2">

        <a class="btn btn-ghost text-3xl font-bold">Saung Aden</a>
        <ul class="menu menu-horizontal px-1 flex justify-start">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('tentang')}}">Tentang</a></li>
            <li><a href="{{route('berita')}}">Berita</a></li>
            <li><a href="{{route('galeri')}}">Galeri</a></li>
            <li><a href="{{route('kontak')}}">Kontak</a></li>
            <li>
                @guest
                <a href="{{ route('login') }}" class="button btn btn-sm btn-primary ">Login</a>
                @else
            </li>
            <li>
                <a href="{{ url('/home') }}" class="button btn btn-sm btn-secondary">Go to Admin Panel</a>
                @endguest
            </li>
        </ul>
    </div>

    <div class="w-full">
        @yield('content')
    </div>

    <footer class="footer bg-slate-800 text-white p-10 py-50">
        <nav>
            <h6 class="footer-title">Saung Aden</h6>
            <p class="text-center max-w-md mx-auto text-justify">
                Kami adalah penyedia layanan penginapan yang berkomitmen untuk memberikan pengalaman menginap terbaik.
                Dengan lokasi strategis dan fasilitas lengkap, kami siap menyambut Anda dengan pelayanan hangat dan ramah.
            </p>
        </nav>
        <nav>
            <h6 class="footer-title p-0 m-0">Hubungi Kami</h6>
            <p class="text-sm">
                Alamat: Jl.Bayah Pelabuhan Ratu Kab Lebak
            </p>
            <p class="text-sm">
                Telepon: (021) 123-4567
            </p>
            <p class="text-sm">
                Email: saungaden@gmail.com
            </p>
        </nav>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-4">
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg>
                </a>
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>


</body>
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    })
</script>

</html>