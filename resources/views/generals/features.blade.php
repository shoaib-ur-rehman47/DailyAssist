@extends("layouts.app")
@section("title", "Features")
@section("content")
    <div class="px-16 py-8">
        <h1 class="text-4xl font-bold mb-4">Features</h1>
        <p class="text-lg mb-8">Discover the powerful features of DailyAssist that make your daily tasks easier and more efficient.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Task Management</h2>
                <p>Organize your tasks with ease, set priorities, and track your progress effectively.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Calendar Integration</h2>
                <p>Sync your tasks with your calendar to stay on top of deadlines and appointments.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Collaboration Tools</h2>
                <p>Work together with your team, share tasks, and communicate seamlessly within the app.</p>
            </div>
            <!-- Add more feature cards as needed -->
        </div>
    </div>
@endsection