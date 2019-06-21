<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.msg.sendrecord request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
use TopClient\RequestCheckUtil;
class TmcMsgSendrecordRequest
{
	/** 
	 * 消息主键ID
	 **/
	private $dataId;
	
	/** 
	 * 消息分组名
	 **/
	private $groupName;
	
	/** 
	 * TOPIC名称
	 **/
	private $topicName;
	
	private $apiParas = array();
	
	public function setDataId($dataId)
	{
		$this->dataId = $dataId;
		$this->apiParas["data_id"] = $dataId;
	}

	public function getDataId()
	{
		return $this->dataId;
	}

	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
	}

	public function setTopicName($topicName)
	{
		$this->topicName = $topicName;
		$this->apiParas["topic_name"] = $topicName;
	}

	public function getTopicName()
	{
		return $this->topicName;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.msg.sendrecord";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dataId,"dataId");
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkNotNull($this->topicName,"topicName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
