//Add Payment Type to WooCommerce Admin Email
add_action( 'woocommerce_email_after_order_table', 'add_payment_method_to_admin_new_order', 15, 2 );
 
function add_payment_method_to_admin_new_order( $order, $is_admin_email ) {
  if ( $is_admin_email ) {
    echo '<p><strong>Payment Method:</strong> ' . $order->payment_method_title . '</p>';
  }
}
