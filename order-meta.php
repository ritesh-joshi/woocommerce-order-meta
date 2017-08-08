<?php 
class woocommerceOrderCustom{
	function __construct(){
  	  		add_action( 'woocommerce_add_order_item_meta', array($this,'my_field_order_meta_handler'), 1, 3 );
  	}
  	
	function my_field_order_meta_handler( $item_id, $values, $cart_item_key ) {
		if( isset( $values['design'] ) ) {
        		wc_add_order_item_meta( $item_id, "design", $values['design']);
		}
	}
} 
$woocommerceOrderCustom = new woocommerceOrderCustom();

  ?>
