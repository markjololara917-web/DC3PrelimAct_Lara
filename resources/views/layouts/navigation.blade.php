<div class="shrink-0 flex items-center">

    <a href="{{ url('/') }}">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
    </a>

    <span class="ml-2 font-bold text-gray-800">
        DC3Activity
    </span>

    <div class="ml-6 flex space-x-6">

        <x-nav-link :href="route('contact')"
            :active="request()->routeIs('contact')">
            Contact Us
        </x-nav-link>

        @auth
            <x-nav-link :href="route('showroom')"
                :active="request()->routeIs('showroom')">
                Showroom
            </x-nav-link>
        @endauth

    </div>
</div>