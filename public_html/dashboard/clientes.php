<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EZY 3D - Dasboard</title>
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="vendor/jquery/jquery.min.js"></script>

  <style>
  #btn-nome, #btn-email, #btn-telefone, #btn-pais, #btn-ramo, #btn-empresa, #btn-senha{
    color: blue;
    cursor: pointer;
  }
  #btn-nome:hover, #btn-email:hover, #btn-telefone:hover, #btn-pais:hover, #btn-ramo:hover, #btn-empresa:hover, #btn-senha:hover{
    text-decoration: underline;
  }
</style>
<script>
  function excluirCliente(id, tipo){
    $.ajax({
      url: "http://www.ezy3d.com.br/controle/cliente.php",
      method: "POST",
      data: {"id": id, "tipo": tipo},
      success: function(resposta){
        alert(resposta)
        location.reload()
      },

      error: function(){
        alert("Erro ao fazer a requisição")
      }
    });
  }

  function confirmar(){
    return confirm('Deseja realmente excluir este cliente?')
  }
</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

      <?php
include "menu.php";
if (!($permissao == "@571824" || $permissao == "&43642" || $permissao == "$3590" || $permissao == "*271")) {
    session_destroy();
    header("Location: ../pa-admin.php");
}
?>


   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ramo</th>
                <th>Empresa</th>
<?php if ($permissao == "@571824") {?>
                <th>Editar</th>
<?php }?>
              </tr>
            </thead>
            <tbody>
             <?php
require_once "../Classes/Conexao.php";
require_once "../Classes/Usuario.php";
$obj = new Usuario();
$registro = $obj->consultar("*", "cliente", null, null);
foreach ($registro as $cliente) {?>
              <tr>
                <td><?=$cliente['idcliente']?></td>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['email']?></td>
                <td><?=$cliente['telefone']?></td>
                <td><?=$cliente['ramo']?></td>
                <td><?=$cliente['empresa']?></td>
<?php if ($permissao == "@571824") {?>
                <td class="text-center">
                  <a class="btn btn-outline-primary" id="btn-alterar" href="javascript:consultarCliente(<?=$cliente['idcliente']?>, 'consultar')">Alterar</a>
                  <a class="btn btn-outline-danger" onclick="return confirmar()"  href="javascript:excluirCliente(<?=$cliente['idcliente']?>, 'excluir')">Excluir</a>
                </td>
<?php }?>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>