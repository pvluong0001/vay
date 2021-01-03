@extends('client.layout')

@section('content')
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
                Vay online trả góp hấp dẫn - Tư vấn vay miễn phí
            </div>
            <div class="text-justify text-lg mt-2">
                Mang các sản phẩm <span class="highlight">vay online an toàn</span> đến từ ngân hàng và công ty tài chính khác nhau tới khách hàng. Vaytienonline123 cung cấp rất nhiều gói <b>vay tiền cấp tốc</b> cực uy tín dưới nhiều hình thức vay đa dạng để khách hàng lựa chọn như: <b>Vay online bằng CMND, sổ hộ khẩu; vay online bằng sim viettel; vay online bằng lái xe...</b> Các thông tin về <b>khoản vay online</b> trên web là hoàn toàn chính xác, rõ ràng và trực quan để người vay tiền có thể so sánh và lựa chọn ra gói vay thích hợp với nhu cầu tài chính của mình. Nếu có bất kì thắc mắc nào về <b>vay tiền online</b>, các bạn có thể nhắn tin với tư vấn viên của chúng tôi để được tư vấn online hoàn toàn miễn phí 24/7.
            </div>
            <div class="services flex mt-10">
                <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                    <img src="assets/service.png" style="width: 60px;" alt="">
                    <span class="mt-2 text-xl font-bold">Vay tiền nhanh</span>
                </div>
                <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                    <img src="assets/service.png" style="width: 60px;" alt="">
                    <span class="mt-2 text-xl font-bold">Cầm đồ</span>
                </div>
                <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                    <img src="assets/service.png" style="width: 60px;" alt="">
                    <span class="mt-2 text-xl font-bold">Vay tín chấp</span>
                </div>
                <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                    <img src="assets/service.png" style="width: 60px;" alt="">
                    <span class="mt-2 text-xl font-bold">Thẻ tín dụng</span>
                </div>
                <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                    <img src="assets/service.png" style="width: 60px;" alt="">
                    <span class="mt-2 text-xl font-bold">Vay mua xe</span>
                </div>
                <div class="flex-1 flex flex-col items-center p-4 hover:bg-white border-b-2 cursor-pointer hover:border-b-2 hover:border-blue-700 pb-6">
                    <img src="assets/service.png" style="width: 60px;" alt="">
                    <span class="mt-2 text-xl font-bold">Vay mua nhà</span>
                </div>
            </div>
        </div>
    </div>
    <!-- service -->

    <!-- guide -->
    <div class="guide mb-20">
        <div class="container">
            <div class="text-green-500 text-3xl text-center font-bold">
                Sử dụng hiệu quả <span class="highlight">Vay Tiền Online 123</span> để nhận được tiền vay nhanh nhất
            </div>
            <div class="text-center text-lg mt-2">
                Chỉ với 3 thao tác đơn giản trên điện thoại hoặc máy tính, bạn đã có thể tìm và lựa chọn <span class="highlight">khoản vay online</span> mình cần với <b>Vaytienonline123.com</b>. Sau khi đã có sản phẩm vay phù hợp, bạn đăng kí thông tin của mình với gói vay đó để hoàn tất thủ tục <b>vay online không cần gặp mặt</b> và chờ tiền được gửi về tài khoản thôi. Hãy sử dụng khoản <b>vay online</b> hợp lý nhé!
            </div>
            <div class="steps flex gap-4 mt-10">
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
                    <span class="mt-1 font-bold text-xl">Tìm kiếm khoản vay</span>
                    <p class="mt-1 text-md text-center">
                        Xem xét hết tất cả các sản phẩm <b>vay online như vay online chỉ cần CMND, vay tín chấp</b> hay <b>vay mua nhà, vay mua xe</b>, cầm đồ...Đâu là gói vay mà bạn cần hiện tại.
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
                    <span class="mt-3 uppercase sm:font-bold">Bước 2</span>
                    <span class="mt-1 font-bold text-xl">So sánh lựa chọn gói vay</span>
                    <p class="mt-1 text-md text-center">
                        So sánh các sản phẩm vay online từ ngân hàng, công ty tài chính được gợi ý trên <b>Vay Tiền Online 123</b>. Chọn ra gói vay online phù hợp nhất với bạn dựa trên lãi suất vay, điều kiện vay, hạn mức vay....
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
                    <span class="mt-3 uppercase sm:font-bold">Bước 3</span>
                    <span class="mt-1 font-bold text-xl">Đăng ký khoản vay</span>
                    <p class="mt-1 text-md text-center">
                        Sau khi lựa chọn được gói <b>vay online</b> tốt nhất, bạn chỉ cần bấm vào nút ĐĂNG KÍ VAY và điền các thông tin theo yêu cầu. Đây cũng chính là hồ sơ vay và sau khi điền đủ thông tin bạn sẽ nhận được thông báo Đăng kí vay thành công. Lúc này chỉ cần đợi tiền về tài khoản là đã <b>vay online</b> thành công rồi đấy!
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
                Tổng hợp sản phẩm vay online HOT được nhiều người vay nhất hiện nay
            </div>
            <div class="mt-4 border-b-2">
                <div class="tabs flex">
                    @foreach($categories as $category)
                    <div class="tab" data-href="{{ $category->slug }}">
                        {{ $category->name }}
                    </div>
                    @endforeach
                </div>
            </div>
            @foreach($categories as $category)
            <div data-tab="{{ $category->slug }}" class="tab-content">
                <div class="mt-6 grid grid-cols-3 gap-10">
                    @foreach($category->packages as $index => $package)
                        <x-package-item :package="$package" :index="$index"/>
                    @endforeach
                </div>
                <div class="my-6 text-center">
                    <a href="{{ route('category', ['category' => $category->slug]) }}" class="bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-md shadow-md hover:bg-green-600"
                            type="button">
                        Xem thêm gói vay khác
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- product -->

    <!-- comment -->
    <div class="light-blue pb-16">
        <div class="container pt-16">
            <div class="text-green-500 text-3xl text-center font-bold">
                Với nền tảng Vay tiền online 123 bạn được trải nghiệm những gì?
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
                        Cung cấp thông tin về các gói <b>vay online</b>, so sánh các gói vay, tư vấn đăng kí vay hoàn toàn không mất phí. Giao diện rõ ràng, dễ sử dụng
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
                    <div class="uppercase font-bold text-lg mt-2">Cập nhật liên tục</div>
                    <p class="text-center">
                        Các sản phẩm <b>vay online</b> được cập nhật liên tục mỗi giờ bao gồm cả các khuyến mãi dành cho người lần đầu vay, hay lãi suất trả góp 0%....
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
                    <div class="uppercase font-bold text-lg mt-2">Chuyên nghiệp tuyệt đối</div>
                    <p class="text-center">
                        Đội ngũ tư vấn viên nhiệt tình, nhiều kinh nghiệm và có trách nhiệm, luôn luôn túc trực 24/7 để giải đáp các thắc mắc trong quá trình tìm thông tin về gói vay hay đăng kí vay online của khách hàng. Sự chuyên nghiệp của <b>Vay tiền online 123</b> chưa bao giờ làm khách hàng thất vọng
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
                Vay online an toàn với những kiến thức về vay vốn mới nhất
            </div>
            <div class="text-center text-lg mt-2">
                Cập nhật những kiến thức hữu ích về tài chính cá nhân và các sản phẩm vay online cũng như thẻ tín dụng
            </div>
            <div class="knowledge-slide mt-8">
                <div class="swiper-wrapper">
                    @foreach($posts as $post)
                    <div class="swiper-slide">
                        <a href="{{ route('post.detail', ['slug' => $post->slug, 'post' => $post->id]) }}"><img src="{{ $post->image }}" alt=""></a>
                        <h5 class="mt-2 font-bold text-md">
                            <a href="{{ route('post.detail', ['slug' => $post->slug, 'post' => $post->id]) }}">{{ $post->title }}</a>
                        </h5>
                    </div>
                    @endforeach
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
                Tin tức tài chính mới nhất
            </div>
            <div class="text-center text-lg mt-2">
                <b>Vay tiền online 123</b> luôn cập nhật những tin tức mới nhất về tài chính cá nhân, thẻ tín dụng cá nhân và các sản phẩm <b>vay online</b>; để khách hàng có thể tìm hiểu thêm nhiều thông tin về các gói vay, các loại thẻ tín dụng cũng như thông tin về các ngân hàng , công ty tài chính cung cấp các dịch vụ tài chính cá nhân, cho vay cá nhân
            </div>
            <div class="mt-5 flex gap-10">
                @if($posts->count())
                    @php
                    $firstPost = $posts->first();
                    @endphp
                    <x-post-item class="flex-1" :post="$firstPost"/>
                @endif
                <div class="flex-1 flex flex-col gap-7">
                    @foreach($posts as $post)
                    <div class="flex gap-4">
                        <div style="width: 270px;">
                            <img src="{{ $post->image }}" alt="">
                        </div>
                        <div>
                            <p class="font-bold">{{ $post->title }}</p>
                            <p class="text-sm text-gray-600">{{ $post->created_at }}</p>
                            <p>
                                {{ $post->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
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
@endsection
