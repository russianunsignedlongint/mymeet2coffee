<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;
use Validator;

//findorfail
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FeedbackController extends Controller
{
    public function index()
    {
        // if(auth()->user()->feedbacks->last()) {
        //     $feedback = auth()->user()->feedbacks->last()->message;
        // } else {
        //     return view('profile.feedback');
        // }

        // Will return a ModelNotFoundException if no user with that id
        // if($feedback) {
            // $data = new User();
            // $data->email = $partner->email;
            // $data->name = $partner->name;
            // $data->work = $partner->work;
            // $data->hobbies = $partner->hobbies;
            // $data->plans = $partner->plans;
            // $data->why = $partner->why;
            // $data->socialmedia = $partner->socialmedia;

        //     return view('profile.feedback')->with('data', $data)->with('error', false);
        // } else {
            //return view('profile.feedback')->with('error', true);
            return view('profile.partners')->with('error', true);
        // }
    }

    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            // return response()->json(['message' => '', 'messages' => [
            //     'error' => "1",
            //     'message' => $validator->messages()->first('message')
            // ]], 200);
            dd("Validation check failed (Maybe your message exceeded 1000 characters)");
        } else {
            $feedback = new Feedback();
            $feedback->user_id = auth()->user()->id;
            $feedback->message = $request->message;

            if (auth()->user()->feedbacks()->save($feedback)) {
                // return response()->json([
                //     'value' => $feedback->message, 'messages' => [
                //         'error' => '0',
                //         'value' => '']
                // ]);
                dd("Thanks for your message. We will get back to you soon!");
            } else {
                // return response()->json([
                //     'success' => false,
                //     'message' => 'Feedback could not be added'
                // ], 500);
                dd("Error");
            }
        }
    }
}
