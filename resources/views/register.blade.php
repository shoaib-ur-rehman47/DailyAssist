<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="form-container flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <form action="" method="post" class="bg-white p-8 rounded shadow-md w-full max-w-sm">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="text-xs mono uppercase tracking-wide text-(--mist) mb-2" for="name">
                    Name
                </label>
                <input
                    class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xs mono uppercase tracking-wide text-(--mist) mb-2" for="email">
                    Email
                </label>
                <input
                    class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xs mono uppercase tracking-wide text-(--mist) mb-2" for="password">
                    Password
                </label>
                <input
                    class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="password" id="password" name="password" required>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                type="submit">Register</button>
            <p class="mt-4 text-sm text-gray-600">
                Already have an account? <a href="{{ url('/') }}" class="text-blue-600 hover:underline">Login</a>
            </p>
        </form>
    </div>
</body>

</html>
