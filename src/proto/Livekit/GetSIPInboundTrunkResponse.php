<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.GetSIPInboundTrunkResponse</code>
 */
class GetSIPInboundTrunkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.livekit.SIPInboundTrunkInfo trunk = 1;</code>
     */
    protected $trunk = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Livekit\SIPInboundTrunkInfo $trunk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitSip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.livekit.SIPInboundTrunkInfo trunk = 1;</code>
     * @return \Livekit\SIPInboundTrunkInfo|null
     */
    public function getTrunk()
    {
        return $this->trunk;
    }

    public function hasTrunk()
    {
        return isset($this->trunk);
    }

    public function clearTrunk()
    {
        unset($this->trunk);
    }

    /**
     * Generated from protobuf field <code>.livekit.SIPInboundTrunkInfo trunk = 1;</code>
     * @param \Livekit\SIPInboundTrunkInfo $var
     * @return $this
     */
    public function setTrunk($var)
    {
        GPBUtil::checkMessage($var, \Livekit\SIPInboundTrunkInfo::class);
        $this->trunk = $var;

        return $this;
    }

}
