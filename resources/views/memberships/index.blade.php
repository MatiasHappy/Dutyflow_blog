@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Membership Options</h1>
        @foreach($memberships as $membership)
            <div class="membership">
                <h2>{{ $membership->name }}</h2>
                <p>Price: ${{ $membership->price }}</p>
                <form method="POST" action="{{ route('memberships.purchase', $membership) }}">
                    @csrf
                    <button type="submit">Purchase</button>
                </form>
            </div>
        @endforeach

        <form action="{{ route('memberships.subscribe') }}" method="POST">
            @csrf
            <input type="hidden" name="membership_id" value="{{ $membership->id }}">
            <button type="submit">Subscribe</button>
        </form>
        
    </div>
@endsection
