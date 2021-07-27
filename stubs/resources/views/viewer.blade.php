<x-layout>
<div>
    <section>
        <div class="py-10 bg-gray-900 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="mb-8 md:mb-16 max-w-lg mx-auto text-center">
                    <h1 class="mb-3 text-4xl lg:text-5xl font-bold font-heading text-white">{{ __('Latest videos') }}</h1>
                    <div class="mt-6 inline-flex flex-wrap py-1 sm:px-1 sm:space-x-1 bg-gray-800 rounded text-sm">
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('First') }}</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('Prev') }}</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">5</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">6</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 bg-purple-600 text-white shadow-md rounded font-bold focus:outline-none transition duration-200">7</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">8</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">9</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('Next') }}</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('Last') }}</button>
                    </div>
                </div>
                <div class="flex flex-wrap mb-8 -mx-4">
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt=""></a></div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1055&amp;q=80" alt=""></a></div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4">
                        <div class="relative mx-auto h-64 w-full rounded-lg">
                            <img class="relative h-full w-full rounded-lg object-cover" src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="">
                            <div class="absolute inset-0 bg-gray-900 opacity-50 rounded-lg"></div>
                            <div class="absolute inset-0 flex items-center justify-center"><a class="inline-block py-2 px-4 border-2 border-gray-400 hover:border-white bg-transparent text-gray-50 hover:bg-white hover:text-gray-900 transition duration-200 rounded-l-xl rounded-t-xl font-bold leading-loose" href="#">View Project</a></div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1518098268026-4e89f1a2cd8e?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=968&amp;q=80" alt=""></a></div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt=""></a></div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1459213599465-03ab6a4d5931?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1055&amp;q=80" alt=""></a></div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1476610182048-b716b8518aae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1127&amp;q=80" alt=""></a></div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-8 px-4"><a href="#"><img class="mx-auto h-64 w-full rounded object-cover" src="https://images.unsplash.com/photo-1413752362258-7af2a667b590?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1055&amp;q=80" alt=""></a></div>
                </div>
                <div class="mb-8 md:mb-16 max-w-lg mx-auto text-center">
                    <div class="mt-6 inline-flex flex-wrap py-1 sm:px-1 sm:space-x-1 bg-gray-800 rounded text-sm">
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('First') }}</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('Prev') }}</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">5</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">6</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 bg-purple-600 text-white shadow-md rounded font-bold focus:outline-none transition duration-200">7</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">8</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">9</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('Next') }}</button>
                        <button class="w-full sm:w-auto mb-1 sm:mb-0 mx-1 sm:mx-0 py-2 px-4 hover:bg-purple-600 text-gray-500 hover:text-white rounded hover:shadow-md font-bold focus:outline-none transition duration-200">{{ __('Last') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="skew skew-bottom mr-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-900" viewbox="0 0 10 10" preserveaspectratio="none">
                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
            </svg>
        </div>
        <div class="skew skew-bottom ml-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-900" viewbox="0 0 10 10" preserveaspectratio="none">
                <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
            </svg>
        </div>
    </section>
</div>
</x-layout>
