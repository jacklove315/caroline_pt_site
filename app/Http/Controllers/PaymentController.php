<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function show()
    {
        $intent = auth()->user()->createSetupIntent();

        return view('dashboard.pay', compact('intent'));
    }

    public function stripePost(Request $request)
    {
        //validate your user input fields - stripe already validates card details
        $user = $request->user();
        $paymentMethod = $request->input('payment_method');

        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge(100 * 100, $paymentMethod);
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }

        return back()->with('message', 'Product purchased successfully!');
    }
}
