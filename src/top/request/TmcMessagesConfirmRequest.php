<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.messages.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.10.23
 */
use TopClient\RequestCheckUtil;
class TmcMessagesConfirmRequest
{
	/** 
	 * 处理失败的消息ID列表--已废弃，无需传此字段
	 **/
	private $fMessageIds;
	
	/** 
	 * 分组名称，不传代表默认分组
	 **/
	private $groupName;
	
	/** 
	 * 处理成功的消息ID列表 最大 200个ID
	 **/
	private $sMessageIds;
	
	private $apiParas = array();
	
	public function setfMessageIds($fMessageIds)
	{
		$this->fMessageIds = $fMessageIds;
		$this->apiParas["f_message_ids"] = $fMessageIds;
	}

	public function getfMessageIds()
	{
		return $this->fMessageIds;
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

	public function setsMessageIds($sMessageIds)
	{
		$this->sMessageIds = $sMessageIds;
		$this->apiParas["s_message_ids"] = $sMessageIds;
	}

	public function getsMessageIds()
	{
		return $this->sMessageIds;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.messages.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fMessageIds,200,"fMessageIds");
		RequestCheckUtil::checkNotNull($this->sMessageIds,"sMessageIds");
		RequestCheckUtil::checkMaxListSize($this->sMessageIds,200,"sMessageIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
