<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DeleteCcRouteRulesRequest extends Model
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
    public $bizId;

    /**
     * @var string
     */
    public $routeIdList;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'lang'        => 'Lang',
        'bizId'       => 'BizId',
        'routeIdList' => 'RouteIdList',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->routeIdList) {
            $res['RouteIdList'] = $this->routeIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCcRouteRulesRequest
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['RouteIdList'])) {
            $model->routeIdList = $map['RouteIdList'];
        }

        return $model;
    }
}
