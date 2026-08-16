@extends("layouts.app")
@section("title", "How It Works")
@section("content")
    <div class="px-16 py-8">
        <h1 class="text-4xl font-bold mb-4">How It Works</h1>
        <p class="text-lg mb-8">Learn how DailyAssist simplifies your daily tasks and enhances your productivity.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Step 1: Sign Up</h2>
                <p>Create an account to start managing your tasks and projects efficiently.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Step 2: Add Tasks</h2>
                <p>Add your daily tasks, set priorities, and organize them into projects for better management.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Step 3: Track Progress</h2>
                <p>Monitor your progress, complete tasks, and stay on top of your deadlines with ease.</p>
            </div>
            <!-- Add more steps as needed -->
        </div>
    </div>
@endsection