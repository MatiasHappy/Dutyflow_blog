<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::all();
        return view('memberships.index', compact('memberships'));
    }

    public function create()
    {
        return view('admin.memberships.create');
    }

    public function store(Request $request)
    {
        Membership::create($request->all());
        return redirect()->route('admin.memberships.index');
    }

    public function show($id)
    {
        $membership = Membership::findOrFail($id);
        return view('memberships.show', compact('membership'));
    }

    public function edit(Membership $membership)
    {
        return view('admin.memberships.edit', compact('membership'));
    }

    public function storeMembership(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'features' => 'nullable|string',
        ]);
    
        $features = array_filter(array_map('trim', explode("\n", $request->features)));
    
        Membership::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'features' => $features,
        ]);
    
        return redirect()->route('admin.memberships.index')->with('success', 'Membership created successfully.');
    }
    
    public function update(Request $request, Membership $membership)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'features' => 'nullable|string',
        ]);
    
        $features = array_filter(array_map('trim', explode("\n", $request->features)));
    
        $membership->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'features' => $features,
        ]);
    
        return redirect()->route('admin.memberships.index')->with('success', 'Membership updated successfully.');
    }
    

    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('admin.memberships.index');
    }



    public function subscribe(Request $request, $id)
    {
        $membership = Membership::findOrFail($id);
        $user = Auth::user();

        // Check for an existing active subscription
        $existingSubscription = Subscription::where('user_id', $user->id)
                                            ->where('status', 'active')
                                            ->first();

        if ($existingSubscription) {
            // Update the existing subscription to inactive
            $existingSubscription->update(['status' => 'inactive']);
        }

        // Create a new active subscription
        Subscription::create([
            'user_id' => $user->id,
            'membership_id' => $id,
            'status' => 'active',
        ]);

        return redirect()->route('memberships.show', $membership->id)
                         ->with('success', 'Subscribed successfully.');
    }
}
