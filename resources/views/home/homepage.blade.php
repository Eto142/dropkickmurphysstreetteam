<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropkick Murphys - Official Website</title>
  <!-- Celtic Font (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Uncial+Antiqua&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: #0a0a0a url('https://www.transparenttextures.com/patterns/asfalt-light.png');
      color: #f5f5f5;
      line-height: 1.6;
    }
    header {
      background: #111 url('https://www.transparenttextures.com/patterns/black-linen.png');
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 3px solid #0f5132;
    }
    header h1 {
      font-size: 1.8rem;
      margin: 0;
      font-family: 'Uncial Antiqua', serif;
      color: #28a745;
      letter-spacing: 2px;
      text-shadow: 2px 2px 4px #000;
    }
    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: #f5f5f5;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav a:hover {
      color: #ffc107;
    }
    .hero {
      background: url('https://upload.wikimedia.org/wikipedia/commons/2/24/Dropkick_Murphys_2019.png') center/cover no-repeat;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
    }
    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
    }
    .hero h2 {
      position: relative;
      font-size: 3rem;
      font-family: 'Uncial Antiqua', serif;
      color: #ffc107;
      z-index: 2;
      text-shadow: 3px 3px 6px #000;
    }
    section {
      padding: 3rem 2rem;
      max-width: 1100px;
      margin: auto;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #28a745;
      font-family: 'Uncial Antiqua', serif;
      font-size: 2rem;
      text-shadow: 2px 2px 4px #000;
    }
    .tour-dates ul {
      list-style: none;
      padding: 0;
    }
    .tour-dates li {
      background: #1a1a1a;
      padding: 1rem;
      margin: 0.5rem 0;
      border-radius: 8px;
      border-left: 5px solid #28a745;
    }
    .merch, .music {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }
    .card {
      background: #1a1a1a url('https://www.transparenttextures.com/patterns/brushed-alum-dark.png');
      padding: 1rem;
      border-radius: 8px;
      text-align: center;
      border: 2px solid #333;
      box-shadow: 0 4px 10px rgba(0,0,0,0.6);
      transition: transform 0.3s;
    }
    .card:hover {
      transform: scale(1.05);
      border-color: #28a745;
    }
    .card img {
      max-width: 100%;
      border-radius: 6px;
      margin-bottom: 0.5rem;
    }
    .contact {
      text-align: center;
      margin-top: 2rem;
      font-size: 1.2rem;
    }
    .contact a {
      color: #ffc107;
      font-weight: bold;
      text-decoration: none;
    }
    footer {
      text-align: center;
      padding: 1rem;
      background: #111 url('https://www.transparenttextures.com/patterns/black-linen.png');
      border-top: 3px solid #0f5132;
      margin-top: 2rem;
      color: #bbb;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>Dropkick Murphys</h1>
    <nav>
      <a href="#tour">Tour</a>
      <a href="#merch">Merch</a>
      <a href="#music">Music</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <div class="hero">
    <h2>Loud. Proud. Boston Born.</h2>
  </div>

  <section id="tour" class="tour-dates">
    <h2>Upcoming Tour Dates</h2>
    <ul>
      <li>Oct 15, 2025 - Boston, MA - TD Garden</li>
      <li>Oct 20, 2025 - New York, NY - Madison Square Garden</li>
      <li>Oct 25, 2025 - Chicago, IL - United Center</li>
      <li>Nov 5, 2025 - Los Angeles, CA - The Forum</li>
    </ul>
  </section>

  <section id="merch">
    <h2>Featured Merch</h2>
    <div class="merch">
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="T-Shirt">
        <p>Classic Band T-Shirt - $25</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Hoodie">
        <p>Logo Hoodie - $50</p>
      </div>
    </div>
  </section>

  <section id="music">
    <h2>Latest Music</h2>
    <div class="music">
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Album">
        <p><strong>Turn Up That Dial</strong><br>Listen on Spotify & Apple Music</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Single">
        <p><strong>Smash Sh*t Up</strong><br>Available Now</p>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>For support or inquiries, reach out at:<br>  
      <a href="mailto:support@dropkickstreetteam.online">support@dropkickstreetteam.online</a>
    </p>
  </section>

  <footer>
    &copy; 2025 Dropkick Murphys. All Rights Reserved. | Boston, MA
  </footer>

</body>
</html>
