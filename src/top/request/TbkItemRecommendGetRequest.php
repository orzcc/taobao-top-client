<?php

namespace TopClient\request;

use TopClient\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.item.recommend.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.26
 */
class TbkItemRecommendGetRequest
{
	/** 
	 * 后台类目Id，仅支持叶子类目Id，即通过taobao.itemcats.get获取到is_parent=false的cid
	 **/
	private $cat;
	
	/** 
	 * 返回数量，默认20，最大值40
	 **/
	private $count;
	
	/** 
	 * 需返回的字段列表
	 **/
	private $fields;
	
	/** 
	 * 商品Id
	 **/
	private $numIid;
	
	/** 
	 * 链接形式：1：PC，2：无线，默认：１
	 **/
	private $platform;
	
	/** 
	 * 推荐类型，1:同类商品推荐，2:异类商品推荐，3:同店商品推荐，此时必须输入num_iid;4:店铺热门推荐，此时必须输入user_id，这里的user_id得通过taobao.tbk.shop.get这个接口去获取user_id字段;5:类目热门推荐，此时必须输入cid
	 **/
	private $relateType;
	
	/** 
	 * 卖家Id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setCat($cat)
	{
		$this->cat = $cat;
		$this->apiParas["cat"] = $cat;
	}

	public function getCat()
	{
		return $this->cat;
	}

	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setRelateType($relateType)
	{
		$this->relateType = $relateType;
		$this->apiParas["relate_type"] = $relateType;
	}

	public function getRelateType()
	{
		return $this->relateType;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.item.recommend.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
