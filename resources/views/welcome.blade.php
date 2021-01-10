<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bits & Divs Thn</title>

        <link rel="icon" type="image/png" href="/images/favicon.png"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative pb-4 flex items-top justify-center min-h-screen bg-gray-800 sm:items-center sm:pt-0" style="background-image: url('/images/bg.jpg'); background-size: cover;">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center sm:justify-start sm:pt-0">
                    <img src="/images/logo.png" style="width: 320px; margin-top: 2em;" />
                </div>
                <div class="mt-8 bg-gray-100 shadow-2xl overflow-hidden shadow sm:rounded-lg pt-8">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="ml-4">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <h1 class="text-gray-600">Företaget</h1>
                                    <p>Korta beslutsvägar, kreativa processer och innovation är grundpelarna i Bits &amp; Divs Thn.</p>
                                    <p>Företaget drivs av Joakim Wennergren och har funnits sedan juni 2020.</p>
                                    <video width="100%" height="240" autoplay muted loop>
                                    <source src="/images/medium.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video> 
                                </div>
                            </div>
                        </div>
                        <div class="p-6 ">
                            <div class="ml-4">
                            <h1 class="text-gray-600">Referenser</h1>
                            <div class="flex flex-row justify-around ">
                                <div class="flex flex-col">
                                <a href="https://quizwalk.com" target="_blank" rel="noopener noreferrer"><img src="/images/footer_embossed.png" style="width: 180px;" /></a>
                                    <blockquote className="p-4 italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote text-xs">
                                    <p className="mb-2 ">Bits & Divs Thn har byggt en kombinerad app- och webbplattform till oss på QuizWalk. Andra konsulter sade att deadlinen var omöjlig, men Joakim på Bits & Divs nådde alla mål inom vår tids- och kostnadsbudget. Vi är mycket, mycket nöjda med kvalité och bemötande!</p>
                                        <br />
                                        <cite>
                                            -
                                            <a href="https://quizwalk.com" target="_blank" rel="noopener noreferrer">
                                            Erik Kylén, QuizWalk AB
                                            </a>
                                        </cite>
                                    </blockquote>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="ml-4">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <h1 class="text-gray-600">Tjänster</h1>
                                    <h2>Systemutveckling</h2>
                                    <p>Behöver erat system ses över och eller uppdateras? Saknas något eller behöver något läggas till?</p>
                                    <h2>Webbsidor</h2>
                                    <p>PHP 8 och react/vue alternativt livewire/alpine.js är teknikerna jag vänder mig främst till. Jag är anpassningsbar och lär mig lätt nya tekniker och håller mig konstant uppdaterad. </p>
                                    <h2>Mobila appar</h2>
                                    <p>Många personer har idag en smartphone och väljer hellre att använda en app istället för att surfa in på en webbsida. Med en app har man tillgång till smartphonens alla resurser.</p>
                                    <p>Ett par års erfarenhet av React-native har gjort mig väldigt säker på hur man snabbt och effektivt skapar en mobil applikation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 pb-16">
                            <div class="ml-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <h1 class="text-gray-600">Kontakt</h1>
                                    <livewire:mail.message />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-white sm:text-left">
                        <div class="flex items-center">
                            Innehar F-skatt
                        </div>
                    </div>
                    <div class="ml-4 text-center text-sm text-white sm:text-right sm:ml-0">
                        Copyright &copy; 2020 - 2021 Bits &amp; Divs Thn
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
