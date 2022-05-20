<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sepet</title>
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

        <div class="flex flex-col lg:flex-row">
            <div class="my-10 lg:w-2/3">
                @foreach($cart_products as $product)
                    <div class="flex justify-between my-6 shadow-lg p-5">
                        <div class="flex flex-row">
                            <img class="h-20 w-20 rounded-xl" src={{asset($product->image_path)}}>
                            <h1 class="text-2xl text-gray-500 my-auto ml-5">{{$product->product_name}}</h1>
                        </div>
                        <div class="flex flex-row">
                            <h1 class="text-gray-500 font-bold text-3xl my-auto">{{$product->price}} TL</h1>
                            <div class="my-auto ml-5">
                                <a href="{{route('deleteProduct', $product->id)}}" class="bg-red-600 text-gray-50 hover:bg-red-700 p-2 px-4 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- Cart -->

            <div class="flex flex-col my-16 mx-5 lg:w-1/3 shadow-lg justify-between">
                <div class="flex my-5">
                    <h1 class="text-3xl p-5 text-gray-500">Toplam Sepet Tutarı:</h1>
                    <h3 class="text-4xl font-bold p-5">{{$cart_total_price}} TL</h3>
                </div>
                <div class="flex flex-col justify-center my-16">
                    <a href="#" class="text-3xl bg-green-600 hover:bg-green-700 rounded-full text-center w-2/3 mx-auto p-2 px-4">Alışverişi tamamla</a>
                    <p class="p-5">Bu alışverişi tamamladığınızda tüm <a class="text-blue-600 hover:text-blue-700" href="">Alışveriş Hüküm ve Koşulları</a>'nı kabul etmiş sayılırsınız.</p>
                </div>
            </div><!-- BuyProducts -->
        </div>
    </div>
</body>
</html>
