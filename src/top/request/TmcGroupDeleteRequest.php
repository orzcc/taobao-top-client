<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.group.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.12.22
 */
use TopClient\RequestCheckUtil;
class TmcGroupDeleteRequest
{
	/** 
	 * 分组名称，分组删除后，用户的消息将会存储于默认分组中。警告：由于分组已经删除，用户之前未消费的消息将无法再获取。不能以default开头，default开头为系统默认组。
	 **/
	private $groupName;
	
	/** 
	 * 用户列表，不传表示删除整个分组，如果用户全部删除后，也会自动删除整个分组
	 **/
	private $nicks;
	
	/** 
	 * 用户所属于的平台类型，tbUIC:淘宝用户; icbu: icbu用户;ae:ae用户
	 **/
	private $userPlatform;
	
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

	public function setNicks($nicks)
	{
		$this->nicks = $nicks;
		$this->apiParas["nicks"] = $nicks;
	}

	public function getNicks()
	{
		return $this->nicks;
	}

	public function setUserPlatform($userPlatform)
	{
		$this->userPlatform = $userPlatform;
		$this->apiParas["user_platform"] = $userPlatform;
	}

	public function getUserPlatform()
	{
		return $this->userPlatform;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.group.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxListSize($this->nicks,20,"nicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
