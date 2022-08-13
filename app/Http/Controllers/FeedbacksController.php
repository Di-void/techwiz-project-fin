<?php

namespace App\Http\Controllers;

use App\Models\Feedbacks;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{

    // ADD FEEDBACK TO FEEDBACKS TABLE
    public function addFeedback (Request $request) {
        $fields = $request->validate([
            'feedback' => 'required|string'
        ]);

        if($fields) {
            $feedback = Feedbacks::create([
                'feedback' => $fields['feedback']
            ]);

            $response = [
                'message' => 'Feedback Created Successfully',
                'feedback' => $feedback
            ];
            return response($response, 200);
        }



        return response(['message' => 'Feedback could not be sent'], 401);
//
//
    }

    // GET FEEDBACKS

    public function getFeedbacks () {
        return Feedbacks::all();
    }
}
