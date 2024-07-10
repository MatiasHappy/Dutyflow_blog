<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div id="app">
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <div class="text-lg font-semibold text-gray-900">
                        <a href="{{ url('/') }}" class="text-gray-900 hover:text-blue-500">Admin Panel</a>
                    </div>
                    <ul class="flex space-x-4">
                        <li><a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-500">Home</a></li>
                        <li><a href="{{ route('admin.posts.index') }}" class="text-gray-700 hover:text-blue-500">Manage Blog Posts</a></li>
                        <li><a href="{{ route('admin.memberships.index') }}" class="text-gray-700 hover:text-blue-500">Manage Memberships</a></li>
                        <li><a href="{{ route('admin.posts.create') }}" class="text-gray-700 hover:text-blue-500">Create Post</a></li>
                        <li><a href="{{ route('admin.memberships.create') }}" class="text-gray-700 hover:text-blue-500">Create Membership</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-gray-700 hover:text-blue-500">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container mx-auto mt-10">
            @yield('content')
        </main>
    </div>
</body>
</html>
