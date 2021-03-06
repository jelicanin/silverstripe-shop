<?php
/**
 * Additional functions for Item lists.
 */
class OrderItemList extends HasManyList{
	
	function Quantity(){
		return $this->Sum('Quantity');
	}
	
	function Plural(){
		return $this->Quantity() > 1;
	}
	
	/**
	 * Sums up all of desired field for items, and multiply by quantity.
	 * Optionally sum product field instead.
	 * 
	 * @param $field - field to sum
	 * @param boolean $onproduct - sum from product or not
	 * @return number - sum total of field
	 */
	public function Sum($field, $onproduct = false){
		$total = 0;
		foreach($this->getIterator() as $item){
			$quantity = ($field == "Quantity") ? 1 : $item->Quantity;
			if(!$onproduct){
				$total += $item->$field * $quantity;
			}elseif($product = $item->Product()){
				$total += $product->$field * $quantity;
			}
		}
		return $total;
	}
	
}
