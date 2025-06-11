<section id="services" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Services & Solutions</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Comprehensive DevOps services designed to accelerate your digital transformation and optimize your development lifecycle.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="relative bg-gray-50 dark:bg-gray-800 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 {{ $service['popular'] ? 'ring-2 ring-blue-500 dark:ring-blue-400' : '' }}">
                    <!-- Popular Badge -->
                    @if($service['popular'])
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                    </div>
                    @endif

                    <!-- Service Icon -->
                    <div class="text-blue-600 dark:text-blue-400 mb-6">
                        <i data-lucide="cloud" class="w-12 h-12"></i>
                    </div>

                    <!-- Service Title -->
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">{{ $service['title'] }}</h3>

                    <!-- Service Description -->
                    <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">{{ $service['description'] }}</p>

                    <!-- Features List -->
                    <ul class="space-y-2 mb-8">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-start gap-2 text-gray-600 dark:text-gray-400">
                            <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2.5 flex-shrink-0"></div>
                            <span class="text-sm">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <!-- Pricing -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">{{ $service['price'] }}</span>
                            <span class="text-gray-500 dark:text-gray-400 text-sm">per project</span>
                        </div>
                        <button onclick="scrollToSection('#contact')" class="w-full py-3 rounded-lg font-semibold transition-all duration-300 {{ $service['popular'] ? 'bg-blue-600 hover:bg-blue-700 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white' }}">
                            Get Started
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Custom Solutions CTA -->
            <div class="mt-16 text-center bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-950 dark:to-indigo-950 rounded-2xl p-12">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Need a Custom Solution?</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">
                    Every organization has unique challenges. Let's discuss how I can create a tailored DevOps solution that fits your specific needs and goals.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="scrollToSection('#contact')" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        Schedule Consultation
                    </button>
                    <button onclick="scrollToSection('#projects')" class="px-8 py-3 border-2 border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 hover:bg-blue-600 hover:text-white rounded-lg font-semibold transition-all duration-300">
                        View Portfolio
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>