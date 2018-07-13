<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tabla</title>
	<link rel="stylesheet" type="text/css" href="./css/tabla_css.css">
	<script src="js/jquery-3.3.1.min.js"></script>

	<script>
		$(document).ready(function(){
			function obtener_datos(){
				$.ajax({
					url:"mostrar_datos.php",
					method: "POST",
					success: function(data){
						$("#result").html(data)
					}
				})
			}
		obtener_datos();
		

		/*$(document).on("click","#add", function(){
			var producto_add=$("#producto_add").text();
			var precio_add=$("#precio_add").text();
			var existencia_add=$("#existencia_add").text();
			$.ajax({
				url:"insertar.php",
				method:"POST",
				data:{producto: producto_add, precio: precio_add, existencia: existencia_add},
				success:function(data){
					obtener_datos();
					alert("se agrego producto")
				}
			})
		})*/


		function actualizar_datos(id, pre, col){
			$.ajax({
				url:"actualizar.php",
				method:"POST",
				data:{id: id, pre: pre, col: col},
				success:function(data){
					obtener_datos();
					//alert(data)
				}
			})
		}


		$(document).on("blur", "#nprecio", function(){
			var id=$(this).data("id_precio");
			//alert(id)
			var precio=$(this).text();
			actualizar_datos(id, precio, "precio");
		})

		$(document).on("blur", "#nexistencia", function(){
			var ide=$(this).data("id_existencia");
			//alert(id)
			var ex=$(this).text();
			actualizar_datos(ide, ex, "existencia");
		})



		$(document).on("click","#eliminar", function(){
			if (confirm("estas seguro de que quieres eliminar este producto.")) {
				var id=$(this).data("id_eli");
					$.ajax({
					url:"eliminar.php",
					method:"POST",
					data:{id: id},
					success:function(data){
						obtener_datos();
						//alert(data)
					}
				})
			};
		})

		
		});

	</script>

</head>
<body>
	<form action="insertar.php" method="POST" enctype="multipart/form-data" id="contenido">
		<div id="container" align="center">
			<input type="text" name="producto" placeholder="Nombre del producto" required="">
			<input type="number" name="precio" placeholder="Precio del producto" required="">
			<input type="number" name="existencia" placeholder="Nombre del producto" required="">
			<input type="file" name="foto">
			<input type="submit" name="agregar" value="Agregar"><br><br>

		<div id="result"></div>	
		</div>
	</form>
</body>
</html>