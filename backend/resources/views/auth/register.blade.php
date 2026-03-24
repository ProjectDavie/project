<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Dave Properties</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f2f2f2; color: #333; }
    .register-card {
      max-width: 480px;
      margin: 60px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .brand { color: #FFD700; font-weight: bold; } /* yellow text */
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

<div class="register-card">
  <h3 class="text-center mb-4 brand">Register at Dave Properties</h3>

  <!-- Session Status -->
  @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-control @error('name') is-invalid @enderror">
      @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control @error('email') is-invalid @enderror">
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control @error('password') is-invalid @enderror">
      @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control @error('password_confirmation') is-invalid @enderror">
      @error('password_confirmation')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <!-- Already registered + Submit -->
    <div class="d-flex justify-content-between align-items-center mt-4">
      <a href="{{ route('login') }}" class="text-decoration-none small text-muted">Already registered?</a>
      <button type="submit" class="btn btn-primary">Register</button>
    </div>

  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>