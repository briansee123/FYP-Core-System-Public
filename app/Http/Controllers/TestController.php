<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TestResult;

class TestController extends Controller
{
    /**
     * Show the test page
     */
    public function index()
    {
        return view('test');
    }

    /**
     * Save the user's test result to the database
     */
    public function store(Request $request)
    {
        // Validate user inputs
        $validated = $request->validate([
            'skills' => 'required|string|max:255',
            'interests' => 'required|string|max:255',
            'academic' => 'required|string|max:255',
            'mbti' => 'required|string|max:10',
            'recommended_jobs' => 'nullable|string',
        ]);

        // Create a new record
        $testResult = new TestResult();
        $testResult->user_id = Auth::id();
        $testResult->skills = $validated['skills'];
        $testResult->interests = $validated['interests'];
        $testResult->academic = $validated['academic'];
        $testResult->mbti = $validated['mbti'];
        $testResult->recommended_jobs = $request->input('recommended_jobs', '');
        $testResult->save();

        // Return JSON to frontend
        return response()->json([
            'success' => true,
            'message' => 'Test result saved successfully!',
            'data' => $testResult
        ]);
    }
}
