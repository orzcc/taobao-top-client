<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: alibaba.eletk.settles.sum.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.22
 */
class AlibabaEletkSettlesSumGetRequest
{
	/** 
	 * 月份
	 **/
	private $month;
	
	private $apiParas = array();
	
	public function setMonth($month)
	{
		$this->month = $month;
		$this->apiParas["month"] = $month;
	}

	public function getMonth()
	{
		return $this->month;
	}

	public function getApiMethodName()
	{
		return "alibaba.eletk.settles.sum.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->month,"month");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
