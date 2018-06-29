<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/concept_language.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.GetConceptLanguageRequest</code>
 */
class GetConceptLanguageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    private $user_app_id = null;
    /**
     * Generated from protobuf field <code>string concept_id = 2;</code>
     */
    private $concept_id = '';
    /**
     * Generated from protobuf field <code>string language = 3;</code>
     */
    private $language = '';

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\ConceptLanguage::initOnce();
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
     * Generated from protobuf field <code>string concept_id = 2;</code>
     * @return string
     */
    public function getConceptId()
    {
        return $this->concept_id;
    }

    /**
     * Generated from protobuf field <code>string concept_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConceptId($var)
    {
        GPBUtil::checkString($var, True);
        $this->concept_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string language = 3;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Generated from protobuf field <code>string language = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

}

