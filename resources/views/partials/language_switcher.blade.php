<div class="flex flex-col lg:w-1/2 md:w-3/4 xs:w-3/4 sm:w-2/3 w-full pt-0 sm:pt-0 cursor-pointer"
     @click.outside="open = false"
     x-data="{
        open: false,
        toggle() {
            this.open = !this.open
        }
     }"
>
    <ul class="z-50 absolute top-5 bg-primary right-20 flex-col gap-2" @click="toggle">
    @foreach($availableLocales as $locale)
        @if($locale->value === $currentLocale)
            <li class="border-gray-400 bg-gray-200 border-2 px-2 py-2 ">
                <img src="/img/svg/{{ $locale->value }}.svg" width="25" >
            </li>
        @else
            <li class="px-2 py-2" x-show="open" x-cloak>
                <a class="" href="language/{{ $locale->value }}">
                    <img src="/img/svg/{{ $locale->value }}.svg" width="27">
                </a>
            </li>
        @endif
    @endforeach
    </ul>
</div>
