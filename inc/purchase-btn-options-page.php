<?php
global $purchase_button_check;
if ( isset( $_POST['purchase_button_submit'] ) ) {
    purchase_button();
}
function purchase_button() {
    $purchase_button_link_text = sanitize_text_field($_POST['purchase_button_textname']);
    $purchase_button_link = esc_url_raw($_POST['purchase_button_linkname']);
    $purchase_button_normal_bg = sanitize_hex_color($_POST['purchase_button_bgcolar']);
    $purchase_button_hover_bg = sanitize_hex_color($_POST['purchase_button_hover_bgcolar']);
    $purchase_button_text_color = sanitize_hex_color($_POST['purchase_button_text_color']);
    $purchase_button_text_hover_color = sanitize_hex_color($_POST['purchase_button_hover_text_color']);
    $purchase_button_bottom_css = sanitize_text_field($_POST['purchase_button_bottom_css']);
    $purchase_button_right_css = sanitize_text_field($_POST['purchase_button_right_css']);
    global $purchase_button_check;
    if ( get_option( 'purchase_button_link_text' ) != trim( $purchase_button_link_text ) ) {
        $purchase_button_check = update_option( 'purchase_button_link_text', trim( $purchase_button_link_text ) );
    }
    if ( get_option( 'purchase_button_link' ) != trim( $purchase_button_link ) ) {
        $purchase_button_check = update_option( 'purchase_button_link', trim( $purchase_button_link ) );
    }
    if ( get_option( 'purchase_button_bg_color' ) != trim( $purchase_button_normal_bg ) ) {
        $purchase_button_check = update_option( 'purchase_button_bg_color', trim( $purchase_button_normal_bg ) );
    }
    if ( get_option( 'purchase_button_bg_hover_color' ) != trim( $purchase_button_hover_bg ) ) {
        $purchase_button_check = update_option( 'purchase_button_bg_hover_color', trim( $purchase_button_hover_bg ) );
    }
    if ( get_option( 'purchase_button_text_color' ) != trim( $purchase_button_text_color ) ) {
        $purchase_button_check = update_option( 'purchase_button_text_color', trim( $purchase_button_text_color ) );
    }
    if ( get_option( 'purchase_button_text_hover_color' ) != trim( $purchase_button_text_hover_color ) ) {
        $purchase_button_check = update_option( 'purchase_button_text_hover_color', trim( $purchase_button_text_hover_color ) );
    }
    if ( get_option( 'purchase_button_bottom_css' ) != trim( $purchase_button_bottom_css ) ) {
        $purchase_button_check = update_option( 'purchase_button_bottom_css', trim( $purchase_button_bottom_css ) );
    }
    if ( get_option( 'purchase_button_right_css' ) != trim( $purchase_button_right_css ) ) {
        $purchase_button_check = update_option( 'purchase_button_right_css', trim( $purchase_button_right_css ) );
    }
    
}
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2><?php esc_html_e( 'Purchase Button Settings', 'purchase-button' );?></h2>
  <?php if ( isset( $_POST['purchase_button_submit'] ) && $purchase_button_check ): ?>
  <div id="message" class="updated below-h2">
    <p><?php esc_html_e( 'Content updated successfully', 'purchase-button' );?></p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox" style="padding: 30px;">
      <h4><strong><?php esc_html_e( 'Add Purchase Button Information Here', 'purchase-button' );?></strong></h4>
      <form method="post" action="">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <label for="purchase_button_textname"><?php esc_html_e( 'Button Text', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="text" id="purchase_button_textname" name="purchase_button_textname" value="<?php echo esc_attr(get_option( 'purchase_button_link_text' )); ?>" style="width:350px;" class="regular-text" />
                    <p class="description" id="button-text-name"><?php esc_html_e( 'Add purchase Button Text Here', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="purchase_button_linkname"><?php esc_html_e( 'Add Purchase URL', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="text" id="purchase_button_linkname" name="purchase_button_linkname" value="<?php echo esc_attr(get_option( 'purchase_button_link' )); ?>" style="width:350px;" />
                    <p class="description" id="button-link"><?php esc_html_e( 'Add purchase Button Link Here', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="purchase_button_bgcolar"><?php esc_html_e( 'Background', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="text" class="color-field" data-default-color="#82b440" id="purchase_button_bgcolar" name="purchase_button_bgcolar" value="<?php echo esc_attr(get_option( 'purchase_button_bg_color' )); ?>"/>
                    <p class="description" id="button-bg"><?php esc_html_e( 'Add purchase Button Normal Background', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="purchase_button_hover_bgcolar"><?php esc_html_e( 'Hover Background', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="text" class="color-field" data-default-color="#82b440" id="purchase_button_hover_bgcolar" name="purchase_button_hover_bgcolar" value="<?php echo esc_attr(get_option( 'purchase_button_bg_hover_color' )); ?>"/>
                    <p class="description" id="button-hbg"><?php esc_html_e( 'Add purchase Button Hover Background', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="purchase_button_text_colorolor"><?php esc_html_e( 'Text Color', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="text" class="color-field" data-default-color="#ffffff" id="purchase_button_text_colorolor" name="purchase_button_text_color" value="<?php echo esc_attr(get_option( 'purchase_button_text_color' )); ?>"/>
                    <p class="description" id="button-textc"><?php esc_html_e( 'Add purchase Button Text Color', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="purchase_button_hover_text_colorolor"><?php esc_html_e( 'Hover Text Color', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="text" class="color-field" data-default-color="#ffffff" id="purchase_button_hover_text_colorolor" name="purchase_button_hover_text_color" value="<?php echo esc_attr(get_option( 'purchase_button_text_hover_color' )); ?>"/>
                    <p class="description" id="button-texhtc"><?php esc_html_e( 'Add purchase Button Hover Text Color', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="bottom"><?php esc_html_e( 'Bottom Position CSS', 'purchase-button' );?></label>
                </th>
                <td>
                <input type="number" id="bottom" name="purchase_button_bottom_css" value="<?php echo esc_attr(get_option( 'purchase_button_bottom_css' )); ?>" style="width:90px;" class="regular-text" />
                <p class="description"><?php esc_html_e( 'Add Bottom Position CSS number without PX', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="purchase_button_right_css"><?php esc_html_e( 'Right Position CSS', 'purchase-button' );?></label>
                </th>
                <td>
                    <input type="number" id="purchase_button_right_css" name="purchase_button_right_css" value="<?php echo esc_attr(get_option( 'purchase_button_right_css' )); ?>" class="regular-text" style="width:90px;" />
                    <p class="description"><?php esc_html_e( 'Add Right Position CSS number without PX', 'purchase-button' );?></p>
                </td>
            </tr>
            <tr>
                <th scope="row">&nbsp;</th>
                <td style="padding-top:10px;  padding-bottom:10px;">
                    <input type="submit" name="purchase_button_submit" value="<?php esc_attr_e('Save changes','purchase-button'); ?>" class="button-primary" />
                </td>
            </tr>
        </table>
      </form>
    </div>
  </div>
</div>