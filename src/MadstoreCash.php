<?php

namespace Madnest\MadstoreCash;

use Madnest\Madstore\Payment\Contracts\PaymentOption;
use Madnest\Madstore\Payment\Contracts\Purchasable;
use Madnest\Madstore\Payment\Enums\PaymentStatus;
use Madnest\Madstore\Payment\PaymentResponse;

class MadstoreCash implements PaymentOption
{
    /**
     * Creates standard cash payment
     *
     * @param Purchasable $purchasable
     * @param <array|array> $params Additional params
     * @param <array|array> $options Additional options
     * @return PaymentResponse
     */
    public function createPayment(Purchasable $purchasable, array $params = [], array $options = []): PaymentResponse
    {
        return new PaymentResponse([
            'statusCode' => 200,
            'status' => PaymentStatus::CREATED,
            'orderNumber' => $purchasable->getUUID(),
            'amount' => $purchasable->getAmount(),
            'currency' => $purchasable->getCurrency(),
            'paymentMethod' => 'CASH',
            'gateway' => 'cash',
            'redirect' => false,
            'errors' => [],
        ]);
    }

    /**
     * Get payment status
     *
     * @param int $id
     * @return PaymentResponse
     */
    public function getStatus(int $id): PaymentResponse
    {
        return new PaymentResponse([
            'statusCode' => 200,
            'status' => PaymentStatus::CREATED,
            'orderNumber' => '', // $purchasable->getUUID(),
            'amount' => 0, // $purchasable->getAmount(),
            'currency' => '', // $purchasable->getCurrency(),
            'paymentMethod' => 'CASH',
            'gateway' => 'cash',
            'redirect' => false,
            'errors' => [],
        ]);
    }
}
