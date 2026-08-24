@extends("layouts.app")
@section("title", "How It Works")
@section("content")
    <section class="relative overflow-hidden bg-linear-to-br from-blue-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-2000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 py-16 sm:py-20">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span>Simple Process</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    How It 
                    <span class="bg-linear-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 bg-clip-text text-transparent">Works</span>
                </h1>
                
                <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Learn how DailyAssist simplifies your daily tasks and enhances your productivity in three easy steps.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 relative">
                <!-- Step 1 -->
                <div class="group relative">
                    <div class="absolute -top-3 -left-3 w-16 h-16 bg-linear-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-blue-500/30 z-10">
                        1
                    </div>
                    <div class="relative bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 dark:border-gray-700 pt-12">
                        <div class="w-16 h-16 bg-linear-to-br from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Sign Up
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Create your free account in minutes. Choose your preferred sign-up method and get started immediately.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">
                                Email
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300">
                                Google
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">
                                GitHub
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group relative">
                    <div class="absolute -top-3 -left-3 w-16 h-16 bg-linear-to-br from-indigo-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-indigo-500/30 z-10">
                        2
                    </div>
                    <div class="relative bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 dark:border-gray-700 pt-12">
                        <div class="w-16 h-16 bg-linear-to-br from-indigo-100 to-indigo-200 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                            Add Tasks
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Create tasks with ease. Set priorities, deadlines, and organize them into projects for better workflow management.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300">
                                Priorities
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300">
                                Deadlines
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300">
                                Labels
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative">
                    <div class="absolute -top-3 -left-3 w-16 h-16 bg-linear-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-purple-500/30 z-10">
                        3
                    </div>
                    <div class="relative bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-200 dark:border-gray-700 pt-12">
                        <div class="w-16 h-16 bg-linear-to-br from-purple-100 to-purple-200 dark:from-purple-900/30 dark:to-purple-800/30 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            Track Progress
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Monitor your productivity with real-time updates. Complete tasks, achieve milestones, and stay on top of deadlines.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">
                                Analytics
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300">
                                Reports
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300">
                                Insights
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Steps -->
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                    <div class="shrink-0 w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 dark:text-white">Collaborate</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Invite team members and work together</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                    <div class="shrink-0 w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 dark:text-white">Sync Calendar</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Connect with your favorite calendar apps</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                    <div class="shrink-0 w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 dark:text-white">Get Reminders</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Never miss important deadlines again</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                    <div class="shrink-0 w-12 h-12 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 dark:text-white">Analyze</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Track your productivity and improve</p>
                    </div>
                </div>
            </div>

            <!-- Video Demo Section -->
            <div class="mt-16 bg-linear-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-8 sm:p-12">
                <div class="flex flex-col lg:flex-row items-center gap-8">
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            See It in Action
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-6">
                            Watch our quick demo to see how DailyAssist can transform your daily workflow.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-linear-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-full shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 hover:scale-105 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                                Watch Demo
                            </a>
                            <a href="{{route('getstarted')}}" class="inline-flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 font-medium rounded-full border border-gray-300 dark:border-gray-600 hover:border-blue-600 dark:hover:border-blue-400 transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Start Free
                            </a>
                        </div>
                    </div>
                    <div class="flex-1 w-full">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-video bg-linear-to-br from-blue-600 to-purple-600 flex items-center justify-center cursor-pointer group">
                            <svg class="w-20 h-20 text-white opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            <span class="absolute bottom-4 left-1/2 -translate-x-1/2 text-white text-sm font-medium bg-black/50 px-4 py-2 rounded-full">
                                ▶ Click to play
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-16 text-center">
                <div class="bg-linear-to-r from-blue-600 to-indigo-600 dark:from-blue-700 dark:to-indigo-700 rounded-3xl p-8 sm:p-12">
                    <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                        Ready to Get Started?
                    </h3>
                    <p class="text-blue-100 mb-6 max-w-2xl mx-auto">
                        Join thousands of satisfied users and start managing your tasks more efficiently today.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-blue-600 font-medium rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                            Start Free
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-blue-500/20 text-white font-medium rounded-full border border-blue-400/30 hover:bg-blue-500/30 transition-all duration-300">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection