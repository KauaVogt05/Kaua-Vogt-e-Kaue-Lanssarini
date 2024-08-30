<?php
include "./funcao.php";
include "../Util.php";

verificar();
head();

$db = new db();
$db->conn();

if (!empty($_POST['id'])) {

    //var_dump($_POST);
    $db->update("versao", [
        'nome' => $_POST['nome'],
        'codigo' => $_POST['codigo'],
        'data' => $_POST['data'],
        'id' => $_POST['id'],
    ]);
    header('location: VersaoList.php');

} else if (!empty($_POST)) {
    //var_dump($_POST);
    $db->insert("versao", [
        'nome' => $_POST['nome'],
        'codigo' => $_POST['codigo'],
        'data' => $_POST['data'],
    ]);
    header('location: VersaoList.php');
}

if (!empty($_GET['id'])) {
    $data = $db->find("versao", $_GET['id']);
    // var_dump($data);
    // exit;
}

?>

<div class="col">

    <form action="VersaoForm.php" method="POST">
        <h3>Formulário Aluno</h4>

            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>">

                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome"
                    value="<?php echo !empty($data->nome) ? $data->nome : "" ?>" placeholder="Nome">
            </div>

            <div class="mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="codigo"
                    value="<?php echo !empty($data->codigo) ? $data->codigo : "" ?>" placeholder="000.555.000-55">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Data</label>
                <input type="date" class="form-control" name="data"
                    value="<?php echo !empty($data->data) ? $data->data : "" ?>">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-primary" href="./VersaoList.php">Voltar</a>
    </form>
</div>

<?php
footer();
?>