@extends('layouts.app')
@section('title', 'Welcome DailyAssist')
@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-linear-to-br from-blue-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-2000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 py-16 sm:py-20 lg:py-24">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Welcome to DailyAssist</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    Your Daily Assistant for
                    <span class="bg-linear-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 bg-clip-text text-transparent">Productivity</span>
                    &amp; Organization
                </h1>
                
                <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Streamline your workflow, manage tasks efficiently, and collaborate seamlessly with your team. DailyAssist brings everything you need in one place.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('getstarted') }}" class="inline-flex items-center justify-center px-8 py-4 bg-linear-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-full shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 hover:scale-105 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Get Started Free
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 font-medium rounded-full border border-gray-300 dark:border-gray-600 hover:border-blue-600 dark:hover:border-blue-400 hover:shadow-lg transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Watch Demo
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="mt-12 flex flex-wrap items-center justify-center gap-8 text-sm text-gray-500 dark:text-gray-400">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>10,000+ Active Users</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>4.9/5 Average Rating</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>99.9% Uptime</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid Section -->
    @php
        $featureCard = [
            [
                'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                'title' => 'Task Management',
                'description' => 'Easily create, edit, and organize your tasks with drag-and-drop functionality. Set priorities, deadlines, and track progress in real-time.',
                'color' => 'blue'
            ],
            [
                'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                'title' => 'Calendar Integration',
                'description' => 'Sync your tasks seamlessly with Google Calendar, Outlook, and other calendar apps. Never miss a deadline with smart scheduling.',
                'color' => 'indigo'
            ],
            [
                'icon' => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                'title' => 'Smart Reminders',
                'description' => 'Get intelligent notifications and reminders across all your devices. Stay on track with personalized alerts and follow-ups.',
                'color' => 'purple'
            ],
            [
                'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                'title' => 'Team Collaboration',
                'description' => 'Work together seamlessly with your team. Share tasks, assign responsibilities, and track team progress in real-time.',
                'color' => 'green'
            ],
            [
                'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                'title' => 'Analytics & Insights',
                'description' => 'Gain valuable insights into your productivity patterns. Track your progress, identify bottlenecks, and optimize your workflow.',
                'color' => 'orange'
            ],
            [
                'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                'title' => 'Mobile & Cross-Platform',
                'description' => 'Access your tasks anytime, anywhere. DailyAssist works seamlessly across web, iOS, and Android devices with real-time sync.',
                'color' => 'pink'
            ],
        ];
    @endphp

    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Everything You Need to <span class="bg-linear-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Stay Productive</span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Powerful features designed to help you and your team work smarter, not harder.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($featureCard as $feature)
                    <div class="group relative bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-200 dark:border-gray-700">
                        <!-- Glow effect -->
                        <div class="absolute inset-0 bg-linear-to-r from-{{ $feature['color'] }}-500/5 to-{{ $feature['color'] }}-600/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <!-- Icon -->
                        <div class="w-14 h-14 bg-linear-to-br from-{{ $feature['color'] }}-100 to-{{ $feature['color'] }}-200 dark:from-{{ $feature['color'] }}-900/30 dark:to-{{ $feature['color'] }}-800/30 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-{{ $feature['color'] }}-600 dark:text-{{ $feature['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $feature['icon'] }}"/>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3 group-hover:text-{{ $feature['color'] }}-600 dark:group-hover:text-{{ $feature['color'] }}-400 transition-colors">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            {{ $feature['description'] }}
                        </p>
                        
                        <!-- Learn more link -->
                        <a href="#" class="inline-flex items-center mt-4 text-sm font-medium text-{{ $feature['color'] }}-600 dark:text-{{ $feature['color'] }}-400 hover:text-{{ $feature['color'] }}-700 dark:hover:text-{{ $feature['color'] }}-300 transition-colors group-hover:gap-2 gap-1">
                            Learn More
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 sm:py-20 bg-linear-to-r from-blue-600 to-indigo-600 dark:from-blue-700 dark:to-indigo-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-8 lg:px-16 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Ready to Get Started?
            </h2>
            <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                Join thousands of users who have already transformed their productivity with DailyAssist.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-600 font-medium rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    Start Free Trial
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="{{ route('pricing') }}" class="inline-flex items-center justify-center px-8 py-4 bg-blue-500/20 text-white font-medium rounded-full border border-blue-400/30 hover:bg-blue-500/30 transition-all duration-300">
                    View Pricing
                </a>
            </div>
        </div>
    </section>
@endsection