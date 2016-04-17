<?php

namespace TopClient\domain;

/**
 * Room（酒店商品）结构。各字段详细说明可参考接口定义，如：商品发布接口。
 * @author auto create
 */
class Room
{

	/**
	 * 面积
	 **/
	public $area;

	/**
	 * 宽带服务
	 **/
	public $bbn;

	/**
	 * 床型
	 **/
	public $bed_type;

	/**
	 * 早餐
	 **/
	public $breakfast;

	/**
	 * 创建时间
	 **/
	public $created;

	/**
	 * 订金
	 **/
	public $deposit;

	/**
	 * 商品描述
	 **/
	public $desc;

	/**
	 * 手续费
	 **/
	public $fee;

	/**
	 * 酒店商品id
	 **/
	public $gid;

	/**
	 * 购买须知
	 **/
	public $guide;

	/**
	 * 酒店id
	 **/
	public $hid;

	/**
	 * 酒店信息
	 **/
	public $hotel;

	/**
	 * 淘宝商品id
	 **/
	public $iid;

	/**
	 * 修改时间
	 **/
	public $modified;

	/**
	 * 为到店支付卖家特殊使用，代表多种支付类型的房态
	 **/
	public $multi_room_quotas;

	/**
	 * 支付类型
	 **/
	public $payment_type;

	/**
	 * 酒店商品图片Url。多个url用逗号隔开
	 **/
	public $pic_url;

	/**
	 * 价格类型
	 **/
	public $price_type;

	/**
	 * 房型id
	 **/
	public $rid;

	/**
	 * 房态信息。JSON格式串
	 **/
	public $room_quotas;

	/**
	 * 房型信息
	 **/
	public $room_type;

	/**
	 * 设施服务。JSON格式串
	 **/
	public $service;

	/**
	 * 床宽
	 **/
	public $size;

	/**
	 * 状态。1：上架。2：下架。3：删除
	 **/
	public $status;

	/**
	 * 楼层
	 **/
	public $storey;

	/**
	 * 酒店商品名称
	 **/
	public $title;
}
?>
