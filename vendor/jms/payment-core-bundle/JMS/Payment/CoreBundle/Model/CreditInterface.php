<?php

namespace JMS\Payment\CoreBundle\Model;

/*
 * Copyright 2010 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

interface CreditInterface
{
    const STATE_CANCELED = 1;
    const STATE_CREDITED = 2;
    const STATE_CREDITING = 3;
    const STATE_FAILED = 4;
    const STATE_NEW = 5;

    function getCreditedAmount();
    function getCreditingAmount();
    function getCreditTransaction();
    function getId();

    /**
     * @return \JMS\Payment\CoreBundle\Model\PaymentInterface
     */
    function getPayment();

    /**
     * @return \JMS\Payment\CoreBundle\Model\PaymentInstructionInterface
     */
    function getPaymentInstruction();

    /**
     * @return \JMS\Payment\CoreBundle\Model\FinancialTransactionInterface|null
     */
    function getPendingTransaction();

    /**
     * @return \JMS\Payment\CoreBundle\Model\FinancialTransactionInterface[]
     */
    function getReverseCreditTransactions();

    function getReversingAmount();
    function getState();
    function getTargetAmount();
    function hasPendingTransaction();
    function isAttentionRequired();
    function isIndependent();
    function setCreditedAmount($amount);
    function setCreditingAmount($amount);
    function setAttentionRequired($boolean);
    function setPayment(PaymentInterface $payment);
    function setReversingAmount($amount);
    function setState($state);
}
