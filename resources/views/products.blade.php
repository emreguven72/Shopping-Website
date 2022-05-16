<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SanalMarket {{$category_name}} ürünleri</title>
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

        @if(session('message'))
            @if(session('message') == 'Seçtiğiniz ürün sepetinize eklendi.')
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-5 rounded-lg" role="alert">
                    <p>{{session('message')}}</p>
                </div>
            @else
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-5 rounded-lg" role="alert">
                    <p>{{session('message')}}</p>
                </div>
            @endif
        @endif

        <div class="my-15">
            <h2 class="text-3xl my-5">{{$category_name}} ürünleri</h2>
            <div class="grid grid-flow-row xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10">
                @foreach($products as $product)
                    <div class="shadow-2xl rounded-lg">
                        <a href="#">
                            <img src="{{asset($product->image_path)}}" class="rounded-tl-lg rounded-tr-lg">
                        </a>
                        <div>
                            <h5 class="p-4"><a href="#">{{$product->product_name}}</a></h5>
                            <a href="{{route('addToCart', $product->id)}}" class="flex flex-row justify-center px-4 py-2 rounded-full bg-gradient-to-r from-red-600 to-red-500  hover:bg-gradient-to-l m-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Sepete ekle
                            </a>
                        </div>
                    </div><!-- one product -->
                @endforeach
            </div><!--product category cards-->
        </div><!-- Product -->
    </div>
</body>
</html>
