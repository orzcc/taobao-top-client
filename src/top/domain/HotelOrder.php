<?php

namespace TopClient\domain;

/**
 * HotelOrder（酒店订单）结构。各字段详细说明可参考接口定义。注意：trade_status，refund_status，logistics_status不是严格准确的，请以交易API，物流API等得到的订单状态、物流状态为准确依据。
 * @author auto create
 */
class HotelOrder
{

	/**
	 * 支付宝交易号，22位字符
	 **/
	public $alipay_trade_no;

	/**
	 * 买家最早到达时间
	 **/
	public $arrive_early;

	/**
	 * 买家最晚到达时间
	 **/
	public $arrive_late;

	/**
	 * 买家淘宝账号
	 **/
	public $buyer_nick;

	/**
	 * 入住时间
	 **/
	public $checkin_date;

	/**
	 * 离店时间
	 **/
	public $checkout_date;

	/**
	 * 备注，存储关于礼品的信息，比如杜蕾斯
	 **/
	public $comment;

	/**
	 * 联系人姓名
	 **/
	public $contact_name;

	/**
	 * 联系人电话
	 **/
	public $contact_phone;

	/**
	 * 备用联系人电话
	 **/
	public $contact_phone_bak;

	/**
	 * 订单创建时间
	 **/
	public $created;

	/**
	 * 结束时间
	 **/
	public $end_time;

	/**
	 * 商品id
	 **/
	public $gid;

	/**
	 * 入住人信息
	 **/
	public $guests;

	/**
	 * 酒店id
	 **/
	public $hid;

	/**
	 * 物流状态。STATUS_UNCONSIGNED：未发货 -> 等待卖家发货。STATUS_CONSIGNED：已发货 -> 等待买家确认收货。STATUS_DELIVERED：已收货 -> 交易成功。STATUS_REVERT：已经退货 -> 交易失败。STATUS_DELIVERED_PART：部分发货 -> 交易成功。STATUS_NO_OUT_ORDER：还未创建物流订单
	 **/
	public $logistics_status;

	/**
	 * 买家留言
	 **/
	public $message;

	/**
	 * 订单修改时间
	 **/
	public $modified;

	/**
	 * 天数
	 **/
	public $nights;

	/**
	 * 酒店订单id
	 **/
	public $oid;

	/**
	 * 合作方订单号,最长250个字符
	 **/
	public $out_oid;

	/**
	 * 付款时间
	 **/
	public $pay_time;

	/**
	 * 实付款（分）
	 **/
	public $payment;

	/**
	 * 下单时每间夜的价格（分）
	 **/
	public $prices;

	/**
	 * 退款状态。STATUS_WAIT_SELLER_AGREE：买家已经申请退款，等待卖家同意。STATUS_WAIT_BUYER_RETURN_GOODS：卖家已经同意退款，等待买家退货。STATUS_WAIT_SELLER_CONFIRM_GOODS：买家已经退货，等待卖家确认收货。STATUS_CLOSED：退款关闭。STATUS_SUCCESS：退款成功->买家取消预定。STATUS_SELLER_REFUSE_BUYER：卖家拒绝退款。STATUS_WAIT_OUT_PAY_SYSTEM_REFUND：等待外部交易系统退款。STATUS_NO_REFUND：没有申请退款。STATUS_ACTIVE_REFUND：有活动退款。STATUS_END_REFUND：退款结束。
	 **/
	public $refund_status;

	/**
	 * 房型id
	 **/
	public $rid;

	/**
	 * 房间数
	 **/
	public $room_number;

	/**
	 * 卖家淘宝账号
	 **/
	public $seller_nick;

	/**
	 * 淘宝订单id
	 **/
	public $tid;

	/**
	 * 总房价（分）
	 **/
	public $total_room_price;

	/**
	 * 交易状态。WAIT_BUYER_PAY：未冻结/未付款 -> 等待买家付款。WAIT_SELLER_SEND_GOODS：已冻结/已付款 -> 等待卖家发货 -> 等待卖家确认。TRADE_CLOSED：已退款 -> 交易关闭。TRADE_FINISHED：已转交易 -> 交易成功。TRADE_NO_CREATE_PAY：没有创建支付宝交易。TRADE_CLOSED_BY_TAOBAO：交易被淘宝关闭->卖家关闭交易或卖家核实未入住。TRADE_SUCCESS：预定成功（等待卖家核实入住）
	 **/
	public $trade_status;

	/**
	 * 支付类型。A：全额支付。B：灵活支付－手续费。C：灵活支付－订金。D：灵活支付－手续费/间夜
	 **/
	public $type;
}
?>
