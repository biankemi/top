<?php
namespace top\domain;

/**
 * 执行成功结果集
 * @author auto create
 */
class VendingGoodsDto
{
	
	/** 
	 * 商品条码
	 **/
	public $barcode;
	
	/** 
	 * 商品分类
	 **/
	public $category;
	
	/** 
	 * 折扣价
	 **/
	public $discount_price;
	
	/** 
	 * 设备编码
	 **/
	public $equipment_code;
	
	/** 
	 * 外部系统商品ID
	 **/
	public $external_id;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品ID
	 **/
	public $id;
	
	/** 
	 * 商品图片
	 **/
	public $img_path;
	
	/** 
	 * 商品原价
	 **/
	public $original_price;
	
	/** 
	 * 状态：1上架，2下架，3删除
	 **/
	public $status;
	
	/** 
	 * 供应商编码
	 **/
	public $supplier_code;
	
	/** 
	 * 商品标题
	 **/
	public $title;
	
	/** 
	 * 计量单位，如：个、件、包
	 **/
	public $unit;	
}
?>