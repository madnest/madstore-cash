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
        return $this
            ->newPaymentResponse(200, PaymentStatus::CREATED)
            ->setRedirect(false)
            ->setErrors([]);
    }

    public function getStatus($id): PaymentResponse
    {
        return $this
            ->newPaymentResponse(200, PaymentStatus::CREATED)
            ->setRedirect(false)
            ->setErrors([]);
    }

    protected function newPaymentResponse(int $statusCode, string $paymentStatus): PaymentResponse
    {
        return new PaymentResponse($statusCode, $paymentStatus);
    }
}
