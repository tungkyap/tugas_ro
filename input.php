<?php 
	include('header.php');
	if (!empty($_POST)) {		
		$pg = $_POST['pgudang'];
		$gp = $_POST['pgudang'];
		if ($pg > 10 || $gp > 10) {
			echo "Jumlah pabrik dan gudang maksimal 10 !";
			?>
			<br>
			<a href="index.php">kembali</a>
			<?php
		} else {
			?>
			<form action="proses.php" method="post">
				<table style="border: 1px solid black; border-collapse: collapse;" align="center">
					<tr>
						<td>Dari / Ke</td>
						<?php
							for ($k=1; $k <= $pg ; $k++) { 
								?>
								<tr>
									<td><?php echo "Pabrik".$i; ?></td>
								<?php
							} echo "</tr>";
						?>
					</tr>
				</table>
			</form>
			<?php
		}
	} else {
		header("location: index.php");
	}
	
 ?>
</body>
</html>