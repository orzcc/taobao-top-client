<?php
namespace TopClient\request;
use TopClient\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.dg.punish.order.get request
 *
 * @author auto create
 * @since 1.0, 2019.01.21
 */
class TbkDgPunishOrderGetRequest
{
	/**
	 * 入参的对象
	 **/
	private $afOrderOption;

	private $apiParas = array();

	public function setAfOrderOption($afOrderOption)
	{
		$this->afOrderOption = $afOrderOption;
		$this->apiParas["af_order_option"] = $afOrderOption;
	}

	public function getAfOrderOption()
	{
		return $this->afOrderOption;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.punish.order.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
