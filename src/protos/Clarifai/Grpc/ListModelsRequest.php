<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/model.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ListModelsRequest</code>
 */
class ListModelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    private $user_app_id = null;
    /**
     * Generated from protobuf field <code>uint32 page = 2;</code>
     */
    private $page = 0;
    /**
     * Generated from protobuf field <code>uint32 per_page = 3;</code>
     */
    private $per_page = 0;
    /**
     * Generated from protobuf field <code>repeated string ids = 4;</code>
     */
    private $ids;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Model::initOnce();
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
     * Generated from protobuf field <code>uint32 page = 2;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>uint32 page = 2;</code>
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
     * Generated from protobuf field <code>uint32 per_page = 3;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * Generated from protobuf field <code>uint32 per_page = 3;</code>
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
     * Generated from protobuf field <code>repeated string ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }

}

