<?php
/*
 * Plugin Name: CF7 Salesforce Integration
 * Plugin URI: https://github.com/gravima/cf7-salesforce-integration
 * Description: The CF7 Salesforce Integration plugin enables seamless connection between Contact Form 7 forms and Salesforce Form Handlers.
 * Version: 0.1
 * Requires at least: 6.4.1
 * Requires PHP: 8.0.30
 * Author: Tim Rüdenauer, gravima Gmbh
 * Author URI: https://github.com/gravima
 * License: GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: cf7-salesforce-integration
 * Domain Path: /languages
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit;
}

include_once "includes/add-form-tag.php";
