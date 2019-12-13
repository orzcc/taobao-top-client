<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: alibaba.eletk.settles.tag.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.22
 */
class AlibabaEletkSettlesTagGetRequest
{
	/** 
	 * 条数
	 **/
	private $limit;
	
	/** 
	 * 月份
	 **/
	private $month;
	
	/** 
	 * 起始下标（从0开始），注意不是页码
	 **/
	private $start;
	
	private $apiParas = array();
	
	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setMonth($month)
	{
		$this->month = $month;
		$this->apiParas["month"] = $month;
	}

	public function getMonth()
	{
		return $this->month;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function getApiMethodName()
	{
		return "alibaba.eletk.settles.tag.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->month,"month");
		RequestCheckUtil::checkNotNull($this->start,"start");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
