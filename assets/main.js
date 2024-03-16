$(document).ready(function ($) {
  // Contact Form Interactions
  $("#contactus").on("click", function (event) {
      event.preventDefault();
      $(".form-popup-bg").addClass("is-visible");
  });

  // Close popup when clicking x or off popup
  $(".form-popup-bg").on("click", function (event) {
      if ($(event.target).is(".form-popup-bg") || $(event.target).is("#btnCloseForm")) {
          event.preventDefault();
          $(this).removeClass("is-visible");
      }
  });

  $("#successMessage").hide();

  // Form handling
  $("#submit").click(function (event) {
      event.preventDefault();
      const nameInput = $("#name");
      const emailInput = $("#email");
      const phoneInput = $("#phonenumber");

      const nameError = $("#nameError");
      const emailError = $("#emailError");
      const phoneError = $("#phoneError");

      // Reset error messages
      nameError.text("");
      emailError.text("");
      phoneError.text("");

      let isValid = true;

      // Validate name
      if (nameInput.val().trim() === "") {
          nameError.text("Name is required");
          isValid = false;
      }

      // Validate email
      if (emailInput.val().trim() === "") {
          emailError.text("Email is required");
          isValid = false;
      } else if (!isValidEmail(emailInput.val().trim())) {
          emailError.text("Invalid email address");
          isValid = false;
      }

      // Validate phone number
      if (phoneInput.val().trim() === "") {
          phoneError.text("Phone number is required");
          isValid = false;
      } else if (!isValidPhoneNumber(phoneInput.val().trim())) {
          phoneError.text("Invalid phone number");
          isValid = false;
      }

      if (!isValid) return false;

      // Submit form with AJAX
      const formData = {
          name: nameInput.val(),
          email: emailInput.val(),
          phonenumber: phoneInput.val(),
      };

      $.ajax({
          url: "mailer.php",
          type: "POST",
          data: formData,
          success: function (response) {
              nameInput.val("");
              emailInput.val("");
              phoneInput.val("");
              $("#successMessage").show();
          },
          error: function (xhr, status, error) {
              console.log(error);
          },
      });
  });
});

// Function to validate email address
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to validate phone number
function isValidPhoneNumber(phone) {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phone);
}
