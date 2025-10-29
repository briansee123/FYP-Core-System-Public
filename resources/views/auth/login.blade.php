<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Career Path Recommender – Login</title> <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet"> <style> body{margin:0;padding:0;min-height:100vh;font-family:'Montserrat',Arial,sans-serif;background:linear-gradient(120deg,#4a90e2 0%,#f76b1c 100%);display:flex;align-items:center;justify-content:center;} .container{background:#fff;border-radius:18px;box-shadow:0 4px 24px rgba(0,0,0,0.08);max-width:800px;width:100%;padding:40px 0 20px 0;display:flex;flex-direction:column;align-items:center;} .title{font-size:2.3rem;font-weight:700;text-align:center;margin-bottom:8px;letter-spacing:1px;} .title .path{color:#f76b1c;} .desc{color:#555;font-size:1.1rem;margin-bottom:32px;text-align:center;} form{width:80%;max-width:400px;} label{font-weight:600;margin-bottom:6px;margin-top:10px;color:#222;display:block;} input{width:100%;padding:8px 10px;margin-bottom:10px;border:1px solid #ddd;border-radius:5px;background:#fdfad6;font-size:1rem;} button{width:100%;padding:10px 0;border:none;border-radius:6px;background:linear-gradient(90deg,#4a90e2 0%,#f76b1c 100%);color:#fff;font-size:1.1rem;font-weight:600;cursor:pointer;margin-top:8px;box-shadow:0 2px 6px rgba(74,144,226,0.09);} .error{color:#dc3545;font-size:0.9rem;text-align:center;margin-bottom:10px;} .link{margin-top:12px;text-align:center;} .link a{color:#4a90e2;text-decoration:none;} </style> </head> <body> <div class="container"> <div class="title">CAREER <span class="path">PATH</span><br>RECOMMENDER</div> <div class="desc">Login to explore your personalized career journey</div>
<form method="POST" action="{{ route('login') }}">
  @csrf
  <label for="email">Email Address</label>
  <input type="email" name="email" value="{{ old('email') }}" required autofocus>

  <label for="password">Password</label>
  <input type="password" name="password" required>

  @error('email')
    <div class="error">{{ $message }}</div>
  @enderror
  @error('password')
    <div class="error">{{ $message }}</div>
  @enderror

  <button type="submit">Login</button>

  <div class="link">
    <a href="{{ route('password.request') }}">Forgot password?</a><br>
    <a href="{{ route('register') }}">Don't have an account? Sign up</a>
  </div>
</form>

</div> </body> </html>