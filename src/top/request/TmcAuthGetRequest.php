<?php

namespace TopClient\request;

/**
 * TOP API: taobao.tmc.auth.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmcAuthGetRequest
{
	/** 
	 * tmc组名
	 **/
	private $group;
	
	private $apiParas = array();
	
	public function setGroup($group)
	{
		$this->group = $group;
		$this->apiParas["group"] = $group;
	}

	public function getGroup()
	{
		return $this->group;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.auth.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
