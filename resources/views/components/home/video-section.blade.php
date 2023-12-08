<!-- Videos Section Start -->
<section id="videos" class="dark:bg-slate-800 pt-24 pb-16">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
                        Videos
                    </h2>
                    <p class="text-base text-body-color">
                        Here is some useful videos.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach($videos as $video)
                <x-video-section-item :video-id="$video['videoId']"
                                      :title="$video['title']"
                                      :description="$video['description']"
                ></x-video-section-item>
            @endforeach
        </div>
        <div class="flex justify-center">
            <x-button-link href="#" target="_blank" class="rounded-lg">
                Go to my Knowledge Base
            </x-button-link>
        </div>
    </div>
</section>
<!-- Videos Section End -->
