<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocuments implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\auxiliaryDocument
     */
    private $auxiliaryDocument;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\auxiliaryDocument $auxiliaryDocument
     */
    public function __construct($auxiliaryDocument)
    {
        $this->auxiliaryDocument = $auxiliaryDocument;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\auxiliaryDocument
     */
    public function getAuxiliaryDocument()
    {
        return $this->auxiliaryDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\auxiliaryDocument $auxiliaryDocument
     * @return AuxiliaryDocuments
     */
    public function withAuxiliaryDocument($auxiliaryDocument)
    {
        $new = clone $this;
        $new->auxiliaryDocument = $auxiliaryDocument;

        return $new;
    }


}

