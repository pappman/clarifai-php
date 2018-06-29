<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/geo.proto

namespace Clarifai\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.GeoPoint</code>
 */
class GeoPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float longitude = 1;</code>
     */
    private $longitude = 0.0;
    /**
     * Generated from protobuf field <code>float latitude = 2;</code>
     */
    private $latitude = 0.0;

    public function __construct() {
        \GPBMetadata\Proto\Clarifai\Api\Geo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>float longitude = 1;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Generated from protobuf field <code>float longitude = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->longitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float latitude = 2;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Generated from protobuf field <code>float latitude = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->latitude = $var;

        return $this;
    }

}

