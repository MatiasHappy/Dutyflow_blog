@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Admin Membership Options</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">Membership Name</th>
                    <th class="px-4 py-2 border-b">Description</th>
                    <th class="px-4 py-2 border-b">Price</th>
                    <th class="px-4 py-2 border-b">Features</th>
                    <th class="px-4 py-2 border-b">Edit</th>
                    <th class="px-4 py-2 border-b">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($memberships as $membership)
                    <tr>
                        <td class="border px-4 py-2">{{ $membership->name }}</td>
                        <td class="border px-4 py-2">{{ $membership->description }}</td>
                        <td class="border px-4 py-2">${{ $membership->price }}</td>
                        <td class="border px-4 py-2">
                            @if(is_array($membership->features))
                                <ul class="list-disc list-inside">
                                    @foreach($membership->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No features listed</p>
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.memberships.edit', $membership) }}" class="text-blue-500 hover:text-blue-700">
                                Edit
                            </a>
                        </td>
                        <td class="border px-4 py-2">
                            <form method="POST" action="{{ route('admin.memberships.destroy', $membership) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
