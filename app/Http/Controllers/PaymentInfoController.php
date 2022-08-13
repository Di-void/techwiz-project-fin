<?php

namespace App\Http\Controllers;

use App\Models\PaymentInfo;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentInfoController extends Controller
{
    public function store (Request $request) {
        $fields = $request->validate([
            'id' => 'required|integer|unique:payment_infos,user_id',
            'card_number' => 'required|string|unique:payment_infos,card_number',
            'expires' => 'required|date',
            'cvv' => 'required|integer|unique:payment_infos,cvv'
        ]);
//        return PaymentInfo::create($request->all());
        if($fields) {
            $paymentInf = PaymentInfo::create([
                'user_id' => $fields['id'],
                'card_number' => $fields['card_number'],
                'expiration' => $fields['expires'],
                'cvv' => $fields['cvv']
            ]);

            $response = [
                'message' => 'Payment Information Submitted',
                'details' => $paymentInf,
            ];

        }
        return response($response, 200);
    }

    public function update (Request $request, $id) {
        $user = User::find($id);

        if($user === null) {
            return response([
                'message' => 'User not found',
            ]);
        } else {
            $fields = $request->validate([
                'card_number' => 'required|string',
                'expires' => 'required|date',
                'cvv' => 'required|integer'
            ]);

            $paymentInfo = $user->paymentInfo;
            $paymentInfo->card_number = $fields['card_number'];
            $paymentInfo->expiration = $fields['expires'];
            $paymentInfo->cvv = $fields['cvv'];
            $paymentInfo->save();


            $response = [
                'message' => 'Payment Info Updated successfully',
                'details' => [
                    'paymentInfo_id' => $paymentInfo['id'],
                    'user_id' => $paymentInfo['user_id'],
                    'card_number' => $paymentInfo['card_number'],
                    'expiration_date' => $paymentInfo['expiration'],
                    'new_cvv' => $paymentInfo['cvv'],
                    'created_at' => $paymentInfo['created_at'],
                    'updated_at' => $paymentInfo['updated_at']
                ]
            ];


        }

        return response($response, 200);
    }
}
