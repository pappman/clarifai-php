<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/code.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.GetStatusCodeRequest</code>
 */
class GetStatusCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string status_code_id = 1;</code>
     */
    private $status_code_id = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Code::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string status_code_id = 1;</code>
     * @return string
     */
    public function getStatusCodeId()
    {
        return $this->status_code_id;
    }

    /**
     * Generated from protobuf field <code>string status_code_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusCodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_code_id = $var;

        return $this;
    }

}

