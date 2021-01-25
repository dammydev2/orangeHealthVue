<?php

namespace App\Services;

use App\Models\Donations;

class PaymentService
{

    protected $donation;
    public function __construct(
        Donations $donation
    ) {
        $this->donation = $donation;
    }

    public function generateCode()
    {
        $num = rand(11111111, 99999999);
        $chk = $this->donation->where('orange_ref', $num)->first();
        if(!$chk){
            return $num;
        }
        else{
            return $this->generateCode();
        }
    }

    public function enterPaymentDetails(array $credentials)
    {
        $orange_ref = $this->generateCode();
        return $this->donation->create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'amount' => $credentials['amount'],
            'message' => $credentials['message'],
            'phone' => $credentials['phone'],
            'orange_ref' => $orange_ref,
        ]);
    }

    public function updatePayment(array $credentials)
    {
        return $this->donation->where('orange_ref', $credentials['orange_ref'])
        ->update([
            'paystack_ref' => $credentials['paystack_ref'],
            'status' => 'completed'
        ]);
    }

    public function getAllDOnations()
    {
        return $this->donation->orderBy('id', 'desc')->paginate(50);
    }

    public function getTotalDOnations()
    {
        return $this->donation->sum('amount');
    }

}