<?php

namespace App\Http\Controllers;

use App\StartedForm;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StartedFormController extends Controller
{
    public function saveUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:255',
            'phone_number' => 'required|regex:/(01)[0-9]{9}/',
            'email' => 'email'
        ]);

        if ($validator->fails()) {
            return response([
                'status' => 0,
                'message' => $validator->errors()->first()
            ]);
        }


        $form = new StartedForm();
        $form->full_name = $request->get('full_name');
        $form->phone_number = $request->get('phone_number');
        $form->email = $request->get('email');

        if ($form->save()) {
            return response([
                'status' => 1,
                'message' => ''
            ]);
        }
        return response([
            'status' => 0,
            'message' => 'Error during save'
        ]);
    }
}
