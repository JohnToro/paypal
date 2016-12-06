<?php
/**
*   English language file
*
*   @author     Lee Garner <lee@leegarner.com>
*   @author     John Toro <john.toro@newroute.net>
*   @copyright  Copyright (c) 2009-2016 Lee Garner <lee@leegarner.com>
*   @package    paypal
*   @version    0.5.9
*   @license    http://opensource.org/licenses/gpl-2.0.php
*               GNU Public License v2 or later
*   @filesource
*/


/** Global array to hold all plugin-specific configuration items. */
$LANG_PP = array (
'plugin'            => 'Paypal',
'main_title'        => 'Catalogo de Productos',
'admin_title'       => 'Paypal - Administración',
'blocktitle'        => 'Productos',
'cart_blocktitle'   => 'Shopping Cart',
'srchtitle'         => 'Productos',
'products'          => 'Productos',
'category'          => 'Categoría',
'featured_product'  => 'Producto Destacado',
'popular_product'   => 'Productos Populares',
'product_categories' => 'Product Categories',
'mnu_paypal'        => 'Productos',
'mnu_admin'         => 'Admin',
'product'           => 'Producto/SKU',
'qty'               => 'Cant.',
'description'       => 'Descripción',
'short_description' => 'Descripción Corta',
'keywords'          => 'Etiquetas',
'exp_time_days'     => 'Expiración (días)',
'purch_date'        => 'Purchase Date',
'txn_id'            => 'Txn ID',
'expiration'        => 'Expiración',
'download'          => 'Download',
'downloadable'      => 'Downloadable',
'price'             => 'Precio',
'quantity'          => 'Cantidad',
'item_total'        => 'Item Total',
'total'             => 'Total',
'cart_empty'        => 'Your cart is empty.',
'purchase_history'  => 'Purchase History',
'ipnlog'            => 'IPN Log',
'new_product'       => 'Crear (P)',
'new_category'      => 'Crear (C)',
'product_list'      => 'Productos',
'category_list'     => 'Categorías',
'admin_hdr'         => 'Create, delete and modify products in the catalog.  You may also view purchase histories and the Paypal IPN data for each transaction.',
'admin_hdr_editattr' => 'Create or update a product attribute.',
'admin_hdr_catlist' => 'Edit product categories, or select "New Category" to create a new one.  A category may be deleted only if it is not associated with any products.',
'admin_hdr_ipnlog'  => 'This is a list of IPN messages that have been received.  Click on either the ID or the Txn ID to view the message detail.',
'admin_hdr_other'   => 'Here you can perform extra, seldom-used functions.  Click "Reset All Buttons" to regenerate all PayPal buttons.',
'admin_hdr_history' => 'This is a list of all purchases in the database.  Click on a link for more information about that item',
'admin_hdr_attributes' => 'Attributes can be associated with products.  For instance, you may wish to offer small, medium and large sizes, and charge extra for large.<br /><span class="pluginPaypalAlertText">Note:  Products with attributes cannot be purchased via "Buy-Now" buttons.  The shopping cart must be enabled.</span>',
'admin_hdr_wfadmin' => 'Enable, Disable, and Re-order the items that must be completed before checkout. Workflow items cannot be deleted. &quot;Confirm Order&quot; is always the last item in the workflow.',
'admin_hdr_wfstatus' => 'Update order status values. You can edit and order them, and indicate whether the buyer is notified when a status becomes active.',
'username'          => 'User Name',
'pmt_status'        => 'Payment Status',
'status'            => 'Status',
'update_status'     => 'Update Status',
'purchaser'         => 'Purchaser',
'gateway'           => 'Gateway',
'gateways'          => 'Payment Gateways',
'workflows'         => 'Workflow/Status',
'ip_addr'           => 'IP Address',
'datetime'          => 'Date/Time',
'verified'          => 'Verified',
'ipn_data'          => 'Full IPN Data',
'viewcart'          => 'View Cart',
'vieworder'         => 'Confirm Order',
'images'            => 'Imágenes',
'cat_image'         => 'Category Image',
'click_to_enlarge'  => 'Click to Enlarge Image',
'enabled'           => 'Habilitado',
'disabled'          => 'Deshabilitado',
'featured'          => 'Destacado',
'taxable'           => 'Imponible',
'delete'            => 'Borrar',
'thanks_title'      => 'Thank you for your order!',
'yes'               => 'Sí',
'no'                => 'No',
'closed'            => 'Closed',
'true'              => 'True',
'false'             => 'False',
'info'              => 'Información',
'warning'           => 'Warning',
'error'             => 'Error',
'alert'             => 'Alerta',
'invalid_product_id' => 'An invalid product ID was requested',
'access_denied_msg' => 'You do not have access to this page. <p />' .
    'If you believe you have reached this message in error, ' .
    'please contact your site administrator.<p />' .
    'All attempts to access this page are logged.',
'access_denied'     => 'Access Denied',
'select_file'       => 'Seleccionar Archivo',
'or_upload_new'     => 'O, cargar un archivo',
'random_product'    => 'Random Product',
'featured_product'  => 'Featured Product',
'invalid_form'      => 'The submitted form has missing or invalid fields, or could be a duplicate record.',
'buy_now'           => 'Comprar',
'add_to_cart'       => 'Add to Cart',
'donate'            => 'Donar',
'txt_buttons'       => 'Botones',
'incl_blocks'       => 'Include in Blocks',
'buttons'           => array(
        'buy_now'   => 'Buy Now',
        'add_cart'  => 'Add to Cart',
        'donation'  => 'Donar',
        'subscribe' => 'Subscribir',
        'pay_now'   => 'Pagar',
        'checkout'  => 'Checkout',
        'external'  => 'Productos Externos',
    ),
'prod_type'         => 'Tipo',
'prod_types'        => array(
        1 => 'Physical', 2 => 'Downloadable', 4 => 'Other Virtual',
        3 => 'Physical + Download',
    ),
'edit'              => 'Modificar',
'create_category'   => 'Create a New Category',
'cat_name'          => 'Category Name',
'parent_cat'        => 'Parent Category',
'top_cat'           => '-- Arriba --',
'saveproduct'       => 'Guardar',
'deleteproduct'     => 'Borrar',
'deleteopt'         => 'Delete Option',
'savecat'           => 'Save Category',
'saveopt'           => 'Save Option',
'deletecat'         => 'Delete Category',
'product_id'        => 'Product ID',
'other_func'        => 'Other Functions',
'q_del_item'        => 'Are you sure you want to delete this item?',
'clearform'         => 'Reiniciar',
'delivery_info'     => 'Delivery Information',
'product_info'      => 'Product Information',
'delete_image'      => 'Delete Image',
'weight'            => 'Peso',
'no_download_path'  => 'No file download path configured.',
'sortby'            => 'Ordenar Por',
'name'              => 'Nombre',
'dt_add'            => 'Date Added',
'ascending'         => 'Ascendentemente',
'descending'        => 'Descendentemente',
'sortdir'           => 'Sort Direction',
'comments'          => 'Comentarios',
'ratings_enabled'   => 'Calificar',
'no_shipping'       => 'No Shipping',
'fixed'             => 'Fixed',
'pp_profile'        => 'Use Gateway Profile',
'shipping_type'     => 'Shipping',
'shipping_amt'      => 'Amount',
'per_item'          => 'Per Item',
'storefront'        => 'Ir a la Tienda',
'options_msg'       => 'Adding options will prevent encrypted buttons from being created.',
'new_attr'          => 'Crear (A)',
'attr_list'         => 'Atributos',
'attr_name'         => 'Atributo',
'attr_value'        => 'Valor',
'attr_price'        => 'Precio',
'order'             => 'Orden',
'err_missing_name'  => 'Missing product name',
'err_missing_desc'  => 'Missing product description',
'err_missing_cat'   => 'Missing category',
'err_missing_file'  => 'Missing file for downloadable product',
'err_missing_exp'   => 'Missing expiration period for downloadable product',
'err_phys_need_price' => 'Non-downloadable items must have a positive price value',
'missing_fields'    => 'Missing Fields',
'no_javascript'     => 'Javascript is required for this site to function properly. Your cart may not be updated accurately, and your order may be delayed unless you enable Javascript in your browser.',
'clk_help'      => 'Click for Help',
'ind_req_fld'   => 'Indicates a required field',
'required'      => 'Required',
'ipnlog_id'     => 'IPN Log ID',
'trans_id'      => 'Transaction ID',
'paid_by'       => 'Paid by',
'pmt_method'    => 'Payment Method',
'pmt_gross'     => 'Gross Payment',
'billto_info'   => 'Payment Information',
'shipto_info'   => 'Shipping Information',
'home'          => 'Home',
'none'          => 'None',
'browse_cat'    => 'Browse Catalog',
'search_catalog' => 'Search Catalog',
'by_cat'        => 'By Category',
'by_name'       => 'By Name',
'search'        => 'Buscar',
'any'           => 'Any',
'customize'     => 'Customize',
'fullname'      => 'Nombre',
'lastname'      => 'Apellido',
'company'       => 'Compañía',
'address1'      => 'Address Line 1',
'address2'      => 'Address Line 2',
'country'       => 'País',
'city'          => 'Ciudad',
'state'         => 'Esatdo',
'zip'           => 'Código Postal',
'name_or_company' => 'Name or Company',
'make_def_addr' => 'Make default address',
'sel_shipto_addr' => 'Please select the shipping address from your address book, or enter a new one below.',
'sel_billto_addr' => 'Please select the billing address from your address book, or enter a new one below.',
'checkout'      => 'Check Out',
'bill_to'       => 'Bill To',
'ship_to'       => 'Ship To',
'submit_order'  => 'Submit Order',
'orderby'       => 'Order',
'billto'        => 'Billing Address',
'shipto'        => 'Shipping Address',
'gw_notinstalled' => 'Gateways not installed',
'empty_cart'    => 'Empty Cart',
'update_cart'   => 'Update Cart',
'order_summary' => 'Order Summary',
'order_date'    => 'Order Date',
'order_number'  => 'Order Number',
'new_address'   => 'New Address',
'shipping'      => 'Shipping',
'handling'      => 'Handling',
'tax'           => 'Tax',
'or'            => 'or',
'purch_signup'  => 'Create an Account',
'buyer_email'   => 'Buyer E-Mail',
'todo_noproducts' => 'No hay productos en el catalogo.',
'todo_nogateways' => 'No hay pasarelas de pago habilitadas.',
'orderstatus'   => array(
        'pending'   => 'Pendiente',
        'paid'      => 'Pagado',
        'shipped'   => 'Enviado',
        'processing' => 'Procesando',
        'closed'    => 'Cerrada',
        'refunded'  => 'Reembolsado',
    ),
'message' => 'Mensaje',
'timestamp' => 'Timestamp',
'notify' => 'Notificar',
'updated_x_orders' => 'Updated %d orders.',
'onhand' => 'Qty. on hand',
'available' => 'Disponible',
'track_onhand' => 'Track Quantity?',
'continue_shopping' => 'Continue Shopping',
'pmt_error' => 'There was an error processing your payment.',
'pmt_made_via' => 'Payment was made via %s on %s.',
'new_option' => 'Add a new option',
'oversell_action' => 'Allow overselling/backordering?',
'oversell_allow' => 'Allow, display product and accept orders',
'oversell_deny' => 'Deny, display product but prevent ordering',
'oversell_hide' => 'Hide product from catalog',
'list_sort_options' => array(
    //'most_popular' => 'Most Popular',
    'name' => 'Name A-Z',
    'price_l2h' => 'Price - Low to High',
    'price_h2l' => 'Price - High to Low',
    //'top_rated' => 'Top Rated',
    'newest' => 'Newest',
    ),
'qty_disc_text' => 'Discounts calculated at checkout',
'order_instr' => 'Special Order Instructions',
'copy_attributes' => 'Copy all attributes from one product to another product or category.<br />Existing attributes will not be changed',
'copy_from' => 'Copy From',
'target_prod' => 'Target Product',
'target_cat' => 'Target Category',
'custom' => 'Text Fields (separate by &quot;|&quot;&nbsp;)',
'visible_to' => 'Visible To',
'anon_and_empty' => 'There are no products available for purchase by anonymous users. Try logging into the site to view the catalog.',
'back_to_catalog' => 'Back to Catalog',
'del_item_instr' => 'Items that have no purchases can be deleted. If an item has been purchased it can only be disabled.',
'del_cat_instr' => 'Categories containing products cannot be deleted.',
'select_image' => 'Select New Image',
'discount' => 'Discount',
'min_purch' => 'Min. Purchase',
'qty_discounts' => 'Quantity Discounts',
'custom_instr' => '(separate by &quot;|&quot;&nbsp;)',
'sale_price' => 'Sale Price',
'qty_discounts_avail' => 'Quantity Discounts Available',
'from' => 'From',
'to' => 'To',
'terms_and_cond' => 'Terms and Conditions',
'item_history' => 'Item Purchase History',
'reset' => 'Reset',
'datepicker' => 'Date Selector',
'workflows' => 'Order Workflows',
'statuses' => 'Order Statuses',
'reports' => 'Reports',
'reports_avail' => array(
    'orderlist' => 'Order Listing',
    'paymentlist' => 'Payment Listing',
    ),
'my_orders' => 'My Orders',
);
if ($_PP_CONF['ena_ratings']) {
    $LANG_PP['list_sort_options']['top_rated'] = 'Top Rated';
}

/** Message indicating plugin version is up to date */
$PLG_paypal_MESSAGE03 = 'Error retrieving current version number';
$PLG_paypal_MESSAGE04 = 'Error performing the plugin upgrade';
$PLG_paypal_MESSAGE05 = 'Error upgrading the plugin version number';
$PLG_paypal_MESSAGE06 = 'Plugin is already up to date';
$PLG_paypal_MESSAGE07 = 'Invalid download token given';

/** Language strings for the plugin configuration section */
$LANG_configsections['paypal'] = array(
    'label' => 'PayPal',
    'title' => 'PayPal Configuration'
);

/** Language strings for the field names in the config section */
$LANG_confignames['paypal'] = array(
    'currency'      => 'Currency',
    'anon_buy'      => 'Anonymous users can buy?',
    'purch_email_user' => 'Email User upon purchase?',
    'purch_email_user_attach' => 'Attach files to user\'s email message?',
    'purch_email_anon' => 'Email anonymous buyer upon purchase?',
    'purch_email_anon_attach' => 'Attach files to anonymous buyer email?',
    'prod_per_page' => 'Max products displayed per page',
    'order'         => 'Default sort order for product display',
    'menuitem'      => 'Add to main menu?',
    'cat_columns'   => 'Category Columns',
    'max_images'    => 'Max number of product images',
    'image_dir'     => 'Path to Images',
    'max_thumb_size' => 'Max Thumbnail Dimension (px)',
    'img_max_width' => 'Max Image Width (px)',
    'img_max_height' => 'Max Image Height (px)',
    'max_image_size' => 'Max. Product Image Size',
    'max_file_size' => 'Max size for downloadable files, in MB',
    'download_path' => 'Full path to downloadable files',
    'commentsupport' => 'Comments Supported?',
    'tmpdir'        => 'Temporary Working Directory',
    'ena_comments'  => 'Enable Comments?',
    'ena_ratings'   => 'Enable Product Ratings?',
    'anon_can_rate' => 'Anonymous can rate products?',
    'displayblocks'  => 'Display glFusion Blocks',
    'debug_ipn'     => 'Debug IPN Messages?',
    'debug'         => 'Program Debug?',
    'purch_email_admin' => 'Notify administrators of purchases?',
    'def_enabled'   => 'Product Enabled?',
    'def_featured'  => 'Product Featured?',
    'def_taxable'   => 'Product is Taxable?',
    'def_track_onhand' => 'Track Qty On Hand?',
    'def_oversell'  => 'Action when Qty On Hand = 0',
    'blk_random_limit' => 'Number of products in Random block',
    'blk_featured_limit' => 'Number of products in Featured block',
    'blk_popular_limit' => 'Number of products in Popular block',
    'def_expiration'    => 'Default Expiration Days for Downloads',
    'admin_email_addr' => 'Administrator E-Mail Address',
    'get_street' => 'Street Address',
    'get_city'  => 'City',
    'get_state' => 'State',
    'get_postal' => 'Postal Code',
    'get_country' => 'Country',
    'ena_cart' => 'Enable shopping cart?',
    'weight_unit' => 'Unit of Weight Measurement',
    'shop_name' => 'Shop Name',
    'shop_addr' => 'Shop Address',
    'product_tpl_ver' => 'Product View Template',
    'list_tpl_ver' => 'Product List Template',
    'cache_max_age' => 'Max file cache age in seconds',
    'tc_link' => 'Link to Terms and Conditions',
);

/** Language strings for the subgroup names in the config section */
$LANG_configsubgroups['paypal'] = array(
    'sg_main' => 'Main Settings',
    'sg_shop'   => 'Shop Information',
);

/** Language strings for the field set names in the config section */
$LANG_fs['paypal'] = array(
    'fs_main'   => 'General Settings',
    'fs_images' => 'Image Settings',
    'fs_paths'  => 'Images and Paths',
    'fs_encbtn' => 'Working Area',
    'fs_prod_defaults' => 'New Product Defaults',
    'fs_blocks' => 'Block Settings',
    'fs_debug'  => 'Debugging',
    'fs_addresses' => 'Address Collection',
    'fs_shop'   => 'Shop Details',
);

/**
*   Language strings for the selection option names in the config section.
*
*   Item 4 is also used in functions.inc to provide a currency selector.
*/
$LANG_configselects['paypal'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => TRUE, 'False' => FALSE),
    2 => array('Yes' => 1, 'No' => 0),
    3 => array('Never' => 0, 'Always' => 1, 'Logged-in Users' => 2),
    4 => array('USD - US Dollar' => 'USD',
            'AUD - Austrialian Dollar' => 'AUD',
            'CAD - Canadian Dollar' => 'CAD',
            'EUR - Euro' => 'EUR',
            'GBP - British Pound' => 'GBP',
            'JPY - Japanese Yen' => 'JPY',
            'NZD - New Zealand Dollar' => 'NZD',
            'CHF - Swiss Franc' => 'CHF',
            'HKD - Hong Kong Dollar' => 'HKD',
            'SGD - Singapore Dollar' => 'SGD',
            'SEK - Swedish Krona' => 'SEK',
            'DKK - Danish Krone' => 'DKK',
            'PLN - Polish Zloty' => 'PLN',
            'NOK - Norwegian Krone' => 'NOK',
            'HUF - Hungarian Forint' => 'HUF',
            'CZK - Czech Koruna' => 'CZK',
            'ILS - Israeli Shekel' => 'ILS',
            'MXN - Mexican Peso' => 'MXN',
            'PHP - Philippine Peso' => 'PHP',
            'TWD - Taiwan New Dollars' => 'TWD',
            'THB - Thai Baht' => 'THB',
    ),
    5 => array('Nombre' => 'name', 'Pricio' => 'price', 'Product ID' => 'id'),
    6 => array('Siempre' => 2, 'Physical Items Only' => 1, 'Never' => 0),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    13 => array('None' => 0, 'Left' => 1, 'Right' => 2, 'Both' => 3),
    14 => array('Not Available' => 0, 'Optional' => 1, 'Required' => 2),
    15 => array('Pounds' => 'lbs', 'Kilograms' => 'kgs'),
    16 => array('Allow Backordering' => 0,
            'Keep in Catalog, Prevent Sales' => 2,
            'Hide from Catalog' => 2),
);


?>
