<?php
/**
 * @author    SysPay Ltd.
 * @copyright 2012-2014 SysPay Ltd.
 * @license   http://opensource.org/licenses/MIT MIT License
 */

/**
 * Cancel a billing agreement
 * @see  https://app.syspay.com/bundles/emiuser/doc/merchant_api.html#cancel-a-billing-agreement
 */
class Syspay_Merchant_BillingAgreementCancellationRequest extends Syspay_Merchant_Request
{
    const METHOD = 'POST';
    const PATH   = '/api/v1/merchant/billing-agreement/%d/cancel';

    /**
     * @var integer
     */
    private $billingAgreementId;

    public function __construct($billingAgreementId = null)
    {
        if (null !== $billingAgreementId) {
            $this->setBillingAgreementId($billingAgreementId);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {
        return self::METHOD;
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {
        return sprintf(self::PATH, $this->billingAgreementId);
    }

    /**
     * {@inheritDoc}
     */
    public function buildResponse(stdClass $response)
    {
        if (!isset($response->billing_agreement)) {
            throw new Syspay_Merchant_UnexpectedResponseException('Unable to retrieve "billing_agreement" data from response', $response);
        }

        $billingAgreement = Syspay_Merchant_Entity_BillingAgreement::buildFromResponse($response->billing_agreement);

        return $billingAgreement;
    }


    /**
     * Gets the value of billingAgreementId.
     *
     * @return integer
     */
    public function getBillingAgreementId()
    {
        return $this->billingAgreementId;
    }

    /**
     * Sets the value of billingAgreementId.
     *
     * @param integer $billingAgreementId the billingAgreementId
     *
     * @return self
     */
    public function setBillingAgreementId($billingAgreementId)
    {
        $this->billingAgreementId = $billingAgreementId;

        return $this;
    }
}
