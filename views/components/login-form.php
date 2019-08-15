<form class="sign-form<?php echo isset($cadastro) ? ' signup' : ''; ?>" method="post" action="<?php echo isset($cadastro) ? 'page' : 'page'; ?>.php">
  <h1><?php echo isset($cadastro) ? 'Cadastro' : 'Login'; ?></h1>

  <?php if (isset($cadastro)) : ?>
  <input type="text" name="username" placeholder="Nome do usuário">

  <input type="password" name="password" placeholder="Senha">

  <input type="password" name="confirm-password" placeholder="Confirmar senha">

  <input type="text" name="signToken" placeholder="Chave de cadastramento">

  <div class="input-radio">
    <label for="m">
      <input type="radio" name="gender" value="M" id="m">
      <span>Homem</span>
    </label>
    <label for="f">
      <input type="radio" name="gender" value="F" id="f">
      <span>Mulher</span>
    </label>
  </div>

  <div class="btn-group">
    <button type="submit">Cadastrar</button>
    <a href="/" class="back-btn">Voltar</a>
  </div>
  <?php else : ?>
  <input type="text" name="username" placeholder="Nome do usuário">

  <input type="password" name="password" placeholder="Senha">

  <div class="btn-group">
    <button type="submit">Entrar</button>
    <a href="/" class="back-btn">Voltar</a>
  </div>
  <?php endif; ?>
</form>
