<?php

namespace TopClient\domain;

/**
 * 用户信用
 * @author auto create
 */
class UserCredit
{

	/**
	 * 收到的好评总条数。取值范围:大于零的整数
	 **/
	public $good_num;

	/**
	 * 信用等级（是根据score生成的），信用等级：淘宝会员在淘宝网上的信用度，分为20个级别，级别如：level = 1 时，表示一心；level = 2 时，表示二心
	 **/
	public $level;

	/**
	 * 信用总分（“好评”加一分，“中评”不加分，“差评”扣一分。分越高，等级越高）
	 **/
	public $score;

	/**
	 * 收到的评价总条数。取值范围:大于零的整数
	 **/
	public $total_num;
}
?>
