<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Registration.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<div class="fullscreen-bg">
            <video loop muted autoplay poster="Kyato5.mp4" class="Kyato-bg KyatoVideo">
                <source src="Kyato5.mp4" type="video/mp4">
            </video>
</div>
        <center>
    <div class="container">
      <img src="Kyato.png" width="200" height="99" alt="puple" class="center" >
        <h1>Register</h1>
        <form action="Registration.html" method="POST">
            <div class="form-group">
                <label for="gmail"></label>
                <input type="text" id="gmail" name="gmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="Username"></label>
                <input type="text" id="Username" name="Username" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" minlength="8" maxlength="18" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <input type="radio" id="PP" name="education" value="PP">
                <label for="PP">I Have read and agree to the KYATO Account Privacy Policy</label>
                <a href="AccTerms.php">KYATO Account Terms of Service</a>
            <br>
            <br>
            <button type="submit">Register</button>
        </form>
        <a href="home.php">Home</a>
        <a href="login.php">Login</a>
    </div>
</body>
</html>
