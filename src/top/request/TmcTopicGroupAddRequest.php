<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.topic.group.add request
 * 
 * @author auto create
 * @since 1.0, 2018.08.13
 */
use TopClient\RequestCheckUtil;
class TmcTopicGroupAddRequest
{
	/** 
	 * 消息分组名，如果不存在，会自动创建
	 **/
	private $groupName;
	
	/** 
	 * 消息topic名称，多个以逗号(,)分割
	 **/
	private $topics;
	
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

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.topic.group.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkNotNull($this->topics,"topics");
		RequestCheckUtil::checkMaxListSize($this->topics,20,"topics");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
