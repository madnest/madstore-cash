<?php

// namespace Madnest\MadstoreCash;

// class MadstoreGopay implements PaymentOption
// {
//     /**
//      * Creates standard GoPay payment
//      *
//      * @param Purchasable $purchasable
//      * @param <array|array> $params Additional params
//      * @param <array|array> $options Additional options
//      * @return PaymentResponse
//      */
//     public function createPayment(Purchasable $purchasable, array $params = [], array $options = []): PaymentResponse
//     {
//         $response = $this->gopay->createPayment($this->getParams($purchasable, $params, $options));

//         return (new PaymentResponse($response->statusCode, $response->json['state']))
//             ->setOrderNumber($response->json['order_number'])
//             ->setAmount($response->json['amount'])
//             ->setCurrency($response->json['currency'])
//             ->setPayer($response->json['payer'])
//             ->setRedirectUrl($response->json['gw_url'])
//             ->setRedirect($response->json['gw_url'] ? true : false)
//             ->setErrors([]);
//     }
}
