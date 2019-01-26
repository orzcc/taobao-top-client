<?php
namespace TopClient\domain;

/**
 * 属性值
 * @author auto create
 */
class PropValue
{

	/**
	 * 类目ID
	 **/
	public $cid;

	/**
	 * 属性值feature
	 **/
	public $features;

	/**
	 * 是否为父类目属性
	 **/
	public $is_parent;

	/**
	 * 修改时间（类目增量专用）
	 **/
	public $modified_time;

	/**
	 * 三种枚举类型：modify，add，delete (增量类目专用)
	 **/
	public $modified_type;

	/**
	 * 属性值
	 **/
	public $name;

	/**
	 * 属性值别名
	 **/
	public $name_alias;

	/**
	 * 属性 ID
	 **/
	public $pid;

	/**
	 * 属性名
	 **/
	public $prop_name;

	/**
	 * 排列序号。取值范围:大于零的整数
	 **/
	public $sort_order;

	/**
	 * 状态。可选值:normal(正常),deleted(删除)
	 **/
	public $status;

	/**
	 * 属性值ID
	 **/
	public $vid;
}
?>
