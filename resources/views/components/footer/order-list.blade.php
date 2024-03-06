@props(['route' => null,'icon' => null,'title', 'target' => null])
<li class="p-1">
    <a href="{{ $route }}" @if($target) target="{{ $target }}" @endif class="hover:text-gray-600 transition-all">
        @if($icon)
            <i class="{{ $icon }}"></i>&ensp;
        @endif
        {{ $title }}
    </a>
</li>
