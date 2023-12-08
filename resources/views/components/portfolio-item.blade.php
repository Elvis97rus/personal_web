<div
    x-data="{categories: {{json_encode($categories)}} }"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'"
    class="w-full px-4 md:w-1/2 xl:w-1/3">
    <div class="relative mb-12">
        <a href="{{$link}}" target="_blank">
            <div class="overflow-hidden rounded-lg ease-in duration-100 hover:scale-105">
                <img src="{{$image}}"
                    alt="portfolio"
                    class="w-full h-[260px] object-cover"
                />
            </div>
        </a>
        <div class="relative h-[260px] dark:bg-slate-800 z-10 mx-7 -mt-4 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
            <span class="text-primary mb-2 block text-sm font-semibold">
                  {{ implode(', ', $categories) }}
            </span>
            <h3 class="text-dark dark:text-gray-300 mb-4 text-lg font-bold">
                {{$title}}
            </h3>
            <x-button-link :href="$link" variant="outline-primary">
                View details
            </x-button-link>
        </div>
    </div>
</div>
