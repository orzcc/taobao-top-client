<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.queue.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
use TopClient\RequestCheckUtil;
class TmcQueueGetRequest
{
	/** 
	 * TMC组名
	 **/
	private $groupName;
	
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

	public function getApiMethodName()
	{
		return "taobao.tmc.queue.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
