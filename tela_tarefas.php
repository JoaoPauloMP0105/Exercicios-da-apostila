<?php 
	require_once 'model/Produtos.php';
	require_once 'dao/ProdutosDAO.php';
	
$objProd = new ProdutosDAO();
$itens = $objProd->listarProdutos();
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	
	<div class="container-fluid" id="divMain">
		<div class="row">
			<div class="table-responsive col-md-12">
				 
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<td>Cod</td>
								<td>Nome</td>
								<td>Categoria</td>
								<td>Fornecedor</td>
								<td>Preço</td>
							</tr>
						</thead>
						<tbody>
							<?php for ($i=0; $i < count($itens); $i++) { ?>
								<tr>
									<td> <?php echo $itens[$i]->getProductID();?></td>
									<td> <?php echo $itens[$i]->getProductName();?></td>
									<td> <?php echo $itens[$i]->getCategoria();?></td>
									<td> <?php echo $itens[$i]->getFornecedor();?></td>
									<td> <?php echo $itens[$i]->getUniPrice();?></td>
								</tr>
								
							<?php } ?>
						</tbody>
					</table>
				
			</div>	
		</div>
	</div>

</body>
</html>