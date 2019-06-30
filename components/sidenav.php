<style>
  .sidenav {
    width: 25vw;
    height: 100vh;
    box-shadow: -2px 0 10px #000;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    top: 0;
    position: sticky;
  }

  .sidenav header {
    width: 100%;
    height: 20%;
  }

  .sidenav header .researcher {
    padding: 20px 0 0 16px;
  }

  .sidenav header .researcher img {
    border-radius: 50%;
    min-width: 45px;
    max-width: 45px;
    min-height: 45px;
    max-height: 45px;
    margin-bottom: 1rem;
    object-fit: cover;
    object-position: center;
  }

  .sidenav header .researcher figcaption {
    font-size: 1.2rem;
    font-weight: bold;
  }

  .sidenav .menu {
    display: flex;
    flex-direction: column;
  }

  .sidenav .menu a {
    padding: 20px;
    font-size: 1.2rem;
    text-decoration: none;
    color: #212121;
    transition: all 0.5s;
  }

  .sidenav .menu a:hover {
    background-color: #ededed;
  }

  .sidenav .menu .logout:hover {
    background-color: #dd180d;
    color: #ffffff;
  }
</style>

<aside class="sidenav">
  <header>
    <figure class="researcher">
      <img src="interface/woman.svg" alt="">
      <figcaption>Pesquisador</figcaption>
    </figure>
  </header>

  <nav class="menu">
    <a href="pesquisas.php">Pesquisa</a>
    <a href="membros.php">Membro</a>
    <a href="animais.php">Animal</a>
    <a href="/" class="logout">Sair</a>
  </nav>
</aside>
