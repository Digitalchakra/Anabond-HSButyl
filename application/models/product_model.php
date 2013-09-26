<?php
class Product_model extends CI_Model{
	
function get_products($marketId=NULL)
	{
		if($marketId)
		{
			$this->db->select('*');
			$this->db->join('relation', 'relation.product_id = product.id');
			$this->db->where('relation.market_id',$marketId);
			return $this->db->get('product')->result_array();
		}
		else
		{
			return $this->db->get('product')->result_array();
		}
	}
	function get_product($productId)
	{
		if($productId)
		{
			$this->db->select('*');
			$this->db->where('id',$productId);
			return $this->db->get('product')->result_array();
		}

	}
function get_parents($productId)
	{
		$this->db->select('market_id');
		$this->db->join('product', 'relation.product_id = product.id');
		$this->db->where('relation.product_id',$productId);
		return $this->db->get('relation')->result_array();
	}
}
?>