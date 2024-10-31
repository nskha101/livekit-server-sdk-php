<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.RTCPSenderReportState</code>
 */
class RTCPSenderReportState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 rtp_timestamp = 1;</code>
     */
    protected $rtp_timestamp = 0;
    /**
     * Generated from protobuf field <code>uint64 rtp_timestamp_ext = 2;</code>
     */
    protected $rtp_timestamp_ext = 0;
    /**
     * Generated from protobuf field <code>uint64 ntp_timestamp = 3;</code>
     */
    protected $ntp_timestamp = 0;
    /**
     * time at which this happened
     *
     * Generated from protobuf field <code>int64 at = 4;</code>
     */
    protected $at = 0;
    /**
     * Generated from protobuf field <code>int64 at_adjusted = 5;</code>
     */
    protected $at_adjusted = 0;
    /**
     * Generated from protobuf field <code>uint32 packets = 6;</code>
     */
    protected $packets = 0;
    /**
     * Generated from protobuf field <code>uint64 octets = 7;</code>
     */
    protected $octets = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rtp_timestamp
     *     @type int|string $rtp_timestamp_ext
     *     @type int|string $ntp_timestamp
     *     @type int|string $at
     *           time at which this happened
     *     @type int|string $at_adjusted
     *     @type int $packets
     *     @type int|string $octets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 rtp_timestamp = 1;</code>
     * @return int
     */
    public function getRtpTimestamp()
    {
        return $this->rtp_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint32 rtp_timestamp = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRtpTimestamp($var)
    {
        GPBUtil::checkUint32($var);
        $this->rtp_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 rtp_timestamp_ext = 2;</code>
     * @return int|string
     */
    public function getRtpTimestampExt()
    {
        return $this->rtp_timestamp_ext;
    }

    /**
     * Generated from protobuf field <code>uint64 rtp_timestamp_ext = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRtpTimestampExt($var)
    {
        GPBUtil::checkUint64($var);
        $this->rtp_timestamp_ext = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ntp_timestamp = 3;</code>
     * @return int|string
     */
    public function getNtpTimestamp()
    {
        return $this->ntp_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 ntp_timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNtpTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->ntp_timestamp = $var;

        return $this;
    }

    /**
     * time at which this happened
     *
     * Generated from protobuf field <code>int64 at = 4;</code>
     * @return int|string
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * time at which this happened
     *
     * Generated from protobuf field <code>int64 at = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 at_adjusted = 5;</code>
     * @return int|string
     */
    public function getAtAdjusted()
    {
        return $this->at_adjusted;
    }

    /**
     * Generated from protobuf field <code>int64 at_adjusted = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAtAdjusted($var)
    {
        GPBUtil::checkInt64($var);
        $this->at_adjusted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 packets = 6;</code>
     * @return int
     */
    public function getPackets()
    {
        return $this->packets;
    }

    /**
     * Generated from protobuf field <code>uint32 packets = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPackets($var)
    {
        GPBUtil::checkUint32($var);
        $this->packets = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 octets = 7;</code>
     * @return int|string
     */
    public function getOctets()
    {
        return $this->octets;
    }

    /**
     * Generated from protobuf field <code>uint64 octets = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOctets($var)
    {
        GPBUtil::checkUint64($var);
        $this->octets = $var;

        return $this;
    }

}
