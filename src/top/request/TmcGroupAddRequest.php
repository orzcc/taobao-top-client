<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.group.add request
 * 
 * @author auto create
 * @since 1.0, 2018.12.22
 */
use TopClient\RequestCheckUtil;
class TmcGroupAddRequest
{
	/** 
	 * 分组名称，同一个应用下需要保证唯一性，最长32个字符。添加分组后，消息通道会为用户的消息分配独立分组，但之前的消息还是存储于默认分组中。不能以default开头，default开头为系统默认组。
	 **/
	private $groupName;
	
	/** 
	 * 用户昵称列表，以半角逗号分隔，支持子账号，支持增量添加用户
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
		return "taobao.tmc.group.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxLength($this->groupName,32,"groupName");
		RequestCheckUtil::checkNotNull($this->nicks,"nicks");
		RequestCheckUtil::checkMaxListSize($this->nicks,200,"nicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
