<?php

namespace TopClient\domain;

/**
 * RoomType（房型）结构。各字段详细说明可参考接口定义，如：房型发布接口。
 * @author auto create
 */
class RoomType
{

	/**
	 * 某卖家提供的房型别名(注：该字段将被废弃)
	 **/
	public $alias_name;

	/**
	 * 房型审核被否决的原因
	 **/
	public $audit_deny_reason;

	/**
	 * 创建时间
	 **/
	public $created;

	/**
	 * 酒店id
	 **/
	public $hid;

	/**
	 * 修改时间
	 **/
	public $modified;

	/**
	 * 房型名称
	 **/
	public $name;

	/**
	 * 房型id
	 **/
	public $rid;

	/**
	 * 状态。0：待审核，1：正常（审核通过），2：审核否决，3：停售
	 **/
	public $status;
}
?>
