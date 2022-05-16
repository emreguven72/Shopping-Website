<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
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
                <a href="{{route('showCart')}}" class="bg-purple-600 text-gray-50 hover:bg-purple-700  p-3 px-5 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Sepet
                </a>
            @endif
        </div>
    </div><!-- NavBar -->

    <div class="mx-auto border-2 w-1/3 shadow-lg my-20">
        <div class="flex flex-col p-5">
            <h1 class="my-10 text-3xl mx-auto">Giriş yap</h1>
            <form class="flex flex-col" action="{{route('signin')}}" method="POST">
                @csrf
                <input type="email" class="h-10 my-3 placeholder:text-gray-600 p-2 bg-gray-100 rounded-lg" name="email" placeholder="E-posta">
                <input type="password" class="h-10 my-3 placeholder:text-gray-600 p-2 bg-gray-100 rounded-lg" name="password" placeholder="Şifre">
                <button type="submit" class="bg-purple-600 h-10 rounded-lg text-gray-50 my-3">Giriş yap</button>
                <a href="{{route('signup')}}" class="text-center">Hesabınız yok mu? kayıt ol.</a>
            </form>
        </div>
    </div><!-- Login Form -->
</div>
</body>
</html>
