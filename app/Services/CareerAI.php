<?php

namespace App\Services;

class CareerAI
{
    public static function analyze($skills, $interests, $academic)
    {
        // Normalize inputs (lowercase)
        $skills = strtolower($skills);
        $interests = strtolower($interests);
        $academic = strtolower($academic);

        // Define some rule-based AI logic (simple version)
        $careerField = 'General';
        $confidence = 70; // default score

        // Skill-based analysis
        if (str_contains($skills, 'programming') || str_contains($skills, 'coding')) {
            $careerField = 'Software Engineering';
            $confidence += 10;
        } elseif (str_contains($skills, 'design')) {
            $careerField = 'Creative Design';
            $confidence += 5;
        } elseif (str_contains($skills, 'marketing')) {
            $careerField = 'Business & Marketing';
            $confidence += 10;
        } elseif (str_contains($skills, 'analysis') || str_contains($skills, 'data')) {
            $careerField = 'Data Science';
            $confidence += 10;
        }

        // Interest-based analysis
        if (str_contains($interests, 'help')) {
            $careerField = 'Healthcare & Counseling';
            $confidence += 5;
        } elseif (str_contains($interests, 'tech')) {
            $careerField = 'Information Technology';
            $confidence += 10;
        } elseif (str_contains($interests, 'art')) {
            $careerField = 'Art & Design';
        }

        // Academic-based influence
        if ($academic === 'engineering') {
            $careerField = 'Engineering & Technology';
        } elseif ($academic === 'business') {
            $careerField = 'Business & Management';
        } elseif ($academic === 'science') {
            $careerField = 'Research & Development';
        } elseif ($academic === 'arts') {
            $careerField = 'Creative Media';
        }

        // Make confidence realistic
        if ($confidence > 95) {
            $confidence = 95;
        }

        return [
            'career_field' => $careerField,
            'confidence' => $confidence . '%'
        ];
    }
}
