<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Habit Tracker')</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite('resources/css/app.css')
        {{-- @vite('resources/js/app.ts') --}}
    </head>
    <body class="bg-gradient-to-b from-indigo-50 to-gray-50 font-sans antialiased">
        <header class="flex flex-col items-center text-center">
            <div class="max-w-6xl min-h-screen border-b py-10 md:py-20 lg:py-24 px-4 sm:px-6 lg:px-8 flex flex-col ">
                <div class="self-center inline-flex items-center px-3 py-1.5 gap-2 text-indigo-700 text-sm bg-indigo-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles size-3 sm:size-4" data-fg-ctt65="1.49:40.11004:/components/LandingPage.tsx:12:13:665:41:e:Sparkles::::::XUX"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path><path d="M20 3v4"></path><path d="M22 5h-4"></path><path d="M4 17v2"></path><path d="M5 18H3"></path></svg>
                    <span>Build better habits, one day at a time</span>
                </div>
                <h1 class="inline-block self-center mt-4 sm:mt-6 md:mt-8 max-w-3xl px-4 text-3xl sm:text-4xl md:text-5xl">Track your habits, Transform your Life</h1>
                <p class="mt-4 sm:mt-6 md:mt-8 max-w-xl sm:px-0 text-gray-600 sm:text-lg self-center">Simple, powerful tracking that helps you stay consistent and reach your goals.</p>
                <div class="flex flex-col sm:flex-row mt-4 sm:mt-6 md:mt-8 justify-center gap-3">
                    <button class="py-2 sm:px-8 font-medium text-white rounded-md bg-indigo-600 cursor-pointer">Get Started</button>
                    <button class="py-2 sm:px-8 font-medium border rounded-md bg-white cursor-pointer">Log In</button>
                </div>
                <div class="mt-6 sm:mt-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 text-left">
                    <div class="rounded-2xl flex p-6 sm:p-8 flex-col items-start bg-white">
                        <div class="p-3 rounded-xl bg-indigo-100 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check size-6 text-indigo-600" data-fg-ctt621="1.49:40.11004:/components/LandingPage.tsx:38:15:2059:51:e:CheckCircle2::::::CGcY"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                        </div>
                        <h3 class="mb-2">Quick Check-Ins</h3>
                        <p class="text-gray-600 text-sm">Mark habits complete in seconds. No friction, just progress.</p>
                    </div>
                    <div class="rounded-2xl flex p-6 sm:p-8 flex-col items-start bg-white">
                        <div class="p-3 rounded-xl bg-green-100 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up size-6 text-green-600" data-fg-ctt628="1.49:40.11004:/components/LandingPage.tsx:48:15:2598:48:e:TrendingUp::::::D6b0"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                        </div>
                        <h3 class="mb-2">Track Your Streaks</h3>
                        <p class="text-gray-600 text-sm">Build momentum with visual streak tracking and insights.</p>
                    </div>
                    <div class="flex flex-col sm:col-span-2 md:col-span-1 items-start bg-white rounded-2xl p-6 sm:p-8">
                        <div class="p-3 rounded-xl bg-purple-100 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar size-6 text-purple-600" data-fg-ctt635="1.49:40.11004:/components/LandingPage.tsx:58:15:3162:47:e:Calendar::::::C7bG"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                        </div>
                        <h3 class="mb-2">Flexible Scheduling</h3>
                        <p class="text-gray-600 text-sm">Daily, weekdays, or custom schedules that fit your life.</p>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex flex-col items-center">
            <div class="flex justify-center w-full py-12 sm:py-16 border-y border-gray-200 bg-white">
                <div class="max-w-6xl">
                    <dl class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-12 md:gap-16">
                        <div class="text-center">
                            <dd class="text-4xl sm:text-5xl mb-2 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">10k+</dd>
                            <dt class="text-gray-600">Active users</dt>
                        </div>
                        <div class="text-center">
                            <dd class="text-4xl sm:text-5xl mb-2 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">1M+</dd>
                            <dt class="text-gray-600">Habits tracked</dt>
                        </div>
                        <div class="text-center">
                            <dd class="text-4xl sm:text-5xl mb-2 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">85%</dd>
                            <dt class="text-gray-600">Success rate</dt>
                        </div>
                        <div class="text-center">
                            <dd class="text-4xl sm:text-5xl mb-2 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">4.9★</dd>
                            <dt class="text-gray-600">User rating</dt>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="max-w-6xl items-center py-10 md:py-20 lg:py-24 px-4 sm:px-6 text-center">
                <h2 class="text-2xl sm:text-3xl md:text-4xl">How it works</h2>
                <p class="mx-auto mt-2 sm:mt-4 max-w-2xl px-4 sm:px-0 text-base sm:text-lg text-gray-600">Get started in minutes and build lasting habits.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-10 sm:mt-12 md:mt-16 gap-6 sm:gap-8">
                    <div>
                        <div class="flex items-center justify-center mx-auto size-14 sm:size-16 rounded-2xl bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target size-7 sm:size-8 text-indigo-600" data-fg-ctt674="1.49:100.648:/components/LandingPage.tsx:104:15:5646:55:e:Target::::::B2yT"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                        </div>
                        <div class="mt-4 text-indigo-600">Step 1</div>
                        <h4 class="mt-2">Choose your habits</h4>
                        <p class="mt-2 text-sm sm:text-base text-gray-600">Pick from suggested habits or create your custom ones</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center mx-auto size-14 sm:size-16 rounded-2xl bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar size-7 sm:size-8 text-green-600" data-fg-ctt683="1.49:100.648:/components/LandingPage.tsx:115:15:6185:56:e:Calendar::::::C7bG"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                        </div>
                        <div class="mt-4 text-green-600">Step 2</div>
                        <h4 class="mt-2">Set your schedule</h4>
                        <p class="mt-2 text-sm sm:text-base text-gray-600">Define when and how often you want to practice each habit</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center mx-auto size-14 sm:size-16 rounded-2xl bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-7 sm:size-8 text-purple-600" data-fg-ctt692="1.49:100.648:/components/LandingPage.tsx:126:15:6724:52:e:Zap::::::DMkr"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                        </div>
                        <div class="mt-4 text-purple-600">Step 3</div>
                        <h4 class="mt-2">Track daily</h4>
                        <p class="mt-2 text-sm sm:text-base text-gray-600">Check off habits as you complete them each day</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center mx-auto size-14 sm:size-16 rounded-2xl bg-indigo-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame size-7 sm:size-8 text-orange-600" data-fg-ctt6101="1.49:100.648:/components/LandingPage.tsx:137:15:7243:54:e:Flame::::::B59j"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path></svg>
                        </div>
                        <div class="mt-4 text-orange-600">Step 4</div>
                        <h4 class="mt-2">Build streaks</h4>
                        <p class="mt-2 text-sm sm:text-base text-gray-600">Watch your streaks grow and celebrate your progress</p>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col items-center py-12 sm:py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-gray-50 to-white">
                <div class="text-center">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl">Why choose Habits</h2>
                    <p class="mx-auto mt-3 sm:mt-4 max-w-2xl text-base sm:text-lg text-gray-600">Everything you need to build and maintain healthy habits</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 mt-10 sm:mt-12 md:mt-16 max-w-6xl gap-6 sm:gap-8">
                    <div class="rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8 bg-white">
                        <div class="size-12 p-3 rounded-xl items-center justify-center bg-blue-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column size-6 text-blue-600" data-fg-ctt6119="1.49:100.648:/components/LandingPage.tsx:161:17:8455:46:e:BarChart3::::::DgJE"><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
                        </div>
                        <h3 class="mt-4">Detailed analytics</h3>
                        <p class="mt-3 text-gray-600 text-sm sm:text-base">
                            Track your progress with comprehensive charts and insights. See patterns, identify what works, and optimize your routine.
                        </p>
                    </div>
                    <div class="rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8 bg-white">
                        <div class="size-12 p-3 rounded-xl items-center justify-center bg-pink-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame size-6 text-pink-600" data-fg-ctt6126="1.49:100.648:/components/LandingPage.tsx:171:17:9036:42:e:Flame::::::B59j"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path></svg>
                        </div>
                        <h3 class="mt-4">Streak motivation</h3>
                        <p class="mt-3 text-gray-600 text-sm sm:text-base">
                            Build momentum with visual streak tracking. The longer your streak, the more motivated you'll be to keep going.
                        </p>
                    </div>
                    <div class="rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8 bg-white">
                        <div class="size-12 p-3 rounded-xl items-center justify-center bg-teal-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target size-6 text-teal-600" data-fg-ctt6133="1.49:100.648:/components/LandingPage.tsx:181:17:9602:43:e:Target::::::B2yT"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>    
                        </div>
                        <h3 class="mt-4">Goal Setting</h3>
                        <p class="mt-3 text-gray-600 text-sm sm:text-base">
                            Set specific goals for each habit. Track counts, durations, or simple yes/no completion for maximum flexibility.
                        </p>
                    </div>
                    <div class="rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8 bg-white">
                        <div class="size-12 p-3 rounded-xl items-center justify-center bg-yellow-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-6 text-yellow-600" data-fg-ctt6140="1.49:100.648:/components/LandingPage.tsx:191:17:10167:42:e:Zap::::::DMkr"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>    
                        </div>
                        <h3 class="mt-4">Simple & Fast</h3>
                        <p class="mt-3 text-gray-600 text-sm sm:text-base">
                            Designed for speed and simplicity. Log your habits in seconds and get back to your day with minimal friction.
                        </p>
                    </div>
                </div>
            </div>
            <div class="px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20">
                <div class="rounded-3xl shadow-xl p-8 sm:p-12 text-center text-white bg-gradient-to-r from-indigo-600 to-purple-600">
                <h2 class="text-2xl sm:text-3xl md:text-4xl">Ready to transform your life?</h2>
                <p class="mt-3 sm:mb-4">Join thousands of people building better habits and achieving their goals.</p>
                <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row items-center ">
                    <button class="w-full rounded-lg py-2 bg-white hover:bg-gray-100 text-indigo-600 rounded-lg text-sm font-medium transition-colors cursor-pointer">Start free today</button>
                    <button class="mt-2 sm:mt-0 sm:ml-3 w-full rounded-lg border hover:border-white py-2 bg-white hover:bg-transparent text-indigo-600 hover:text-white rounded-lg text-sm font-medium transition-colors cursor-pointer">Learn more</button>
                </div>
                <p class="mt-4 text-sm text-indigo-200 ">No credit card required • Free forever</p>
            </div>
        </main>
        <footer class="py-8 sm:py-12 bg-gray-900 text-gray-400">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8">
                    <div>
                        <h4 class="text-white">Product</h4>
                        <ul class="mt-2">
                            <li class="text-sm">Features</li>
                            <li class="text-sm">Pricing</li>
                            <li class="text-sm">FAQ</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white">Support</h4>
                        <ul class="mt-2">
                            <li class="text-sm">Help center</li>
                            <li class="text-sm">Contact</li>
                            <li class="text-sm">Status</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white">Legal</h4>
                        <ul class="mt-2">
                            <li class="text-sm">Privacy</li>
                            <li class="text-sm">Terms</li>
                            <li class="text-sm">Security</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white">Company</h4>
                        <ul class="mt-2">
                            <li class="text-sm">About</li>
                            <li class="text-sm">Blog</li>
                            <li class="text-sm">Careers</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-800 pt-8 text-center text-sm">
                <p>© 2025 Habits. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
