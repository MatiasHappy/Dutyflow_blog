@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">All Users</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Name</th>
                    <th class="px-4 py-2 border-b">Email</th>
                    <th class="px-4 py-2 border-b">Created At</th>
                    <th class="px-4 py-2 border-b">Subscription Plan</th>
                    <th class="px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
                        <td class="border px-4 py-2">
                            @if($user->activeSubscription)
                                {{ $user->activeSubscription->membership->name }}
                            @else
                                No active subscription
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <!-- Actions such as view, edit, delete can be added here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
