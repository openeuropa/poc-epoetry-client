<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class InternalTechnicalErrorException implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $uid;

    /**
     * Constructor
     *
     * @var string $message
     * @var string $uid
     */
    public function __construct($message, $uid)
    {
        $this->message = $message;
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return InternalTechnicalErrorException
     */
    public function withMessage($message)
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     * @return InternalTechnicalErrorException
     */
    public function withUid($uid)
    {
        $new = clone $this;
        $new->uid = $uid;

        return $new;
    }


}

