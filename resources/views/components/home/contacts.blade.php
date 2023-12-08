<!-- ====== Contact Section Start -->
<section id="contacts" class="dark:bg-primary relative z-10 overflow-hidden bg-white py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap lg:justify-between">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <h2 class="text-dark dark:text-gray-100 mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        FOR BUSINESS INQUIRES
                    </h2>
                    <p class="text-body-color dark:text-gray-200 mb-9 text-base leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div class="dark:text-gray-400 bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center
                                    justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                            <svg
                                width="28"
                                height="19"
                                viewBox="0 0 28 19"
                                class="fill-current">
                                <path
                                    d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="dark:text-gray-200 text-dark mb-1 text-xl font-bold">Email Address</h4>
                            <p class="dark:text-gray-300 text-body-color text-base">info@yourdomain.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="dark:bg-slate-900 relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                    <form action="/contact/submit" method="POST" x-data="{
                        formData: {
                            name: '',
                            email: '',
                            message: ''
                        },
                        errors: {},
                        disabled: false,
                        successMessage: '',
                        submitForm(event) {
                            this.disabled = true;
                            this.successMessage = '';
                            this.errors = {};
                            fetch(`/contact/submit`, {
                                method: 'POST',
                                headers: {
                                    'Content-type': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                                },
                                body: JSON.stringify(this.formData)
                            })
                            .then(response => {
                                if (response.status === 200) {
                                    return response.json();
                                }
                                throw response;
                            })
                            .then(result => {
                                this.formData = {
                                    name: '',
                                    email: '',
                                    message: ''
                                };
                                this.successMessage = 'Thanks for your contact request. I will get back to you shortly.';
                                this.disabled = false;
                            })
                            .catch(async (response) => {
                                const res = await response.json();
                                if (response.status === 422) {
                                    this.errors = res.errors
                                }
                                this.disabled = false;
                                console.log(res.errors);
                            })
                        }
                    }">
                        <template x-if="successMessage">
                            <div x-text="successMessage" class="py-4 px-6 bg-green-600 text-gray-100 mb-4"></div>
                        </template>
                        @csrf
                        <div class="mb-6">
                            <x-forms.input placeholder="Your name" name="name" x-model="formData.name"
                                           ::class="errors.name ? 'border-red-500 focus:border-red-500' : ''"></x-forms.input>
                            <template x-if="errors.name">
                                <div x-text="errors.name[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div class="mb-6">
                            <x-forms.input type="email" placeholder="Your email" name="email" x-model="formData.email"
                                           ::class="errors.email ? 'border-red-500 focus:border-red-500' : ''"></x-forms.input>
                            <template x-if="errors.email">
                                <div x-text="errors.email[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div class="mb-6">
                            <x-forms.textarea placeholder="Your message" name="message" rows=6 x-model="formData.message"
                                              ::class="errors.message ? 'border-red-500 focus:border-red-500' : ''"></x-forms.textarea>
                            <template x-if="errors.message">
                                <div x-text="errors.message[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div>
                            <x-button class="w-full" @click.prevent="submitForm" x-bind:disabled="disabled">
                                Send Message
                            </x-button>
                        </div>
                    </form>
                    <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                          <svg
                              width="100"
                              height="100"
                              viewBox="0 0 100 100"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                fill="#3056D3"
                            />
                          </svg>
                        </span>
                        <x-contact-dots-top></x-contact-dots-top>
                        <x-contact-dots-bottom></x-contact-dots-bottom>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact Section End -->
{{--<div class="mb-6">--}}
{{--    <input--}}
{{--        type="text"--}}
{{--        placeholder="Your Phone"--}}
{{--        class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"--}}
{{--    />--}}
{{--</div>--}}
{{--<div class="mb-6">--}}
{{--                          <textarea--}}
{{--                              rows="6"--}}
{{--                              placeholder="Your Message"--}}
{{--                              class="text-body-color border-[f0f0f0] focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"--}}
{{--                          ></textarea>--}}
{{--</div>--}}
{{--<div>--}}
{{--    <button type="submit"--}}
{{--            class="bg-primary border-primary w-full rounded border p-3 text-white transition hover:bg-opacity-90">--}}
{{--        Send Message--}}
{{--    </button>--}}
{{--</div>--}}
