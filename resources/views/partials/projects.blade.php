<section id="projects" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Featured Projects</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Showcasing impactful DevOps implementations that have transformed business operations and developer experiences.
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid lg:grid-cols-2 gap-8">
                @foreach($projects as $project)
                <div class="bg-white dark:bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <!-- Project Image -->
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">{{ $project['type'] }}</span>
                            <span class="px-3 py-1 text-sm rounded-full {{ $project['status'] === 'Live' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : ($project['status'] === 'Completed' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' : 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200') }}">
                                {{ $project['status'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">{{ $project['description'] }}</p>

                        <!-- Achievements -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Key Results:</h4>
                            <ul class="space-y-1">
                                @foreach($project['achievements'] as $achievement)
                                <li class="flex items-start gap-2 text-sm text-gray-600 dark:text-gray-400">
                                    <i data-lucide="star" class="w-3 h-3 text-yellow-500 mt-1 flex-shrink-0"></i>
                                    <span>{{ $achievement }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Technologies -->
                        <div class="mb-6">
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['technologies'] as $tech)
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-xs rounded-md">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3">
                            <button class="flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-300">
                                <i data-lucide="external-link" class="w-4 h-4"></i>
                                <span class="text-sm">Case Study</span>
                            </button>
                            <button class="flex items-center gap-2 px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:border-blue-600 dark:hover:border-blue-400 rounded-lg transition-colors duration-300">
                                <i data-lucide="github" class="w-4 h-4"></i>
                                <span class="text-sm">View Code</span>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-16">
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Interested in seeing more projects or discussing a potential collaboration?
                </p>
                <button onclick="scrollToSection('#contact')" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105">
                    Let's Discuss Your Project
                </button>
            </div>
        </div>
    </div>
</section>