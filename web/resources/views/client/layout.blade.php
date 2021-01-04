<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lit</title>
    <base href="{{ asset('') }}">
    <link rel="preload" crossorigin href="fontawesome-5.15.1/webfonts/fa-regular-400.woff2" as="font">
    <link rel="preload" crossorigin href="fontawesome-5.15.1/webfonts/fa-brands-400.woff2" as="font">
    <link rel="preload" crossorigin href="fontawesome-5.15.1/webfonts/fa-solid-900.woff2" as="font">
    <link rel="stylesheet" href="fontawesome-5.15.1/css/all.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<!-- top info -->
<div id="top-info" class="bg-gray-200 py-2 hidden md:block">
    <div class="container flex justify-end items-center">
        <div>
            <i class="far fa-envelope text-gray-400"></i> test@email.com
        </div>
        <div class="mx-3">|</div>
        <div>
            <i class="fas fa-phone text-gray-400"></i> 0123456789
        </div>
        <div class="ml-3 bg-green-500 hover:bg-green-600 px-2 py-1 rounded-md cursor-pointer modal-overlay">
            <i class="fas fa-search text-white"></i>
        </div>
        <div class="social ml-3">
            <i class="fab fa-facebook-f text-gray-400 mx-1 cursor-pointer"></i>
            <i class="fab fa-youtube text-gray-400 mx-1 cursor-pointer"></i>
        </div>
    </div>
</div>
<!-- end top info -->

<!-- menu -->
<div class="menu shadow-md">
    <div class="container flex py-3 items-center">
        <div class="logo">
            <a href=""><img src="assets/logo.png" alt=""></a>
        </div>
        <div class="px-4">
            <ul class="flex gap-4 font-bold">
                <li class="active">
                    <a href="#">Trang chủ</a>
                </li>
                @foreach($cats as $cat)
                    <li><a href="{{ route('category', ['category' => $cat->slug]) }}">{{ $cat->name }}</a></li>
                @endforeach
                <li class="relative">
                    Kiến thức vay
                    <ul class="sub-menu">
                        @foreach($types as $type)
                            <li><a href="{{ route('type', ['type' => $type->slug]) }}">{{ $type->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#">Về chúng tôi</a></li>
            </ul>
        </div>
        <div class="ml-auto">
            <button
                class="flex-shrink-0 bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600"
                type="button">
                Đăng ký tư vấn
            </button>
        </div>
    </div>

    @include('client.particles.drawer')
</div>
<!-- end menu -->

@yield('content')

<!-- branch -->
<div class="branch py-14">
    <div class="container overflow-hidden">
        <div class="branch-slide">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/shinhan.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- branch -->

<!-- footer -->
<footer class="bg-gray-700 text-white py-10">
    <div class="container flex">
        <div class="flex-1">
            <p class="font-bold text-lg">Vay tiền nhanh</p>
            <ul class="list-disc pl-4 mt-2">
                <li class="mb-1">Oncredit</li>
                <li class="mb-1">Moneycat</li>
                <li class="mb-1">Doctor Đồng</li>
                <li class="mb-1">Tamo</li>
                <li class="mb-1">Senmo</li>
            </ul>
        </div>
        <div class="flex-1">
            <p class="font-bold text-lg">Mở thẻ tín dụng</p>
            <ul class="list-disc pl-4 mt-2">
                <li class="mb-1">Thẻ tín dụng Vietcombank</li>
                <li class="mb-1">Thẻ tín dụng Citibank</li>
                <li class="mb-1">Thẻ tín dụng Sacombank</li>
                <li class="mb-1">Thẻ tín dụng Vpbank</li>
                <li class="mb-1">Thẻ tín dụng Shinhanbank</li>
            </ul>
        </div>
        <div class="flex-1">
            <p class="font-bold text-lg">Vay tín chấp</p>
            <ul class="list-disc pl-4 mt-2">
                <li class="mb-1">Vay tín chấp Vietcombank</li>
                <li class="mb-1">Vay tín chấp Vpbank</li>
                <li class="mb-1">Vay tín chấp Techcombank</li>
                <li class="mb-1">Vay tín chấp OCB</li>
                <li class="mb-1">Vay tín chấp BIDV</li>
            </ul>
        </div>
        <div class="flex-1">
            <p class="font-bold text-lg">Về vay tiền online</p>
            <ul class="list-disc pl-4 mt-2">
                <li class="mb-1">Giới thiệu</li>
                <li class="mb-1">Điều khoản sử dụng</li>
                <li class="mb-1">Chính sách bảo mật</li>
                <li class="mb-1">Sơ đồ website</li>
            </ul>
        </div>
    </div>
</footer>
<!-- footer -->

<!-- cert -->
{{--<div class="border-t border-white py-4 bg-gray-700 text-white">--}}
{{--    <div class="container text-center">--}}
{{--        Bản quyền thuộc về Lit--}}
{{--    </div>--}}
{{--</div>--}}
<!-- cert -->

<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-white opacity-95"></div>

    <div class="modal-container fixed w-full h-full z-50 overflow-y-auto ">

        <div
            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-black text-sm z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                 viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            (Esc)
        </div>

        <!-- Add margin if you want to see grey behind the modal-->
        <div class="modal-content container mx-auto h-auto text-left p-4">

            <!--Title-->
            <div class="flex justify-between items-center pb-2">
                <p class="text-2xl font-bold">Full Screen Modal!</p>
            </div>

            <!--Body-->
            <p>Modal content can go here</p>

            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button
                    class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
                    Action
                </button>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close
                </button>
            </div>

        </div>
    </div>
</div>
<!-- end modal -->

<script src="{{ mix('js/app.js') }}"></script>
@stack('after_scripts')
</body>
</html>
