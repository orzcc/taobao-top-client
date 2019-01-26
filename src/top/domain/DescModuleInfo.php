<?php
namespace TopClient\domain;

/**
 * 该数据结构保存宝贝描述对应的规范化信息
 * @author auto create
 */
class DescModuleInfo
{

	/**
	 * 代表宝贝描述中规范化打标使用到的模块id列表，以逗号分隔。
	 **/
	public $anchor_module_ids;

	/**
	 * 类型代表规范化打标的类型：人工或自动化
	 **/
	public $type;
}
?>
