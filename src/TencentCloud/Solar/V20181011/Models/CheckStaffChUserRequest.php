<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckStaffChUser请求参数结构体
 *
 * @method array getUserId() 获取员工ID
 * @method void setUserId(array $UserId) 设置员工ID
 * @method string getOperateType() 获取渠道状态：checkpass审核通过, checkreject审核拒绝, enableoperate启用, stopoperate停用
 * @method void setOperateType(string $OperateType) 设置渠道状态：checkpass审核通过, checkreject审核拒绝, enableoperate启用, stopoperate停用
 */
class CheckStaffChUserRequest extends AbstractModel
{
    /**
     * @var array 员工ID
     */
    public $UserId;

    /**
     * @var string 渠道状态：checkpass审核通过, checkreject审核拒绝, enableoperate启用, stopoperate停用
     */
    public $OperateType;

    /**
     * @param array $UserId 员工ID
     * @param string $OperateType 渠道状态：checkpass审核通过, checkreject审核拒绝, enableoperate启用, stopoperate停用
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }
    }
}
