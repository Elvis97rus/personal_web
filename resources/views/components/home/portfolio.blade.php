<?php
/** @var $tabs \App\View\Components\Home\Portfolio */
/** @var $items \App\View\Components\Home\Portfolio */
?>
<!-- ====== Portfolio Section Start -->
<section
    x-data="
        {
          modal: {
            open:false,
            title: '',
            tags: '',
            image: '',
            description: '',
            link: ''
          },
          selectedTab: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
    class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                    <h2 id="portfolio" class="text-dark dark:text-gray-300 mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]">
                        {{__('home.projects_heading')}}
                    </h2>
                    <p class="text-body-color text-base ">
                        {{__('home.projects_body')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap justify-center">
            <div class="w-full px-4">
                <ul class="mb-12 flex flex-wrap justify-center space-x-1">
                    <li class="mb-1">
                        <button
                            @click="selectedTab = 'all' "
                            :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
                            class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                            {{__('home.projects_all')}}
                        </button>
                    </li>
                    @foreach($tabs as $tab)
                        <li class="mb-1">
                            <button
                                @click="selectedTab = '{{$tab}}' "
                                :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "
                                class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                            >
                                {{$tab}}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
            @foreach($items as $item)
                <x-portfolio-item
                                  :title="$item['title']"
                                  :categories="$item['category']"
                                  :image="$item['image']"
                                  :description="$item['description']"
                                  :link="$item['link']"
                ></x-portfolio-item>
            @endforeach
        </div>
    </div>
    <div
        x-show="modal.open"
        x-cloak
        x-transition
        class="fixed sm:top-0 top-20 z-20 left-0 flex items-center justify-center w-full sm:h-full min-h-0 sm:min-h-screen overflow-x-auto px-4 py-5 bg-dark/90"
    >
        <div
            @click.outside="modal.open = false"
            class="w-full max-w-[570px] rounded-[20px] bg-white dark:bg-dark-2 py-12 px-8 text-center md:py-[60px] md:px-[70px]"
        >
            <div class="overflow-hidden rounded-lg py-4">

                <div x-show="modal.image">
                    <div class="gallery flex flex-wrap ">
                        <template x-for="img in modal.image">
                            <template x-if="img.length">
                                <img :src=`/storage/${img}`
                                     alt="portfolio"
                                     class="w-full max-h-[360px] object-contain py-4 rounded-md"
                                />
                            </template>
                        </template>
                    </div>
                </div>
            </div>
            <span class="text-primary mb-2 block text-sm font-semibold" x-text="modal.tags">
            </span>
            <h3
                class="pb-[18px] text-xl font-semibold text-dark dark:text-white sm:text-2xl"
                x-text="modal.title"
            >
            </h3>
            <span
                class="mx-auto mb-6 inline-block h-1 w-[90px] rounded bg-primary"
            ></span>
            <p  x-html="modal.description"
                class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"
            >
            </p>
            <div class="flex flex-wrap -mx-3">
                <div class="w-1/2 px-3">
                    <button
                        @click="modal.open = false"
                        class="block w-full p-3 text-base font-medium text-center transition border rounded-md border-stroke text-dark dark:text-white hover:border-red-600 hover:bg-red-600 hover:text-white"
                    >
                        {{__('home.projects_cancel')}}
                    </button>
                </div>
                <div class="w-1/2 px-3">
                    <button
                        class="block w-full p-3 text-base font-medium text-center text-white transition border rounded-md border-primary bg-primary hover:bg-blue-dark"
                    >
                        {{__('home.projects_details')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->
