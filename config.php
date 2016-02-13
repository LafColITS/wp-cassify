<?php 

/**
 *	Default options values.
 */
 
$wp_cassify_default_login_servlet = 'login';
$wp_cassify_default_logout_servlet = 'logout';
$wp_cassify_default_service_validate_servlet = 'serviceValidate';
$wp_cassify_default_wordpress_blog_http_port = '80';
$wp_cassify_default_wordpress_blog_https_port = '443';
$wp_cassify_default_xpath_query_to_extact_cas_user = '//cas:serviceResponse/cas:authenticationSuccess/cas:user';
$wp_cassify_default_xpath_query_to_extact_cas_attributes  = '//cas:serviceResponse/cas:authenticationSuccess/cas:attributes';

// CAS Protocol version
$wp_cassify_default_protocol_version_values = array( 
	'2' => '2',
	'3' => '3'
); 

$wp_cassify_default_redirect_parameter_name = 'redirect_to';
$wp_cassify_default_service_ticket_parameter_name = 'ticket';
$wp_cassify_default_service_service_parameter_name = 'service';

$wp_cassify_default_ssl_cipher_values = array( 
	'0' => 'CURL_SSLVERSION_DEFAULT', 
	'1' => 'CURL_SSLVERSION_TLSv1', 
	'2' => 'CURL_SSLVERSION_SSLv2', 
	'3' => 'CURL_SSLVERSION_SSLv3', 
	'4' => 'CURL_SSLVERSION_TLSv1_0', 
	'5' => 'CURL_SSLVERSION_TLSv1_1',
	'6' => 'CURL_SSLVERSION_TLSv1_2'
);

$wp_cassify_default_allow_deny_order = array(
	'allow, deny',
	'deny, allow');

$wp_cassify_plugin_options_list = array(
	'wp_cassify_base_url',
	'wp_cassify_protocol_version',
	'wp_cassify_disable_authentication',
	'wp_cassify_create_user_if_not_exist',
	'wp_cassify_ssl_cipher',
	'wp_cassify_redirect_url_after_logout',
	'wp_cassify_login_servlet',
	'wp_cassify_logout_servlet',
	'wp_cassify_service_validate_servlet',
	'wp_cassify_xpath_query_to_extact_cas_user',
	'wp_cassify_xpath_query_to_extact_cas_attributes',
	'wp_cassify_attributes_list',
	'wp_cassify_allow_deny_order',
	'wp_cassify_autorization_rules',
	'wp_cassify_user_role_rules',
	'wp_cassify_redirect_url_if_not_allowed',
	'wp_cassify_redirect_url_white_list',
	'wp_cassify_user_attributes_mapping_list'
);

$wp_cassify_wordpress_user_meta_list = array(
	'user_nicename',
	'user_email',
	'user_registered',
	'user_url',
	'display_name',
	'nickname',
	'first_name',
	'last_name',
	'description',
	'custom_user_meta'
);

$wp_cassify_operator_prefix = '-';

$wp_cassify_allowed_operators = array( 
	$wp_cassify_operator_prefix . 'EQ',
	$wp_cassify_operator_prefix . 'NEQ',
	$wp_cassify_operator_prefix . 'CONTAINS',
	$wp_cassify_operator_prefix . 'STARTWITH',
	$wp_cassify_operator_prefix . 'ENDWITH',
	$wp_cassify_operator_prefix . 'AND',
	$wp_cassify_operator_prefix . 'OR'
);

$wp_cassify_allowed_parenthesis = array(
	'(',
	')',
	'[',
	']'
);

$wp_cassify_error_messages = array( 
	'operator_not_found' => 'operator not found',
	'operand_not_found' => 'operand not found',
	'solve_item_error' => 'solve item error'
);

$wp_cassify_match_first_level_parenthesis_group_pattern = '/\[([^\]]+)\]/im';
$wp_cassify_match_second_level_parenthesis_group_pattern = '/\(([^\)]+)\)/im';
$wp_cassify_match_cas_variable_pattern = '/CAS{([^}]+)}/im';
$wp_cassify_matched_parenthesis_groups_simplified = array(
	'parenthesis_group' => '',
	'left_operand' => '',
	'right_operand' => '',
	'operator' => '',
	'result' => FALSE);
?>
