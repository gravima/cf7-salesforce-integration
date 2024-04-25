jQuery(document).ready(function ($) {
  $('form.wpcf7-form').on('submit', function () {
    var $form = $(this);
    var url = $form.find('input[name="_salesforce_endpoint"]').val();

    if (!url) {
      console.error('Salesforce endpoint not found', { url });
      return true; // Allow normal form submission
    }

    var formData = $form.serialize();

    console.log({ formData });

    $.ajax({
      url: url,
      type: 'POST',
      data: formData,
      contentType: 'application/x-www-form-urlencoded',
      success: function (response) {
        console.log('Salesforce Success:', response);
      },
      error: function (xhr, status, error) {
        console.log('Salesforce Error:', error, xhr.responseText, xhr.status);
      }
    });

    return true; // Allow normal form submission
  });
});
