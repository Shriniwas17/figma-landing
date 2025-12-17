<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadController extends Controller
{
    // Landing page
    public function create()
    {
        return view('landing');
    }

    // Store lead
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'business_name' => 'nullable|string',
            'phone' => 'nullable|string',
            'message' => 'nullable|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx|max:2048',
        ]);

        if ($request->hasFile('attachment')) {
            $validated['attachment'] = $request->file('attachment')->store('attachments', 'public');
        }

        Lead::create($validated);

        return redirect()->back()->with('success', 'Thank you! Your message has been submitted.');
    }

    // Dashboard
    public function index()
    {
        $leads = Lead::latest()->get(); // fetch all leads
        return view('dashboard', compact('leads'));
    }
}
