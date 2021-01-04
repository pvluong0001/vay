<div class="z-10 fixed inset-0 transition-opacity" style=""><div tabindex="0" class="absolute inset-0 bg-black opacity-50"></div></div>

<aside
    class="transform z-20 top-0 left-0 w-64 bg-white fixed h-full overflow-auto ease-in-out transition-all duration-300 translate-x-0">
    <a href="/" class="flex items-center p-4 hover:bg-green-500 hover:text-white">
        <span>Home</span>
    </a>
    @foreach($cats as $cat)
    <a href="{{ route('category', ['category' => $cat->slug]) }}" class="flex items-center p-4 hover:bg-green-500 hover:text-white ">
        <span>{{ $cat->name }}</span>
    </a>
    @endforeach
    <span class="flex items-center p-4 hover:bg-green-500 hover:text-white ">
        <span>Kiến thức</span>
    </span>
    <span class="flex items-center p-4 hover:bg-green-500 hover:text-white ">
        <span>Contact</span>
    </span>
</aside>
