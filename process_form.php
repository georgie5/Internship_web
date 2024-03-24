   <?php
          // Check if the form was submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Retrieve form data
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $organization = $_POST['organization'];
          $attending_date = $_POST['attending_date'];
          $attending_type = $_POST['attending_type'];

          // Compose email message
          $to = "martinez.alemoi@gmail.com";
          $subject = "New Registration for Showcase";
          $message = "New registration details:\n\n";
          $message .= "First Name: $firstname\n";
          $message .= "Last Name: $lastname\n";
          $message .= "Organization: $organization\n";
          $message .= "Attending Date: $attending_date\n";
          $message .= "Attending Type: $attending_type\n";

          // Send email
          $headers = "From: Your Name martinez.alemoi@gmail.com"; // Change this to your email
          if (mail($to, $subject, $message, $headers)) {
          echo "Thank you for registering. We will contact you shortly.";
          } else {
          echo "Oops! Something went wrong. Please try again later.";
          }
          } else {
          // If the form was not submitted, redirect to the form page
          header("Location: /index.html");
          exit;
          }
          ?>