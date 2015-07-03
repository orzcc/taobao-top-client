<?php

namespace TopClient\domain;

/**
 * 淘宝客商品
 * @author auto create
 */
class TbkItem
{
	
	/** 
	 * 推广点击url
	 **/
	public $clickUrl;
	
	/** 
	 * 商品的折扣价
	 **/
	public $discountPrice;
	
	/** 
	 * 商品url
	 **/
	public $itemUrl;
	
	/** 
	 * 卖家昵称
	 **/
	public $nick;
	
	/** 
	 * 淘宝客商品数字id
	 **/
	public $numIid;
	
	/** 
	 * 图片url
	 **/
	public $picUrl;
	
	/** 
	 * 商品价格
	 **/
	public $price;
	
	/** 
	 * 卖家id
	 **/
	public $sellerId;
	
	/** 
	 * 店铺url
	 **/
	public $shopUrl;
	
	/** 
	 * 商品title 宝贝名称
	 **/
	public $title;
	
	/** 
	 * 30天内交易量
	 **/
	public $volume;	
}
?>