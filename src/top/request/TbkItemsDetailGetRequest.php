<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.items.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2015.06.16
 */
class TbkItemsDetailGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:num_iid,seller_id,nick,title,price,volume,pic_url,item_url,shop_url;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 淘宝客商品数字id串.最大输入40个.格式如:"value1,value2,value3" 用" , "号分隔商品数字id
	 **/
	private $numIids;
	
	/** 
	 * 商品track_iid串（带有追踪效果的商品id),最大输入40个,与num_iids必填其一
	 **/
	private $trackIids;
	
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

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function setTrackIids($trackIids)
	{
		$this->trackIids = $trackIids;
		$this->apiParas["track_iids"] = $trackIids;
	}

	public function getTrackIids()
	{
		return $this->trackIids;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.items.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxListSize($this->numIids,50,"numIids");
		RequestCheckUtil::checkMaxListSize($this->trackIids,50,"trackIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
