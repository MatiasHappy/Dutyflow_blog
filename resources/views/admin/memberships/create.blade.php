@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Membership</h1>
        <form method="POST" action="{{ route('admin.memberships.store') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
