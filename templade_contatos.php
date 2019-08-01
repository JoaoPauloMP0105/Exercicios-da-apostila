<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title >Lista de Contatos</title>

</head>
<body>
	<h1>Lista de Contatos</h1>

	<form>
		<fieldset>
			<legend>Contatos</legend>
			<label>
				<fieldset>
					<tr>
						Nome: <input type="text" name="nome" required="" />
					</tr>
					<tr>	
						Tel: <input type="tel" id="telefone" name="telefone"
       							pattern="[0-9]{3}[0-9]{5}[0-9]{4}"
      								 required="">
					</tr>	
					<tr>	
						Emai: <input type="email" name="email" required="" />
					</tr>
						<tr>
							Data Nascimento: <input type="date" name="dt_nasc" required="" />
						</tr>

				</fieldset>
					
				<fieldset>
					<legend>Sexo:</legend>
					<label>
						<input type="radio" name="sexo" value="homem" required="" />
						HOMEM:
						<input type="radio" name="sexo" value="mulher"/>
						MULHER:
					</label>
						<fieldset>
						<legend>Favorito:</legend>
						<label>
							<input type="radio" name="favorito" value="sim" required="" />
							Sim:
							<input type="radio" name="favorito" value="nao"/>
							Não:
							<input type="radio" name="favorito" value="bloqueado"/>
							Bloqueado:
						</label>
					</fieldset>
				</fieldset>
			</label>
			<label>
				<fieldset>
					<legend>Descrição do Contato</legend>
					<textarea name="descricao"></textarea>

				</fieldset>
			</label>
			<input type="submit" value="Cadastrar"/>
		</fieldset>
	</form>
	
	<table>

		<tr>
			
				<th>Nome</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Data Nascimento</th>
				<th>Sexo</th>
				<th>Favorito</th>
				<th>Descrição</th>

		</tr>

		<?php foreach ($lista_contatos as $contatos) : ?>
			<tr>
				<td><?php echo $contatos['nome']; ?></td>
				<td><?php echo $contatos['telefone']; ?></td>
				<td><?php echo $contatos['email']; ?></td>
				<td><?php echo $contatos['dt_nasc']; ?></td>
				<td><?php echo $contatos['sexo']; ?></td>
				<td><?php echo $contatos['favorito']; ?></td>
				<td><?php echo $contatos['descricao']?></td>
			</tr>
			
			<?php endforeach; ?>
	</table>
</body>
</html>