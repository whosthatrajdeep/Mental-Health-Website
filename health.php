<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mental Health Website</title>
    <link rel="stylesheet" href="health.css">
  </head>
  <body>
    <header>
      <h1>Mental Health Website</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Articles</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <h2>Welcome to Our Website</h2>
        <p>This is a mental health website that provides resources and articles related to mental health issues. We believe that everyone should have access to information and resources to support their mental well-being.</p>
      </section>
      <section>
        <h2>Articles</h2>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/Stress_management">How to Manage Stress</a></li>
          <li><a href="https://en.wikipedia.org/wiki/Benefits_of_physical_activity#:~:text=Benefits%20include%20improved%20thinking%20or,and%20anxiety%20and%20improve%20sleep.">The Benefits of Exercise for Mental Health</a></li>
          <li><a href="https://www.mayoclinichealthsystem.org/hometown-health/speaking-of-health/11-tips-for-coping-with-an-anxiety-disorder">Coping Strategies for Anxiety</a></li>
        </ul>
      </section>
      <section>
        <h2>Resources</h2>
        <ul>
          <li><a href="https://www.opportunityhome.org/partners/national-alliance-mental-illness-nami/#:~:text=NAMI%2C%20the%20National%20Alliance%20on,Americans%20affected%20by%20mental%20illness.">National Alliance on Mental Illness</a></li>
          <li><a href="https://www.apa.org/">American Psychological Association</a></li>
          <li><a href="https://mhanational.org/">Mental Health America</a></li>
        </ul>
      </section>
      <section>
        <h2>Contact Us</h2>
        <form action = "email.php" method = "post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br>

          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea><br>

          <input type="submit" value="Submit" name = "send">
        </form>
      </section>
    </main>
    <script src="health.js"></script>
  </body>
</html>