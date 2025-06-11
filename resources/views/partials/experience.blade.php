<section id="experience" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Experience & Certifications</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    A proven track record of delivering scalable solutions and driving digital transformation across various industries.
                </p>
            </div>

            <!-- Experience Timeline -->
            <div class="space-y-12 mb-20">
                @foreach($experience as $index => $exp)
                <div class="relative">
                    <!-- Timeline Line -->
                    @if($index !== count($experience) - 1)
                    <div class="absolute left-6 top-16 bottom-0 w-0.5 bg-gray-200 dark:bg-gray-700"></div>
                    @endif
                    
                    <div class="flex gap-8">
                        <!-- Timeline Dot -->
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center relative z-10">
                            <div class="w-6 h-6 bg-white rounded-full"></div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 bg-gray-50 dark:bg-gray-800 rounded-xl p-8 hover:shadow-lg transition-all duration-300">
                            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-1">{{ $exp['position'] }}</h3>
                                    <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400 mb-2">
                                        <div class="flex items-center gap-1">
                                            <i data-lucide="external-link" class="w-4 h-4"></i>
                                            <span class="font-medium">{{ $exp['company'] }}</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                                            <span>{{ $exp['location'] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 text-blue-600 dark:text-blue-400 font-medium bg-blue-50 dark:bg-blue-950 px-3 py-1 rounded-full">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    <span>{{ $exp['period'] }}</span>
                                </div>
                            </div>

                            <p class="text-gray-600 dark:text-gray-400 mb-6">{{ $exp['description'] }}</p>

                            <div class="space-y-2 mb-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white">Key Achievements:</h4>
                                <ul class="space-y-1">
                                    @foreach($exp['achievements'] as $achievement)
                                    <li class="flex items-start gap-2 text-gray-600 dark:text-gray-400">
                                        <div class="w-1.5 h-1.5 bg-blue-600 rounded-full mt-2 flex-shrink-0"></div>
                                        <span>{{ $achievement }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                @foreach($exp['technologies'] as $tech)
                                <span class="px-3 py-1 bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm rounded-full border border-gray-200 dark:border-gray-600">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Certifications -->
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">Professional Certifications</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($certifications as $cert)
                    <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-950 dark:to-indigo-950 rounded-lg border border-blue-200 dark:border-blue-800 hover:shadow-lg transition-all duration-300">
                        <span class="text-gray-700 dark:text-gray-300 font-medium">{{ $cert }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>