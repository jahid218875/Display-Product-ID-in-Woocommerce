function woocommerce_template_single_title_custom(){
	global $product;
$id = $product->get_id();
    the_title( '<h3 class="product_title entry-title">' , ''.' </br>  [ ID  '.$id.' ]</h3>' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title_custom', 5);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );