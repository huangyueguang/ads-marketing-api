<?php
/**
 * 更新计划状态
 * 通过此接口可对计划做启用/暂停/删除操作。
 * User: yueguang
 * Date: 2022/4/30
 * Time: 11:18
 */

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/2/ad/update/status/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * 计划ID集合
     */
    protected $ad_ids;

    /**
     * 操作
     *  "enable"表示启用, "delete"表示删除, "disable"表示暂停
     * 允许值: "enable", "delete", "disable"
     */
    protected $opt_status;
    
    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {
       /* RequestCheckUtil::checkAllowField($this->opt_status, ["enable", "delete", "disable"], 'opt_status');*/
    }
}
