<?php require_once 'cabecalho.php' ?>
	<section>
		<div class="container mt-5" >
		<form action="media.php" method="GET">
		        <h1>Tira a Media das notas do semestre</h1>
		        <p>Digite o número de disciplinas: <input type="number" name="numero" required></p>
		        <p><input type="submit" name="botao" value="Obtener"></p>
				</section>
					<?php 
					if (isset($_GET['botao'])){
						$quantidade=$_GET['numero'];
							echo "<form action='media.php' method='GET'>";
							echo "<h1>Digite:";
						$contador=1;
						while ($contador <= $quantidade) {
							echo "<p>Digite o $contador&ordm;<input type='number' name='numero$contador' required></p>";
							$contador++;
						}
						echo "<input type='hidden' name='quant' value= '$quantidade'>";
						echo "<p><input type='submit' name='botao2' value='Mostrar'></p>";
						echo "</form>";
					}else if (isset($_GET['botao2'])) {
							$quantidade=$_GET['quant'];
							$cont=1;
							$media=0;
							while ($cont<=$quantidade) {
								$media = $media+$_GET["numero$cont"];
								$cont++;
							}
							$media = $media / $quantidade;
							echo "<p>A média é $media</p>";
					}

					 ?>
						
		 </form>
		</div>
	</section>

</body>
</html>


