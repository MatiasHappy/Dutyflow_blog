@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Membership</h1>
        <form method="POST" action="{{ route('admin.memberships.update', $membership) }}">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $membership->name) }}" required>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" value="{{ old('price', $membership->price) }}" required>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
