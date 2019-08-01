

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style1.css">
	<title>Gerenciador de tarefas</title>
</head>
<body >
		<h1>Gerenciador de Tarefas</h1>

		<form >
			<fieldset>
				<legend>Nova tarefa</legend>
				<label>
					Tarefa:
					<input type="text" name="nome"/>
				</label>
			
				<label>
					Descrição do trabalho:
					<textarea name="descricao"></textarea>
				</label>
				<div align="center">
					<label>
						Prazo
						<input type="date" name="prazo"/>
					</label>
				</div>
				<fieldset>
					<legend>Prioridade:</legend>
					<div align="center">
						<label>
							<input type="radio" name="prioridade" value="baixa" checked/>
							Baixa
							<input type="radio" name="prioridade" value="media"/>
							Média
							<input type="radio" name="prioridade" value="alta"/>
							Alta
						</label>
					</div>
				</fieldset>
				<label>
					<legend>Tarefa concluída:</legend>
					<input type="radio" name="concluida" value="sim"/>
					Sim
					<input type="radio" name="concluida" value="nao">
					Não
				</label>
				<input type="submit" value="Cadastrar"/>
				
			</fieldset>
		</form>
		
		<table>
			<tr>
				<th>Cod</th>
				<th>Tarefa</th>
				<th>Descricao</th>
				<th>Prazo</th>
				<th>Prioridade</th>
				<th>Concluída</th>
			</tr>


		<?php 
				$lista_tarefas = array();
				foreach ($lista_tarefas as $tarefa):?>
				
				<tr>
					<td><?php echo $tarefa['id']; ?></td>
					<td><?php echo $tarefa['nome']; ?></td>
					<td><?php echo $tarefa['descricao']; ?></td>
					<td><?php echo arrumaData($tarefa['prazo']); ?></td>
					<td><?php echo $tarefa['prioridade']; ?></td>
					<td><?php echo $tarefa['concluida']; ?></td>
				</tr>

			<?php endforeach; ?>
		

		</table>
</body>
</html>

<?php
function arrumaData($dt){

$vData=explode('-',$dt);
$dtCorreta = $vData[2] . "/" . $vData[1] . "/" . $vData[0]; 

return $dtCorreta;

}


?>