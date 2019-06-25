<style>
  header {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    background-color: #112233;
    border-radius: 0px;
    font-size: 1.8rem;
    padding: 0 1em;
  }
  header .brand {
    text-decoration: none;
  }
  .header-brand-logo {
    width: 8vw;
  }
  .navbar {
    width: 12%;
    display: flex;
    justify-content: space-between;
    margin: 0;
  }
  .navbar a {
    text-decoration: none;
  }
</style>

<header>
  <a class="brand" href="#">Callitest</a>

  <a href=""><img class="header-brand-logo" src="interface/ufrn-logo.png" /></a>

  <nav class="navbar">
    <a href="login.php">Login</a>
    <a href="signup.php">Sign up</a>
  </nav>
</header>