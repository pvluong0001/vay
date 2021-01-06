<div class="py-16 {{$class}}">
    <div class="container">
        <div class="text-green-500 text-3xl text-center font-bold">{{ $title }}</div>
        <div class="text-center text-lg mt-5 @if($hiddenSubtitle) hidden md:block @endif">{{ $subtitle }}</div>
        {{ $slot }}
    </div>
</div>
