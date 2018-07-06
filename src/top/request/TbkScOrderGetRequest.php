<?php
namespace TopClient\request;

use TopClient\RequestCheckUtil;
/**
 * TOP API: taobao.tbk.sc.order.get request
 * 
 * @author auto create
 * @since 1.0, 2018.06.13
 */
class TbkScOrderGetRequest
{
	/** 
	 * 需返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * 订单查询类型，创建时间“create_time”，或结算时间“settle_time”
	 **/
	private $orderQueryType;
	
	/** 
	 * 第几页，默认1，1~100
	 **/
	private $pageNo;
	
	/** 
	 * 页大小，默认20，1~100
	 **/
	private $pageSize;
	
	/** 
	 * 订单查询时间范围,单位:秒,最小60,最大600,默认60
	 **/
	private $span;
	
	/** 
	 * 订单查询开始时间
	 **/
	private $startTime;
	
	/** 
	 * 订单状态，1: 全部订单，3：订单结算，12：订单付款， 13：订单失效，14：订单成功； 订单查询类型为‘结算时间’时，只能查订单结算状态
	 **/
	private $tkStatus;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setOrderQueryType($orderQueryType)
	{
		$this->orderQueryType = $orderQueryType;
		$this->apiParas["order_query_type"] = $orderQueryType;
	}

	public function getOrderQueryType()
	{
		return $this->orderQueryType;
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

	public function setSpan($span)
	{
		$this->span = $span;
		$this->apiParas["span"] = $span;
	}

	public function getSpan()
	{
		return $this->span;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTkStatus($tkStatus)
	{
		$this->tkStatus = $tkStatus;
		$this->apiParas["tk_status"] = $tkStatus;
	}

	public function getTkStatus()
	{
		return $this->tkStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.sc.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->span,"span");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
