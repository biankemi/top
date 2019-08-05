<?php
namespace top\domain;

/**
 * 商品清单
 * @author auto create
 */
class VendingTradeGoodsDetailDto
{
	
	/** 
	 * 实际金额
	 **/
	public $actual_amount;
	
	/** 
	 * 货道编码，方向：从左到右，编码：从1开始
	 **/
	public $cargo_road_no;
	
	/** 
	 * 货道ID
	 **/
	public $cargo_space_id;
	
	/** 
	 * 商品分类
	 **/
	public $category;
	
	/** 
	 * 商品数量
	 **/
	public $count;
	
	/** 
	 * 外部系统商品ID
	 **/
	public $external_goods_id;
	
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
	public $goods_id;
	
	/** 
	 * 商品标题
	 **/
	public $goods_title;
	
	/** 
	 * 商品清单记录ID
	 **/
	public $id;
	
	/** 
	 * 货架编码，方向：从上到下，编码：从1开始
	 **/
	public $shelf_no;
	
	/** 
	 * 交易总额
	 **/
	public $total_amount;
	
	/** 
	 * 外部系统交易流水号
	 **/
	public $trade_flow_no;	
}
?>