<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\languageCode
     */
    private $language;

    /**
     * Constructor
     *
     * @param \OpenEuropa\EPoetry\Type\languageCode $language
     */
    public function __construct(languageCode $language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\languageCode
     */
    public function getLanguage(): languageCode
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\languageCode $language
     * @return AuxiliaryDocument
     */
    public function withLanguage(languageCode $language): AuxiliaryDocument
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
