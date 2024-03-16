## Responsive Web Page with Contact Form
This project is a responsive web page that features a contact form implemented using PHP, HTML, CSS, and JavaScript/jQuery. The contact form allows users to submit their name, email, and phone number, and the form data is submitted via AJAX to a PHP script (mailer.php) for email processing.

## Features
- Responsive Design: The web page is designed to be responsive, ensuring optimal viewing and interaction experience across various devices and screen sizes.

- Modal Contact Form: Upon clicking the "Contact Us" link in the footer, a modal dialog box opens, presenting fields for the user to input their name, email, and phone number.

- Form Validation: The contact form includes client-side form validation to ensure that required fields are filled out correctly before submission. Validation is done using jQuery.

- AJAX Form Submission: The form data is submitted asynchronously via AJAX, allowing for seamless submission without page refresh. This enhances user experience and reduces server load.

- Email Processing: Form data submitted via AJAX (POST METHOD) is sent to the mailer.php script, which processes the data and sends an email notification.

## External Dependencies
This project utilizes external CSS and JavaScript files for styling and functionality. These files are referenced in the HTML markup:

- CSS: Only external CSS files are used for styling the web page.
- JavaScript/jQuery: The jQuery library is used for DOM manipulation and AJAX functionality.

## Setting up a Local Mail Server
To test the email functionality locally, follow these steps:

Download and install smtp4dev from its GitHub repository: https://github.com/rnwood/smtp4dev/releases.
Run smtp4dev on your local machine.

## File Structure
- index.php: The main php file containing the structure of the web page 
- footer.php: Footer file containing footer and the modal contact form.
- style.css: External CSS file for styling the web page.
- main.js: External JavaScript file for client-side form validation and AJAX form submission.
- mailer.php: PHP script for processing form data and sending email notifications.

## Usage
Clone the repository to your local machine.
Open index.php in a web browser to view the web page.
Click on the "Contact Us" link in the footer to open the modal contact form.
Fill out the form fields with your name, email, and phone number.
Click the "Submit" button to submit the form data. The form will be validated, and if successful, the data will be sent via AJAX to mailer.php for email processing.

## Credits
- jQuery: The jQuery library is used for DOM manipulation and AJAX functionality.

## License
This project is licensed under the MIT License.