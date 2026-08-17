@extends('layouts.app')
@section('title', 'Welcome DailyAssist')
@section('content')
    <div class="px-16 py-8">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to DailyAssist</h1>
        <p class="text-gray-600 mt-2">Your daily assistant for managing tasks and staying organized.</p>
    </div>
    <div class="px-16 py-8">
        <h2 class="text-2xl font-bold text-gray-800">Features</h2>
        <ul class="list-disc list-inside mt-4 text-gray-600">
            <li>Task Management</li>
            <li>Calendar Integration</li>
            <li>Reminders and Notifications</li>
            <li>Collaboration Tools</li>
        </ul>
    </div>
    @php
        $featureCard = [
            "How It Works" => "DailyAssist helps you organize your tasks, set reminders, and collaborate with your team. Simply create an account, add your tasks, and let DailyAssist keep you on track.",
            "Pricing" => "DailyAssist offers a free plan with basic features. For advanced features and team collaboration, check out our premium plans.",
            "FAQ" => "Have questions? Check out our FAQ section for answers to common questions about DailyAssist.",
        ]
    @endphp
    <div class="px-16 py-8 grid grid-cols-3 gap-4">
        @foreach ($featureCard as $key => $value)
            <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800">{{ $key }}</h3>
                <p class="text-gray-600 mt-2">{{ $value }}</p>
            </div>
        @endforeach
    </div>
    {{-- <div class="px-16 py-8">
        <h2 class="text-2xl font-bold text-gray-800">How It Works</h2>
        <p class="text-gray-600 mt-2">DailyAssist helps you organize your tasks, set reminders, and collaborate with your team. Simply create an account, add your tasks, and let DailyAssist keep you on track.</p>
    </div>
    <div class="px-16 py-8">
        <h2 class="text-2xl font-bold text-gray-800">Pricing</h2>
        <p class="text-gray-600 mt-2">DailyAssist offers a free plan with basic features. For advanced features and team collaboration, check out our premium plans.</p>
    </div>
    <div class="px-16 py-8">
        <h2 class="text-2xl font-bold text-gray-800">FAQ</h2>
        <p class="text-gray-600 mt-2">Have questions? Check out our FAQ section for answers to common questions about DailyAssist.</p>
    </div> --}}
    
@endsection
