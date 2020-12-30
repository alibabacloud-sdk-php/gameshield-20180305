<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeRequestStatisticCountByEsnBiz30MRequest extends Model
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
     * @var string
     */
    public $esnApp;

    /**
     * @var string
     */
    public $esnBiz;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'esnApp'   => 'EsnApp',
        'esnBiz'   => 'EsnBiz',
        'time'     => 'Time',
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
        if (null !== $this->esnApp) {
            $res['EsnApp'] = $this->esnApp;
        }
        if (null !== $this->esnBiz) {
            $res['EsnBiz'] = $this->esnBiz;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRequestStatisticCountByEsnBiz30MRequest
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
        if (isset($map['EsnApp'])) {
            $model->esnApp = $map['EsnApp'];
        }
        if (isset($map['EsnBiz'])) {
            $model->esnBiz = $map['EsnBiz'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
