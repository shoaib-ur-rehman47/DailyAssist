@extends("layouts.app")
@section("title", "Welcome")
@section("content")
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-8 sm:py-12 px-4 sm:px-6">
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <div class="absolute top-0 -left-4 w-48 sm:w-72 h-48 sm:h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-48 sm:w-72 h-48 sm:h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-1000"></div>
            <div class="absolute -bottom-8 left-20 w-48 sm:w-72 h-48 sm:h-72 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse delay-2000"></div>
        </div>

        <div class="relative w-full max-w-2xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-2xl sm:rounded-3xl shadow-2xl p-6 sm:p-8 lg:p-12 border border-gray-200 dark:border-gray-700">
                <!-- Success Icon -->
                <div class="flex justify-center mb-6">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full blur-2xl opacity-20 animate-pulse"></div>
                        <div class="relative w-20 h-20 sm:w-24 sm:h-24 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center shadow-lg shadow-green-500/30">
                            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Welcome Content -->
                <div class="text-center mb-8">
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-3">
                        Welcome to <span class="bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 bg-clip-text text-transparent">DailyAssist</span>
                    </h1>
                     <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white mb-3">
                        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 bg-clip-text text-transparent">{{$name}}</span>
                    </h1>
                    <p class="text-sm sm:text-base lg:text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                        Your account has been successfully created! You're now ready to start managing your tasks, collaborating with your team, and boosting your productivity.
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4 mb-8">
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-3 sm:p-4 text-center hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors duration-300">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-blue-600 dark:text-blue-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-gray-700 dark:text-gray-300">Task Management</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-3 sm:p-4 text-center hover:bg-indigo-50 dark:hover:bg-indigo-900/20 transition-colors duration-300">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-indigo-600 dark:text-indigo-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-gray-700 dark:text-gray-300">Calendar Sync</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-3 sm:p-4 text-center hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors duration-300">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-purple-600 dark:text-purple-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-gray-700 dark:text-gray-300">Collaboration</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-3 sm:p-4 text-center hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors duration-300">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-green-600 dark:text-green-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-gray-700 dark:text-gray-300">Smart Reminders</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-3 sm:p-4 text-center hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors duration-300">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-orange-600 dark:text-orange-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-gray-700 dark:text-gray-300">Analytics</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-3 sm:p-4 text-center hover:bg-pink-50 dark:hover:bg-pink-900/20 transition-colors duration-300">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-pink-600 dark:text-pink-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                        <p class="text-xs sm:text-sm font-medium text-gray-700 dark:text-gray-300">Mobile Access</p>
                    </div>
                </div>

                <!-- Action Button -->
                <a href="{{ route('login') }}" class="w-full flex items-center justify-center gap-2 px-6 py-3 sm:py-3.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-xl shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 transition-all duration-300 hover:scale-[1.02] text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    Sign In to Your Account
                </a>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-xs sm:text-sm">
                        <span class="px-4 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                            What's Next?
                        </span>
                    </div>
                </div>

                <!-- Next Steps -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="text-center p-3 rounded-xl bg-gray-50 dark:bg-gray-700/50">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-xs sm:text-sm font-bold text-blue-600 dark:text-blue-400">1</span>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-700 dark:text-gray-300">Create Your First Task</p>
                    </div>
                    <div class="text-center p-3 rounded-xl bg-gray-50 dark:bg-gray-700/50">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-indigo-100 dark:bg-indigo-900/30 rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-xs sm:text-sm font-bold text-indigo-600 dark:text-indigo-400">2</span>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-700 dark:text-gray-300">Set Up Your Calendar</p>
                    </div>
                    <div class="text-center p-3 rounded-xl bg-gray-50 dark:bg-gray-700/50">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-2">
                            <span class="text-xs sm:text-sm font-bold text-purple-600 dark:text-purple-400">3</span>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-700 dark:text-gray-300">Invite Team Members</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection