<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Validated Feedback Form</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      background-color: #f8f9fa;
    }
    .feedback-form {
      max-width: 600px;
      margin: 50px auto;
      background-color: #ffffff;
      border: 2px solid #1C39BB;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(28, 57, 187, 0.2);
    }
    .feedback-form h2 {
      color: #1C39BB;
      margin-bottom: 25px;
      text-align: center;
    }
    .form-label {
      color: #1C39BB;
      font-weight: 500;
    }
    .form-control:focus {
      border-color: #93E9BE;
      box-shadow: 0 0 5px #93E9BE;
    }
    .btn-custom {
      background-color: #1C39BB;
      color: #ffffff;
    }
    .btn-custom:hover {
      background-color: #93E9BE;
      color: #1C39BB;
    }
    .form-text {
      color: #808080;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="feedback-form">
      <h2>Feedback Form</h2>
      <form id="feedbackForm" novalidate>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
          <div class="invalid-feedback">Please enter your username.</div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
          <div class="form-text">We'll never share your email with anyone else.</div>
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
          <div class="form-text">Enter a 10-digit number.</div>
          <div class="invalid-feedback">Please enter your phone number.</div>
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          <div class="invalid-feedback">Please enter your message.</div>
        </div>

        <button type="submit" class="btn btn-custom w-100">Submit Feedback</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript Validation -->
  <script>
    document.getElementById('feedbackForm').addEventListener('submit', function (event) {
      const form = event.target;
      let isValid = true;

      // Loop through required fields
      ['username', 'email', 'phone', 'message'].forEach(id => {
        const input = document.getElementById(id);
        if (!input.value.trim()) {
          input.classList.add('is-invalid');
          isValid = false;
        } else {
          input.classList.remove('is-invalid');
        }
      });

      if (!isValid) {
        event.preventDefault(); // Prevent form submission
      }
    });
  </script>
</body>
</html>
