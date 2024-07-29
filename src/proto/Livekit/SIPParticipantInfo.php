<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SIPParticipantInfo</code>
 */
class SIPParticipantInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     */
    protected $participant_id = '';
    /**
     * Generated from protobuf field <code>string participant_identity = 2;</code>
     */
    protected $participant_identity = '';
    /**
     * Generated from protobuf field <code>string room_name = 3;</code>
     */
    protected $room_name = '';
    /**
     * Generated from protobuf field <code>string sip_call_id = 4;</code>
     */
    protected $sip_call_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant_id
     *     @type string $participant_identity
     *     @type string $room_name
     *     @type string $sip_call_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitSip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     * @return string
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * Generated from protobuf field <code>string participant_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string participant_identity = 2;</code>
     * @return string
     */
    public function getParticipantIdentity()
    {
        return $this->participant_identity;
    }

    /**
     * Generated from protobuf field <code>string participant_identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant_identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string room_name = 3;</code>
     * @return string
     */
    public function getRoomName()
    {
        return $this->room_name;
    }

    /**
     * Generated from protobuf field <code>string room_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomName($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sip_call_id = 4;</code>
     * @return string
     */
    public function getSipCallId()
    {
        return $this->sip_call_id;
    }

    /**
     * Generated from protobuf field <code>string sip_call_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSipCallId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sip_call_id = $var;

        return $this;
    }

}
