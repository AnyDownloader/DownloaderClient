<x-layout>
<div>
    <section>
        <div class="relative pb-12 pt-12 md:pt-12 bg-gray-900 border-b-4 border-green-600">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center md:mb-20">
                    <h1 class="text-4xl lg:text-5xl text-gray-50 font-bold">{{ __('Any Downloader') }}</h1>
                    <div id="downloader" class="text-gray-50">
                        <any-downloader
                            input-placeholder="{{ __('Put link here') }}"
                            v-bind:api-url="'/api/resource'"
                            btn-text="{{ __('Download') }}"
                        ></any-downloader>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-20 bg-gray-50 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="mb-16 max-w-xl mx-auto text-center">
                    <h2 class="text-5xl font-bold">How does it work?</h2>
                </div>
                <div class="flex flex-wrap -mx-4 -mb-8">
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="h-full p-8 bg-white rounded shadow">
                            <div class="mb-6 flex items-start">
                <span class="mr-4 inline-block p-3 rounded-full bg-blue-400">
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                  </svg>
                </span>
                                <h3 class="text-xl font-bold">Fusce eget nunc et libero accumsan rutrum quis nec lectus?</h3>
                            </div>
                            <p class="text-gray-400 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod orci sed tristique placerat. Fusce in ligula urna. Fusce eget nunc et libero accumsan rutrum quis nec lectus. Quisque luctus sem nibh, quis ornare neque consectetur varius.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="h-full p-8 bg-white rounded shadow">
                            <div class="mb-6 flex items-start">
                <span class="mr-4 inline-block p-3 rounded-full bg-pink-400">
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                  </svg>
                </span>
                                <h3 class="text-xl font-bold">Nunc maximus odio sit amet eros faucibus?</h3>
                            </div>
                            <p class="text-gray-400 leading-loose">Phasellus in molestie lorem. In egestas placerat justo, eget congue tellus egestas vitae. Mauris placerat blandit congue. Nullam sit amet nulla sed velit sagittis accumsan. Ut a lacus in tellus molestie semper.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="h-full p-8 bg-white rounded shadow">
                            <div class="mb-6 flex items-start">
                <span class="mr-4 inline-block p-3 rounded-full bg-yellow-400">
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                  </svg>
                </span>
                                <h3 class="text-xl font-bold">Nam feugiat ex eget sapien lobortis?</h3>
                            </div>
                            <p class="text-gray-400 leading-loose">Nam pretium dolor vel odio bibendum vehicula. Ut in dignissim eros. In ultrices laoreet porttitor. Sed gravida porttitor posuere. Nam vulputate metus vel massa luctus mollis. Sed malesuada nibh egestas ultricies volutpat. Nunc maximus odio sit amet eros faucibus, nec convallis arcu pellentesque.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="h-full p-8 bg-white rounded shadow">
                            <div class="mb-6 flex items-start">
                <span class="mr-4 inline-block p-3 rounded-full bg-yellow-400">
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                  </svg>
                </span>
                                <h3 class="text-xl font-bold">In hac habitasse platea dictumst?</h3>
                            </div>
                            <p class="text-gray-400 leading-loose">Nullam ante dui, porta eget sagittis sed, iaculis vitae lorem. Vestibulum vel neque id lectus fringilla sollicitudin. Nunc sed dapibus velit. Integer ut felis nisl.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="h-full p-8 bg-white rounded shadow">
                            <div class="mb-6 flex items-start">
                <span class="mr-4 inline-block p-3 rounded-full bg-blue-400">
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                  </svg>
                </span>
                                <h3 class="text-xl font-bold">Nullam congue lacinia nibh quis scelerisque?</h3>
                            </div>
                            <p class="text-gray-400 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod orci sed tristique placerat. Fusce in ligula urna. Fusce eget nunc et libero accumsan rutrum quis nec lectus.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="h-full p-8 bg-white rounded shadow">
                            <div class="mb-6 flex items-start">
                <span class="mr-4 inline-block p-3 rounded-full bg-yellow-400">
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                  </svg>
                </span>
                        <h3 class="text-xl font-bold">Nam feugiat ex eget sapien lobortis?</h3>
                            </div>
                            <p class="text-gray-400 leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod orci sed tristique placerat. Fusce in ligula urna. Fusce eget nunc et libero accumsan rutrum quis nec lectus. Quisque luctus sem nibh, quis ornare neque consectetur varius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skew skew-bottom mr-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
            </svg>
        </div>
        <div class="skew skew-bottom ml-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
            </svg>
        </div>
    </section>
</div>
</x-layout>
