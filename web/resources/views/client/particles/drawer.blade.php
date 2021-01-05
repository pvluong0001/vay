<div class="z-10 fixed inset-0 transition-opacity hidden draw-layer">
    <div tabindex="0" class="absolute inset-0 bg-black opacity-50"></div>
</div>

<aside
    class="drawer transform top-0 left-0 w-64 bg-white fixed h-full overflow-auto ease-in-out transition-all duration-300 z-30">
    <a href="/" class="flex items-center p-4 hover:bg-green-500 hover:text-white" {{ menu('/') }}>
        <span>Trang chủ</span>
    </a>
    @foreach($cats as $cat)
    <a {{ menu(getPathFromUrl(route('category', ['category' => $cat->slug]))) }} href="{{ route('category', ['category' => $cat->slug]) }}" class="flex items-center p-4 hover:bg-green-500 hover:text-white ">
        <span>{{ $cat->name }}</span>
    </a>
    @endforeach
    <div class="cursor-pointer">
        <p class="hover:bg-green-500 hover:text-white p-4 dropdown">Kiến thức</p>
        <div class="submenu dropdown-content hidden px-3">
            @foreach($types as $type)
                <a {{ menu(getPathFromUrl(route('type', ['type' => $type->slug]))) }} class="hover:bg-green-500 hover:text-white p-4 block rounded-sm" href="{{ route('type', ['type' => $type->slug]) }}">{{ $type->name }}</a>
            @endforeach
        </div>
    </div>
    <a {{menu(getPathFromUrl(route('about')))}} href="{{ route('about') }}" class="flex items-center p-4 hover:bg-green-500 hover:text-white ">
        <span>Về chúng tôi</span>
    </a>
</aside>
