<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model_version.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ListModelVersionsRequest</code>
 */
class ListModelVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    private $user_app_id = null;
    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     */
    private $model_id = '';
    /**
     * Generated from protobuf field <code>uint32 page = 3;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     */
    private $per_page = 0;
    /**
     * Generated from protobuf field <code>repeated string concept_ids = 5;</code>
     */
    private $concept_ids;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ModelVersion::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Grpc\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Grpc\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Grpc\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 page = 3;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>uint32 page = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPerPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->per_page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string concept_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptIds()
    {
        return $this->concept_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string concept_ids = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->concept_ids = $arr;

        return $this;
    }

}

