
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Gio San Captures Co.</title>
  <link rel="stylesheet" href="auth.css">
</head>
<body>

  <main class="auth-container">
    <a href="index.html" class="back-link">← Back to Home</a>

    <img src="images/icon3.png" alt="Gio San Captures Logo" class="logo">

    <p class="eyebrow">GIO SAN CAPTURES CO.</p>
    <h1>Create Account</h1>
    <p class="subtitle">Join us and start planning your next session.</p>

    <form action="#" method="post">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname"
             placeholder="Enter your full name" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email"
             placeholder="Enter your email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password"
             placeholder="Create a password" required>

      <label for="confirm-password">Confirm Password</label>
      <input type="password" id="confirm-password"
             name="confirm-password"
             placeholder="Re-enter your password" required>

      <button type="submit">CREATE ACCOUNT <span>→</span></button>
    </form>

    <p class="switch-page">
      Already have an account?
      <a href="login.php">Log in</a>
    </p>

    <a href="index.html" class="back-home">Return to website</a>
  </main>

</body>
</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background: #f4f4f4;
    color: #171717;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 18px;
}

/* ===== AUTH CONTAINER ===== */
.auth-container {
    width: 100%;
    max-width: 460px;
    background: #fff;
    padding: 38px 40px;
    border-radius: 12px;
    box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
}

/* ===== BACK LINK ===== */
.back-link {
    display: inline-block;
    margin-bottom: 25px;
    color: #555;
    font-size: 13px;
    text-decoration: none;
    transition: color 0.2s;
}

.back-link:hover,
.back-home:hover {
    color: #000;
    text-decoration: underline;
}

/* ===== LOGO ===== */
.logo {
    display: block;
    width: 75px;
    height: auto;
    object-fit: contain;
    margin: 0 auto 18px;
}

/* ===== HEADING ===== */
.eyebrow {
    text-align: center;
    color: #777;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-bottom: 12px;
}

.auth-container h1 {
    font-family: 'Merriweather', serif;
    font-size: 28px;
    text-align: center;
    margin-bottom: 12px;
}

.subtitle {
    color: #777;
    text-align: center;
    font-size: 13px;
    line-height: 1.6;
    margin-bottom: 28px;
}

/* ===== FORM ===== */
.auth-container form {
    display: flex;
    flex-direction: column;
}

.auth-container label {
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 8px;
}

.auth-container input {
    width: 100%;
    padding: 13px 14px;
    margin-bottom: 18px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background: #fff;
    color: #171717;
    font-family: inherit;
    font-size: 13px;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.auth-container input::placeholder {
    color: #aaa;
}

.auth-container input:focus {
    border-color: #171717;
    box-shadow: 0 0 0 3px rgba(23, 23, 23, 0.07);
}

/* ===== SUBMIT BUTTON ===== */
.auth-container button {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 15px 17px;
    margin-top: 4px;
    border: none;
    border-radius: 6px;
    background: #171717;
    color: #fff;
    font-family: inherit;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1px;
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
}

.auth-container button span {
    font-size: 18px;
}

.auth-container button:hover {
    background: #383838;
    transform: translateY(-1px);
}

/* ===== LOGIN / REGISTER LINK ===== */
.switch-page {
    margin-top: 25px;
    text-align: center;
    color: #777;
    font-size: 13px;
}

.switch-page a {
    color: #171717;
    font-weight: 600;
    text-decoration: none;
    margin-left: 4px;
}

.switch-page a:hover {
    text-decoration: underline;
}

/* ===== RETURN TO WEBSITE ===== */
.back-home {
    display: block;
    margin-top: 18px;
    text-align: center;
    color: #888;
    font-size: 12px;
    text-decoration: none;
}

/* ===== MOBILE RESPONSIVE ===== */
@media (max-width: 480px) {
    .auth-container {
        padding: 28px 23px;
    }

    .auth-container h1 {
        font-size: 24px;
    }

    .logo {
        width: 65px;
    }
}

  </style>