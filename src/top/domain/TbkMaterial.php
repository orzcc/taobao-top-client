<?php
namespace TopClient\domain;

/**
 * results
 * @author auto create
 */
class TbkMaterial
{

	/**
	 * 计划类型，0代表通用计划，1代表定向计划，2代表鹊桥计划，3代表营销计划
	 **/
	public $campaign_type;

	/**
	 * categoryId
	 **/
	public $category_id;

	/**
	 * couponClickUrl
	 **/
	public $coupon_click_url;

	/**
	 * couponEndTime
	 **/
	public $coupon_end_time;

	/**
	 * couponInfo
	 **/
	public $coupon_info;

	/**
	 * couponRemainCount
	 **/
	public $coupon_remain_count;

	/**
	 * couponStartTime
	 **/
	public $coupon_start_time;

	/**
	 * couponTotalCount
	 **/
	public $coupon_total_count;

	/**
	 * itemId
	 **/
	public $item_id;

	/**
	 * 商品淘客链接
	 **/
	public $item_url;

	/**
	 * maxCommissionRate
	 **/
	public $max_commission_rate;
}
?>
