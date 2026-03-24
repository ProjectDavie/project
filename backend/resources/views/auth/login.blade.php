<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Dave Properties</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f2f2f2;
    }
    .login-card {
      max-width: 420px;
      margin: 80px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .btn-primary {
      background-color: #333;
      border-color: #333;
    }
    .btn-primary:hover {
      background-color: #555;
      border-color: #555;
    }
  </style>
</head>
<body>

<div class="login-card">
  <h3 class="text-center mb-4">Log in to <span class="text-warning fw-bold">Dave Properties</span></h3>

  <!-- Session Status -->
  @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control @error('email') is-invalid @enderror">
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control @error('password') is-invalid @enderror">
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <!-- Remember Me -->
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
      <label class="form-check-label" for="remember_me">Remember me</label>
    </div>

    <!-- Forgot Password + Submit -->
    <div class="d-flex justify-content-between align-items-center">
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-decoration-none small text-muted">Forgot your password?</a>
      @endif
      <button type="submit" class="btn btn-primary">Log in</button>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>