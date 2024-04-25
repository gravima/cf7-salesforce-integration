# CF7 Salesforce Integration

The CF7 Salesforce Integration plugin enables seamless connection between Contact Form 7 forms and Salesforce, allowing form data to be sent directly from the client-side. This ensures that Salesforce can track user interactions effectively using the browser's cookies and headers.

## Features

- **Direct Client-Side Submission**: Submits form data directly to Salesforce from the client, preserving user session details.
- **Configurable Salesforce Endpoint**: Easily configure the Salesforce endpoint URL directly from the WordPress admin panel.
- **Enhanced User Experience**: Includes custom JavaScript to enhance form interactions such as disabling the submit button temporarily to prevent duplicate submissions and handling redirects upon successful form submissions.

## Installation

1. **Download the Plugin**: Clone the [repository](https://github.com/gravima/cf7-salesforce-integration) or download the [ZIP file](https://github.com/gravima/cf7-salesforce-integration/archive/refs/heads/main.zip).
2. **Upload Plugin Files**: Upload the plugin files to the `/wp-content/plugins/cf7-salesforce-integration` directory, or install the plugin using the ZIP file through the WordPress plugins screen directly.
3. **Activate the Plugin**: Activate the plugin through the 'Plugins' screen in WordPress.
4. **Configure Salesforce Endpoint**: Go to `Settings` > `Reading` in your WordPress admin panel and find the 'Salesforce Endpoint URL' setting. Enter the endpoint URL provided by your Salesforce configuration.

## Usage

Once the plugin is active and the Salesforce endpoint is configured:

- Forms will automatically capture and send data to the specified Salesforce endpoint when submitted.
- Additional JavaScript enhancements like button disabling and redirect handling will be active.

## Customization

To customize JavaScript behaviors or add more features:

- Modify the `js/custom-form-submit.js` file.
- Ensure that your changes maintain the integrity of form submissions and user experience.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

- Fork the Project
- Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
- Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
- Push to the Branch (`git push origin feature/AmazingFeature`)
- Open a Pull Request

## License

Distributed under the GPL License. See [LICENSE](LICENSE) for more information.

## Contact

Tim Rüdenauer - [tim.ruedenauer@gravima.de](mailto:tim.ruedenauer@gravima.de)  
Project Link: [https://github.com/gravima/cf7-salesforce-integration](https://github.com/gravima/cf7-salesforce-integration)

## Acknowledgements

- [Contact Form 7](https://contactform7.com/)
- [Salesforce](https://www.salesforce.com/)
