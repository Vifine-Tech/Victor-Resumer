<section id="contact" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Let's Work Together</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Ready to transform your development workflow? Let's discuss how I can help you achieve your DevOps goals and accelerate your digital transformation.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Get In Touch</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-8 leading-relaxed">
                            I'm always interested in discussing new opportunities, innovative projects, and ways to optimize your development processes. Whether you need a complete DevOps transformation or specific consulting, I'm here to help.
                        </p>
                    </div>

                    <!-- Contact Details -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-900 rounded-lg hover:shadow-md transition-all duration-300">
                            <div class="text-blue-600 dark:text-blue-400">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Email</div>
                                <a href="mailto:{{ $profile['email'] }}" class="text-gray-900 dark:text-white font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                                    {{ $profile['email'] }}
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-900 rounded-lg hover:shadow-md transition-all duration-300">
                            <div class="text-blue-600 dark:text-blue-400">
                                <i data-lucide="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Phone</div>
                                <a href="tel:{{ str_replace(' ', '', $profile['phone']) }}" class="text-gray-900 dark:text-white font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                                    {{ $profile['phone'] }}
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-900 rounded-lg hover:shadow-md transition-all duration-300">
                            <div class="text-blue-600 dark:text-blue-400">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Location</div>
                                <div class="text-gray-900 dark:text-white font-medium">{{ $profile['location'] }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Connect With Me</h4>
                        <div class="flex gap-4">
                            <a href="{{ $profile['social_links']['github'] }}" target="_blank" rel="noopener noreferrer" class="p-3 bg-white dark:bg-gray-900 rounded-lg text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 transition-all duration-300 transform hover:scale-110 hover:shadow-md" title="GitHub">
                                <i data-lucide="github" class="w-6 h-6"></i>
                            </a>
                            <a href="{{ $profile['social_links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="p-3 bg-white dark:bg-gray-900 rounded-lg text-gray-600 dark:text-gray-400 hover:text-blue-600 transition-all duration-300 transform hover:scale-110 hover:shadow-md" title="LinkedIn">
                                <i data-lucide="linkedin" class="w-6 h-6"></i>
                            </a>
                            <a href="{{ $profile['social_links']['twitter'] }}" target="_blank" rel="noopener noreferrer" class="p-3 bg-white dark:bg-gray-900 rounded-lg text-gray-600 dark:text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:scale-110 hover:shadow-md" title="Twitter">
                                <i data-lucide="twitter" class="w-6 h-6"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Availability -->
                    <div class="p-6 bg-green-50 dark:bg-green-950 rounded-lg border border-green-200 dark:border-green-800">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-green-800 dark:text-green-200 font-semibold">Available for New Projects</span>
                        </div>
                        <p class="text-green-700 dark:text-green-300 text-sm">
                            Currently accepting new DevOps consulting and implementation projects. Typical response time: 24 hours.
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-900 rounded-xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send a Message</h3>
                    
                    <form id="contact-form" x-data="contactForm()" @submit.prevent="submitForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required x-model="formData.name" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors duration-300" placeholder="Your name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required x-model="formData.email" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors duration-300" placeholder="your@email.com">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject *</label>
                            <select id="subject" name="subject" required x-model="formData.subject" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors duration-300">
                                <option value="">Select a service</option>
                                <option value="cloud-migration">Cloud Migration</option>
                                <option value="cicd-setup">CI/CD Pipeline Setup</option>
                                <option value="devops-consulting">DevOps Consulting</option>
                                <option value="infrastructure-automation">Infrastructure Automation</option>
                                <option value="monitoring-setup">Monitoring & Observability</option>
                                <option value="security-implementation">DevSecOps Implementation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message *</label>
                            <textarea id="message" name="message" required rows="6" x-model="formData.message" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors duration-300 resize-none" placeholder="Tell me about your project, timeline, and specific requirements..."></textarea>
                        </div>

                        <button type="submit" :disabled="loading" class="w-full bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
                            <i data-lucide="send" class="w-5 h-5"></i>
                            <span x-text="loading ? 'Sending...' : 'Send Message'"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function contactForm() {
            return {
                formData: {
                    name: '',
                    email: '',
                    subject: '',
                    message: ''
                },
                loading: false,
                
                async submitForm() {
                    this.loading = true;
                    await submitContactForm(this.formData);
                    this.loading = false;
                    this.formData = { name: '', email: '', subject: '', message: '' };
                }
            }
        }
    </script>
</section>