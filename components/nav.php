<style>
  header {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    max-width: 100%;
    background-color: #112233;
    border-radius: 0px;
    font-size: 1.8rem;
    padding: 0 1em;
    user-select: none;
  }

  header .brand {
    text-decoration: none;
    color: #fff;
  }

  .header-brand-logo {
    width: 8vw;
  }

  .navbar {
    width: 14%;
    min-height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0;
    padding: 0;
    font-size: 1.3rem;
  }

  .navbar::before, .navbar::after {
    display: none;
  }

  .navbar a {
    color: #fff;
    text-decoration: none;
    transition: all 0.2s;
    padding: 15px;
    height: 100%;
  }

  .navbar a:hover {
    background-color: rgba(250, 250, 250, 0.25);
  }
</style>

<header>
  <a class="brand" href="#">Callitest</a> <?php /* $brand-title */ ?>

  <a href="/"><img class="header-brand-logo" src="interface/ufrn-logo.png" /></a> <?php /* $brand-logo */ ?>

  <nav class="navbar"> <?php /* $menu-items */ ?>
    <a href="login.php">Login</a>
    <a href="signup.php">Sign up</a>
  </nav>
</header>
