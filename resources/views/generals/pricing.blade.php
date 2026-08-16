@extends("layouts.app")
@section("title", "Pricing")
@section("content")
    <div class="px-16 py-8">
        <h1 class="text-4xl font-bold mb-4">Pricing</h1>
        <p class="text-lg mb-8">Choose the plan that best fits your needs and start boosting your productivity today.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Basic Plan</h2>
                <p class="mb-4">$9.99/month</p>
                <ul class="mb-4">
                    <li>Task Management</li>
                    <li>Calendar Integration</li>
                    <li>Basic Collaboration Tools</li>
                </ul>
                <button class="py-2 px-4 bg-blue-800 hover:bg-blue-700 text-white rounded-full">Get Started</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Pro Plan</h2>
                <p class="mb-4">$19.99/month</p>
                <ul class="mb-4">
                    <li>All Basic Features</li>
                    <li>Advanced Collaboration Tools</li>
                    <li>Priority Support</li>
                </ul>
                <button class="py-2 px-4 bg-blue-800 hover:bg-blue-700 text-white rounded-full">Get Started</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold mb-2">Enterprise Plan</h2>
                <p class="mb-4">Contact Us for Pricing</p>
                <ul class="mb-4">
                    <li>All Pro Features</li>
                    <li>Custom Integrations</li>
                    <li>Dedicated Account Manager</li>
                </ul>
                <button class="py-2 px-4 bg-blue-800 hover:bg-blue-700 text-white rounded-full">Contact Sales</button>
            </div>
        </div>
    </div>
@endsection