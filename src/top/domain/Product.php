<?php
namespace TopClient\domain;

/**
 * 产品结构
 * @author auto create
 */
class Product
{

	/**
	 * 产品条码信息，仅在taobao.products.search接口且商城可用
	 **/
	public $barcode_str;

	/**
	 * 产品的非关键属性列表.格式:pid:vid;pid:vid.
	 **/
	public $binds;

	/**
	 * 产品的非关键属性字符串列表.格式同props_str(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";
	 * 分号";"被转换为："#scln#"
	 * </font>)
	 **/
	public $binds_str;

	/**
	 * 商品类目名称
	 **/
	public $cat_name;

	/**
	 * 商品类目ID.必须是叶子类目ID
	 **/
	public $cid;

	/**
	 * 产品的collect次数（不提供数据，返回0)
	 **/
	public $collect_num;

	/**
	 * 品类ID
	 **/
	public $commodity_id;

	/**
	 * 创建时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $created;

	/**
	 * 标识是否为达尔文体系下的产品 。
	 * 如果为空表示是非达尔文体系下的产品
	 * 如果cspu:0 表示是达尔文体系下的产品，有cspu正在待小二审核，但不能发布商品。
	 * 如果cspu:1 表示是达尔文体系下的产品，且有小二确认的cspu，能发布商品
	 **/
	public $cspu_feature;

	/**
	 * 用户自定义属性,结构：pid1:value1;pid2:value2 例如：“20000:优衣库”，表示“品牌:优衣库”
	 **/
	public $customer_props;

	/**
	 * 产品的描述.最大25000个字节
	 **/
	public $desc;

	/**
	 * 标识套装产品是否有效，无效的套装产品需要重新发布
	 **/
	public $is_suite_effective;

	/**
	 * 产品的级别level
	 **/
	public $level;

	/**
	 * 修改时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $modified;

	/**
	 * 产品名称
	 **/
	public $name;

	/**
	 * 外部产品ID
	 **/
	public $outer_id;

	/**
	 * 产品对应的图片路径
	 **/
	public $pic_path;

	/**
	 * 产品的主图片地址.(绝对地址,格式:http://host/image_path)
	 **/
	public $pic_url;

	/**
	 * 产品的市场价.单位为元.精确到2位小数;如:200.07
	 **/
	public $price;

	/**
	 * 产品扩展信息
	 **/
	public $product_extra_infos;

	/**
	 * 产品ID
	 **/
	public $product_id;

	/**
	 * 产品的子图片.目前最多支持4张。fields中设置为product_imgs.id、product_imgs.url、product_imgs.position 等形式就会返回相应的字段
	 **/
	public $product_imgs;

	/**
	 * 产品的属性图片.比如说黄色对应的产品图片,绿色对应的产品图片。fields中设置为product_prop_imgs.id、
	 * product_prop_imgs.props、product_prop_imgs.url、product_prop_imgs.position等形式就会返回相应的字段
	 **/
	public $product_prop_imgs;

	/**
	 * 销售属性值别名。格式为pid1:vid1:alias1;pid1:vid2:alia2。
	 **/
	public $property_alias;

	/**
	 * 产品的关键属性列表.格式：pid:vid;pid:vid
	 **/
	public $props;

	/**
	 * 产品的关键属性字符串列表.比如:品牌:诺基亚;型号:N73(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";
	 * 分号";"被转换为："#scln#"
	 * </font>)
	 **/
	public $props_str;

	/**
	 * 产品的评分次数
	 **/
	public $rate_num;

	/**
	 * 产品的销售量
	 **/
	public $sale_num;

	/**
	 * 产品的销售属性列表.格式:pid:vid;pid:vid
	 **/
	public $sale_props;

	/**
	 * 产品的销售属性字符串列表.格式同props_str(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";
	 * 分号";"被转换为："#scln#"
	 * </font>)
	 **/
	public $sale_props_str;

	/**
	 * 产品卖点描述，长度限制20个汉字
	 **/
	public $sell_pt;

	/**
	 * 产品的店内价格
	 **/
	public $shop_price;

	/**
	 * 产品的标准价格
	 **/
	public $standard_price;

	/**
	 * 当前状态(0 商家确认 1 屏蔽 3 小二确认 2 未确认 -1 删除)
	 **/
	public $status;

	/**
	 * 套装产品关联的子规格,同时该字段不为空标识该产品是套装产品
	 **/
	public $suite_items_str;

	/**
	 * 模板ID
	 **/
	public $template_id;

	/**
	 * 淘宝标准产品编码
	 **/
	public $tsc;

	/**
	 * 垂直市场,如：3（3C），4（鞋城）
	 **/
	public $vertical_market;
}
?>
