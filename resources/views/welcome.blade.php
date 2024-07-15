<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Welcome</title>
</head>
<body>
    
    <!-- Header -->
    <div class="bg-[url(http://balesari-malangkab.desa.id/assets/files/data/website-desa-balesari-3507202008/slideshow/default-slides.png)] bg-cover">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav id="nav" class="flex items-center fixed w-screen bg-white/80 justify-between py-1 px-6 lg:px-24" aria-label="Global">
        <div class="flex gap-x-4 items-center lg:flex-1">
            <div>
                <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Desa Balesari</span>
                <img class="h-12 w-auto" src="http://balesari-malangkab.desa.id/assets/files/data/website-desa-balesari-3507202008/images/icon.png" alt="">
            </div>
            <div class="">
                <h2 class="text-sm font-bold">Desa Balesari</h2>
                <h2 class="text-md">Kabupaten Malang</h2>
            </div>
            </a>
        </div>

        <div class="flex lg:hidden">
            <button id="buttonMenu" type="button" class="m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            </button>
        </div>

        <!-- Dropdown -->
        <div class="hidden lg:flex lg:gap-x-2">
            <!-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Profil Desa</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Pemerintahan</a>
            
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Potensi Desa</a> -->
             
            <!-- Dropdown 1 -->
            <button id="dropdownDelayButton1" data-dropdown-toggle="dropdownDelay1" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-sm font-semibold leading-6 text-gray-900 px-5 py-2.5 text-center inline-flex items-center " type="button">Profil Desa <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>

            <!-- Dropdown menu 1 -->
            <div id="dropdownDelay1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton1">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi & Misi</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah Desa</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Geografis Desa</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Demografi Desa</a>
                </li>
                </ul>
            </div>

            <!-- Dropdown 2 -->
            <button id="dropdownDelayButton2" data-dropdown-toggle="dropdownDelay2" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-sm font-semibold leading-6 text-gray-900 px-5 py-2.5 text-center inline-flex items-center " type="button">Pemerintahan <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>

            <!-- Dropdown menu 2 -->
            <div id="dropdownDelay2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton2">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Struktur Organisasi</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Perangkat Desa</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lembaga Desa</a>
                </li>
                </ul>
            </div>

            <a href="#" class="text-sm font-semibold px-5 py-2.5 leading-6 text-gray-900">Layanan</a>

            <!-- Dropdown 3 -->
            <button id="dropdownDelayButton3" data-dropdown-toggle="dropdownDelay3" data-dropdown-delay="500" data-dropdown-trigger="hover" class="text-sm font-semibold leading-6 text-gray-900 px-5 py-2.5 text-center inline-flex items-center " type="button">Informasi <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>

            <!-- Dropdown menu 3 -->
            <div id="dropdownDelay3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton3">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Berita</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pengumuman</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Agenda Kegiatan</a>
                </li>
                </ul>
            </div>
            
            <a href="#" class="text-sm font-semibold px-5 py-2.5 leading-6 text-gray-900">Potensi Desa</a>

        </div>
        <!--  -->

        </nav>

        <!-- Mobile menu, show/hide based on menu open state. -->
        <div id="mobileMenu" class="hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Desa Balesari</span>
                    <img class="h-8 w-auto" src="http://balesari-malangkab.desa.id/assets/files/data/website-desa-balesari-3507202008/images/icon.png" alt="">
                </a>
                <button id="buttonClose" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
                <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Profil Desa</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Pemerintahan</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Layanan</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Potensi Desa</a>
                    </div>
                    <div class="py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-24">
            <div class="mb-8 flex justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm font-bold leading-6 text-white bg-gray-900 rounded-full">
                    <span class="absolute inset-0" aria-hidden="true"></span>Desa<span aria-hidden="true"></span>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-8xl font-bold tracking-tight text-white sm:text-12xl">Balesari</h1>
                <p class="mt-6 text-lg leading-8 text-white p-6">Desa Balesari merupakan salah satu dari wilayah Kecamatan Ngajum Kabupaten Malang yang berada di lereng Gunung Kawi dengan banyaknya potensi desa yang dimiliki.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-gray-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Lihat Berita</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Layanan <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
    </div>
    <!-- Header -->

    <!-- Berita & Pengumuman -->
     <div class="lg:flex gap-x-12 justify-between py-2 p-6 lg:px-24">
        
        <!-- Berita -->
        <div class="w-full lg:flex-1">
            <h2 class="text-2xl mt-10 font-bold text-gray-900">Berita Terkini</h2>
            <hr class="border-t-2 border-gray-900 w-full mx-auto my-4">
            
            <div class="flex flex-col gap-4">
            
                <!-- Berita -->
                @foreach($news as $key => $data)
                <div>
                    <a href="{{ route('news.show', $data->id) }}" class="flex flex-col h-36 items-center rounded-lg shadow md:flex-row md:w-full hover:bg-gray-600 border-gray-700 bg-gray-800 bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-full md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/uploads/images/' . $data->image) }}" alt="">
                        <div class="flex flex-col justify-between py-2 p-4 leading-normal">
                            <h5 class="mb-2 w-full h-max text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</h5>
                            <p class="mb-3 w-full text-sm h-max font-normal text-gray-700 dark:text-gray-400">{{ \Illuminate\Support\Str::limit($data->content, 100, '...') }}</p>
                            <p class="mb-3 w-full text-sm h-max font-normal text-gray-700 dark:text-gray-400">{{ $data->created_at }} </p>
                        </div>
                    </a>
                </div>
                @endforeach
                <!--  -->

            </div>
        </div>
        <!--  -->
        
        <!-- Pengumuman -->
        <div class="w-full lg:w-4/12">
            <h2 class="text-2xl mt-10 font-bold text-gray-900">Pengumuman</h2>
            <hr class="border-t-2 border-gray-900 w-full mx-auto my-4">

            <div class="flex flex-col gap-4">
            @foreach($information as $key => $data)
                <div>
                    <a href="{{ route('informasi.show', $data->id) }}" class="flex flex-col h-max items-center rounded-lg shadow md:flex-row md:w-full hover:bg-gray-600 border-gray-700 bg-gray-800 bg-gray-700">
                        <div class="flex flex-col justify-between py-2 p-4 leading-normal">
                            <h5 class="mb-2 w-full h-max text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
                <!--  -->

                <!-- Agenda Kegiatan -->
                <div class="w-full">
                    <h2 class="text-2xl mt-10 font-bold text-gray-900">Agenda Kegiatan</h2>
                    <hr class="border-t-2 border-gray-900 w-full mx-auto my-4">        
                    
                    <div class="flex flex-col gap-4">

                    </div>
                </div>
                <!--  -->
        </div>
        
    </div>

    

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

<script>

    $(document).ready(function() {
        $("#buttonMenu").click(function() {
            $("#mobileMenu").show();
        });

        $("#buttonClose").click(function() {
            $("#mobileMenu").hide();
        })
    });

    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('nav');
        if (window.scrollY > 0) {
        // navbar.style.backgroundColor = 'rgba(255, 255, 255, 1)';
        navbar.classList.remove("bg-white/80");
        navbar.classList.add("bg-white");
        navbar.classList.add("drop-shadow-xl");
        } else {
        // navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
        navbar.classList.remove("bg-white");
        navbar.classList.add("bg-white/80");
        navbar.classList.remove("drop-shadow-xl");
        }
    });

</script>
</body>
</html>