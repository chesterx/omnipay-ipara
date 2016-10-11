<?php
/**
 * IPara Purchase Request
 */
namespace Omnipay\IPara\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\IPara\Gateway;
use Omnipay\IPara\Omnipay\Common\Address;
use Omnipay\IPara\Omnipay\Common\Item;

/**
 * Class PurchaseRequest
 * @package Omnipay\IPara\Message
 *
 * @author Sercan Virlan <sercanvirlan@gmail.com>
 */
class PurchaseRequest extends AbstractRequest
{
    /**
     * Get order id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->getParameter('orderid');
    }

    /**
     * Set order id
     *
     * @param int $value
     * @return AbstractRequest
     */
    public function setOrderId($value)
    {
        return $this->setParameter('orderid', $value);
    }

    /**
     * Get order date
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->getParameter('orderDate');
    }

    /**
     * Set order date
     *
     * @param string $value
     * @return AbstractRequest
     */
    public function setOrderDate($value)
    {
        return $this->setParameter('orderDate', $value);
    }

    /**
     * Get merchant id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    /**
     * Set merchant id
     *
     * @param string $value
     * @return string
     */
    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->getParameter('token');
    }

    /**
     * Set token
     *
     * @param string $value
     * @return string
     */
    public function setToken($value)
    {
        return $this->setParameter('token', $value);
    }

    /**
     * Get threeD
     *
     * @return string
     */
    public function getThreeD()
    {
        return $this->getParameter('threeD');
    }

    /**
     * Set threeD
     *
     * @param string $value
     * @return string
     */
    public function setThreeD($value)
    {
        return $this->setParameter('threeD', $value);
    }

    /**
     * Get secret key
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    /**
     * Set secret key
     *
     * @param string $value
     * @return mixed
     */
    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey', $value);
    }

    /**
     * Get live url
     *
     * @return string
     */
    public function getLiveUrl()
    {
        return $this->getParameter('liveUrl');
    }

    /**
     * Set live url
     *
     * @param string $value
     * @return string
     */
    public function setLiveUrl($value)
    {
        return $this->setParameter('liveUrl', $value);
    }

    /**
     * Get sandbox url
     *
     * @return string
     */
    public function getSandboxUrl()
    {
        return $this->getParameter('sandboxUrl');
    }

    /**
     * Set sandbox url
     *
     * @param string $value
     * @return string
     */
    public function setSandboxUrl($value)
    {
        return $this->setParameter('sandboxUrl', $value);
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->getParameter('country');
    }

    /**
     * Set country
     *
     * @param string $value
     * @return $this
     */
    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    /**
     * Get billing address
     *
     * @return object
     */
    public function getBillingAddress()
    {
        return $this->getParameter('billing_address');
    }

    /**
     * Set billing address
     *
     * @param object $value
     * @return $this
     */
    public function setBillingAddress($value)
    {
        return $this->setParameter('billing_address', $value);
    }

    /**
     * Get shipping address
     *
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->getParameter('shipping_address');
    }

    /**
     * Set shipping address
     *
     * @param Address $value
     * @return $this
     */
    public function setShippingAddress($value)
    {
        return $this->setParameter('shipping_address', $value);
    }

    /**
     * Get shipping amount
     *
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->getParameter('shipping_amount');
    }

    /**
     * Set shipping amount
     *
     * @param float $value
     * @return $this
     */
    public function setShippingAmount($value)
    {
        return $this->setParameter('shipping_amount', $value);
    }

    /**
     * Get discount amount
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->getParameter('discount_amount');
    }

    /**
     * Set discount amount
     *
     * @param float $value
     * @return $this
     */
    public function setDiscountAmount($value)
    {
        return $this->setParameter('discount_amount', $value);
    }

    /**
     * Get auto mode
     *
     * @return mixed
     */
    public function getAutoMode()
    {
        return $this->getParameter('autoMode');
    }

    /**
     * Set auto mode
     *  - redirect customers straight to the card details page (skipping the billing/delivery screens)
     *
     * @param bool $value
     * @return $this
     */
    public function setAutoMode($value)
    {
        return $this->setParameter('autoMode', $value);
    }

    /**
     * Get timeout
     *
     * @return string
     */
    public function getTimeout()
    {
        return $this->getParameter('timeout');
    }

    /**
     * Set timeout
     *
     * @param string $value
     * @return $this
     */
    public function setTimeout($value)
    {
        return $this->setParameter('timeout', $value);
    }

    /**
     * Get timeout url
     *
     * @return string
     */
    public function getTimeoutUrl()
    {
        return $this->getParameter('timeoutUrl');
    }

    /**
     * Set timeout url
     *
     * @param string $value
     * @return $this
     */
    public function setTimeoutUrl($value)
    {
        return $this->setParameter('timeoutUrl', $value);
    }

    /**
     * Get the installment count
     *
     * @return string
     */
    public function getInstallmentCount()
    {
        return $this->getParameter('installmentCount');
    }

    /**
     * Sets the request installment count
     *
     * @param string $value
     * @return $this
     */
    public function setInstallmentCount($value)
    {
        return $this->setParameter('installmentCount', $value);
    }

    /**
     * Get the request success URL
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->getParameter('successUrl');
    }

    /**
     * Sets the request success URL
     *
     * @param string $value
     * @return $this
     */
    public function setSuccessUrl($value)
    {
        return $this->setParameter('successUrl', $value);
    }

    /**
     * Get gateway url
     *
     * @return string
     */
    public function getGatewayUrl()
    {
        return $this->getTestMode() ? $this->getSandboxUrl() : $this->getLiveUrl();
    }

    public function getData()
    {
        $xml_data_product_part = "";
        $billingAddress = $this->getBillingAddress();
        $shippingAddress = $this->getShippingAddress();

        $items = $this->getItems();
        if (!empty($items)) {
            foreach ($items as $key => $item) {
                $xml_data_product_part .= "<product>\n" .
                    "	<productCode>" . urlencode($item->getSku()) . "</productCode>\n" .
                    "	<productName>" . urlencode($item->getName()) . "</productName>\n" .
                    "	<quantity>" . $item->getQuantity() . "</quantity>\n" .
                    "	<price>" . number_format((float)sprintf('%.2F', $item->getPrice()), 2, '', '') . "</price>\n" .
                    "</product>\n";
            }
        }

//$three_d_secure_code_part = "";
//if ($this->three_d == "true") {
//    $three_d_secure_code_part = "    <threeDSecureCode>" . $this->three_d_secure_code . "</threeDSecureCode>\n";
//}

        $card = $this->getCard();
        $xml_data = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" .
            "<auth>\n" .
            "    <threeD>" . $this->getThreeD() . "</threeD>\n" .
            "    <orderId>" . $this->getOrderId() . "</orderId>\n" .
            "    <amount>" . $this->getAmount() * 100 . "</amount>\n" .
            "    <cardOwnerName>" . urlencode($card->getName()) . "</cardOwnerName>\n" .
            "    <cardNumber>" . $card->getNumber() . "</cardNumber>\n" .
            "    <cardExpireMonth>" . $card->getExpiryMonth() . "</cardExpireMonth>\n" .
            "    <cardExpireYear>" . $card->getExpiryYear() . "</cardExpireYear>\n" .
            "    <installment>" . $this->getInstallmentCount() . "</installment>\n" .
            "    <cardCvc>" . $card->getCvv() . "</cardCvc>\n" .
            "    <mode>" . $this->getTestMode() . "</mode>\n" .
//            $three_d_secure_code_part .
            "    <vendorId>29</vendorId>\n" .
            "    <products>\n" .
            $xml_data_product_part .
            "    </products>\n" .
            "    <purchaser>\n" .
            "        <name>" . urlencode($billingAddress->getFirstName()) . "</name>\n" .
            "        <surname>" . urlencode($billingAddress->getLastName()) . "</surname>\n" .
            "        <birthDate></birthDate>\n" .
            "        <email></email>\n" .
            "        <gsmNumber>" . urlencode(mb_strlen($billingAddress->getPhone()) ? $billingAddress->getPhone() : '-') . "</gsmNumber>\n" .
            "        <tcCertificate></tcCertificate>\n" .
            "        <clientIp>" . $this->getClientIp() . "</clientIp>\n" .
            "        <invoiceAddress>\n" .
            "            <name>" . urlencode($billingAddress->getFirstName()) . "</name>\n" .
            "            <surname>" . urlencode($billingAddress->getLastName()) . "</surname>\n" .
            "            <address>" . urlencode($billingAddress->getAddress()) . "</address>\n" .
            "            <zipcode>" . urlencode($billingAddress->getZipCode()) . "</zipcode>\n" .
            "            <city>" . urlencode($billingAddress->getCity()) . "</city>\n" .
            "            <tcCertificate></tcCertificate>\n" .
            "            <country>" . urlencode($billingAddress->getCountryCode()) . "</country>\n" .
            "            <taxNumber></taxNumber>\n" .
            "            <taxOffice></taxOffice>\n" .
            "            <companyName>" . $billingAddress->getCompany() . "</companyName>\n" .
            "            <phoneNumber>" . urlencode(mb_strlen($billingAddress->getPhone()) ? $billingAddress->getPhone() : '-') . "</phoneNumber>\n" .
            "        </invoiceAddress>\n" .
            "        <shippingAddress>\n" .
            "            <name>" . urlencode($shippingAddress->getFirstName()) . "</name>\n" .
            "            <surname>" . urlencode($shippingAddress->getLastName()) . "</surname>\n" .
            "            <address>" . urlencode($shippingAddress->getAddress()) . "</address>\n" .
            "            <zipcode>" . urlencode($shippingAddress->getZipCode()) . "</zipcode>\n" .
            "            <city>" . urlencode($shippingAddress->getCity()) . "</city>\n" .
            "            <country>" . urlencode($shippingAddress->getCountryCode()) . "</country>\n" .
            "            <phoneNumber>" . urlencode(mb_strlen($shippingAddress->getPhone()) ? $shippingAddress->getPhone() : '-') . "</phoneNumber>\n" .
            "        </shippingAddress>\n" .
            "    </purchaser>\n" .
            "</auth>";

        return $xml_data;
    }

    public function getData1()
    {
        $shippingAddress = $this->getShippingAddress();
        $card = $this->getCard();

        $timestamp = date("Y-m-d H:i:s");
        $hash_text =
        $this->getSecretKey() .
        $this->getOrderId() .
        $this->getAmount() * 100 .
        $this->getTestMode() .
        $card->getName() .
        $card->getNumber() .
        $card->getExpiryMonth() .
        $card->getExpiryYear() .
        $card->getCvv() .
        $shippingAddress->getFirstName() .
        $shippingAddress->getLastName() .
        $shippingAddress->getEmail() .
        $timestamp;

        $token = $this->getMerchantId() . ":" . base64_encode(sha1($hash_text, true));

        $data['orderId'] = $this->getOrderId();
        $data['amount'] = $this->getAmount() * 100;
        $data['cardOwnerName'] = $card->getName();
        $data['cardNumber'] = $card->getNumber();
        $data['cardExpireMonth'] = $card->getExpiryMonth();
        $data['cardExpireYear'] = $card->getExpiryYear();
        $data['installment'] = $this->getInstallmentCount();
        $data['cardCvc'] = $card->getCvv();
        $data['mode'] = $this->getTestMode();
        $data['purchaserName'] = $shippingAddress->getFirstName();
        $data['purchaserSurname'] = $shippingAddress->getLastName();
        $data['purchaserEmail'] = $shippingAddress->getEmail();
        $data['successUrl'] = $this->getSuccessUrl();
        $data['failureUrl'] = $this->getGatewayUrl();
        $data['echo'] = "";
        $data['version'] = "1.0";
        $data['transactionDate'] = $timestamp;
        $data['token'] = $token;

        return $data;
    }

    /**
     * Send data
     *
     * @param mixed $data
     * @return PurchaseResponse
     */
    public function sendData($data)
    {
        $headers = array(
            'Content-Type'  => 'application/xml; charset=utf-8',
            'transactionDate'  => date("Y-m-d H:i:s"),
            'version'  => "1.0",
            'token'  => $this->getToken()
        );

        $httpResponse = $this->httpClient->post($this->getGatewayUrl(), $headers, $data)->send();
        $xml = simplexml_load_string($httpResponse->getBody()->__toString());
        return $this->response = new PurchaseResponse($this, $xml, $this->getGatewayUrl());
    }

    /**
     * Encodes an entire array recursevly in UTF-8.
     *
     * @param   array $arrToEncode The array to encode.
     * @return  array
     */
    public function utf8izeArray(array $arrToEncode)
    {
        array_walk_recursive($arrToEncode, array($this, 'utf8izeArrayRecFunction'));
        return $arrToEncode;
    }

    /**
     * Instead of using closure for 5.2 compatibility.
     *
     * @param mixed $item Value in the array to apply utf8izeArray() upon it.
     */
    protected function utf8izeArrayRecFunction(&$item)
    {
        if (!is_array($item)) {
            $item = $this->utf8izeString($item);
        }
    }

    /**
     * Encodes a string in UTF-8.
     *
     * @param   string $strValue The string to encode.
     * @return  string            The string UTF-8 encoded.
     */
    public function utf8izeString($strValue)
    {
        $returnValue = strval($strValue);
        if (!mb_check_encoding($returnValue, 'UTF-8')) {
            $returnValue = mb_convert_encoding($returnValue, 'UTF-8', mb_detect_encoding($returnValue));
        }

        return $returnValue;
    }

    /**
     * Generate order hash
     *
     * @param array $data
     * @return string
     */
    protected function generateHash(array $data)
    {
        return $this->hmacMd5($data);
    }

    /**
     * Apply HMAC_MD5.
     *
     * @param   array $arrData Array with data, can contain subarrays.
     * @return string HMAC_MD5 signature.
     */
    public function hmacMd5(array $arrData)
    {
        ksort($arrData);
        $secretKey = $this->getSecretKey();
        $referenceObj = new \stdClass;
        $referenceObj->strData = '';

        array_walk_recursive($arrData, array($this, 'hmacMd5RecFunction'), $referenceObj);

        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            return hash_hmac('md5', $referenceObj->strData, $secretKey);
        }

        return bin2hex(mhash(MHASH_MD5, $referenceObj->strData, $secretKey));
    }

    /**
     * Instead of using closure for 5.2 compatibility.
     *
     * @param mixed $item Value in the array to apply utf8izeArray() upon it.
     * @param mixed $key Value 's key.
     * @param \stdClass $obj Object where string to hash will be stored.
     */
    protected function hmacMd5RecFunction($item, $key, \stdClass $obj)
    {
        if (!is_array($item)) {
            $obj->strData .= strlen($item); //mb_strlen(strval($item), 'UTF-8');
            $obj->strData .= strval($item);
        }
    }
}