<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.messages.consume request
 * 
 * @author auto create
 * @since 1.0, 2018.10.23
 */
use TopClient\RequestCheckUtil;
class TmcMessagesConsumeRequest
{
	/** 
	 * 用户分组名称，不传表示消费默认分组，如果应用没有设置用户分组，传入分组名称将会返回错误
	 **/
	private $groupName;
	
	/** 
	 * 每次批量消费消息的条数，最小值：10；最大值：200
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.messages.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->quantity,200,"quantity");
		RequestCheckUtil::checkMinValue($this->quantity,10,"quantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
