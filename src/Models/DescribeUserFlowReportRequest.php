<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserFlowReportRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $esnGroupId;

    /**
     * @var int
     */
    public $esnBizId;

    /**
     * @var string
     */
    public $esnAppId;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'endTime'    => 'EndTime',
        'interval'   => 'Interval',
        'startTime'  => 'StartTime',
        'esnGroupId' => 'EsnGroupId',
        'esnBizId'   => 'EsnBizId',
        'esnAppId'   => 'EsnAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->esnGroupId) {
            $res['EsnGroupId'] = $this->esnGroupId;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->esnAppId) {
            $res['EsnAppId'] = $this->esnAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserFlowReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EsnGroupId'])) {
            $model->esnGroupId = $map['EsnGroupId'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['EsnAppId'])) {
            $model->esnAppId = $map['EsnAppId'];
        }

        return $model;
    }
}
