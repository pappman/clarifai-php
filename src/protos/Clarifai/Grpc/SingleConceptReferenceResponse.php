<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/concept_reference.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.SingleConceptReferenceResponse</code>
 */
class SingleConceptReferenceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptReference concept_reference = 2;</code>
     */
    private $concept_reference = null;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ConceptReference::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Grpc\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Grpc\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptReference concept_reference = 2;</code>
     * @return \Clarifai\Grpc\ConceptReference
     */
    public function getConceptReference()
    {
        return $this->concept_reference;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConceptReference concept_reference = 2;</code>
     * @param \Clarifai\Grpc\ConceptReference $var
     * @return $this
     */
    public function setConceptReference($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\ConceptReference::class);
        $this->concept_reference = $var;

        return $this;
    }

}

