<?php
// ...existing code...

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TestResult;

class TestController extends Controller
{
    /**
     * Save the user's test result to the database.
     */
    public function store(Request $request)
    {
        // Validate user inputs
        $validated = $request->validate([
            'skills' => 'required|string|max:255',
            'interests' => 'required|string|max:255',
            'academic' => 'required|string|max:255',
            'mbti' => 'required|string|max:10',
        ]);

        // Save to the test_results table
        TestResult::create([
            'user_id' => Auth::id(),
            'skills' => $validated['skills'],
            'interests' => $validated['interests'],
            'academic' => $validated['academic'],
            'mbti' => $validated['mbti'],
            'recommended_jobs' => $request->input('recommended_jobs', ''),
        ]);

        return response()->json(['message' => 'Test result saved successfully!']);
    }

    /**
     * Show all test results for the logged-in user.
     */
    public function index()
    {
        $results = TestResult::where('user_id', Auth::id())->latest()->get();

        return view('my_results', ['results' => $results]);
    }
}
// ...existing code...