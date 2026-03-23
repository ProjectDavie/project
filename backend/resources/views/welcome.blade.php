<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dave Properties - Admin Portal</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f2f2f2; color: #333; }
    .brand { color: #FFD700; font-weight: bold; } /* yellow text */
    .btn-primary { background-color: #333; border-color: #333; }
    .btn-primary:hover { background-color: #555; border-color: #555; }
    .btn-outline-light { color: #333; border-color: #333; }
    .btn-outline-light:hover { background-color: #333; color: #FFD700; }
    header { background-color: #777; }
    footer { background-color: #777; }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="py-5 text-center text-light">
    <div class="container">
      <h1 class="display-4 mb-3 brand">Dave Properties Admin Portal</h1>
      <p class="lead mx-auto" style="max-width: 700px;">
        Manage all your apartment listings and rentals effortlessly. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur, nisi nisl lacinia orci, ac blandit lorem urna nec metus.
      </p>
    </div>
  </header>

  <!-- Buttons -->
  <section class="py-5 text-center bg-light">
    <div class="container d-flex justify-content-center gap-3">
      <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Log In</a>
      <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Register</a>
    </div>
  </section>

  <!-- About Us -->
  <section class="py-5 text-center" style="background-color: #e0e0e0;">
    <div class="container" style="max-width: 720px;">
      <h2 class="mb-4 fw-bold brand">About Dave Properties</h2>
      <p class="mb-3">
        Dave Properties helps landlords and property managers streamline apartment rentals with ease. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <p>
        Admins can log in or register to start managing their listings. Curabitur sit amet semper leo. Make your property management simple and efficient.
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 text-center text-light">
    <p class="mb-0">&copy; 2026 Dave Properties. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>