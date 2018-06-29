<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/input.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.SingleInputCountResponse</code>
 */
class SingleInputCountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.InputCount counts = 2;</code>
     */
    private $counts = null;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Input::initOnce();
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
     * Generated from protobuf field <code>.clarifai.api.InputCount counts = 2;</code>
     * @return \Clarifai\Grpc\InputCount
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.InputCount counts = 2;</code>
     * @param \Clarifai\Grpc\InputCount $var
     * @return $this
     */
    public function setCounts($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\InputCount::class);
        $this->counts = $var;

        return $this;
    }

}

