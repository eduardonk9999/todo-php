<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODO PHP</title>
</head>
<body>
  <h1>Gerenciador de tarefas</h1>

  

  <form action="">
    <fieldset>
      <legend>Nova Tarefa</legend>
      <label for="">
        Tarefa:
        <input type="text" name="nome" />
      </label>

      <input type="submit" value="Cadastrar">
    </fieldset>
  </form>


  <?php 
    $lista_tarefas = array();

    if(isset($_GET['nome'])) {
      $lista_tarefas[] = $_GET['nome'];
    }
  ?>

  <table>
    <tr>
      <th>Tarefas</th>
    </tr>

    <?php foreach ($lista_tarefas as $tarefa) : ?>
      <tr>
        <td><?php echo $tarefa; ?></td>
      </tr>

      <?php endforeach; ?>
  </table>
</body>
</html>