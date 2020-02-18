<!DOCTYPE html>
<html>
<head>
	<title>Fumigacion</title>
</head>
<body>
	<center>
		<table border="4">
			<thead>
				<th>Servicios de Fumigacion</th>
				<th>Precios</th>
			</thead>
			<tbody>
				<tr>
					<td>Contra Malas Hierbas</td>
					<td>50000 BsS</td>
				</tr>
				<tr>
					<td>Contra Langostas</td>
					<td>70000 BsS</td>
				</tr>
				<tr>
					<td>Fumigacion General</td>
					<td>100000 BsS</td>
				</tr>
			</tbody>
		</table>
		<br><br><br>
		<form action="proceso.php" method="POST">
			<label>Cliente : <input type="text" name="cliente" required="" pattern="[A-Z a-z]{1,35}"> </label>
			<label>Granja : <input type="text" name="granja" required="" pattern="[A-Z a-z]{1,35}"> </label>
			<label>Metros Cuadrados : <input type="text" name="metros" required="" pattern="[0-9]{1,35}"> </label>
			
			<label>Servicio: <select name="servicio">
				<option></option>
				<option>Contra Malas Hierbas</option>
				<option>Contra Langostas</option>
				<option>Fumigacion General</option>
			</select></label>

			<input type="submit" value="Procesar">
		</form>
	</center>
	<script src= "app1.js"></script>
</body>
</html>
