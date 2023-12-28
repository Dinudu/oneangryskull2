<?php
global $product;

// Get all product attributes
$product_attributes = wc_get_product_attributes($product->get_id());

// Generate dropdown menus for each attribute
foreach ($product_attributes as $attribute) {
    $attribute_name = wc_attribute_label($attribute->get_name());
    $attribute_values = $attribute->get_options();

    // Create dropdown menu
    woocommerce_dropdown_variation_attribute_options($attribute_values);
}
?>