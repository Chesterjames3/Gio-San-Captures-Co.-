<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Session | Gio San Captures Co.</title>
  <link rel="icon" type="image/x-icon" href="images/icon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">

</head>
<body class="booking-page">
  <header class="booking-page__header">
    <a href="index.html" class="booking-page__brand">
      <img src="images/icon3.png" alt="Gio San Captures Co. logo">
    </a>
    <a href="index.html" class="booking-page__back">← Back to home</a>
  </header>

  <main class="booking-page__main">
    <p class="contact-label">GIO SAN CAPTURES CO.</p>
    <h1>Book Your Session</h1>
    <p class="booking-page__intro">Choose your preferred date and tell us a little about the photography session you have in mind.</p>

    <div class="booking-page__form-wrap">
      <form id="bookingForm" class="booking-form" novalidate>
        <label for="bookingDate">Select Date</label>
        <input type="date" id="bookingDate" class="booking-input" required>
        <div id="dateMessage" class="booking-message" aria-live="polite"></div>

        <label for="bookingService">Choose Service</label>
        <select id="bookingService" class="booking-input" required>
          <option value="Sports and Game Photography">Sports and Game Photography</option>
          <optgroup label="Outdoor Photography">
            <option value="Pre-Birthday">Pre-Birthday</option>
            <option value="Pre-Nuptial">Pre-Nuptial</option>
            <option value="Outdoor Shoot">Outdoor Shoot</option>
            <option value="Collab Shoot">Collab Shoot</option>
            <option value="Graduation Shoot">Graduation Shoot</option>
            <option value="OTD Photography">OTD Photography</option>
          </optgroup>
          <optgroup label="Event Photography">
            <option value="Bronze Package">Bronze Package (Jollibee, McDonald's, Shakey's, Max's, Kenny Rogers)</option>
            <option value="Silver Package">Silver Package (Civil Weddings, Baptismal, Birthdays)</option>
            <option value="Product Photography">Product Photography (Church Weddings, Debuts, Reunions, Big Events)</option>
          </optgroup>
        </select>

        <label for="bookingNotes">Additional Notes</label>
        <textarea id="bookingNotes" class="booking-input" placeholder="Share any details about your session..."></textarea>

        <div class="success booking-message" id="message" role="status" aria-live="polite"></div>
        <button type="submit" class="booking-btn">SUBMIT BOOKING REQUEST <i class="ri-arrow-right-line" aria-hidden="true"></i></button>
        <button type="button" class="booking-btn-secondary" onclick="window.location.href='login.php'">Login</button>
        <button type="button" class="booking-btn-secondary" onclick="window.location.href='Register.php'">Register</button>
      </form>
    
    </div>
  </main>

  <footer class="booking-page__footer">
    <a href="https://www.instagram.com/giyowsan" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
    <a href="https://www.facebook.com/giyowsan" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
    <a href="mailto:akoposichoco@gmail.com" aria-label="Email"><i class="ri-mail-fill"></i></a>
    <p>© <span data-current-year></span> Gio San Captures Co. · <a href="termsandconditions.html">Terms and Conditions</a></p>
  </footer>

  <script src="main.js"></script>
</body>
</html>





<style>
  

.booking-page {
  --booking-blue: #2563eb;
  --booking-blue-dark: #1d4ed8;
  --booking-text: #171717;
  --booking-muted: #737373;
  --booking-border: #e5e7eb;

  min-height: 100vh;
  margin: 0;
  background: #ffffff;
  color: var(--booking-text);
  font-family: "Montserrat", sans-serif;
}

/* Header */
.booking-page .booking-page__header {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px 32px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
}

.booking-page .booking-page__brand img {
  display: block;
  width: 90px;
  height: auto;
  object-fit: contain;
}

.booking-page .booking-page__back {
  color: #525252;
  font-size: 13px;
  text-decoration: none;
  transition: color 0.25s ease;
}

.booking-page .booking-page__back:hover {
  color: var(--booking-blue);
}

/* Main section */
.booking-page .booking-page__main {
  width: 100%;
  max-width: 760px;
  margin: 45px auto 80px;
  padding: 0 24px;
}

.booking-page .contact-label {
  margin-bottom: 12px;
  color: var(--booking-blue);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 3px;
  text-align: center;
}

.booking-page .booking-page__main h1 {
  margin: 0 0 16px;
  font-family: "Merriweather", serif;
  font-size: clamp(30px, 5vw, 44px);
  font-weight: 700;
  line-height: 1.3;
  text-align: center;
}

.booking-page .booking-page__intro {
  max-width: 540px;
  margin: 0 auto 35px;
  color: var(--booking-muted);
  font-size: 14px;
  line-height: 1.9;
  text-align: center;
}

/* Booking card */
.booking-page .booking-page__form-wrap {
  padding: 38px;
  background: #ffffff;
  border: 1px solid var(--booking-border);
  border-radius: 8px;
  box-shadow: 0 12px 40px rgba(15, 23, 42, 0.06);
}

/* Form layout */
.booking-page .booking-form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.booking-page .booking-form label {
  margin-top: 8px;
  color: #262626;
  font-size: 13px;
  font-weight: 600;
}

/* Inputs and dropdowns */
.booking-page .booking-input {
  width: 100%;
  min-height: 48px;
  padding: 13px 14px;
  border: 1px solid #d4d4d8;
  border-radius: 5px;
  outline: none;
  background: #ffffff;
  color: #171717;
  font-family: inherit;
  font-size: 13px;
  transition:
    border-color 0.25s ease,
    box-shadow 0.25s ease;
}

.booking-page .booking-input:hover {
  border-color: #93a4c5;
}

.booking-page .booking-input:focus {
  border-color: var(--booking-blue);
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
}

.booking-page select.booking-input {
  cursor: pointer;
}

.booking-page textarea.booking-input {
  min-height: 125px;
  resize: vertical;
  line-height: 1.7;
}

.booking-page .booking-input::placeholder {
  color: #a3a3a3;
}

/* Date validation and status messages */
.booking-page .booking-message {
  font-size: 12px;
  line-height: 1.6;
}

.booking-page #dateMessage {
  margin-top: -5px;
}

.booking-page #message {
  margin-top: 5px;
  font-weight: 600;
}

.booking-page #message:empty,
.booking-page #dateMessage:empty {
  display: none;
}

/* Submit button */
.booking-page .booking-btn .Login .Register {
  width: 100%;
  min-height: 52px;
  margin-top: 12px;
  padding: 15px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  border: 1px solid var(--booking-blue);
  border-radius: 5px;
  background: var(--booking-blue);
  color: #ffffff;
  font-family: inherit;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 1.5px;
  cursor: pointer;
  transition:
    background 0.25s ease,
    border-color 0.25s ease,
    transform 0.25s ease;
}

.booking-page .booking-btn:hover {
  border-color: var(--booking-blue-dark);
  background: var(--booking-blue-dark);
  transform: translateY(-2px);
}

.booking-page .booking-btn:focus-visible,
.booking-page .booking-page__back:focus-visible {
  outline: 3px solid rgba(37, 99, 235, 0.35);
  outline-offset: 4px;
}

.booking-page .booking-btn i {
  font-size: 16px;
}

/* Booking notice */
.booking-page .booking-page__note {
  margin: 18px 0 0;
  color: #737373;
  font-size: 11px;
  line-height: 1.8;
  text-align: center;
}

/* Footer */
.booking-page .booking-page__footer {
  padding: 25px 20px;
  border-top: 1px solid var(--booking-border);
  text-align: center;
}

.booking-page .booking-page__footer > a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin: 0 12px 15px;
  color: #262626;
  font-size: 18px;
  text-decoration: none;
  transition: color 0.25s ease;
}

.booking-page .booking-page__footer > a:hover {
  color: var(--booking-blue);
}

.booking-page .booking-page__footer p {
  margin: 8px 0 0;
  color: #737373;
  font-size: 11px;
  line-height: 1.8;
}

.booking-page .booking-page__footer p a {
  color: #525252;
  text-decoration: underline;
  text-underline-offset: 3px;
}

/* Mobile responsive */
@media (max-width: 600px) {
  .booking-page .booking-page__header {
    padding: 16px 20px;
  }

  .booking-page .booking-page__brand img {
    width: 70px;
  }

  .booking-page .booking-page__back {
    font-size: 11px;
  }

  .booking-page .booking-page__main {
    margin: 30px auto 50px;
    padding: 0 16px;
  }

  .booking-page .booking-page__main h1 {
    font-size: 30px;
  }

  .booking-page .booking-page__intro {
    font-size: 12px;
  }

  .booking-page .booking-page__form-wrap {
    padding: 23px 18px;
  }

  .booking-page .booking-input {
    font-size: 13px;
  }

  .booking-page .booking-btn {
    font-size: 10px;
    letter-spacing: 1px;
  }
}

</style>
