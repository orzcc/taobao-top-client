<?php
namespace TopClient\domain;

/**
 * Sku结构
 * @author auto create
 */
class Sku
{

	/**
	 * 商品级别的条形码
	 **/
	public $barcode;

	/**
	 * 基础色数据
	 **/
	public $change_prop;

	/**
	 * sku创建日期 时间格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $created;

	/**
	 * skuDeliveryTimeType
	 **/
	public $delivery_time_type;

	/**
	 * 扩展sku的id
	 **/
	public $extra_id;

	/**
	 *
	 **/
	public $gmt_modified;

	/**
	 * sku所属商品id(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;

	/**
	 * 扩展sku的备注信息
	 **/
	public $memo;

	/**
	 * sku最后修改日期 时间格式：yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;

	/**
	 * sku所属商品数字id
	 **/
	public $num_iid;

	/**
	 * 商家设置的外部id。天猫和集市的卖家，需要登录才能获取到自己的商家编码，不能获取到他人的商家编码。
	 **/
	public $outer_id;

	/**
	 * 属于这个sku的商品的价格 取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
	 **/
	public $price;

	/**
	 * sku的销售属性组合字符串（颜色，大小，等等，可通过类目API获取某类目下的销售属性）,格式是p1:v1;p2:v2
	 **/
	public $properties;

	/**
	 * sku所对应的销售属性的中文名字串，格式如：pid1:vid1:pid_name1:vid_name1;pid2:vid2:pid_name2:vid_name2……
	 **/
	public $properties_name;

	/**
	 * 属于这个sku的商品的数量，
	 **/
	public $quantity;

	/**
	 * sku级别发货时间
	 **/
	public $sku_delivery_time;

	/**
	 * skuFeature
	 **/
	public $sku_feature;

	/**
	 * sku的id
	 **/
	public $sku_id;

	/**
	 * 表示SKu上的产品规格信息
	 **/
	public $sku_spec_id;

	/**
	 * specId
	 **/
	public $spec_id;

	/**
	 * sku状态。 normal:正常 ；delete:删除
	 **/
	public $status;

	/**
	 * 商品在付款减库存的状态下，该sku上未付款的订单数量
	 **/
	public $with_hold_quantity;
}
?>
