@props(['title','route'=> null])
<li>
    <a href="{{ $route }}" class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent md:p-0  md:hover:text-blue-700 {{ request()->is('/') ? 'active' : '' }}">
        {{ $title }}
    </a>
</li>
