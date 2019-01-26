<?php
namespace TopClient\domain;

/**
 * 发货时间数据结构
 * @author auto create
 */
class DeliveryTime
{

	/**
	 * 商品级别设置的发货时间。设置了商品级别的发货时间，相对发货时间，则填写相对发货时间的天数（大于3）；绝对发货时间，则填写yyyy-mm-dd格式，如2013-11-11
	 **/
	public $delivery_time;

	/**
	 * 发货时间类型：绝对发货时间或者相对发货时间
	 **/
	public $delivery_time_type;

	/**
	 * 设置是否使用发货时间，商品级别，sku级别
	 **/
	public $need_delivery_time;
}
?>
