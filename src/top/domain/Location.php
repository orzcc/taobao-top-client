<?php

namespace TopClient\domain;

/**
 * 用户地址
 * @author auto create
 */
class Location
{
	
	/** 
	 * 详细地址，最大256个字节（128个中文）
	 **/
	public $address;
	
	/** 
	 * 所在城市（中文名称）
	 **/
	public $city;
	
	/** 
	 * 国家名称
	 **/
	public $country;
	
	/** 
	 * 区/县（只适用于物流API）
	 **/
	public $district;
	
	/** 
	 * 所在省份（中文名称）
	 **/
	public $state;
	
	/** 
	 * 邮政编码
	 **/
	public $zip;	
}
?>