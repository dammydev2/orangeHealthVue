<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Services\PaymentService;
use App\Http\Resources\PaymentCollection;
use Session;

class PaymentController extends Controller
{

    protected $paymentService;
    public function __construct(
        PaymentService $paymentService
    ) {
        $this->paymentService = $paymentService;
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        $data['paystack_ref'] = $paymentDetails['data']['reference'];
        $data['orange_ref'] = $paymentDetails['data']['metadata']['orange_ref'];
        $data['email'] = $paymentDetails['data']['metadata']['email'];
        $success = $this->paymentService->updatePayment($data);
        return redirect('success');
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function continueToDonate(Request $request)
    {
        $details = $this->paymentService->enterPaymentDetails($request->all());
        Session::put('data', $details);
        return redirect('confirm_pay');
    }

    public function createAPIpayment(Request $request)
    {
        $details = $this->paymentService->enterPaymentDetails($request->all());

        return response()->json($details);
    }

    public function confirm_pay()
    {
        $data = Session::get('data');
        return view('confirmPay')->with('data', $data);
    }

    public function success()
    {
        return view('success');
    }

    public function all_donations()
    {
        $donations = $this->paymentService->getAllDOnations();
        $totalDonation = $this->paymentService->getTotalDOnations();
        return view('admin.allDonations')->with('donations', $donations)->with('sn', 1)->with('totalDonation', $totalDonation);
    }
}
