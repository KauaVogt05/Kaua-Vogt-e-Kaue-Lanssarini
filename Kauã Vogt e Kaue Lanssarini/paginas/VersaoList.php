<?php
include './funcao.php';
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_GET['id'])) {
  $db->destroy("versao", $_GET['id']);
}

if (!empty($_POST)) {
  //  var_dump($_POST);
  //  exit;
  $dados = $db->search("versao", $_POST);
} else {
  $dados = $db->all("versao");
}
?>

<div class="col">

  <h3>Listagem de Versão do jogo</h3>

  <div class="container-fluid">
    <form class="d-flex" method="post">
      <div class="col-2 px-1">
        <select name="tipo" class="form-select me-4">
          <option value="nome">Nome</option>
          <option value="codigo">Codigo</option>
        </select>
      </div>
      <div class="col-4 px-1">
        <input class="form-control me-4" type="search" name="valor" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="col-4">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        <a class="btn btn-outline-primary" href="./VersaoForm.php">Novo</a>
      </div>
    </form>
  </div>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Codigo</th>
        <th scope="col">Data</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($dados as $item) {
        // var_dump($item);
        //exit;
        echo "<tr>
                    <th scope='row'>$item->id</th>
                    <td>$item->nome</td>
                    <td>$item->codigo</td>
                    <td>$item->data</td>
                    <td><a href='VersaoForm.php?id=$item->id'>Editar</a></td>
                    <td><a onclick='return confirm(\"Deseja Excluir?\")' href='VersaoList.php?id=$item->id'>Deletar</a></td>
                </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
<?php
footer();
?>