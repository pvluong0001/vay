@extends('client.layout')

@section('content')
    <div class="parallax-about py-44 bg-fixed bg-center bg-cover relative">
        <div class="absolute top-0 left-0 right-0 bottom-0 bg-gray-700 opacity-70 flex flex-col gap-10 z-10 items-center justify-center">
            <h2 class="text-5xl text-white font-bold">Về chúng tôi</h2>
            <p class="text-xl text-white">Tư vấn tài chính & đánh giá sản phẩm vay Online uy tín tại Việt Nam</p>
        </div>
    </div>

    <x-block class="text-lg">
        <div>
            vaytienonline123 chính thức đi vào hoạt động từ năm 2019 và là một website tư vấn tài chính cá nhân và đánh giá các sản phẩm vay online uy tín tại Việt Nam.
        </div>
        <div class="mt-10">
            Tại Vaytienonline.vn, chúng tôi so sánh các sản phẩm tài chính bao gồm: Vay tiền nhanh online, Cầm đồ online, vay tín chấp, , vay mua xe, vay mua nhà từ các tổ chức tín dụng và ngân hàng uy tín nhất trên thị trường tài chính hiện nay.
        </div>
    </x-block>

    <x-block class="my-job py-20 bg-fixed bg-center bg-cover relative text-lg"
        title="Chúng tôi làm gì?" subtitle="Kết nối khách hàng với hàng nghìn chuyên gia, nhân viên tư vấn của các ngân hàng và công ty tài chính trên toàn quốc."
    >
        <div class="grid grid-cols-2 gap-10 px-5 pt-10">
            <div>
                <div class="main-button uppercase text-center">
                    Đối với khách hàng
                </div>
                <p class="mt-5">
                    Trên Vay Tiền Online , Khách hàng có cơ hội tìm kiếm, so sánh và lựa chọn các sản phẩm của công ty tài chính, Ngân hàng tốt nhất dựa trên các tiêu chí như: Lãi suất, thời gian vay, số tiền vay, vị trí địa lý….
                </p>
            </div>
            <div>
                <div class="main-button uppercase text-center">
                    Đối với tổ chức tài chính
                </div>
                <p class="mt-5">
                    Tiếp cận với những Khách hàng có nhu cầu vay, mở thẻ tín dụng phù hợp nhất với yêu cầu của từng Ngân hàng/ Tổ chức tài chính. Từ đó tăng khả năng thành công trong cho vay, phát hành thẻ và bán các sản phẩm tài chính khác.
                </p>
                <p class="mt-5">
                    Bạn muốn đưa thương hiệu của mình vào bảng so sánh? Liên hệ ngay với Vay Tiền Online qua Email ... nhé!
                </p>
            </div>
        </div>
    </x-block>

    <x-block title="Đối tác" subtitle="Đối tác chiến lược của chúng tôi">
        <div class="grid grid-cols-5 gap-10 mt-5">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
            <img src="assets/hsbc.jpg" alt="">
        </div>
    </x-block>

    <x-block title="Liên hệ với chúng tôi">
        <div class="grid grid-cols-7 gap-5">
            <div class="col-start-1 col-end-4">
                <h4 class="text-3xl font-bold">Vay tiền online 123</h4>
                <div class="flex flex-col gap-4 mt-7">
                    <p><i class="fas fa-envelope"></i> test@test.com</p>
                    <p><i class="fas fa-globe"></i> www.test.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> HaNoi</p>
                </div>
            </div>
            <div class="col-start-4 col-end-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.863625489701!2d106.7003471686291!3d10.77645961942021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175293393f7645d%3A0x86f5fb6ccec7b12a!2sVay%20Ti%E1%BB%81n%20Online!5e0!3m2!1sen!2s!4v1586685709657!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </x-block>

    <x-block class="bg-gray-100" title="Khách hàng nói gì về chúng tôi">
        <div class="basic-slide overflow-hidden">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide flex flex-col gap-3 items-center justify-center bg-white p-8 shadow-lg">
                    <div class="w-32">
                        <img src="assets/avatar.jpg" class="rounded-full" alt="">
                    </div>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="italic">
                        Nhờ có Vay tiền Online mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh. Nếu có bạn bè cần hỗ trợ về tài chính, tôi sẽ nhờ các bạn tư vấn viên bên Vay tiền Online trợ giúp.
                    </div>
                    <div class="text-center">
                        <b>Hoàng Oanh</b> / Vay tiền nhanh Cashwagon
                    </div>
                </div>
                <div class="swiper-slide flex flex-col gap-3 items-center justify-center bg-white p-8 shadow-lg">
                    <div class="w-32">
                        <img src="assets/avatar.jpg" class="rounded-full" alt="">
                    </div>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="italic">
                        Nhờ có Vay tiền Online mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh. Nếu có bạn bè cần hỗ trợ về tài chính, tôi sẽ nhờ các bạn tư vấn viên bên Vay tiền Online trợ giúp.
                    </div>
                    <div class="text-center">
                        <b>Hoàng Oanh</b> / Vay tiền nhanh Cashwagon
                    </div>
                </div>
                <div class="swiper-slide flex flex-col gap-3 items-center justify-center bg-white p-8 shadow-lg">
                    <div class="w-32">
                        <img src="assets/avatar.jpg" class="rounded-full" alt="">
                    </div>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="italic">
                        Nhờ có Vay tiền Online mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh. Nếu có bạn bè cần hỗ trợ về tài chính, tôi sẽ nhờ các bạn tư vấn viên bên Vay tiền Online trợ giúp.
                    </div>
                    <div class="text-center">
                        <b>Hoàng Oanh</b> / Vay tiền nhanh Cashwagon
                    </div>
                </div>
                <div class="swiper-slide flex flex-col gap-3 items-center justify-center bg-white p-8 shadow-lg">
                    <div class="w-32">
                        <img src="assets/avatar.jpg" class="rounded-full" alt="">
                    </div>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="italic">
                        Nhờ có Vay tiền Online mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh. Nếu có bạn bè cần hỗ trợ về tài chính, tôi sẽ nhờ các bạn tư vấn viên bên Vay tiền Online trợ giúp.
                    </div>
                    <div class="text-center">
                        <b>Hoàng Oanh</b> / Vay tiền nhanh Cashwagon
                    </div>
                </div>
                <div class="swiper-slide flex flex-col gap-3 items-center justify-center bg-white p-8 shadow-lg">
                    <div class="w-32">
                        <img src="assets/avatar.jpg" class="rounded-full" alt="">
                    </div>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="italic">
                        Nhờ có Vay tiền Online mà tôi đã tìm được khoản vay online phù hợp với nhu cầu, lãi suất thấp mà không phải mất quá nhiều thời gian tìm kiếm và so sánh. Nếu có bạn bè cần hỗ trợ về tài chính, tôi sẽ nhờ các bạn tư vấn viên bên Vay tiền Online trợ giúp.
                    </div>
                    <div class="text-center">
                        <b>Hoàng Oanh</b> / Vay tiền nhanh Cashwagon
                    </div>
                </div>
            </div>
        </div>
    </x-block>
@endsection

@push('after_scripts')
    <script>
        loadSlide('.basic-slide', {
            slidesPerView: 3,
            spaceBetween: 25
        })
    </script>
@endpush
