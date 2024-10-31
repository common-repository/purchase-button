<?php 
    function purchase_button_data() {
    ?>
    <div class="purchase-button-wrapper">
        <a href="<?php echo esc_url(get_option('purchase_button_link')); ?>" class="purchase-button"><i class='fa fa-shopping-cart'></i><?php echo esc_html(get_option('purchase_button_link_text')); ?></a>
    </div>
    <?php
    }
    
    add_action( 'wp_footer', 'purchase_button_data' );
    function purchase_button_add_inline_css() {
        wp_enqueue_style( 'purchase-inline',  plugin_dir_url( __FILE__ ) . '../assets/css/purchase-inline.css' );
        //All the user input CSS settings as set in the plugin settings
        $purchase_button_inline_code = "
        .purchase-button{
            background-color:".esc_attr(get_option('purchase_button_bg_color'))." ;
            color:".esc_attr(get_option('purchase_button_text_color'))." ;
        
        }
        .purchase-button:hover{
            background-color:".esc_attr(get_option('purchase_button_bg_hover_color'))." ;
            color:".esc_attr(get_option('purchase_button_text_hover_color'))." ;
        }
        ";
        $purchase_button_inline_code .= "
        .purchase-button-wrapper{
            bottom:".esc_attr(get_option('purchase_button_bottom_css'))."px ;
            right:".esc_attr(get_option('purchase_button_right_css'))."px ;
        }";
    //Add the above custom CSS via wp_add_inline_style
    wp_add_inline_style( 'purchase-inline', $purchase_button_inline_code ); //Pass the variable into the main style sheet ID
    }
add_action( 'wp_enqueue_scripts', 'purchase_button_add_inline_css' ); //Enqueue the CSS style
?>