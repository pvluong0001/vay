<div data-type="anchor" data-label="Quy trình vay tiêu dùng tín chấp">
    <x-block class="light-blue pb-0" title="Quy trình vay tiêu dùng tín chấp">
        <div class="flex flex-col gap-5">
            <p><i class="fas fa-arrow-circle-right"></i> Bước 1: Lựa chọn và đăng ký sản phẩm vay tiêu dùng tín chấp phù hợp tại website Vaytienonline.vn.</p>
            <p><i class="fas fa-arrow-circle-right"></i> Bước 2: Lựa chọn và đăng ký sản phẩm vay tiêu dùng tín chấp phù hợp tại website Vaytienonline.vn.</p>
            <p><i class="fas fa-arrow-circle-right"></i> Bước 3: Lựa chọn và đăng ký sản phẩm vay tiêu dùng tín chấp phù hợp tại website Vaytienonline.vn.</p>
            <p><i class="fas fa-arrow-circle-right"></i> Bước 4: Lựa chọn và đăng ký sản phẩm vay tiêu dùng tín chấp phù hợp tại website Vaytienonline.vn.</p>
            <p><i class="fas fa-arrow-circle-right"></i> Bước 5: Lựa chọn và đăng ký sản phẩm vay tiêu dùng tín chấp phù hợp tại website Vaytienonline.vn.</p>
            <p><i class="fas fa-arrow-circle-right"></i> Bước 6: Lựa chọn và đăng ký sản phẩm vay tiêu dùng tín chấp phù hợp tại website Vaytienonline.vn.</p>
        </div>
    </x-block>
</div>

<div data-type="anchor" data-label="Thủ tục vay tiêu dùng tín chấp">
    <x-block class="light-blue" title="Thủ tục vay tiêu dùng tín chấp">
        <div>
            Thủ tục vay tiêu dùng tín chấp
        </div>
        <div class="flex flex-col gap-5 mt-5">
            <p><i class="fas fa-check"></i>  Đơn đề nghị vay vốn (theo mẫu ngân hàng)</p>
            <p><i class="fas fa-check"></i>  Đơn đề nghị vay vốn (theo mẫu ngân hàng)</p>
            <p><i class="fas fa-check"></i>  Đơn đề nghị vay vốn (theo mẫu ngân hàng)</p>
            <p><i class="fas fa-check"></i>  Đơn đề nghị vay vốn (theo mẫu ngân hàng)</p>
            <p><i class="fas fa-check"></i>  Đơn đề nghị vay vốn (theo mẫu ngân hàng)</p>
            <p><i class="fas fa-check"></i>  Đơn đề nghị vay vốn (theo mẫu ngân hàng)</p>
        </div>
    </x-block>
</div>

<div data-type="anchor" data-label="Hướng dẫn vay tín chấp">
    <x-block title="Hướng dẫn vay tiền nhanh online">
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
    </x-block>
</div>

<div>
    <x-block title="Kiến thức vay tín chấp">
        <x-block-post :posts="$posts->take(3)" showMore="{{ route('type', ['type' => $type->slug]) }}"/>
    </x-block>
</div>
