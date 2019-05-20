 <?php 
 if ($visivelr != true) {
  header("Location: ../../home.php");
}
?>
<script src="vendor/js/voltarAoTopo.js"></script>
<link rel="stylesheet" href="vendor/css/rodape.css">

<div class="smoothscroll-top">
  <span class="scroll-top-inner">
    <i class="fas fa-2x fa-angle-up"></i>
  </span>
</div>

<div id="faixa">
  <div class="container">
    <div class="row text-center">
      <div class="col-2"></div>
      <div class="col-md-3">
        <a href="como_comprar.php" style="text-transform: uppercase;"><?=$rdp_comocomprar?></a>
      </div>

      <div class="col-md-2">
        <a href="contato.php" style="text-transform: uppercase;"><?=$rdp_contato?></a>
      </div>

      <div class="col-md-3">
        <a href="suporte.php" style="text-transform: uppercase;"><?=$rdp_suporteaocliente?></a>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</div>
<div class="bg-dark text-light">
  <div class="container">

    <div class="row">
      <div class="p-4 col-md-3">
        <h2 class="mb-4"><?=$rdp_titulo1?></h2>
        <p><?=$rdp_txt1?></p>
      </div>

      <div class="p-4 col-md-3">
        <h2 class="mb-4">Site</h2>
        <ul class="list-unstyled">
          <a href="#" class="text-light"><?=$item0?></a><br>
          <a href="#" class="text-light"><?=$item1?></a><br>
          <a href="#" class="text-light"><?=$item2?></a><br>
          <a href="#" class="text-light"><?=$item3?></a><br>
          <a href="#" class="text-light"><?=$item4?></a>
        </ul>
      </div>

      <div class="p-4 col-md-3">
        <h2 class="mb-4"><?=$rdp_titulo3?></h2>
        <p>
          <a href="#" class="text-light">
            <i class="fa d-inline mr-3 text-light fa-phone"></i>+246 - 542 550 5462
          </a>
        </p>

        <p>
          <a href="#" class="text-light">
            <i class="fa d-inline mr-3 text-light fa-envelope-o"></i>info@pingendo.com
          </a>
        </p>

        <p>
          <a href="#" class="text-light">
            <i class="fa d-inline mr-3 fa-map-marker text-light"></i>365 Park Street, NY
          </a>
        </p>

      </div>

      <div class="p-4 col-md-3">
        <h2 class="mb-4"><?=$rdp_titulo4?></h2>
        <form>
          <fieldset class="form-group">
            <label for="exampleInputEmail1"><?=$rdp_txt4?></label>
            <input type="email" class="form-control" placeholder="Enter email">
          </fieldset>
          <button type="submit" class="btn btn-outline-warning"><?=$rdp_button1?></button>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="rodape">
  <span>
    <i class="far fa-copyright" style="margin-right: 5px;"></i>
    <?=$rdp_copy?>
  </span>
</div>

