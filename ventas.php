<html lang="en">
    <head>
        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title >VENTAS</title>
    </head>
    <body style="background: #FDB160">
        <br />
        <div  class="p-3 mb-2  text-Dark" align="center">
            <h1>Baco's Phones</h1>
        </div>
        <div align="right">
            <a href="index.html"> <button type="submit" class="btn btn-dark">salir</button></a>
        </div>
        <br />
    <?php
      if(isset($_GET['producto']))
      {
       include('Conexion.php');
       $con= new Conexion();

       $producto=$_GET['producto'];
       $precio=$_GET['precio'];

       $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
       echo " -------- Datos de producto ".$_GET['producto']." --- Precio".$_GET['precio'];
       $consulta=$con->query($query);
       $con->close();
       ?>
      <div align="center" >
       <table align=center border="8" bgcolor="AQUA">
        <tr bgcolor="AQUA">
           <td>
            <p>Producto</p>
           </td>
           <td>
            <p>Precio</p>
           </td>
        </tr>
        <?php 
        
         $con= new Conexion();
         $query="SELECT * FROM `carrito` WHERE 1";
         $pro=$con->query($query);
         $con->close();
	
         while($row=mysqli_fetch_assoc($pro))

        {
         echo "
            <tr>
           <td>
            <p>".$row['producto']."</p>
           </td>
           <td>
            <p>".$row['precio']."</p>
           </td>
        </tr>";

		   $con=new Conexion();
				 $sql="delete * FROM `carrito` WHERE 1";
				$con->query($query);
        }




			
				
        ?>
       </table>
     </div>
       <br/>
	

     <?php
 }
    ?>

    <div align="center" >
        <table border="1
		
		"  bgcolor="LIGHTCORAL">
		<tr  bgcolor="LIGHTCORAL">
		<td></td>
		<td>NOMBRE</td>
		<td>DESCRIPCION</td>
		<td>AGREGAR CARRITO</td>
		<td></td>
		</tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td> 
                <td> Motorola Moto G8 Plus </td>
                <td>
El Motorola Moto G8 Plus es el smartphone mas poderoso de la octava generacion de la serie Moto G de Motorola.
Con una pantalla Full HD+ de 6.3 pulgadas, el Moto G8 Plus esta potenciado por un procesador Snapdragon 665,
acompañado de 4GB de memoria RAM y 64GB de almacenamiento interno expandible.
La camara trasera del Moto G8 Plus es triple, de 48 MP + 16 MP + 5 MP, mientras que su camara frontal para selfies es de 25 MP.
El Moto G8 Plus completa sus caracteristicas con una bateria de 4000 mAh con carga rapida, lector de huellas y corre Android 9.0 Pie.        
<br />
                   
                    <br />
                    Precio de $250.00
                </td>
               
				<td><a href="?producto=Moto-g-8&precio=$250">Agregar a carrito</a><td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td> oppo ace 2 </td>
                <td>
                   Oppo Ace 2 esta disponible en tres colores: Púrpura, gris y plateado.
				   Cuenta con una carcasa metalica unibody y una pantalla infinita con un agujero en la esquina superior izquierda para la camara de selfies.
                    <br />
                   Cuenta con cuatro camaras traseras. El sensor principal alcanza los 48 MP. Esta apoyado por una camara gran angular de 8 MP y dos sensores de profundidad y macro, ambos con 2 MP.

					La camara frontal tiene una definición de 16 MP.
                    <br />
                    Precio de $699
                </td>
                
				<td> <a href="?producto=Oppo ace 2&precio=$699">Agregar a carrito</a></td>
				<td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td> one plus 7</td>
                <td>
                    El OnePlus 7 Pro esta construido en cristal y es un movil top en todos los aspectos.
					Cuenta con un frontal en el que no hay rastro de notch y cuenta con unos marcos de tamaño muy reducido, asi como una barbilla muy estrecha.
					El lector de huellas esta en la pantalla. En la parte trasera podemos ver el logo de OnePlus, asi como el modulo de la triple camara.
				aLa camara frontal esta en un modulo retractil en la parte superior del terminal.
                    <br />
                    
                    <br />
                    Precio de $649
                </td>
              
				  <td><a href="?producto=one plus 7&precio=$649">Agregar a carrito</a></td>
				  <td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td> samnsung s 20 ultra </td>
                <td>
                    Samsung anuncia este Galaxy S20 Ultra como el smartphone que cambiara la fotografia.
					Es en ese aspecto donde parece que la marca coreana encuentra la justificacion para valorar
					a este modelo con un precio de salida de 1.359 euros para su version de 128 GB y de 1.559,90 euros por la de 512 GB.
                    <br />
             108 Mpx f/1.8 principal
12 Mpx f/2.2 gran angular
48 Mpx f/3.2 profundidad
Sensor ToF 3D

Video hasta 8K
                    <br />
                    Precio de $1,197
                </td>
               
				<td> <a href="?producto=samnsung s 20 ultra&precio=$1,197">Agregar a carrito</a></td>
				<td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td> xiamomi Mi note 10 pro </td>
                <td>
                    Las dimensiones del Xiaomi Mi Note 10 Pro son de 157,8 mm de alto por 74,2 mm de ancho. 
					El movil tiene un grosor de 9,7 mm y un peso de 208 g. A nivel de diseño es importante destacar que el movil tiene lector de huellas.
                    <br />
                  En la parte frontal tenemos la camara para selfies del Mi Note 10 Pro, 
				  con 32 de resolucion. Su apertura es de f/2.0. El Mi Note 10 Pro cuenta con camara dual Este sensor dual tiene una apertura de f/2.0. 
				  En la parte frontal tenemos la camara para selfies del Mi Note 10 Pro, con 32 de resolucion. Dicho sensor tiene una apertura de f/2.0.
                    <br />
                    Precio de $536
                </td>
             
				<td> <a href="?producto=xiamomi Mi note 10 pro&precio=$536">Agregar a carrito</a></td>
				<td>------</td>
            </tr>

        </table>

    </div>
</body>
</html>

