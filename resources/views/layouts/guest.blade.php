<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center  bg-gray-100">
          

            <div class="w-full   bg-white shadow-md overflow-hidden">

                <header class="relative z-10">
                    <nav aria-label="Top">
                      <!-- Top navigation -->
                      <div class="bg-gray-900">
                        <div class="mx-auto flex h-10 max-w-7xl items-center justify-end px-4 sm:px-6 lg:px-8">
                          <!-- Currency selector -->
                        
              
                          <div class="flex items-center space-x-6">
                            <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                            <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                          </div>
                        </div>
                      </div>
              
                      <!-- Secondary navigation -->
                      <div class="bg-fun bg-opacity-30 backdrop-blur-md backdrop-filter">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                          <div>
                            <div class="flex h-16 items-center justify-between">
                              <!-- Logo (lg+) -->
                              <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                <a href="#">
                                  <span class="sr-only">dutyflow</span>
                                  <img src="{{ asset('imgs/logo2.png') }}" class="h-8 w-auto"  alt="DUTYFLOW">
                                </a>
                              </div>
              
                              <div class="hidden h-full lg:flex">
                                <!-- Flyout menus -->
                                <div class="inset-x-0 bottom-0 ">
                                  <div class="flex h-full justify-center space-x-8">
                                    
                                  
                                    <a href="#" class="flex items-center font-SourceSans text-md font-semibold text-duty">About</a>
                                    <a href="#" class="flex items-center font-SourceSans text-md font-semibold text-duty">Memberships</a>
                                    <a href="#" class="flex items-center font-SourceSans text-md font-semibold text-duty">Blog</a>
                                    <a href="#" class="flex items-center font-SourceSans text-md font-semibold text-duty">Contact</a>
                                  </div>
                                </div>
                              </div>
              
                              <!-- Mobile menu and search (lg-) -->
                              <div class="flex flex-1 items-center lg:hidden">
                                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                <button type="button" class="-ml-2 p-2 text-white">
                                  <span class="sr-only">Open menu</span>
                                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                  </svg>
                                </button>
              
                                <!-- Search -->
                              
                              </div>
              
                              <!-- Logo (lg-) -->
                              <a href="#" class="lg:hidden">
                                <span class="sr-only">dutyflow</span>
                                <img src="{{ asset('imgs/logo2.png') }}" alt="" class="h-8 w-auto">
                              </a>
              
                          
                            </div>
                          </div>
                        </div>
                      </div>
                    </nav>
                  </header>

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
