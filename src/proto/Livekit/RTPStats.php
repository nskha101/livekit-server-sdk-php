<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.RTPStats</code>
 */
class RTPStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * Generated from protobuf field <code>double duration = 3;</code>
     */
    protected $duration = 0.0;
    /**
     * Generated from protobuf field <code>uint32 packets = 4;</code>
     */
    protected $packets = 0;
    /**
     * Generated from protobuf field <code>double packet_rate = 5;</code>
     */
    protected $packet_rate = 0.0;
    /**
     * Generated from protobuf field <code>uint64 bytes = 6;</code>
     */
    protected $bytes = 0;
    /**
     * Generated from protobuf field <code>uint64 header_bytes = 39;</code>
     */
    protected $header_bytes = 0;
    /**
     * Generated from protobuf field <code>double bitrate = 7;</code>
     */
    protected $bitrate = 0.0;
    /**
     * Generated from protobuf field <code>uint32 packets_lost = 8;</code>
     */
    protected $packets_lost = 0;
    /**
     * Generated from protobuf field <code>double packet_loss_rate = 9;</code>
     */
    protected $packet_loss_rate = 0.0;
    /**
     * Generated from protobuf field <code>float packet_loss_percentage = 10;</code>
     */
    protected $packet_loss_percentage = 0.0;
    /**
     * Generated from protobuf field <code>uint32 packets_duplicate = 11;</code>
     */
    protected $packets_duplicate = 0;
    /**
     * Generated from protobuf field <code>double packet_duplicate_rate = 12;</code>
     */
    protected $packet_duplicate_rate = 0.0;
    /**
     * Generated from protobuf field <code>uint64 bytes_duplicate = 13;</code>
     */
    protected $bytes_duplicate = 0;
    /**
     * Generated from protobuf field <code>uint64 header_bytes_duplicate = 40;</code>
     */
    protected $header_bytes_duplicate = 0;
    /**
     * Generated from protobuf field <code>double bitrate_duplicate = 14;</code>
     */
    protected $bitrate_duplicate = 0.0;
    /**
     * Generated from protobuf field <code>uint32 packets_padding = 15;</code>
     */
    protected $packets_padding = 0;
    /**
     * Generated from protobuf field <code>double packet_padding_rate = 16;</code>
     */
    protected $packet_padding_rate = 0.0;
    /**
     * Generated from protobuf field <code>uint64 bytes_padding = 17;</code>
     */
    protected $bytes_padding = 0;
    /**
     * Generated from protobuf field <code>uint64 header_bytes_padding = 41;</code>
     */
    protected $header_bytes_padding = 0;
    /**
     * Generated from protobuf field <code>double bitrate_padding = 18;</code>
     */
    protected $bitrate_padding = 0.0;
    /**
     * Generated from protobuf field <code>uint32 packets_out_of_order = 19;</code>
     */
    protected $packets_out_of_order = 0;
    /**
     * Generated from protobuf field <code>uint32 frames = 20;</code>
     */
    protected $frames = 0;
    /**
     * Generated from protobuf field <code>double frame_rate = 21;</code>
     */
    protected $frame_rate = 0.0;
    /**
     * Generated from protobuf field <code>double jitter_current = 22;</code>
     */
    protected $jitter_current = 0.0;
    /**
     * Generated from protobuf field <code>double jitter_max = 23;</code>
     */
    protected $jitter_max = 0.0;
    /**
     * Generated from protobuf field <code>map<int32, uint32> gap_histogram = 24;</code>
     */
    private $gap_histogram;
    /**
     * Generated from protobuf field <code>uint32 nacks = 25;</code>
     */
    protected $nacks = 0;
    /**
     * Generated from protobuf field <code>uint32 nack_acks = 37;</code>
     */
    protected $nack_acks = 0;
    /**
     * Generated from protobuf field <code>uint32 nack_misses = 26;</code>
     */
    protected $nack_misses = 0;
    /**
     * Generated from protobuf field <code>uint32 nack_repeated = 38;</code>
     */
    protected $nack_repeated = 0;
    /**
     * Generated from protobuf field <code>uint32 plis = 27;</code>
     */
    protected $plis = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_pli = 28;</code>
     */
    protected $last_pli = null;
    /**
     * Generated from protobuf field <code>uint32 firs = 29;</code>
     */
    protected $firs = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_fir = 30;</code>
     */
    protected $last_fir = null;
    /**
     * Generated from protobuf field <code>uint32 rtt_current = 31;</code>
     */
    protected $rtt_current = 0;
    /**
     * Generated from protobuf field <code>uint32 rtt_max = 32;</code>
     */
    protected $rtt_max = 0;
    /**
     * Generated from protobuf field <code>uint32 key_frames = 33;</code>
     */
    protected $key_frames = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_key_frame = 34;</code>
     */
    protected $last_key_frame = null;
    /**
     * Generated from protobuf field <code>uint32 layer_lock_plis = 35;</code>
     */
    protected $layer_lock_plis = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_layer_lock_pli = 36;</code>
     */
    protected $last_layer_lock_pli = null;
    /**
     * Generated from protobuf field <code>.livekit.RTPDrift packet_drift = 44;</code>
     */
    protected $packet_drift = null;
    /**
     * NEXT_ID: 46
     *
     * Generated from protobuf field <code>.livekit.RTPDrift report_drift = 45;</code>
     */
    protected $report_drift = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *     @type \Google\Protobuf\Timestamp $end_time
     *     @type float $duration
     *     @type int $packets
     *     @type float $packet_rate
     *     @type int|string $bytes
     *     @type int|string $header_bytes
     *     @type float $bitrate
     *     @type int $packets_lost
     *     @type float $packet_loss_rate
     *     @type float $packet_loss_percentage
     *     @type int $packets_duplicate
     *     @type float $packet_duplicate_rate
     *     @type int|string $bytes_duplicate
     *     @type int|string $header_bytes_duplicate
     *     @type float $bitrate_duplicate
     *     @type int $packets_padding
     *     @type float $packet_padding_rate
     *     @type int|string $bytes_padding
     *     @type int|string $header_bytes_padding
     *     @type float $bitrate_padding
     *     @type int $packets_out_of_order
     *     @type int $frames
     *     @type float $frame_rate
     *     @type float $jitter_current
     *     @type float $jitter_max
     *     @type array|\Google\Protobuf\Internal\MapField $gap_histogram
     *     @type int $nacks
     *     @type int $nack_acks
     *     @type int $nack_misses
     *     @type int $nack_repeated
     *     @type int $plis
     *     @type \Google\Protobuf\Timestamp $last_pli
     *     @type int $firs
     *     @type \Google\Protobuf\Timestamp $last_fir
     *     @type int $rtt_current
     *     @type int $rtt_max
     *     @type int $key_frames
     *     @type \Google\Protobuf\Timestamp $last_key_frame
     *     @type int $layer_lock_plis
     *     @type \Google\Protobuf\Timestamp $last_layer_lock_pli
     *     @type \Livekit\RTPDrift $packet_drift
     *     @type \Livekit\RTPDrift $report_drift
     *           NEXT_ID: 46
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double duration = 3;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>double duration = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkDouble($var);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 packets = 4;</code>
     * @return int
     */
    public function getPackets()
    {
        return $this->packets;
    }

    /**
     * Generated from protobuf field <code>uint32 packets = 4;</code>
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
     * Generated from protobuf field <code>double packet_rate = 5;</code>
     * @return float
     */
    public function getPacketRate()
    {
        return $this->packet_rate;
    }

    /**
     * Generated from protobuf field <code>double packet_rate = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->packet_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes = 6;</code>
     * @return int|string
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytes($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 header_bytes = 39;</code>
     * @return int|string
     */
    public function getHeaderBytes()
    {
        return $this->header_bytes;
    }

    /**
     * Generated from protobuf field <code>uint64 header_bytes = 39;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeaderBytes($var)
    {
        GPBUtil::checkUint64($var);
        $this->header_bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double bitrate = 7;</code>
     * @return float
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * Generated from protobuf field <code>double bitrate = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setBitrate($var)
    {
        GPBUtil::checkDouble($var);
        $this->bitrate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_lost = 8;</code>
     * @return int
     */
    public function getPacketsLost()
    {
        return $this->packets_lost;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_lost = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPacketsLost($var)
    {
        GPBUtil::checkUint32($var);
        $this->packets_lost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double packet_loss_rate = 9;</code>
     * @return float
     */
    public function getPacketLossRate()
    {
        return $this->packet_loss_rate;
    }

    /**
     * Generated from protobuf field <code>double packet_loss_rate = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketLossRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->packet_loss_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float packet_loss_percentage = 10;</code>
     * @return float
     */
    public function getPacketLossPercentage()
    {
        return $this->packet_loss_percentage;
    }

    /**
     * Generated from protobuf field <code>float packet_loss_percentage = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketLossPercentage($var)
    {
        GPBUtil::checkFloat($var);
        $this->packet_loss_percentage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_duplicate = 11;</code>
     * @return int
     */
    public function getPacketsDuplicate()
    {
        return $this->packets_duplicate;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_duplicate = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setPacketsDuplicate($var)
    {
        GPBUtil::checkUint32($var);
        $this->packets_duplicate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double packet_duplicate_rate = 12;</code>
     * @return float
     */
    public function getPacketDuplicateRate()
    {
        return $this->packet_duplicate_rate;
    }

    /**
     * Generated from protobuf field <code>double packet_duplicate_rate = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketDuplicateRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->packet_duplicate_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes_duplicate = 13;</code>
     * @return int|string
     */
    public function getBytesDuplicate()
    {
        return $this->bytes_duplicate;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes_duplicate = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesDuplicate($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_duplicate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 header_bytes_duplicate = 40;</code>
     * @return int|string
     */
    public function getHeaderBytesDuplicate()
    {
        return $this->header_bytes_duplicate;
    }

    /**
     * Generated from protobuf field <code>uint64 header_bytes_duplicate = 40;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeaderBytesDuplicate($var)
    {
        GPBUtil::checkUint64($var);
        $this->header_bytes_duplicate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double bitrate_duplicate = 14;</code>
     * @return float
     */
    public function getBitrateDuplicate()
    {
        return $this->bitrate_duplicate;
    }

    /**
     * Generated from protobuf field <code>double bitrate_duplicate = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setBitrateDuplicate($var)
    {
        GPBUtil::checkDouble($var);
        $this->bitrate_duplicate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_padding = 15;</code>
     * @return int
     */
    public function getPacketsPadding()
    {
        return $this->packets_padding;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_padding = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setPacketsPadding($var)
    {
        GPBUtil::checkUint32($var);
        $this->packets_padding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double packet_padding_rate = 16;</code>
     * @return float
     */
    public function getPacketPaddingRate()
    {
        return $this->packet_padding_rate;
    }

    /**
     * Generated from protobuf field <code>double packet_padding_rate = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setPacketPaddingRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->packet_padding_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes_padding = 17;</code>
     * @return int|string
     */
    public function getBytesPadding()
    {
        return $this->bytes_padding;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes_padding = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesPadding($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_padding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 header_bytes_padding = 41;</code>
     * @return int|string
     */
    public function getHeaderBytesPadding()
    {
        return $this->header_bytes_padding;
    }

    /**
     * Generated from protobuf field <code>uint64 header_bytes_padding = 41;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHeaderBytesPadding($var)
    {
        GPBUtil::checkUint64($var);
        $this->header_bytes_padding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double bitrate_padding = 18;</code>
     * @return float
     */
    public function getBitratePadding()
    {
        return $this->bitrate_padding;
    }

    /**
     * Generated from protobuf field <code>double bitrate_padding = 18;</code>
     * @param float $var
     * @return $this
     */
    public function setBitratePadding($var)
    {
        GPBUtil::checkDouble($var);
        $this->bitrate_padding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_out_of_order = 19;</code>
     * @return int
     */
    public function getPacketsOutOfOrder()
    {
        return $this->packets_out_of_order;
    }

    /**
     * Generated from protobuf field <code>uint32 packets_out_of_order = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setPacketsOutOfOrder($var)
    {
        GPBUtil::checkUint32($var);
        $this->packets_out_of_order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 frames = 20;</code>
     * @return int
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * Generated from protobuf field <code>uint32 frames = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setFrames($var)
    {
        GPBUtil::checkUint32($var);
        $this->frames = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double frame_rate = 21;</code>
     * @return float
     */
    public function getFrameRate()
    {
        return $this->frame_rate;
    }

    /**
     * Generated from protobuf field <code>double frame_rate = 21;</code>
     * @param float $var
     * @return $this
     */
    public function setFrameRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->frame_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double jitter_current = 22;</code>
     * @return float
     */
    public function getJitterCurrent()
    {
        return $this->jitter_current;
    }

    /**
     * Generated from protobuf field <code>double jitter_current = 22;</code>
     * @param float $var
     * @return $this
     */
    public function setJitterCurrent($var)
    {
        GPBUtil::checkDouble($var);
        $this->jitter_current = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double jitter_max = 23;</code>
     * @return float
     */
    public function getJitterMax()
    {
        return $this->jitter_max;
    }

    /**
     * Generated from protobuf field <code>double jitter_max = 23;</code>
     * @param float $var
     * @return $this
     */
    public function setJitterMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->jitter_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<int32, uint32> gap_histogram = 24;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getGapHistogram()
    {
        return $this->gap_histogram;
    }

    /**
     * Generated from protobuf field <code>map<int32, uint32> gap_histogram = 24;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setGapHistogram($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->gap_histogram = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nacks = 25;</code>
     * @return int
     */
    public function getNacks()
    {
        return $this->nacks;
    }

    /**
     * Generated from protobuf field <code>uint32 nacks = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setNacks($var)
    {
        GPBUtil::checkUint32($var);
        $this->nacks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nack_acks = 37;</code>
     * @return int
     */
    public function getNackAcks()
    {
        return $this->nack_acks;
    }

    /**
     * Generated from protobuf field <code>uint32 nack_acks = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setNackAcks($var)
    {
        GPBUtil::checkUint32($var);
        $this->nack_acks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nack_misses = 26;</code>
     * @return int
     */
    public function getNackMisses()
    {
        return $this->nack_misses;
    }

    /**
     * Generated from protobuf field <code>uint32 nack_misses = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setNackMisses($var)
    {
        GPBUtil::checkUint32($var);
        $this->nack_misses = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nack_repeated = 38;</code>
     * @return int
     */
    public function getNackRepeated()
    {
        return $this->nack_repeated;
    }

    /**
     * Generated from protobuf field <code>uint32 nack_repeated = 38;</code>
     * @param int $var
     * @return $this
     */
    public function setNackRepeated($var)
    {
        GPBUtil::checkUint32($var);
        $this->nack_repeated = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plis = 27;</code>
     * @return int
     */
    public function getPlis()
    {
        return $this->plis;
    }

    /**
     * Generated from protobuf field <code>uint32 plis = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setPlis($var)
    {
        GPBUtil::checkUint32($var);
        $this->plis = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_pli = 28;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastPli()
    {
        return $this->last_pli;
    }

    public function hasLastPli()
    {
        return isset($this->last_pli);
    }

    public function clearLastPli()
    {
        unset($this->last_pli);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_pli = 28;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastPli($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_pli = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 firs = 29;</code>
     * @return int
     */
    public function getFirs()
    {
        return $this->firs;
    }

    /**
     * Generated from protobuf field <code>uint32 firs = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setFirs($var)
    {
        GPBUtil::checkUint32($var);
        $this->firs = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_fir = 30;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastFir()
    {
        return $this->last_fir;
    }

    public function hasLastFir()
    {
        return isset($this->last_fir);
    }

    public function clearLastFir()
    {
        unset($this->last_fir);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_fir = 30;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastFir($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_fir = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rtt_current = 31;</code>
     * @return int
     */
    public function getRttCurrent()
    {
        return $this->rtt_current;
    }

    /**
     * Generated from protobuf field <code>uint32 rtt_current = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setRttCurrent($var)
    {
        GPBUtil::checkUint32($var);
        $this->rtt_current = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rtt_max = 32;</code>
     * @return int
     */
    public function getRttMax()
    {
        return $this->rtt_max;
    }

    /**
     * Generated from protobuf field <code>uint32 rtt_max = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setRttMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->rtt_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 key_frames = 33;</code>
     * @return int
     */
    public function getKeyFrames()
    {
        return $this->key_frames;
    }

    /**
     * Generated from protobuf field <code>uint32 key_frames = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyFrames($var)
    {
        GPBUtil::checkUint32($var);
        $this->key_frames = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_key_frame = 34;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastKeyFrame()
    {
        return $this->last_key_frame;
    }

    public function hasLastKeyFrame()
    {
        return isset($this->last_key_frame);
    }

    public function clearLastKeyFrame()
    {
        unset($this->last_key_frame);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_key_frame = 34;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastKeyFrame($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_key_frame = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 layer_lock_plis = 35;</code>
     * @return int
     */
    public function getLayerLockPlis()
    {
        return $this->layer_lock_plis;
    }

    /**
     * Generated from protobuf field <code>uint32 layer_lock_plis = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setLayerLockPlis($var)
    {
        GPBUtil::checkUint32($var);
        $this->layer_lock_plis = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_layer_lock_pli = 36;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastLayerLockPli()
    {
        return $this->last_layer_lock_pli;
    }

    public function hasLastLayerLockPli()
    {
        return isset($this->last_layer_lock_pli);
    }

    public function clearLastLayerLockPli()
    {
        unset($this->last_layer_lock_pli);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_layer_lock_pli = 36;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastLayerLockPli($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_layer_lock_pli = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.livekit.RTPDrift packet_drift = 44;</code>
     * @return \Livekit\RTPDrift|null
     */
    public function getPacketDrift()
    {
        return $this->packet_drift;
    }

    public function hasPacketDrift()
    {
        return isset($this->packet_drift);
    }

    public function clearPacketDrift()
    {
        unset($this->packet_drift);
    }

    /**
     * Generated from protobuf field <code>.livekit.RTPDrift packet_drift = 44;</code>
     * @param \Livekit\RTPDrift $var
     * @return $this
     */
    public function setPacketDrift($var)
    {
        GPBUtil::checkMessage($var, \Livekit\RTPDrift::class);
        $this->packet_drift = $var;

        return $this;
    }

    /**
     * NEXT_ID: 46
     *
     * Generated from protobuf field <code>.livekit.RTPDrift report_drift = 45;</code>
     * @return \Livekit\RTPDrift|null
     */
    public function getReportDrift()
    {
        return $this->report_drift;
    }

    public function hasReportDrift()
    {
        return isset($this->report_drift);
    }

    public function clearReportDrift()
    {
        unset($this->report_drift);
    }

    /**
     * NEXT_ID: 46
     *
     * Generated from protobuf field <code>.livekit.RTPDrift report_drift = 45;</code>
     * @param \Livekit\RTPDrift $var
     * @return $this
     */
    public function setReportDrift($var)
    {
        GPBUtil::checkMessage($var, \Livekit\RTPDrift::class);
        $this->report_drift = $var;

        return $this;
    }

}

