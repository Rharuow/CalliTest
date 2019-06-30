<style>
  form {
    margin-top: 11%;
    width: 35%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-direction: column;
    padding: 20px 35px;
    background-color: #fff;
    box-shadow: 0 0 8px 2px #aaaaaa;
  }

  form h1 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 3rem;
    color: #000;
  }

  form input {
    height: 50px;
    padding-left: 15px;
    border: none;
    margin-bottom: 3rem;
    transition: box-shadow 0.5s;
    background-color: #ddd;
    font-size: 1.2rem;
  }

  form input:focus {
      box-shadow: 0 0 8px #2255ff;
  }

  form .btn-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  form .btn-group button {
    -webkit-appearance: none;
    appearance: none;
    border: none;
    background-color: #2255ff;
    color: #fff;
    padding: 8px 15px;
  }
  
  form .btn-group .back-btn {
    background-color: #dd2222;
    color: #fff;
    text-decoration: none;
    padding: 8px 15px;
  }
</style>

<form method="post" action="page.php">
  <h1>Login</h1>

  <input type="text" name="username" placeholder="Nome do usuário">

  <input type="password" name="password" placeholder="Senha">

  <div class="btn-group">
    <button type="submit">Entrar</button>
    <a href="/" class="back-btn">Voltar</a>
  </div>
</form>
