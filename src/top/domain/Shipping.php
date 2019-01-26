<?php
namespace TopClient\domain;

/**
 * 获取的物流订单详情列表 返回的Shipping包含的具体信息为入参fields请求的字段信息
 * @author auto create
 */
class Shipping
{

	/**
	 * 买家昵称
	 **/
	public $buyer_nick;

	/**
	 * 物流公司名称
	 **/
	public $company_name;

	/**
	 * 运单创建时间
	 **/
	public $created;

	/**
	 * 预约取货结束时间
	 **/
	public $delivery_end;

	/**
	 * 预约取货开始时间
	 **/
	public $delivery_start;

	/**
	 * 谁承担运费.可选值:buyer(买家承担),seller(卖家承担运费).
	 **/
	public $freight_payer;

	/**
	 * 标示为是否快捷COD订单
	 **/
	public $is_quick_cod_order;

	/**
	 * 表明是否是拆单，默认值0，1表示拆单
	 **/
	public $is_spilt;

	/**
	 * 返回发货是否成功。
	 **/
	public $is_success;

	/**
	 * 货物名称
	 **/
	public $item_title;

	/**
	 * 收件人地址信息(在传输请求参数Fields字段时，必须使用“receiver_location”才能返回此字段)
	 **/
	public $location;

	/**
	 * 运单修改时间
	 **/
	public $modified;

	/**
	 * 物流订单编号
	 **/
	public $order_code;

	/**
	 * 运单号.具体一个物流公司的运单号码.
	 **/
	public $out_sid;

	/**
	 * 收件人手机号码
	 **/
	public $receiver_mobile;

	/**
	 * 收件人姓名
	 **/
	public $receiver_name;

	/**
	 * 收件人电话
	 **/
	public $receiver_phone;

	/**
	 * 卖家是否确认发货.可选值:yes(是),no(否).
	 **/
	public $seller_confirm;

	/**
	 * 卖家昵称
	 **/
	public $seller_nick;

	/**
	 * 物流订单状态,可选值:CREATED(订单已创建) RECREATED(订单重新创建) CANCELLED(订单已取消) CLOSED(订单关闭) SENDING(等候发送给物流公司) ACCEPTING(已发送给物流公司,等待接单) ACCEPTED(物流公司已接单) REJECTED(物流公司不接单) PICK_UP(物流公司揽收成功) PICK_UP_FAILED(物流公司揽收失败) LOST(物流公司丢单) REJECTED_BY_RECEIVER(对方拒签) ACCEPTED_BY_RECEIVER(发货方式在线下单：对方已签收；自己联系：卖家已发货)
	 **/
	public $status;

	/**
	 * 拆单子订单列表，对应的数据是：该物流订单下的全部子订单
	 **/
	public $sub_tids;

	/**
	 * 交易ID
	 **/
	public $tid;

	/**
	 * 物流方式.可选值:free(卖家包邮),post(平邮),express(快递),ems(EMS).
	 **/
	public $type;
}
?>
