<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TailwindCSS Tutorial</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto p-5">
    <div class="md:flex md:flex-row md:justify-between text-center">
        <div class="flex flex-row justify-center">
            <div class="bg-gradient-to-r from-purple-500 to-red-600 w-10 h-10 rounded-lg"></div>
            <h1 class="text-3xl text-gray-500 ml-2">SanalMarket</h1>
        </div>
        <div class="mt-2">
            @if(Auth::check())
                <a href="{{route('home')}}" class="text-gray-500 hover:text-purple-600 p-4">Anasayfa</a>
            @else
                <a href="{{route('signin')}}" class="text-green-600 hover:text-purple-600 p-4">Giriş yap</a>
            @endif

            @if(Auth::check())
                    <a href="{{route('showCart')}}" class="bg-purple-600 text-gray-50 hover:bg-purple-700 p-3 px-5 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Sepet
                    </a>
                    <a href="{{route('signout')}}" class="bg-red-600 text-gray-50 hover:bg-purple-700 ml-2 p-3 px-5 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Çıkış Yap
                    </a>
            @endif
        </div>
    </div><!-- NavBar -->
    <div class="md:flex md:flex-row mt-20">
        <div class="md:w-2/5 flex flex-col justify-center items-center">
            <h2 class="font-serif text-5xl text-gray-600 mb-4 text-center md:self-start md:text-left">Tek tıkla alışveriş</h2>
            <p class="uppercase text-gray-600 tracking-wide text-center md:self-start md:text-left">Güvenli ve kolay alışverişin adresi</p>
            <a href="#" class="bg-gradient-to-r from-red-600 to-purple-500 rounded-full py-4 px-8 text-gray-50 uppercase text-xl md:self-start my-5">Alışverişe başla</a>
        </div>
        <div class="md:w-3/5">
            <img src="{{asset('images/hero-img.svg')}}" class="w-full">
        </div>
    </div><!-- Hero Section -->
    <div class="my-20">
        <h2 class="text-3xl my-5">Kategoriler</h2>
        <div class="grid grid-flow-row xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10">
            <div class="shadow-2xl rounded-lg">
                <a href="{{route('products', 'sebze')}}">
                    <img src="{{asset('images/categories/sebze.jpg')}}" class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div>
                    <h5 class="p-4"><a href="#">Sebze ürünleri</a></h5>
                    <a href="{{route('products', 'sebze')}}" class="flex flex-row justify-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-purple-500  hover:bg-gradient-to-l m-5">
                        Ürünleri görüntüle
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div><!-- one product category -->
            <div class="shadow-2xl rounded-lg">
                <a href="{{route('products', 'meyve')}}">
                    <img src="{{asset('images/categories/meyve.jpg')}}" class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div>
                    <h5 class="p-4"><a href="#">Meyve ürünleri</a></h5>
                    <a href="{{route('products', 'meyve')}}" class="flex flex-row justify-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-purple-500  hover:bg-gradient-to-l m-5">
                        Ürünleri görüntüle
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div><!-- one product category -->
            <div class="shadow-2xl rounded-lg">
                <a href="{{route('products', 'et')}}">
                    <img src="{{asset('images/categories/et.jpg')}}" class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div>
                    <h5 class="p-4"><a href="#">Et ürünleri</a></h5>
                    <a href="{{route('products', 'et')}}" class="flex flex-row justify-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-purple-500  hover:bg-gradient-to-l m-5">
                        Ürünleri görüntüle
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div><!-- one product category -->
            <div class="shadow-2xl rounded-lg">
                <a href="{{route('products', 'giyim')}}">
                    <img src="{{asset('images/categories/giyim.jpg')}}" class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div>
                    <h5 class="p-4"><a href="#">Giyim ürünleri</a></h5>
                    <a href="{{route('products', 'giyim')}}" class="flex flex-row justify-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-purple-500  hover:bg-gradient-to-l m-5">
                        Ürünleri görüntüle
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div><!-- one product category -->
        </div><!--product category cards-->
    </div><!-- categories -->
</div><!-- Whole Site-->
</body>
</html>
