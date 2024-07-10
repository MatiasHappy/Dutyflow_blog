<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

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

    public function show(Membership $membership)
    {
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



    public function subscribe(Request $request)
    {
        $request->validate([
            'membership_id' => 'required|exists:memberships,id',
        ]);

        $user = Auth::user();
        $membership = Membership::find($request->membership_id);

        if ($user && $membership) {
            $user->membership()->associate($membership);
            $user->save();

            return redirect()->route('memberships.index')->with('success', 'You have successfully subscribed to the membership.');
        }

        return redirect()->route('memberships.index')->with('error', 'Failed to subscribe to the membership.');
    }
}
