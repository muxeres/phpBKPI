<?php require_once 'cabecalho.php' ?>
	<section class="container">
		<form action="laranjas.php" method="GET">
		        <h1>Quanto devo pagar pelas Laranjas?</h1>
		        <p>Digite o número que vai comprar: <input type="number" name="numero" required></p>
		        <p><input type="submit" name="botao" value="Obtener"></p>
				
			</form>
	   </section>
		        <?php 
		        if (isset($_GET['botao'])) {
		            $laranjas = $_GET['numero'];
		            $preco1 = 3.25; 
		            $preco2 = 1.30; 
		            $resultado = 'Valor a pagar pelas laranjas é R$';
		            $total;

		            if ($laranjas > 12){
		                $total = $preco2 * $laranjas;
		                
		            } else {
		                $total = $preco1 * $laranjas;
		            }
		            $total= number_format($total,2,",",".");
		            echo "<h1> $resultado <span class='ap'> $total</span></h1>";
		        }
		        ?>
	</body>
</html>