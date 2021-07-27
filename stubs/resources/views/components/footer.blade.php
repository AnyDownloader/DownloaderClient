<section>
    <div class="skew skew-top mr-for-radius">
        <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
            <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>
        </svg>
    </div>
    <div class="skew skew-top ml-for-radius">
        <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
            <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>
        </svg>
    </div>
    <div class="py-5 md:py-10 lg:py-20 bg-gray-50 radius-for-skewed">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/3 mb-16 lg:mb-0">
                    <p class="mb-4 max-w-sm text-gray-400 leading-loose">{{ config('app.name') }}</p>
                </div>
                <div class="w-full lg:w-2/3 lg:pl-16 flex flex-wrap justify-between">
                    <div class="w-full md:w-1/3 lg:w-auto mb-16 md:mb-0">
                        <h3 class="mb-6 text-2xl font-bold">{{ __('Navigation') }}</h3>
                        <ul>
                            <li class="mb-4">
                                <a class="text-gray-800 hover:text-gray-600" href="#">FAQ</a>
                            </li>
                            <li class="mb-4">
                                <a class="text-gray-800 hover:text-gray-600" href="#">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a class="text-gray-800 hover:text-gray-600" href="#">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                    <div class="w-full md:w-1/3 lg:w-auto mb-16 md:mb-0">
                        <h3 class="mb-6 text-2xl font-bold">{{ __('Languages') }}</h3>
                        <ul>
                            <li class="mb-4"><a class="text-gray-800 hover:text-gray-600" href="#">English</a></li>
                            <li class="mb-4"><a class="text-gray-800 hover:text-gray-600" href="#">Deutsh</a></li>
                            <li class="mb-4"><a class="text-gray-800 hover:text-gray-600" href="#">Espanol</a></li>
                            <li class="mb-4"><a class="text-gray-800 hover:text-gray-600" href="#">Русский</a></li>
                            <li class="mb-4"><a class="text-gray-800 hover:text-gray-600" href="#">Italiano</a></li>
                            <li class="mb-4"><a class="text-gray-800 hover:text-gray-600" href="#">Polskie</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="lg:text-center text-sm text-gray-400 border-t border-gray-100 pt-12 mt-16">&copy; {{ date('Y') }}. {{ __('All rights reserved.') }}</p>
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
