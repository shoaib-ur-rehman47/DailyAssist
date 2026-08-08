<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="form-container flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <form action="" method="get" class="bg-white p-8 rounded shadow-md w-full max-w-sm">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="text-xs mono uppercase tracking-wide text-(--mist) mb-2" for="email">
                    Email
                </label>
                <input
                    class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
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
                type="submit">Login</button>
            <p class="mt-4 text-sm text-gray-600">
                Don't have an account? <a href="{{ url('/register') }}"
                    class="text-blue-600 hover:underline">Register</a>
            </p>
        </form>
    </div>
</body>

</html>
