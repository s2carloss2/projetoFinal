<div class="container-fluid table-info">
  <div class="container">
    <nav class="navbar  navbar-expand-lg navbar-info">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? 'btn py-2 btn-outline-primary':'')?>" href="?pg=inicial">Inicial</a></li>
          <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'produtos') ? 'btn py-2 btn-outline-primary':'')?>" href="?pg=produtos">produtos</a></li>
          <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'contato') ? 'btn py-2 btn-outline-primary':'')?>" href="?pg=contato">contatos</a></li>
        </ul>

          <?php
          
          if (isset($_SESSION[''])) { ?>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="iconuser"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-danger" href="#"><span class="iconexit"></span> Sair</a>
              <a class="dropdown-item text-danger" href="cpainel.php?pg=cpainel"><span class="iconlogin"></span> Login</a>
            </div>
          </li>
        </ul>

          }
          <?php
          }else{?>
        <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link <?php echo (($_GET['pg'] == 'contato') ? 'btn py-2 btn-outline-primary':'')?>" href="cpainel.php?pg=cpainel">Painel Administrativo</a></li>
        </ul>
          <?php
          }
          ?>
        
        
     
      </div>
    </nav>
  </div>
</div>