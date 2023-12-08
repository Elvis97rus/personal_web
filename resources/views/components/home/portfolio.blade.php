<?php
/** @var $tabs \App\View\Components\Home\Portfolio */
/** @var $items \App\View\Components\Home\Portfolio */
?>
<!-- ====== Portfolio Section Start -->
<section
    x-data="
        {
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
                        My Recent Projects
                    </h2>
                    <p class="text-body-color text-base hidden">
                        Ты растешь интенсивнее когда строишь собственные проекты, внедряешь в них новые полученные знания и пробуешь новые похдходы взамен старых. Любознательность - двигатель прогресса.
                    </p>
                    <p class="text-body-color text-base ">
                        You grow more intensively when you build your own projects, implement new knowledge and try new approaches to replace old ones. Curiosity is the engine of progress.
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
                            All Projects
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
                <x-portfolio-item :title="$item['title']"
                                  :categories="$item['category']"
                                  :image="$item['image']"
                                  :link="$item['link']"
                ></x-portfolio-item>
            @endforeach
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->
