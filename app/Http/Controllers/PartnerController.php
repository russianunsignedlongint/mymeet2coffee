<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Partner;
use Validator;

//findorfail
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PartnerController extends Controller
{
    public function index()
    {
        $partner_id = auth()->user()->partners->last()->partner_id;
        $partner = User::find($partner_id);

        // Will return a ModelNotFoundException if no user with that id
        if($partner) {
            $data = new User();
            $data->email = $partner->email;
            $data->name = $partner->name;
            $data->work = $partner->work;
            $data->hobbies = $partner->hobbies;
            $data->plans = $partner->plans;
            $data->why = $partner->why;
            $data->socialmedia = $partner->socialmedia;

            return view('profile.partners')->with('data', $data)->with('error', false);
        } else {
            return view('profile.partners')->with('error', true);
        }
    }

    public function show($id)
    {
        $partner = auth()->user()->partners()->find($id);

        if (!$partner) {
            return response()->json([
                'success' => false,
                'message' => 'Partner with id ' . $id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $partner->toArray()
        ], 400);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'partner_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['partner_id' => '', 'messages' => [
                'error' => "1",
                'partner_id' => $validator->messages()->first('partner_id')
            ]], 200);
        } else {
            $partner = new Partner();
            $partner->user_id = auth()->user()->id;
            $partner->partner_id = $request->partner_id;

            if (auth()->user()->partners()->save($partner)) {
                return response()->json([
                    'value' => $partner->partner_id, 'messages' => [
                        'error' => '0',
                        'value' => '']
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Partner could not be added'
                ], 500);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $partner = auth()->user()->partners()->find($id);

        if (!$partner) {
            return response()->json([
                'success' => false,
                'message' => 'Partner with id ' . $id . ' not found'
            ], 400);
        }

        $updated = $partner->fill($request->all())->save();

        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Partner could not be updated'
            ], 500);
    }

    public function destroy($id)
    {
        $partner = auth()->user()->partners()->find($id);

        if (!$partner) {
            return response()->json([
                'success' => false,
                'message' => 'Partner with id ' . $id . ' not found'
            ], 400);
        }

        if ($partner->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Partner could not be deleted'
            ], 500);
        }
    }
}
