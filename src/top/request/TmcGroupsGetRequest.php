<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.groups.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
use TopClient\RequestCheckUtil;
class TmcGroupsGetRequest
{
	/** 
	 * 要查询分组的名称，多个分组用半角逗号分隔，不传代表查询所有分组信息，但不会返回组下面的用户信息。如果应用没有设置分组则返回空。组名不能以default开头，default开头是系统默认的组。
	 **/
	private $groupNames;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回多少个分组
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setGroupNames($groupNames)
	{
		$this->groupNames = $groupNames;
		$this->apiParas["group_names"] = $groupNames;
	}

	public function getGroupNames()
	{
		return $this->groupNames;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.groups.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->groupNames,20,"groupNames");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
