@props(['route' => null,'icon' => null,'title'])
<li class="p-1">
    <a href="{{ $route }}" class="hover:text-gray-600 transition-all">
        @if($icon)
            <i class="{{ $icon }}"></i>&ensp;
        @endif
        {{ $title }}
    </a>
</li>
