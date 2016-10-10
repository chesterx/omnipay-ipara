<?php
/**
 * IPara International Purchase Response
 */
namespace Omnipay\IPara\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\IPara\Gateway;

/**
 * Class PurchaseResponse
 * @package Omnipay\IPara\Message
 *
 * @author Sercan Virlan <sercanvirlan@gmail.com>
 */
class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * Redirect url
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * Base data
     *
     * @var string
     */
    protected $data;

    /**
     * Construct
     *
     * @param RequestInterface $request
     * @param mixed $data
     * @param $redirectUrl
     */
    public function __construct(RequestInterface $request, $data, $redirectUrl)
    {
        parent::__construct($request, $data);

        $this->data = $data;
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * Get the initiating request object.
     *
     * @return PurchaseRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Check if request is successful
     *
     * @return bool
     */
    public function isSuccessful()
    {
        if($this->data->RETURN_CODE != '3DS_ENROLLED' && $this->data->STATUS == 'SUCCESS') {
            return true;
        }

        return false;
    }

    /**
     * Check if redirect
     *
     * @return bool
     */
    public function isRedirect()
    {
        $this->data->RETURN_CODE == '3DS_ENROLLED' ? $this->redirectUrl = $this->data->URL_3DS : false;
        return $this->data->RETURN_CODE == '3DS_ENROLLED' ? true : false;
    }

    /**
     * Get redirect url
     *
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->data->URL_3DS;
    }

    /**
     * Get redirect method
     *
     * @return string
     */
    public function getRedirectMethod()
    {
        return Gateway::REDIRECT_METHOD;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return [
            'status' => (string) $this->data->STATUS[0],
            'return_code' => (string) $this->data->RETURN_CODE[0],
            'return_message' => (string) $this->data->RETURN_MESSAGE[0],
        ];
    }

    /**
     * Get redirect data
     *
     * @return mixed
     */
    public function getRedirectData()
    {
        return $this->data;
    }
}
