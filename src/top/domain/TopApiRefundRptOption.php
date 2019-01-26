<?php
namespace TopClient\domain;

/**
 * 参数option
 * @author auto create
 */
class TopApiRefundRptOption
{

	/**
	 * 1代表渠道关系id，2代表会员关系id
	 **/
	public $biz_type;

	/**
	 * pagenumber
	 **/
	public $page_no;

	/**
	 * pagesize
	 **/
	public $page_size;

	/**
	 * 1 表示2方，2表示3方
	 **/
	public $refund_type;

	/**
	 * 1-维权发起时间，2-订单结算时间（正向订单），3-维权完成时间，4-订单创建时间
	 **/
	public $search_type;

	/**
	 * 开始时间
	 **/
	public $start_time;
}
?>
