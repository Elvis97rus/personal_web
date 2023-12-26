<!-- ====== Hero Section Start -->
<div class="relative bg-gray-200 pt-[60px] lg:pt-[80px] pb-[110px] dark:bg-slate-800">
    <div class="container">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-5/12">
                <div class="hero-content">
                    <h1
                        class="text-dark dark:text-gray-200 mb-6 text-4xl font-bold leading-snug sm:text-[42px] lg:text-[40px] xl:text-[42px] "
                    >
                        {!! __('home.hero_heading') !!}
                        <span class="rounded-md text-amber-600"> {{ __('home.hero_heading_last') }}</span>.
                    </h1>
                    <p class=" mb-8 max-w-[520px] text-base">
                        {!! __('home.hero_body') !!}
                        <a class="text-primary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-primary" href="https://t.me/Kai_z" target="_blank">{{ __('home.hero_body_btn') }}</a>
                        {!! __('home.hero_body_last') !!}
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                           <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                               {{ __('home.hero_btn') }}
                           </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="text-body-color dark:text-gray-300 mb-4 flex items-center text-xs font-normal">
                            {{__('home.hero_find_me')}}
                            <span class="bg-body-color ml-2 inline-block h-[1px] w-8"></span>
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0 hover:rotate-2 hover:scale-105 transition-all delay-100 ease-in-out">
                        <img
                            src="/img/me5.jpg"
                            alt="hero"
                            class="max-w-full w-3/4 lg:ml-auto mx-auto rounded-md"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
