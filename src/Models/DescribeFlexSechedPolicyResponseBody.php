<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexSechedPolicyResponseBody\flexSechedPolicy;
use AlibabaCloud\Tea\Model;

class DescribeFlexSechedPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var flexSechedPolicy
     */
    public $flexSechedPolicy;
    protected $_name = [
        'requestId'        => 'RequestId',
        'promptInfo'       => 'PromptInfo',
        'flexSechedPolicy' => 'FlexSechedPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->flexSechedPolicy) {
            $res['FlexSechedPolicy'] = null !== $this->flexSechedPolicy ? $this->flexSechedPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlexSechedPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['FlexSechedPolicy'])) {
            $model->flexSechedPolicy = flexSechedPolicy::fromMap($map['FlexSechedPolicy']);
        }

        return $model;
    }
}
