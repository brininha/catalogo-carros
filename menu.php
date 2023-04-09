<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="index.php">
      <img src="./images/logo01.png" alt="Bootstrap" width="30" height="30">
    </a> -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastrar</a>
        </li>
      </ul>
    </div>
    <form action="consultar.php" class="d-flex">
      <input class="form-control me-2" type="text" placeholder="Pesquisar veículo" name="busca">
      <button class="btn btn-outline-success" type="submit" name="clicked">Enviar</button>
    </form>
  </div>
</nav>

<br>