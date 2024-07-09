@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin Membership Options</h1>
        @foreach($memberships as $membership)
            <div class="membership">
                <h2>{{ $membership->name }}</h2>
                <p>Price: ${{ $membership->price }}</p>
                <a href="{{ route('admin.memberships.edit', $membership) }}">Edit</a>
                <form method="POST" action="{{ route('admin.memberships.destroy', $membership) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
