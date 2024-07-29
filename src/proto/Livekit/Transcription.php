<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.Transcription</code>
 */
class Transcription extends \Google\Protobuf\Internal\Message
{
    /**
     * Participant that got its speech transcribed
     *
     * Generated from protobuf field <code>string transcribed_participant_identity = 2;</code>
     */
    protected $transcribed_participant_identity = '';
    /**
     * Generated from protobuf field <code>string track_id = 3;</code>
     */
    protected $track_id = '';
    /**
     * Generated from protobuf field <code>repeated .livekit.TranscriptionSegment segments = 4;</code>
     */
    private $segments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transcribed_participant_identity
     *           Participant that got its speech transcribed
     *     @type string $track_id
     *     @type \Livekit\TranscriptionSegment[]|\Google\Protobuf\Internal\RepeatedField $segments
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Participant that got its speech transcribed
     *
     * Generated from protobuf field <code>string transcribed_participant_identity = 2;</code>
     * @return string
     */
    public function getTranscribedParticipantIdentity()
    {
        return $this->transcribed_participant_identity;
    }

    /**
     * Participant that got its speech transcribed
     *
     * Generated from protobuf field <code>string transcribed_participant_identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTranscribedParticipantIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->transcribed_participant_identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string track_id = 3;</code>
     * @return string
     */
    public function getTrackId()
    {
        return $this->track_id;
    }

    /**
     * Generated from protobuf field <code>string track_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackId($var)
    {
        GPBUtil::checkString($var, True);
        $this->track_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.TranscriptionSegment segments = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Generated from protobuf field <code>repeated .livekit.TranscriptionSegment segments = 4;</code>
     * @param \Livekit\TranscriptionSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Livekit\TranscriptionSegment::class);
        $this->segments = $arr;

        return $this;
    }

}
