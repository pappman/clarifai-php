<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/concept_reference.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ConceptReference</code>
 */
class ConceptReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>string source = 2;</code>
     */
    private $source = '';
    /**
     * Generated from protobuf field <code>string source_id = 3;</code>
     */
    private $source_id = '';
    /**
     * Generated from protobuf field <code>string source_url = 4;</code>
     */
    private $source_url = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ConceptReference::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source = 2;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>string source = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source_id = 3;</code>
     * @return string
     */
    public function getSourceId()
    {
        return $this->source_id;
    }

    /**
     * Generated from protobuf field <code>string source_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string source_url = 4;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * Generated from protobuf field <code>string source_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_url = $var;

        return $this;
    }

}

