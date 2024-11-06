<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php
$current_feature = 'anchor-positioning';

if ( ! empty( $attributes['featureID'] ) && ! empty( $attributes['showBaselineStatus'] ) ) {
    $display_status = $attributes['featureID'];
} else {
    $display_status = $current_feature;
}
?>

<baseline-status <?php echo get_block_wrapper_attributes(); ?> featureId="<?php echo esc_html( $display_status ); ?>"></baseline-status>
