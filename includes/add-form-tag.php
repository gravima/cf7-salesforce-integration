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
  if (empty($tag->values) || !is_string($tag->values[0]) || !filter_var($tag->values[0], FILTER_VALIDATE_URL)) {
    $error_comment = <<<ERRCOMMENT
    <div style="padding: 7px; width: 100%; color: red; background-color: rgba(255,0,0,0.2);">
      <p><span style="font-weight: bold;">Error:</span> CF7 Salesforce Integration form-tag requires a form handler endpoint as a well-formed URL string param.</p>

      <p>Example:</p>

      <code style="padding: 5px; background: whitesmoke;">[salesforce "https://your.salesforce.com/form-handler"]</code>

      <p>(This message is only visible to administrators and editors.)</p>
    </div>
    ERRCOMMENT;

    if (is_user_logged_in() && current_user_can('edit_posts')) {
      return $error_comment;
    }

    return '';
  }

  wp_enqueue_script('cf7-salesforce-integration');

  return sprintf(
    '<input type="hidden" name="_salesforce_endpoint" value="%s" />',
    esc_attr($tag->values[0]),
  );
}
