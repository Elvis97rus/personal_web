<x-call-to-action>
    <x-slot:title>
        <h4 class="text-white text-base font-semibold mb-2">
        {{__('home.cta_subheading')}}
        </h4>
        <h2 class="text-white font-bold text-3xl sm:text-[38px] leading-tight mb-6 sm:mb-8 lg:mb-4">
        {{__('home.cta_heading')}}
        </h2>
        <x-button-link href="#skills" variant="dark" class="rounded-md mr-3">
        {{__('home.cta_left_btn')}}
        </x-button-link>
        <x-button-link href="#contacts" variant="red">
        {{__('home.cta_right_btn')}}
        </x-button-link>
    </x-slot>
</x-call-to-action>
