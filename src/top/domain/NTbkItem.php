<?php

namespace TopClient\domain;

/**
 * 淘宝客商品
 * @author auto create
 */
class NTbkItem
{
	
	/** 
	 * 淘客地址
	 **/
	public $click_url;
	
	/** 
	 * 商品地址
	 **/
	public $item_url;
	
	/** 
	 * 商品ID
	 **/
	public $num_iid;
	
	/** 
	 * 商品主图
	 **/
	public $pict_url;
	
	/** 
	 * 宝贝所在地
	 **/
	public $provcity;
	
	/** 
	 * 商品一口价格
	 **/
	public $reserve_price;
	
	/** 
	 * 商品小图列表
	 **/
	public $small_images;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 卖家类型，0表示集市，1表示商城
	 **/
	public $user_type;
	
	/** 
	 * 商品折扣价格
	 **/
	public $zk_final_price;	
}
?>