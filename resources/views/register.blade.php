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

<body class="bg-[#0a0a0f] min-h-screen relative overflow-hidden">
    <!-- Animated background glow -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute top-[-50%] left-[-50%] w-[200%] h-[200%] 
                    bg-[radial-gradient(ellipse_at_center,rgba(59,130,246,0.03)_0%,transparent_70%)]
                    animate-[pulse_8s_ease-in-out_infinite]"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 
                    bg-[radial-gradient(circle,rgba(59,130,246,0.05)_0%,transparent_70%)]
                    blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 
                    bg-[radial-gradient(circle,rgba(139,92,246,0.04)_0%,transparent_70%)]
                    blur-3xl"></div>
    </div>

    <div class="form-container relative z-10 flex flex-col items-center justify-center min-h-screen p-6">
        <!-- Glassmorphism card -->
        <form action="" method="post" 
              class="bg-[rgba(20,22,36,0.85)] backdrop-blur-[20px] backdrop-saturate-[1.4]
                     border border-[rgba(255,255,255,0.06)] 
                     shadow-[0_25px_50px_-12px_rgba(0,0,0,0.8),inset_0_1px_0_rgba(255,255,255,0.05)]
                     hover:border-[rgba(59,130,246,0.15)]
                     hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.9),0_0_80px_-20px_rgba(59,130,246,0.05),inset_0_1px_0_rgba(255,255,255,0.08)]
                     transition-all duration-300
                     rounded-2xl p-8 w-full max-w-sm">
            
            @csrf

            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-white tracking-tight">Create Account</h1>
                <p class="text-[rgba(255,255,255,0.3)] text-sm mt-1">Join us today</p>
            </div>

            <!-- Name Field -->
            <div class="input-group relative mb-5">
                <label class="block text-[0.65rem] font-semibold tracking-widest uppercase 
                              text-[rgba(255,255,255,0.35)] mb-2 
                              transition-colors duration-300
                              peer-focus:text-[rgba(59,130,246,0.7)]" 
                       for="name">
                    Full Name
                </label>
                <input
                    class="w-full bg-[rgba(15,17,31,0.8)] border border-[rgba(255,255,255,0.08)] 
                           text-[#e8eaf0] rounded-xl py-3 px-4 text-[0.95rem]
                           transition-all duration-300
                           focus:outline-none focus:border-[rgba(59,130,246,0.5)] 
                           focus:bg-[rgba(15,17,31,0.95)]
                           focus:shadow-[0_0_0_3px_rgba(59,130,246,0.1),inset_0_0_0_1px_rgba(59,130,246,0.2)]
                           placeholder:text-[rgba(255,255,255,0.2)]"
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name') }}" 
                    placeholder="John Doe"
                    required 
                    autofocus>
            </div>

            <!-- Email Field -->
            <div class="input-group relative mb-5">
                <label class="block text-[0.65rem] font-semibold tracking-widest uppercase 
                              text-[rgba(255,255,255,0.35)] mb-2 
                              transition-colors duration-300
                              peer-focus:text-[rgba(59,130,246,0.7)]" 
                       for="email">
                    Email
                </label>
                <input
                    class="w-full bg-[rgba(15,17,31,0.8)] border border-[rgba(255,255,255,0.08)] 
                           text-[#e8eaf0] rounded-xl py-3 px-4 text-[0.95rem]
                           transition-all duration-300
                           focus:outline-none focus:border-[rgba(59,130,246,0.5)] 
                           focus:bg-[rgba(15,17,31,0.95)]
                           focus:shadow-[0_0_0_3px_rgba(59,130,246,0.1),inset_0_0_0_1px_rgba(59,130,246,0.2)]
                           placeholder:text-[rgba(255,255,255,0.2)]"
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    placeholder="you@example.com"
                    required>
            </div>

            <!-- Password Field -->
            <div class="input-group relative mb-6">
                <label class="block text-[0.65rem] font-semibold tracking-widest uppercase 
                              text-[rgba(255,255,255,0.35)] mb-2 
                              transition-colors duration-300
                              peer-focus:text-[rgba(59,130,246,0.7)]" 
                       for="password">
                    Password
                </label>
                <input
                    class="w-full bg-[rgba(15,17,31,0.8)] border border-[rgba(255,255,255,0.08)] 
                           text-[#e8eaf0] rounded-xl py-3 px-4 text-[0.95rem]
                           transition-all duration-300
                           focus:outline-none focus:border-[rgba(59,130,246,0.5)] 
                           focus:bg-[rgba(15,17,31,0.95)]
                           focus:shadow-[0_0_0_3px_rgba(59,130,246,0.1),inset_0_0_0_1px_rgba(59,130,246,0.2)]
                           placeholder:text-[rgba(255,255,255,0.2)]"
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="••••••••"
                    required>
            </div>

            <!-- Register Button -->
            <button
                class="w-full bg-linear-to-br from-[#2563eb] to-[#1d4ed8] 
                       text-white font-semibold py-3 px-6 rounded-xl text-[0.95rem] 
                       tracking-[0.02em] cursor-pointer
                       transition-all duration-300 relative overflow-hidden
                       hover:-translate-y-0.5
                       hover:shadow-[0_8px_25px_-5px_rgba(37,99,235,0.4),0_0_40px_-10px_rgba(37,99,235,0.2)]
                       active:scale-[0.98]
                       group"
                type="submit">
                <span class="relative z-10">Create Account</span>
                <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full 
                             bg-linear-to-r from-transparent via-[rgba(255,255,255,0.1)] to-transparent
                             transition-transform duration-500"></span>
            </button>

            <!-- Login Link -->
            <p class="mt-6 text-center text-sm text-[rgba(255,255,255,0.4)]">
                Already have an account? 
                <a href="{{ url('/') }}" 
                   class="text-[#60a5fa] hover:text-[#93bbfc] 
                          transition-colors duration-200
                          hover:underline font-medium">
                    Sign In
                </a>
            </p>
        </form>

        <!-- Footer note -->
        <p class="mt-6 text-[0.7rem] text-[rgba(255,255,255,0.15)] tracking-wider">
            SECURE • ENCRYPTED
        </p>
    </div>

    <!-- Custom animation -->
    <style>
        @keyframes pulse {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.1); }
        }
    </style>
</body>

</html>