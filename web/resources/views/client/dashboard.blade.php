<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lit</title>
    <base href="{{ asset('') }}">
    <link rel="preload" href="fonts/fa-regular-400.woff2" as="font">
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font">
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<!-- top info -->
<div id="top-info" class="bg-gray-200 py-2">
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
            <img src="assets/logo.png" alt="">
        </div>
        <div class="px-4">
            <ul class="flex gap-4 font-bold">
                <li class="active">Trang chủ</li>
                <li>Vay tiền nhanh</li>
                <li>Cầm đồ online</li>
                <li>Vay tín chấp</li>
            </ul>
        </div>
        <div class="ml-auto">
            <button class="flex-shrink-0 bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600"
                    type="button">
                Đăng ký tư vấn
            </button>
        </div>
    </div>
</div>
<!-- end menu -->

<!-- slide -->
<!-- Slider main container -->
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="assets/banner.jpg" alt="">
        </div>
        <div class="swiper-slide">
            <img src="assets/banner.jpg" alt="">
        </div>
        <div class="swiper-slide">
            <img src="assets/banner.jpg" alt="">
        </div>
    </div>
</div>
<!-- slide -->

<!-- service -->
<div class="light-blue mb-20">
    <div class="container pt-16">
        <div class="text-green-500 text-3xl text-center font-bold">
            Tư vấn tài chính & Đánh giá sản phẩm vay online
        </div>
        <div class="text-center text-lg mt-2">
            So sánh sản phẩm vay, thẻ tín dụng từ nhiều ngân hàng và tổ chức tài chính khác nhau. Thông tin cung cấp rõ
            ràng và trực quan để bạn dễ dàng so sánh và chọn lựa đúng sản phẩm mình cần.
        </div>
        <div class="services flex mt-10">
            <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                <img src="assets/service.png" style="width: 60px;" alt="">
                <span class="mt-2 text-xl font-bold">Vay nhanh</span>
            </div>
            <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                <img src="assets/service.png" style="width: 60px;" alt="">
                <span class="mt-2 text-xl font-bold">Vay nhanh</span>
            </div>
            <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                <img src="assets/service.png" style="width: 60px;" alt="">
                <span class="mt-2 text-xl font-bold">Vay nhanh</span>
            </div>
            <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                <img src="assets/service.png" style="width: 60px;" alt="">
                <span class="mt-2 text-xl font-bold">Vay nhanh</span>
            </div>
            <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                <img src="assets/service.png" style="width: 60px;" alt="">
                <span class="mt-2 text-xl font-bold">Vay nhanh</span>
            </div>
            <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                <img src="assets/service.png" style="width: 60px;" alt="">
                <span class="mt-2 text-xl font-bold">Vay nhanh</span>
            </div>
        </div>
    </div>
</div>
<!-- service -->

<!-- guide -->
<div class="guide mb-20">
    <div class="container">
        <div class="text-green-500 text-3xl text-center font-bold">
            Bạn đã biết cách sử dụng <span>abc</span> chưa ?
        </div>
        <div class="text-center text-lg mt-2">
            Vay online với 3 bước đơn giản ...
        </div>
        <div class="steps flex gap-4">
            <div class="flex-1 shadow-md hover:shadow-xl flex flex-col items-center p-3 cursor-pointer">
                <div style="width: 77px;">
                    <svg style="width: 100%; height: 100%;" xmlns="http://www.w3.org/2000/svg" id="Layer_3"
                         enable-background="new 0 0 64 64"
                         height="512px" viewBox="0 0 64 64" width="512px" class="">
                        <g>
                            <g>
                                <path d="m26 14c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12zm0 22c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                                <path d="m61.879 56.464-10.879-10.878v-39.586c0-.552-.447-1-1-1h-3v-3c0-.552-.447-1-1-1h-34c-.266 0-.52.105-.707.293l-10 10c-.188.187-.293.442-.293.707v46c0 .552.447 1 1 1h3v3c0 .552.447 1 1 1h44c.553 0 1-.448 1-1v-5.587l5.465 5.465c.723.724 1.683 1.122 2.707 1.122 2.11 0 3.828-1.717 3.828-3.829 0-1.022-.398-1.983-1.121-2.707zm-12.879-49.464v36.586l-2-2v-34.586zm-38-2.586v6.586h-6.586zm-8 8.586h9c.553 0 1-.448 1-1v-9h32v36.586l-1.655-1.655c.399-.755.29-1.71-.345-2.345l-2.619-2.619c1.026-2.11 1.619-4.468 1.619-6.967 0-8.822-7.178-16-16-16s-16 7.178-16 16 7.178 16 16 16c2.499 0 4.857-.593 6.967-1.619l2.619 2.619c.39.39.902.585 1.414.585.321 0 .64-.086.931-.24l7.069 7.069v6.586h-42zm34 28.586-2.223-2.223c1.823-1.201 3.385-2.763 4.586-4.586l2.223 2.223zm-11-1.586c-7.72 0-14-6.28-14-14s6.28-14 14-14 14 6.28 14 14-6.28 14-14 14zm23 21h-42v-2h39c.553 0 1-.448 1-1v-5.586l2 2zm10.172 0c-.481 0-.952-.195-1.293-.536l-18.465-18.464 2.586-2.586 18.465 18.464c.345.346.535.805.535 1.293 0 1.009-.82 1.829-1.828 1.829z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                                <path d="m17 7h24v2h-24z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 51h34v2h-34z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 47h34v2h-34z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 43h26v2h-26z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m28.793 24.855c.743-.727 1.207-1.736 1.207-2.855 0-2.206-1.794-4-4-4s-4 1.794-4 4c0 1.119.464 2.128 1.207 2.855-1.331.9-2.207 2.422-2.207 4.145v3c0 .552.447 1 1 1h8c.553 0 1-.448 1-1v-3c0-1.723-.876-3.245-2.207-4.145zm-4.793-2.855c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2zm5 9h-6v-2c0-1.654 1.346-3 3-3s3 1.346 3 3z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="mt-3 uppercase sm:font-bold">Bước 1</span>
                <span class="mt-1 font-bold text-xl">Tìm kiếm</span>
                <p class="mt-1 text-md text-center">
                    Chọn sản phẩm vay online bạn muốn tìm kiếm như vay nhanh, vay tín chấp, vay mua xe, mua nhà...
                </p>
            </div>
            <div class="flex-1 shadow-md hover:shadow-xl flex flex-col items-center p-3 cursor-pointer">
                <div style="width: 77px;">
                    <svg style="width: 100%; height: 100%;" xmlns="http://www.w3.org/2000/svg" id="Layer_3"
                         enable-background="new 0 0 64 64"
                         height="512px" viewBox="0 0 64 64" width="512px" class="">
                        <g>
                            <g>
                                <path d="m26 14c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12zm0 22c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                                <path d="m61.879 56.464-10.879-10.878v-39.586c0-.552-.447-1-1-1h-3v-3c0-.552-.447-1-1-1h-34c-.266 0-.52.105-.707.293l-10 10c-.188.187-.293.442-.293.707v46c0 .552.447 1 1 1h3v3c0 .552.447 1 1 1h44c.553 0 1-.448 1-1v-5.587l5.465 5.465c.723.724 1.683 1.122 2.707 1.122 2.11 0 3.828-1.717 3.828-3.829 0-1.022-.398-1.983-1.121-2.707zm-12.879-49.464v36.586l-2-2v-34.586zm-38-2.586v6.586h-6.586zm-8 8.586h9c.553 0 1-.448 1-1v-9h32v36.586l-1.655-1.655c.399-.755.29-1.71-.345-2.345l-2.619-2.619c1.026-2.11 1.619-4.468 1.619-6.967 0-8.822-7.178-16-16-16s-16 7.178-16 16 7.178 16 16 16c2.499 0 4.857-.593 6.967-1.619l2.619 2.619c.39.39.902.585 1.414.585.321 0 .64-.086.931-.24l7.069 7.069v6.586h-42zm34 28.586-2.223-2.223c1.823-1.201 3.385-2.763 4.586-4.586l2.223 2.223zm-11-1.586c-7.72 0-14-6.28-14-14s6.28-14 14-14 14 6.28 14 14-6.28 14-14 14zm23 21h-42v-2h39c.553 0 1-.448 1-1v-5.586l2 2zm10.172 0c-.481 0-.952-.195-1.293-.536l-18.465-18.464 2.586-2.586 18.465 18.464c.345.346.535.805.535 1.293 0 1.009-.82 1.829-1.828 1.829z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                                <path d="m17 7h24v2h-24z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 51h34v2h-34z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 47h34v2h-34z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 43h26v2h-26z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m28.793 24.855c.743-.727 1.207-1.736 1.207-2.855 0-2.206-1.794-4-4-4s-4 1.794-4 4c0 1.119.464 2.128 1.207 2.855-1.331.9-2.207 2.422-2.207 4.145v3c0 .552.447 1 1 1h8c.553 0 1-.448 1-1v-3c0-1.723-.876-3.245-2.207-4.145zm-4.793-2.855c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2zm5 9h-6v-2c0-1.654 1.346-3 3-3s3 1.346 3 3z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="mt-3 uppercase sm:font-bold">Bước 1</span>
                <span class="mt-1 font-bold text-xl">Tìm kiếm</span>
                <p class="mt-1 text-md text-center">
                    Chọn sản phẩm vay online bạn muốn tìm kiếm như vay nhanh, vay tín chấp, vay mua xe, mua nhà...
                </p>
            </div>
            <div class="flex-1 shadow-md hover:shadow-xl flex flex-col items-center p-3 cursor-pointer">
                <div style="width: 77px;">
                    <svg style="width: 100%; height: 100%;" xmlns="http://www.w3.org/2000/svg" id="Layer_3"
                         enable-background="new 0 0 64 64"
                         height="512px" viewBox="0 0 64 64" width="512px" class="">
                        <g>
                            <g>
                                <path d="m26 14c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12zm0 22c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                                <path d="m61.879 56.464-10.879-10.878v-39.586c0-.552-.447-1-1-1h-3v-3c0-.552-.447-1-1-1h-34c-.266 0-.52.105-.707.293l-10 10c-.188.187-.293.442-.293.707v46c0 .552.447 1 1 1h3v3c0 .552.447 1 1 1h44c.553 0 1-.448 1-1v-5.587l5.465 5.465c.723.724 1.683 1.122 2.707 1.122 2.11 0 3.828-1.717 3.828-3.829 0-1.022-.398-1.983-1.121-2.707zm-12.879-49.464v36.586l-2-2v-34.586zm-38-2.586v6.586h-6.586zm-8 8.586h9c.553 0 1-.448 1-1v-9h32v36.586l-1.655-1.655c.399-.755.29-1.71-.345-2.345l-2.619-2.619c1.026-2.11 1.619-4.468 1.619-6.967 0-8.822-7.178-16-16-16s-16 7.178-16 16 7.178 16 16 16c2.499 0 4.857-.593 6.967-1.619l2.619 2.619c.39.39.902.585 1.414.585.321 0 .64-.086.931-.24l7.069 7.069v6.586h-42zm34 28.586-2.223-2.223c1.823-1.201 3.385-2.763 4.586-4.586l2.223 2.223zm-11-1.586c-7.72 0-14-6.28-14-14s6.28-14 14-14 14 6.28 14 14-6.28 14-14 14zm23 21h-42v-2h39c.553 0 1-.448 1-1v-5.586l2 2zm10.172 0c-.481 0-.952-.195-1.293-.536l-18.465-18.464 2.586-2.586 18.465 18.464c.345.346.535.805.535 1.293 0 1.009-.82 1.829-1.828 1.829z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                                <path d="m17 7h24v2h-24z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 51h34v2h-34z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 47h34v2h-34z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m7 43h26v2h-26z" data-original="#000000" class="active-path"
                                      data-old_color="#000000" fill="#4ABA48"></path>
                                <path d="m28.793 24.855c.743-.727 1.207-1.736 1.207-2.855 0-2.206-1.794-4-4-4s-4 1.794-4 4c0 1.119.464 2.128 1.207 2.855-1.331.9-2.207 2.422-2.207 4.145v3c0 .552.447 1 1 1h8c.553 0 1-.448 1-1v-3c0-1.723-.876-3.245-2.207-4.145zm-4.793-2.855c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2zm5 9h-6v-2c0-1.654 1.346-3 3-3s3 1.346 3 3z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#4ABA48"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="mt-3 uppercase sm:font-bold">Bước 1</span>
                <span class="mt-1 font-bold text-xl">Tìm kiếm</span>
                <p class="mt-1 text-md text-center">
                    Chọn sản phẩm vay online bạn muốn tìm kiếm như vay nhanh, vay tín chấp, vay mua xe, mua nhà...
                </p>
            </div>
        </div>
    </div>
</div>
<!-- guide -->

<!-- product -->
<div class="product">
    <div class="container">
        <div class="text-green-500 text-3xl text-center font-bold">
            Các sản phẩm online
        </div>
        <div class="mt-4 border-b-2">
            <div class="tabs flex">
                <div class="flex-shrink-0 bg-green-500 text-white text-base py-2 px-4 hover:bg-green-600 cursor-pointer">
                    Tab 1
                </div>
                <div class="flex-shrink-0 text-base py-2 px-4 hover:bg-green-600 hover:text-white cursor-pointer">
                    Tab 2
                </div>
            </div>
        </div>
        <div class="mt-6 grid grid-cols-3 gap-10">
            <div class="shadow-md p-3 relative">
                <div class="relative panel-flag">
                    <div class="panel-label">
                        <span class="panel-label-text">TOP #3 tốt nhất</span>
                        <br>
                        <span class="triangle-right"></span></div>
                </div>
                <div style="width: 137px;" class="mt-6">
                    <img src="assets/tamo.png" alt="">
                </div>
                <div class="absolute top-0 right-0 w-12">
                    <img src="assets/new.png" alt="">
                </div>
                <div class="font-semibold mt-3">
                    Tamo - Vay tiền nhanh chóng
                </div>
                <div class="text-red-400 text-sm mt-1">
                    0% lãi suất đến 30 ngày cho khoản vay đầu
                </div>
                <div class="flex mt-2">
                    <div class="flex-1 text-center">
                        <p class="font-bold">Khoản vay</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">15</p>
                        <p class="mt-2 font-semibold">triệu</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="font-bold">Lái suất</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">12 %</p>
                        <p class="mt-2 font-semibold">năm</p>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="list-disc pl-4">
                        <li>Độ tuổi 20 - 60</li>
                        <li>Thời gian vay tối đa 30 ngày</li>
                        <li>Chỉ cần CMND, giải ngân trong 5p</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-underline text-blue-700">Tìm hiểu thêm</a>
                </div>
                <div class="mt-2">
                    <a class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
                        Đăng ký vay ngay
                    </a>
                </div>
            </div>
            <div class="shadow-md p-3 relative">
                <div class="relative panel-flag">
                    <div class="panel-label">
                        <span class="panel-label-text">TOP #3 tốt nhất</span>
                        <br>
                        <span class="triangle-right"></span></div>
                </div>
                <div style="width: 137px;" class="mt-6">
                    <img src="assets/tamo.png" alt="">
                </div>
                <div class="absolute top-0 right-0 w-12">
                    <img src="assets/new.png" alt="">
                </div>
                <div class="font-semibold mt-3">
                    Tamo - Vay tiền nhanh chóng
                </div>
                <div class="text-red-400 text-sm mt-1">
                    0% lãi suất đến 30 ngày cho khoản vay đầu
                </div>
                <div class="flex mt-2">
                    <div class="flex-1 text-center">
                        <p class="font-bold">Khoản vay</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">15</p>
                        <p class="mt-2 font-semibold">triệu</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="font-bold">Lái suất</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">12 %</p>
                        <p class="mt-2 font-semibold">năm</p>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="list-disc pl-4">
                        <li>Độ tuổi 20 - 60</li>
                        <li>Thời gian vay tối đa 30 ngày</li>
                        <li>Chỉ cần CMND, giải ngân trong 5p</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-underline text-blue-700">Tìm hiểu thêm</a>
                </div>
                <div class="mt-2">
                    <a class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
                        Đăng ký vay ngay
                    </a>
                </div>
            </div>
            <div class="shadow-md p-3 relative">
                <div class="relative panel-flag">
                    <div class="panel-label">
                        <span class="panel-label-text">TOP #3 tốt nhất</span>
                        <br>
                        <span class="triangle-right"></span></div>
                </div>
                <div style="width: 137px;" class="mt-6">
                    <img src="assets/tamo.png" alt="">
                </div>
                <div class="absolute top-0 right-0 w-12">
                    <img src="assets/new.png" alt="">
                </div>
                <div class="font-semibold mt-3">
                    Tamo - Vay tiền nhanh chóng
                </div>
                <div class="text-red-400 text-sm mt-1">
                    0% lãi suất đến 30 ngày cho khoản vay đầu
                </div>
                <div class="flex mt-2">
                    <div class="flex-1 text-center">
                        <p class="font-bold">Khoản vay</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">15</p>
                        <p class="mt-2 font-semibold">triệu</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="font-bold">Lái suất</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">12 %</p>
                        <p class="mt-2 font-semibold">năm</p>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="list-disc pl-4">
                        <li>Độ tuổi 20 - 60</li>
                        <li>Thời gian vay tối đa 30 ngày</li>
                        <li>Chỉ cần CMND, giải ngân trong 5p</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-underline text-blue-700">Tìm hiểu thêm</a>
                </div>
                <div class="mt-2">
                    <a class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
                        Đăng ký vay ngay
                    </a>
                </div>
            </div>
            <div class="shadow-md p-3 relative">
                <div class="relative panel-flag">
                    <div class="panel-label">
                        <span class="panel-label-text">TOP #3 tốt nhất</span>
                        <br>
                        <span class="triangle-right"></span></div>
                </div>
                <div style="width: 137px;" class="mt-6">
                    <img src="assets/tamo.png" alt="">
                </div>
                <div class="absolute top-0 right-0 w-12">
                    <img src="assets/new.png" alt="">
                </div>
                <div class="font-semibold mt-3">
                    Tamo - Vay tiền nhanh chóng
                </div>
                <div class="text-red-400 text-sm mt-1">
                    0% lãi suất đến 30 ngày cho khoản vay đầu
                </div>
                <div class="flex mt-2">
                    <div class="flex-1 text-center">
                        <p class="font-bold">Khoản vay</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">15</p>
                        <p class="mt-2 font-semibold">triệu</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="font-bold">Lái suất</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">12 %</p>
                        <p class="mt-2 font-semibold">năm</p>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="list-disc pl-4">
                        <li>Độ tuổi 20 - 60</li>
                        <li>Thời gian vay tối đa 30 ngày</li>
                        <li>Chỉ cần CMND, giải ngân trong 5p</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-underline text-blue-700">Tìm hiểu thêm</a>
                </div>
                <div class="mt-2">
                    <a class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
                        Đăng ký vay ngay
                    </a>
                </div>
            </div>
            <div class="shadow-md p-3 relative">
                <div class="relative panel-flag">
                    <div class="panel-label">
                        <span class="panel-label-text">TOP #3 tốt nhất</span>
                        <br>
                        <span class="triangle-right"></span></div>
                </div>
                <div style="width: 137px;" class="mt-6">
                    <img src="assets/tamo.png" alt="">
                </div>
                <div class="absolute top-0 right-0 w-12">
                    <img src="assets/new.png" alt="">
                </div>
                <div class="font-semibold mt-3">
                    Tamo - Vay tiền nhanh chóng
                </div>
                <div class="text-red-400 text-sm mt-1">
                    0% lãi suất đến 30 ngày cho khoản vay đầu
                </div>
                <div class="flex mt-2">
                    <div class="flex-1 text-center">
                        <p class="font-bold">Khoản vay</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">15</p>
                        <p class="mt-2 font-semibold">triệu</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="font-bold">Lái suất</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">12 %</p>
                        <p class="mt-2 font-semibold">năm</p>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="list-disc pl-4">
                        <li>Độ tuổi 20 - 60</li>
                        <li>Thời gian vay tối đa 30 ngày</li>
                        <li>Chỉ cần CMND, giải ngân trong 5p</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-underline text-blue-700">Tìm hiểu thêm</a>
                </div>
                <div class="mt-2">
                    <a class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
                        Đăng ký vay ngay
                    </a>
                </div>
            </div>
            <div class="shadow-md p-3 relative">
                <div class="relative panel-flag">
                    <div class="panel-label">
                        <span class="panel-label-text">TOP #3 tốt nhất</span>
                        <br>
                        <span class="triangle-right"></span></div>
                </div>
                <div style="width: 137px;" class="mt-6">
                    <img src="assets/tamo.png" alt="">
                </div>
                <div class="absolute top-0 right-0 w-12">
                    <img src="assets/new.png" alt="">
                </div>
                <div class="font-semibold mt-3">
                    Tamo - Vay tiền nhanh chóng
                </div>
                <div class="text-red-400 text-sm mt-1">
                    0% lãi suất đến 30 ngày cho khoản vay đầu
                </div>
                <div class="flex mt-2">
                    <div class="flex-1 text-center">
                        <p class="font-bold">Khoản vay</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">15</p>
                        <p class="mt-2 font-semibold">triệu</p>
                    </div>
                    <div class="flex-1 text-center">
                        <p class="font-bold">Lái suất</p>
                        <p class="text-5xl mt-2 font-bold text-blue-800">12 %</p>
                        <p class="mt-2 font-semibold">năm</p>
                    </div>
                </div>
                <div class="mt-2">
                    <ul class="list-disc pl-4">
                        <li>Độ tuổi 20 - 60</li>
                        <li>Thời gian vay tối đa 30 ngày</li>
                        <li>Chỉ cần CMND, giải ngân trong 5p</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-underline text-blue-700">Tìm hiểu thêm</a>
                </div>
                <div class="mt-2">
                    <a class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
                        Đăng ký vay ngay
                    </a>
                </div>
            </div>
        </div>
        <div class="my-6 text-center">
            <button class="bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-md shadow-md hover:bg-green-600"
                    type="button">
                Xem thêm
            </button>
        </div>
    </div>
</div>
<!-- product -->

<!-- comment -->
<div class="light-blue pb-16">
    <div class="container pt-16">
        <div class="text-green-500 text-3xl text-center font-bold">
            Tại sao chọn và sử dụng vaytien
        </div>
        <div class="flex mt-16 gap-5">
            <div class="flex-1 flex flex-col items-center">
                <div style="width: 70px" class="rounded-full border border-green-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" x="0px" y="0px" viewBox="0 0 469.333 469.333"
                         style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve" width="512px"
                         height="512px" class="svg-icon"><g><g> <g> <g> <path
                                            d="M451.125,222.708L250.292,21.875C236.396,7.979,217.167,0,197.5,0H42.667C19.146,0,0,19.135,0,42.667V197.49     c0,19.938,7.771,38.688,21.875,52.802l200.833,200.833c11.75,11.74,27.375,18.208,43.958,18.208s32.208-6.469,43.958-18.208     l140.5-140.5c11.75-11.729,18.208-27.344,18.208-43.958S462.875,234.437,451.125,222.708z M436.042,295.542l-140.5,140.5     c-15.458,15.417-42.292,15.417-57.75,0L36.958,235.208c-10.083-10.083-15.625-23.479-15.625-37.719V42.667     c0-11.76,9.563-21.333,21.333-21.333H197.5c14.042,0,27.792,5.698,37.708,15.625l200.833,200.833     C443.75,245.5,448,255.75,448,266.667C448,277.583,443.75,287.833,436.042,295.542z"
                                            data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M251.271,266.354c2.083,2.083,4.812,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125     c4.167-4.167,4.167-10.917,0-15.083l-15.087-15.087l15.087-15.09l22.625,22.635c4.167,4.167,10.917,4.167,15.083,0     c4.167-4.167,4.167-10.917,0-15.083l-30.167-30.177c-2-2-4.708-3.125-7.542-3.125s-5.542,1.125-7.542,3.125l-60.333,60.344     c-4.167,4.167-4.167,10.917,0,15.083l30.167,30.167c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125     c4.167-4.167,4.167-10.917,0-15.083l-22.625-22.625l15.082-15.085L251.271,266.354z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M334.229,258.812c-4.167-4.167-10.917-4.167-15.083,0l-60.333,60.333c-4.167,4.167-4.167,10.917,0,15.083l30.167,30.177     c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083l-22.625-22.635     l15.083-15.083l15.083,15.083c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083     l-15.083-15.083l15.083-15.083l22.625,22.625c4.167,4.167,10.917,4.167,15.083,0c4.167-4.167,4.167-10.917,0-15.083     L334.229,258.812z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M145.667,145.677c4.167-4.167,4.167-10.917,0-15.083l-15.083-15.091l15.083-15.086l22.625,22.625     c4.167,4.167,10.917,4.167,15.083,0c4.167-4.167,4.167-10.917,0-15.083l-30.167-30.167c-4-4-11.083-4-15.083,0l-30.151,30.156     c0,0-0.01,0.005-0.016,0.01c-0.005,0.005-0.005,0.01-0.005,0.01l-30.161,30.167c-4.167,4.167-4.167,10.917,0,15.083     c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l22.626-22.63l15.082,15.089     c2.083,2.083,4.813,3.125,7.542,3.125C140.854,148.802,143.583,147.76,145.667,145.677z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M207.771,207.792c7.896-0.417,15.25-3.698,20.875-9.323c12.479-12.479,12.479-32.771,0-45.25l-15.083-15.083     c-4.167-4.167-10.917-4.167-15.083,0l-29.896,29.885c-0.104,0.094-0.208,0.188-0.292,0.281c-0.104,0.094-0.188,0.188-0.271,0.292     l-29.896,29.875c-4.167,4.167-4.167,10.917,0,15.083c4.167,4.167,10.917,4.167,15.083,0l22.625-22.625l7.563,7.531     c4.146,4.167,4.146,10.938,0,15.094l-15.104,15.094c-4.167,4.156-4.167,10.917,0,15.083c2.083,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.458-1.042,7.542-3.125l15.104-15.094C204.25,222.854,207.354,215.385,207.771,207.792z M206.021,160.76l7.542,7.542     c4.167,4.156,4.167,10.927,0,15.083c-2.021,2.01-4.688,3.125-7.542,3.125H206c-2.833,0-5.5-1.104-7.521-3.135l-7.542-7.531     L206.021,160.76z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#4ABA48"></path> </g> </g> </g></g> </svg>
                </div>
                <div class="uppercase font-bold text-lg mt-2">Hoàn toàn miễn phí</div>
                <p class="text-center">
                    Nền tảng so sánh miễn phí, dễ sử dụng, và minh bạch
                </p>
            </div>
            <div class="flex-1 flex flex-col items-center">
                <div style="width: 70px" class="rounded-full border border-green-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" x="0px" y="0px" viewBox="0 0 469.333 469.333"
                         style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve" width="512px"
                         height="512px" class="svg-icon"><g><g> <g> <g> <path
                                            d="M451.125,222.708L250.292,21.875C236.396,7.979,217.167,0,197.5,0H42.667C19.146,0,0,19.135,0,42.667V197.49     c0,19.938,7.771,38.688,21.875,52.802l200.833,200.833c11.75,11.74,27.375,18.208,43.958,18.208s32.208-6.469,43.958-18.208     l140.5-140.5c11.75-11.729,18.208-27.344,18.208-43.958S462.875,234.437,451.125,222.708z M436.042,295.542l-140.5,140.5     c-15.458,15.417-42.292,15.417-57.75,0L36.958,235.208c-10.083-10.083-15.625-23.479-15.625-37.719V42.667     c0-11.76,9.563-21.333,21.333-21.333H197.5c14.042,0,27.792,5.698,37.708,15.625l200.833,200.833     C443.75,245.5,448,255.75,448,266.667C448,277.583,443.75,287.833,436.042,295.542z"
                                            data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M251.271,266.354c2.083,2.083,4.812,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125     c4.167-4.167,4.167-10.917,0-15.083l-15.087-15.087l15.087-15.09l22.625,22.635c4.167,4.167,10.917,4.167,15.083,0     c4.167-4.167,4.167-10.917,0-15.083l-30.167-30.177c-2-2-4.708-3.125-7.542-3.125s-5.542,1.125-7.542,3.125l-60.333,60.344     c-4.167,4.167-4.167,10.917,0,15.083l30.167,30.167c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125     c4.167-4.167,4.167-10.917,0-15.083l-22.625-22.625l15.082-15.085L251.271,266.354z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M334.229,258.812c-4.167-4.167-10.917-4.167-15.083,0l-60.333,60.333c-4.167,4.167-4.167,10.917,0,15.083l30.167,30.177     c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083l-22.625-22.635     l15.083-15.083l15.083,15.083c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083     l-15.083-15.083l15.083-15.083l22.625,22.625c4.167,4.167,10.917,4.167,15.083,0c4.167-4.167,4.167-10.917,0-15.083     L334.229,258.812z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M145.667,145.677c4.167-4.167,4.167-10.917,0-15.083l-15.083-15.091l15.083-15.086l22.625,22.625     c4.167,4.167,10.917,4.167,15.083,0c4.167-4.167,4.167-10.917,0-15.083l-30.167-30.167c-4-4-11.083-4-15.083,0l-30.151,30.156     c0,0-0.01,0.005-0.016,0.01c-0.005,0.005-0.005,0.01-0.005,0.01l-30.161,30.167c-4.167,4.167-4.167,10.917,0,15.083     c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l22.626-22.63l15.082,15.089     c2.083,2.083,4.813,3.125,7.542,3.125C140.854,148.802,143.583,147.76,145.667,145.677z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M207.771,207.792c7.896-0.417,15.25-3.698,20.875-9.323c12.479-12.479,12.479-32.771,0-45.25l-15.083-15.083     c-4.167-4.167-10.917-4.167-15.083,0l-29.896,29.885c-0.104,0.094-0.208,0.188-0.292,0.281c-0.104,0.094-0.188,0.188-0.271,0.292     l-29.896,29.875c-4.167,4.167-4.167,10.917,0,15.083c4.167,4.167,10.917,4.167,15.083,0l22.625-22.625l7.563,7.531     c4.146,4.167,4.146,10.938,0,15.094l-15.104,15.094c-4.167,4.156-4.167,10.917,0,15.083c2.083,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.458-1.042,7.542-3.125l15.104-15.094C204.25,222.854,207.354,215.385,207.771,207.792z M206.021,160.76l7.542,7.542     c4.167,4.156,4.167,10.927,0,15.083c-2.021,2.01-4.688,3.125-7.542,3.125H206c-2.833,0-5.5-1.104-7.521-3.135l-7.542-7.531     L206.021,160.76z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#4ABA48"></path> </g> </g> </g></g> </svg>
                </div>
                <div class="uppercase font-bold text-lg mt-2">Hoàn toàn miễn phí</div>
                <p class="text-center">
                    Nền tảng so sánh miễn phí, dễ sử dụng, và minh bạch
                </p>
            </div>
            <div class="flex-1 flex flex-col items-center">
                <div style="width: 70px" class="rounded-full border border-green-500 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" x="0px" y="0px" viewBox="0 0 469.333 469.333"
                         style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve" width="512px"
                         height="512px" class="svg-icon"><g><g> <g> <g> <path
                                            d="M451.125,222.708L250.292,21.875C236.396,7.979,217.167,0,197.5,0H42.667C19.146,0,0,19.135,0,42.667V197.49     c0,19.938,7.771,38.688,21.875,52.802l200.833,200.833c11.75,11.74,27.375,18.208,43.958,18.208s32.208-6.469,43.958-18.208     l140.5-140.5c11.75-11.729,18.208-27.344,18.208-43.958S462.875,234.437,451.125,222.708z M436.042,295.542l-140.5,140.5     c-15.458,15.417-42.292,15.417-57.75,0L36.958,235.208c-10.083-10.083-15.625-23.479-15.625-37.719V42.667     c0-11.76,9.563-21.333,21.333-21.333H197.5c14.042,0,27.792,5.698,37.708,15.625l200.833,200.833     C443.75,245.5,448,255.75,448,266.667C448,277.583,443.75,287.833,436.042,295.542z"
                                            data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M251.271,266.354c2.083,2.083,4.812,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125     c4.167-4.167,4.167-10.917,0-15.083l-15.087-15.087l15.087-15.09l22.625,22.635c4.167,4.167,10.917,4.167,15.083,0     c4.167-4.167,4.167-10.917,0-15.083l-30.167-30.177c-2-2-4.708-3.125-7.542-3.125s-5.542,1.125-7.542,3.125l-60.333,60.344     c-4.167,4.167-4.167,10.917,0,15.083l30.167,30.167c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125     c4.167-4.167,4.167-10.917,0-15.083l-22.625-22.625l15.082-15.085L251.271,266.354z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M334.229,258.812c-4.167-4.167-10.917-4.167-15.083,0l-60.333,60.333c-4.167,4.167-4.167,10.917,0,15.083l30.167,30.177     c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083l-22.625-22.635     l15.083-15.083l15.083,15.083c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083     l-15.083-15.083l15.083-15.083l22.625,22.625c4.167,4.167,10.917,4.167,15.083,0c4.167-4.167,4.167-10.917,0-15.083     L334.229,258.812z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M145.667,145.677c4.167-4.167,4.167-10.917,0-15.083l-15.083-15.091l15.083-15.086l22.625,22.625     c4.167,4.167,10.917,4.167,15.083,0c4.167-4.167,4.167-10.917,0-15.083l-30.167-30.167c-4-4-11.083-4-15.083,0l-30.151,30.156     c0,0-0.01,0.005-0.016,0.01c-0.005,0.005-0.005,0.01-0.005,0.01l-30.161,30.167c-4.167,4.167-4.167,10.917,0,15.083     c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125l22.626-22.63l15.082,15.089     c2.083,2.083,4.813,3.125,7.542,3.125C140.854,148.802,143.583,147.76,145.667,145.677z"
                                              data-original="#000000" class="active-path" data-old_color="#000000" fill="#4ABA48"></path>
                                        <path d="M207.771,207.792c7.896-0.417,15.25-3.698,20.875-9.323c12.479-12.479,12.479-32.771,0-45.25l-15.083-15.083     c-4.167-4.167-10.917-4.167-15.083,0l-29.896,29.885c-0.104,0.094-0.208,0.188-0.292,0.281c-0.104,0.094-0.188,0.188-0.271,0.292     l-29.896,29.875c-4.167,4.167-4.167,10.917,0,15.083c4.167,4.167,10.917,4.167,15.083,0l22.625-22.625l7.563,7.531     c4.146,4.167,4.146,10.938,0,15.094l-15.104,15.094c-4.167,4.156-4.167,10.917,0,15.083c2.083,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.458-1.042,7.542-3.125l15.104-15.094C204.25,222.854,207.354,215.385,207.771,207.792z M206.021,160.76l7.542,7.542     c4.167,4.156,4.167,10.927,0,15.083c-2.021,2.01-4.688,3.125-7.542,3.125H206c-2.833,0-5.5-1.104-7.521-3.135l-7.542-7.531     L206.021,160.76z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#4ABA48"></path> </g> </g> </g></g> </svg>
                </div>
                <div class="uppercase font-bold text-lg mt-2">Hoàn toàn miễn phí</div>
                <p class="text-center">
                    Nền tảng so sánh miễn phí, dễ sử dụng, và minh bạch
                </p>
            </div>
        </div>
    </div>
</div>
<!-- comment -->

<!-- knowledge -->
<div class="mb-10">
    <div class="container pt-16 overflow-hidden">
        <div class="text-green-500 text-3xl text-center font-bold">
            Kiến thức tài chính
        </div>
        <div class="text-center text-lg mt-2">
            So sánh sản phẩm vay, thẻ tín dụng từ nhiều ngân hàng và tổ chức tài chính khác nhau. Thông tin cung cấp rõ
            ràng và trực quan để bạn dễ dàng so sánh và chọn lựa đúng sản phẩm mình cần.
        </div>
        <div class="knowledge-slide mt-8">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/post.jpg" alt="">
                    <h5 class="mt-2 font-bold text-md">
                        <a href="#">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</a>
                    </h5>
                </div>
                <div class="swiper-slide">
                    <img src="assets/post.jpg" alt="">
                    <h5 class="mt-2 font-bold text-md">
                        <a href="#">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</a>
                    </h5>
                </div>
                <div class="swiper-slide">
                    <img src="assets/post.jpg" alt="">
                    <h5 class="mt-2 font-bold text-md">
                        <a href="#">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</a>
                    </h5>
                </div>
                <div class="swiper-slide">
                    <img src="assets/post.jpg" alt="">
                    <h5 class="mt-2 font-bold text-md">
                        <a href="#">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</a>
                    </h5>
                </div>
                <div class="swiper-slide">
                    <img src="assets/post.jpg" alt="">
                    <h5 class="mt-2 font-bold text-md">
                        <a href="#">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <!-- If we need pagination -->
            <div class="swiper-pagination flex gap-4"></div>
        </div>
    </div>
</div>
<!-- knowledge -->

<!-- posts -->
<div class="mb-10">
    <div class="container pt-16 overflow-hidden">
        <div class="text-green-500 text-3xl text-center font-bold">
            Tin tức mới nhất
        </div>
        <div class="text-center text-lg mt-2">
            Cập nhật thông tin ưu đãi và tin tức mới nhất liên quan đến lĩnh vực tài chính cá nhân, thẻ tín dụng và sản phẩm vay online.
        </div>
        <div class="mt-5 flex gap-10">
            <div class="flex-1">
                <img src="assets/post.jpg" alt="">
                <p class="font-bold">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</p>
                <p class="text-sm text-gray-600">23/12/2020</p>
                <p>
                    Vay tiền online là một trong những giải pháp tài chính hiện đại và phổ...
                </p>
            </div>
            <div class="flex-1 flex flex-col gap-7">
                <div class="flex gap-4">
                    <div style="width: 270px;">
                        <img src="assets/post.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-bold">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</p>
                        <p class="text-sm text-gray-600">23/12/2020</p>
                        <p>
                            Vay tiền online là một trong những giải pháp tài chính hiện đại và phổ...
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div style="width: 270px;">
                        <img src="assets/post.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-bold">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</p>
                        <p class="text-sm text-gray-600">23/12/2020</p>
                        <p>
                            Vay tiền online là một trong những giải pháp tài chính hiện đại và phổ...
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div style="width: 270px;">
                        <img src="assets/post.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-bold">WebVay – Vay tiền nhanh tới 10 triệu trong 70 ngày chỉ với CMND</p>
                        <p class="text-sm text-gray-600">23/12/2020</p>
                        <p>
                            Vay tiền online là một trong những giải pháp tài chính hiện đại và phổ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-6 text-center">
            <button class="bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-md shadow-md hover:bg-green-600"
                    type="button">
                Xem thêm
            </button>
        </div>
    </div>
</div>
<!-- posts -->

<!-- comment -->
<div class="light-blue pb-10">
    <div class="container pt-16 overflow-hidden">
        <div class="text-green-500 text-3xl text-center font-bold">
            Khách hàng nói gì về vay tiền online
        </div>
        <div class="comment-slide mt-8">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex gap-4">
                    <div class="flex-1 flex">
                        <img src="assets/avatar.jpg" style="width: 150px; height: 150px;" class="rounded-full" alt="">
                        <div class="pl-3">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p>
                                Nhờ có vaytien mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh.
                            </p>
                            <p>
                                <b>Hoàng Anh</b> / Sản phẩm vay tín chasp
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 flex">
                        <img src="assets/avatar.jpg" style="width: 150px; height: 150px;" class="rounded-full" alt="">
                        <div class="pl-3">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p>
                                Nhờ có vaytien mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh.
                            </p>
                            <p>
                                <b>Hoàng Anh</b> / Sản phẩm vay tín chasp
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex gap-4">
                    <div class="flex-1 flex">
                        <img src="assets/avatar.jpg" style="width: 150px; height: 150px;" class="rounded-full" alt="">
                        <div class="pl-2">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p>
                                Nhờ có vaytien mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh.
                            </p>
                            <p>
                                <b>Hoàng Anh</b> / Sản phẩm vay tín chasp
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 flex">
                        <img src="assets/avatar.jpg" style="width: 150px; height: 150px;" class="rounded-full" alt="">
                        <div class="pl-2">
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p>
                                Nhờ có vaytien mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh.
                            </p>
                            <p>
                                <b>Hoàng Anh</b> / Sản phẩm vay tín chasp
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <!-- If we need pagination -->
            <div class="swiper-pagination-comment flex gap-4"></div>
        </div>
    </div>
</div>
<!-- comment -->

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
            <p class="font-bold text-lg">Vay tiền nhanh</p>
            <ul class="list-disc pl-4 mt-2">
                <li class="mb-1">Oncredit</li>
                <li class="mb-1">Moneycat</li>
                <li class="mb-1">Doctor Đồng</li>
                <li class="mb-1">Tamo</li>
                <li class="mb-1">Senmo</li>
            </ul>
        </div>
    </div>
</footer>
<!-- footer -->

<!-- cert -->
<div class="border-t border-white py-4 bg-gray-700 text-white">
    <div class="container text-center">
        Bản quyền thuộc về Lit
    </div>
</div>
<!-- cert -->

<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-white opacity-95"></div>

    <div class="modal-container fixed w-full h-full z-50 overflow-y-auto ">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-black text-sm z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                 viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
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
                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
                    Action
                </button>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close
                </button>
            </div>

        </div>
    </div>
</div>
<!-- end modal -->

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
