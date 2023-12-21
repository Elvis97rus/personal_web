<div
    x-data="{
        modalDescription: {{json_encode($description)}},
        modalTitle: {{json_encode($title)}},
        image: {{json_encode($image) ?? 'https://place-hold.it/370x300'}},
        categories: {{json_encode($categories)}},
        fire() {
            modal.open = !modal.open;
            modal.tags = this.categories;
            modal.image = this.image;
            modal.title = this.modalTitle;
            modal.description = this.modalDescription;
        }
    }"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'"
    class="w-full px-4 md:w-1/2 xl:w-1/3">
    <div class="relative mb-12">
        <a href="{{$link}}" target="_blank" @click.prevent="fire">
            <div class="overflow-hidden rounded-lg ease-in duration-100 hover:scale-105">
                <img src="{{$image}}"
                    alt="portfolio"
                    class="w-full h-[260px] object-cover"
                />
            </div>
        </a>
        <div class="relative min-h-[260px] dark:bg-slate-800 mx-7 -mt-4 rounded-lg bg-white py-9 px-3 text-center shadow-lg">
            <span class="text-primary mb-2 block text-sm font-semibold">
                  {{ implode(', ', $categories) }}
            </span>
            <h3 class="text-dark dark:text-gray-300 mb-4 text-lg font-bold">
                {{$title}}
            </h3>
            <x-button-link :href="$link" @click.prevent="fire" variant="outline-primary">
                {{__('home.projects_details')}}
            </x-button-link>
        </div>
    </div>
</div>
