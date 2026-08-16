@extends("layouts.app")
@section("title", "Frequently Asked Questions")
@section("content")
    <div class="px-16 py-8">
        <h1 class="text-4xl font-bold mb-4">Frequently Asked Questions</h1>
        <p class="text-lg mb-8">Find answers to common questions about DailyAssist and how it can help you manage your tasks effectively.</p>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">What is DailyAssist?</h2>
                <p>DailyAssist is a task management and productivity tool designed to help you organize your daily tasks, set priorities, and collaborate with your team effectively.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">How do I sign up for DailyAssist?</h2>
                <p>You can sign up for DailyAssist by visiting our website and clicking on the "Sign Up" button. Follow the prompts to create your account and start managing your tasks.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">What features are included in the Basic Plan?</h2>
                <p>The Basic Plan includes task management, calendar integration, and basic collaboration tools to help you stay organized and productive.</p>
            </div>
            <!-- Add more FAQ items as needed -->
        </div>
    </div>
@endsection