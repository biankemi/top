<?php

namespace top\request;
use top\RequestCheckUtil;

/**
 * TOP API: alibaba.lst.vending.equipment.enable request
 * 
 * @author auto create
 * @since 1.0, 2018.04.16
 */
class AlibabaLstVendingEquipmentEnableRequest
{
	/** 
	 * 设备唯一标识
	 **/
	private $equipmentCode;
	
	/** 
	 * 设备供应商唯一标识
	 **/
	private $supplierCode;
	
	private $apiParas = array();
	
	public function setEquipmentCode($equipmentCode)
	{
		$this->equipmentCode = $equipmentCode;
		$this->apiParas["equipment_code"] = $equipmentCode;
	}

	public function getEquipmentCode()
	{
		return $this->equipmentCode;
	}

	public function setSupplierCode($supplierCode)
	{
		$this->supplierCode = $supplierCode;
		$this->apiParas["supplier_code"] = $supplierCode;
	}

	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.lst.vending.equipment.enable";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->equipmentCode,"equipmentCode");
		RequestCheckUtil::checkNotNull($this->supplierCode,"supplierCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
