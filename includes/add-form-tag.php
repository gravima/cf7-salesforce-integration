<?php

// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit;
}

add_action('wpcf7_init', 'cf7_salesforce_form_action_add_form_tag');

function cf7_salesforce_form_action_add_form_tag()
{
  wpcf7_add_form_tag('salesforce', 'cf7_salesforce_form_action_form_tag_handler', []);
}

function cf7_salesforce_form_action_form_tag_handler($tag)
{
  wp_enqueue_script('cf7-salesforce-integration');

  return sprintf(
    '<input type="hidden" name="_salesforce_endpoint" value="%s" />',
    esc_attr($tag->values[0]),
  );
}
