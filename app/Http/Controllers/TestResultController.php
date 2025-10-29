<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestResult;
use Illuminate\Support\Facades\Auth;

class TestResultController extends Controller
{
    /**
     * Store the test result submitted by the user.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skills' => 'required|string',
            'interests' => 'required|string',
            'academic' => 'required|string',
            'mbti' => 'required|string',
            'recommended_jobs' => 'nullable|string',
        ]);

        $testResult = new TestResult();
        $testResult->user_id = Auth::id();
        $testResult->skills = $request->skills;
        $testResult->interests = $request->interests;
        $testResult->academic = $request->academic;
        $testResult->mbti = $request->mbti;
        $testResult->recommended_jobs = $request->recommended_jobs;
        $testResult->save();

        return response()->json([
            'message' => 'Test result saved successfully!',
            'data' => $testResult
        ]);
    }
}
