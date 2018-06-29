<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/color.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Color</code>
 */
class Color extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string raw_hex = 1;</code>
     */
    private $raw_hex = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.W3C w3c = 2;</code>
     */
    private $w3c = null;
    /**
     * Generated from protobuf field <code>float value = 3;</code>
     */
    private $value = 0.0;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Color::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string raw_hex = 1;</code>
     * @return string
     */
    public function getRawHex()
    {
        return $this->raw_hex;
    }

    /**
     * Generated from protobuf field <code>string raw_hex = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRawHex($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_hex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.W3C w3c = 2;</code>
     * @return \Clarifai\Grpc\W3C
     */
    public function getW3C()
    {
        return $this->w3c;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.W3C w3c = 2;</code>
     * @param \Clarifai\Grpc\W3C $var
     * @return $this
     */
    public function setW3C($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\W3C::class);
        $this->w3c = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float value = 3;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>float value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->value = $var;

        return $this;
    }

}

