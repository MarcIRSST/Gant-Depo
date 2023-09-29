<?php
/**
 * Load composer namespacing
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Includes
 */

import_folder( __DIR__ . '/inc' );
import_folder( __DIR__ . '/commands' );

/**
 *  Non-environnement Constants
 */
define( 'DEFAULT_IMAGE', 'https://source.unsplash.com/random' );

/**
 * Load translations for wpdocs_theme
 */
function wpdocs_theme_setup()
{
	load_theme_textdomain('irsst', get_template_directory() . '/languages');
}

function add_file_types_to_uploads($mimes)
{
	$mimes['svg'] = 'image/svg';
	$mimes['epub'] = 'application/epub+zip';
	return $mimes;
}

/**
 * Hook actions
 * functions are imported from files in /inc
 * default values are pririty 10 and args 1
 */
$hooks_actions = [
	'init' => [
		15 => ['name' => 'register_post_types', 'args' => 1],
		10 => ['name' => 'register_taxonomies', 'args' => 1],
	],
	'after_setup_theme' => [
		10 => ['name' => 'theme_supports', 'args' => 1],
	],
	'wp_enqueue_scripts' => [
		10 => ['name' => 'adding_scripts_and_styles', 'args' => 1],
	],
	'enqueue_block_editor_assets' => [
		10 => ['name' => 'be_gutenberg_scripts', 'args' => 1],
	],
	'timber/context' => [
		10 => ['name' => 'add_to_context', 'args' => 1],
	],
	'timber/twig' => [
		10 => ['name' => 'add_to_twig', 'args' => 1],
	],
	'acf/init' => [
		10 => ['name' => 'register_custom_blocks', 'args' => 1],
	],
	'pre_get_posts' => [
		10 => ['name' => 'meta_or_title', 'args' => 1],
	],
	'phpmailer_init' => [
        10 => ['name' => 'mailtrap', 'args' => 1],
    ],
	'generate_rewrite_rules' => [
		10 => ['name' => 'add_rewrite_rules', 'args' => 1]
	]
];
foreach ( $hooks_actions as $hook => $functions ) {
	foreach ($functions as $priority => $function) {
		add_action($hook, $function['name'], $priority, $function['args']);
	}
};

/**
 * Hook filters
 * functions are imported from files in $includes
 * default values are pririty 10 and args 1
 */
$hooks_filters = [
	'acf/validate_value/name=postal_code' => [
		10 => ['name' => 'validate_postal_code', 'args' => 4],
	],
	'acf/settings/show_admin' => [
		10 => ['name' => 'hide_acf_admin', 'args' => 1],
	],
	'acf/settings/save_json' => [
		10 => ['name' => 'acf_json_save', 'args' => 1],
	],
	'acf/settings/load_json' => [
		10 => ['name' => 'acf_json_load', 'args' => 1],
	],
	'use_block_editor_for_post_type' => [
		10 => ['name' => 'disable_gutenberg', 'args' => 1],
	],
	'allowed_block_types_all' => [
		10 => ['name' => 'gutenberg_allowed_block_types', 'args' => 1],
	],
	'upload_mimes' => [
		10 => ['name' => 'add_file_types_to_uploads', 'args' => 1],
	],
	'template_include' => [
		10 => ['name' => 'redirect_archive_template', 'args' => 1],
	],
	'pre_get_posts' => [
		10 => ['name' => 'search_filter', 'args' => 1],
	],
	'locale' => [
		10 => ['name' => 'set_current_language', 'args' => 1],
	],
 	'post_link' =>
	 	[1 => ['name' => 'change_nouvelle_links', 'args' => 3]
	],
 	'post_type_archive_link' =>
	 	[10 => ['name' => 'change_nouvelle_archive_link', 'args' => 2]
	],
 	'register_post_type_args' =>
	 	[20 => ['name' => 'customize_default_wp_post_type', 'args' => 2]
	],
	// 'acf/fields/google_map/api' => [
		// 10 => ['name' => 'google_map_api', 'args' => 1],
	// ],
];
foreach ( $hooks_filters as $hook => $functions ) {
	foreach ($functions as $priority => $function) {
        add_filter($hook, $function['name'], $priority, $function['args']);
	}
}

/**
 * Commands
 */
if ( class_exists( 'WP_CLI' ) ) { // this condition is important, ad WP_CLI class does not exist in admin.
	WP_CLI::add_command( 'duplicate_post', 'DuplicatePost' );
}

/**
 * Functions
 * Put here any function which use is very general. Please always try to keep this
 * file small and clean, and divide it into the /inc folder.
 */
function import_folder( string $path ) {
	$includes = scandir( $path );
	foreach ( $includes as $file ) {
		$path_file = $path . '/' . $file;
		// Require every file in path
		if ( ! is_dir( $path_file ) ) {
			require_once $path_file;
		} elseif ( $file !== '.' && $file !== '..' ) { // Import recursively files in directories that are not the directory itself nor the parent
			import_folder( $path_file );
		}
	}
}

// ####################
// redefined Wordpress local value if in ajax/fr url
// @TODO: change this in the future
// ####################
function set_current_language($locale)
{
	if (empty($_SERVER['REQUEST_URI'])) {
		return;
	}
	$split = explode('/', $_SERVER['REQUEST_URI']);
	if ($split[1] == 'ajax') {
		if ($split[2] == 'en') {
			return 'en_US';
		}
	}
	return $locale;
}

/**
 * Used to init google map, simply sets the api key
 */
function google_map_api( $api ) {
	$api['key'] = GOOGLE_MAP_API_KEY;

	return $api;
}

function mailtrap($phpmailer)
{
	if (WP_DEBUG_MAIL == true) {
		$phpmailer->isSMTP();
		$phpmailer->Host = 'smtp.mailtrap.io';
		$phpmailer->SMTPAuth = true;
		$phpmailer->Port = 2525;
		$phpmailer->Username = 'c42372a24b3ca7';
		$phpmailer->Password = '3c0244a1dafdd6';
	}
}

/**
 * Add Config Options Page for Theme (Custom with ACF)
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => __('Theme settings', 'irsst'),
        'menu_title' => __('Theme settings', 'irsst'),
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => true
    ));

    // Footer Option Page
    acf_add_options_sub_page(array(
        'page_title'  => __('Theme config', 'irsst'),
        'menu_title'  => __('Theme settings', 'irsst'),
        'parent_slug' => 'theme-general-settings',
    ));
}


/**
 * GravityForms repeater fields generator
 */

// Form in use
$guide_form_id = 1;

// Reset all fields ids
// resetFormFieldIds();
function resetFormFieldIds () {
    global $wpdb;
    global $guide_form_id;

    $form_data = json_decode($wpdb->get_results("SELECT display_meta FROM wp_gf_form_meta WHERE form_id = $guide_form_id")[0]->display_meta);
    // dd($form_data);

    foreach ($form_data->fields as $key => $value) {
        // Reset field id
        $value->id = intval($key);

        // Reset sub fields ids if applicable
        if (is_array($value->inputs)) {
            foreach ($value->inputs as $n => $i) {
                $value->inputs[$n]->id = $key . '.' . $n;
            }
        }

        // Reset linked field to previous field id
        if (str_contains('link-previous-field', $value->cssClass)) { 
            $value->conditionalLogic->rules[0]->fieldId = $key - 1;
        }
    }

    // Reset auto-increment
    $form_data->nextFieldId = $key + 1;

    // Re-encode form fields and save to DB
    $encoded = $wpdb->_real_escape(json_encode($form_data));
    $results = $wpdb->get_results("UPDATE wp_gf_form_meta SET display_meta='$encoded' WHERE form_id = $guide_form_id");
    // dd($results);
}

// Dynamically add repeater fields on form load
// add_filter('gform_form_post_get_meta_' . $guide_form_id, 'add_repeater_fields');
// function add_repeater_fields($form) {
//     global $guide_form_id;
    
//     $repeater_class = 'gfield-repeater';
//     $field_id = $form['nextFieldId'];

//     $guide_repeater_fields = [
//         ['page' => 1, 'position' => 18, 'fields' => [['label' => 'Nom'], ['label' => 'Rôle']], 'title' => 'Gestionnaires'],
//         // ['page' => 1, 'position' => 19, 'fields' => [['label' => 'Nom'], ['label' => 'Rôle'], ['label' => 'Responsabilités']], 'title' => 'BLOP'],
//         // ['page' => 1, 'position' => 18, 'fields' => [['label' => 'Nom']]],
//     ];

//     foreach ($guide_repeater_fields as $repeater) {
//         $fields = [];

//         foreach ($repeater['fields'] as $field) {
//             $fields[] = GF_Fields::create([
//                 'type'          => 'text',
//                 'label'         => $field['label'],
//                 'formId'        => $guide_form_id,
//                 'id'            => $field_id++,
//                 'pageNumber'    => $repeater['page'],
//             ]);
//         }
        
//         $new_repeater_field = GF_Fields::create([
//             'type'             => 'repeater',
//             'label'            => 'Champ répétable - ' . $repeater['title'],
//             'description'      => 'Ce champ n\'est pas modifiable en admin',
//             'formId'           => $guide_form_id,
//             'id'               => $field_id++,
//             'pageNumber'       => $repeater['page'],
//             'fields'           => $fields,
//             'cssClass'         => $repeater_class . ' repeater-' . count($fields) . '-col',
//         ]);

//         array_splice($form['fields'], $repeater['position'], 0, array($new_repeater_field));
//     }

//     return $form;
// }
 
// Dynamically remove repeater fields before the form is saved
// add_filter('gform_form_update_meta_' . $guide_form_id, 'remove_repeater_fields', 10, 3);
// function remove_repeater_fields($form_meta, $form_id, $meta_name) {
//     if ($meta_name == 'display_meta') {
//         $repeater_ids = array_values(array_map(fn ($item) => $item['id'], array_filter($form_meta['fields'], fn ($item) => $item['type'] == 'repeater')));
//         $form_meta['fields'] = array_filter($form_meta['fields'], fn ($item) => !in_array($item['id'], $repeater_ids));
//     }
//     return $form_meta;
// }

// add_filter('gform_confirmation', 'guide_confirmation', 10, 4);
// function guide_confirmation( $confirmation, $form, $entry, $ajax ) {

//     if ( class_exists( 'GPDFAPI' ) ) {

//         $pdf_path = GPDFAPI::create_pdf( 171, '56d5338fae865');

//         if ( ! is_wp_error( $pdf_path ) && is_file( $pdf_path ) ) {
//             // Do something with your PDF
            
//             // Cleanup the PDF from the tmp path
//             unlink( $pdf_path );
//         }
//     }

//     $confirmation = array('redirect' => 'http://irsst.local/trousse?id=' . $entry['id']);
//     return $confirmation;
// }