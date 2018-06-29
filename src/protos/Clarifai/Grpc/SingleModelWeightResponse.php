<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.SingleModelWeightResponse</code>
 */
class SingleModelWeightResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Model model = 2;</code>
     */
    private $model = null;
    /**
     * Generated from protobuf field <code>bytes ct64 = 3;</code>
     */
    private $ct64 = '';
    /**
     * Generated from protobuf field <code>string proto_download_url = 4;</code>
     */
    private $proto_download_url = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Model::initOnce();
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
     * Generated from protobuf field <code>.clarifai.api.Model model = 2;</code>
     * @return \Clarifai\Grpc\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Model model = 2;</code>
     * @param \Clarifai\Grpc\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes ct64 = 3;</code>
     * @return string
     */
    public function getCt64()
    {
        return $this->ct64;
    }

    /**
     * Generated from protobuf field <code>bytes ct64 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCt64($var)
    {
        GPBUtil::checkString($var, False);
        $this->ct64 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string proto_download_url = 4;</code>
     * @return string
     */
    public function getProtoDownloadUrl()
    {
        return $this->proto_download_url;
    }

    /**
     * Generated from protobuf field <code>string proto_download_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProtoDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->proto_download_url = $var;

        return $this;
    }

}

