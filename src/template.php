<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODO PHP</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <h1>Gerenciador de tarefas</h1>
  <form action="">
    <fieldset>
      <legend>Nova Tarefa</legend>
      <labe>
        Tarefa:
        <input type="text" name="nome" />
      </label>
      <label>
				Descrição	(Opcional):
				<textarea	name="descricao"></textarea>
      </label>
      <label>
				Prazo	(Opcional):
				<input	type="text" name="prazo"	/>
      </label>
      <fieldset>
				<legend>Prioridade:</legend>
				<label>
          <input	type="radio" name="prioridade" value="1"
                  checked	/>Baixa
          <input	type="radio" name="prioridade" value="2"	/>
                  Média
          <input	type="radio" name="prioridade" value="3"/>
                  Alta
			  </label>
      </fieldset>
      <label>
        Tarefa	concluída:
        <input	type="checkbox" name="concluida" value="sim"	/>
      </label>
      <input type="submit" value="Cadastrar">
    </fieldset>
  </form>
  <table>
    <tr>
      <th>Tarefas</th>
      <th>Descrição</th>
      <th>Prazo</th>
      <th>Prioridade</th>
      <th>Concuída</th>
    </tr>
    
    <?php foreach ($lista_tarefas as $tarefa) : ?>
      <tr>
        <td><?php echo $tarefa['nome']; ?></td>
      
        <td><?php echo $tarefa['descricao']; ?></td>
        <td><?php echo $tarefa['prazo']; ?></td>
        <td><?php echo $tarefa['prioridade']; ?></td>
        <td><?php echo $tarefa['concluida']; ?></td>
      </tr>
      <?php endforeach; ?>
  </table>
</body>
</html>
