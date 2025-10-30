<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TestResult;
use App\Services\CareerAI;


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

        // 🧠 Use our AI service to generate recommendations
$ai = new CareerAI();
$recommended = $ai->analyze(
    $validated['skills'],
    $validated['interests'],
    $validated['academic'],
    $validated['mbti']
);

// Create a new record with AI-generated jobs
$testResult = new TestResult();
$testResult->user_id = Auth::id();
$testResult->skills = $validated['skills'];
$testResult->interests = $validated['interests'];
$testResult->academic = $validated['academic'];
$testResult->mbti = $validated['mbti'];
$testResult->recommended_jobs = $recommended;
$testResult->save();


  return response()->json([
    'success' => true,
    'message' => 'Test result saved successfully!',
    'data' => $testResult
]);

    }
}
