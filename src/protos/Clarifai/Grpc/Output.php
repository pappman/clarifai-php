<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/output.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Output</code>
 */
class Output extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 2;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    private $created_at = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Model model = 4;</code>
     */
    private $model = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Input input = 5;</code>
     */
    private $input = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 6;</code>
     */
    private $data = null;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Output::initOnce();
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
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 2;</code>
     * @return \Clarifai\Grpc\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 2;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Model model = 4;</code>
     * @return \Clarifai\Grpc\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Model model = 4;</code>
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
     * Generated from protobuf field <code>.clarifai.api.Input input = 5;</code>
     * @return \Clarifai\Grpc\Input
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Input input = 5;</code>
     * @param \Clarifai\Grpc\Input $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\Input::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 6;</code>
     * @return \Clarifai\Grpc\Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Data data = 6;</code>
     * @param \Clarifai\Grpc\Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\Data::class);
        $this->data = $var;

        return $this;
    }

}

