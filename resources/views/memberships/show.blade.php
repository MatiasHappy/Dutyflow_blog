<x-guest-layout>
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold mb-4 text-duty">{{ $membership->name }}</h1>
            <p class="text-lg text-gray-700 mb-6">{{ $membership->description }}</p>
            <p class="text-4xl font-extrabold tracking-tight text-gray-900 mb-4">${{ $membership->price }} <span class="text-xl font-medium text-gray-600">/ month</span></p>
            <ul class="list-disc pl-6 text-gray-700">
                @if(is_array($membership->features))
                    @foreach($membership->features as $feature)
                        <li class="mt-2">{{ $feature }}</li>
                    @endforeach
                @else
                    <p>No features listed</p>
                @endif
            </ul>
            <form method="POST" action="{{ route('memberships.subscribe', $membership->id) }}" class="mt-8">
                @csrf
                <button type="submit" class="w-full bg-duty text-white font-bold py-3 px-6 rounded-lg hover:bg-fun transition ease-in-out duration-150 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-fun uppercase tracking-wide">Subscribe</button>
            </form>
            @if(session('success'))
                <div class="mt-4 text-green-500">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="mt-4 text-red-500">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</x-guest-layout>
