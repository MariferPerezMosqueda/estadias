<?php
/*$conn = new con_sql(); 
$conn = $conn->Sqlsrv();

$consulta = "SELECT  
 [OID]
,[ModifiedOn]
,[Active]
,[No]
,[ShortName]
,[Firstname]
,[Middlename]
,[Lastname]
,[SecondLastname]
,[DateOfBirth]
,[AdministrationNumber]
,[Pincode]
,[LocaleId]
,[Gender]
,[CURP]
FROM [MegaFrescos].[dbo].[Employee]";

$stmt = sqlsrv_query($conn, $consulta);
while( $obj = sqlsrv_fetch_object($stmt)) {
    $array[] = $obj;
}*/
?> 

<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>HGP | LOGIN</title>
 <link rel="shortcut icon" href="components/img/logo-hidrotek-04.ico" type="image/x-icon">
 <link rel="icon" href="components/img/logo-hidrotek-04.ico" type="image/x-icon">
 <link href="components/css/bootstrap.min.css" rel="stylesheet">
 <link href="components/font-awesome/css/font-awesome.css" rel="stylesheet">
 <link href="components/css/animate.css" rel="stylesheet">
 <link href="components/css/style.css" rel="stylesheet">
</head>

<body class="gray-bg" style="background: linear-gradient(5deg, #0365a5, #676a6c) !important">

 <div class="loginColumns animated fadeInDown">
  <div class="row">

   <div class="col-md-6">
    <div id="counter" style="text-align: center;" >
     <img src="components/img/logo-hidrotk.png" style="width: 60%;">
     <!-- La cuenta regresiva (el contador) --> 
    </div>
    <h2 class="font-bold" style="color:#f8f9fa !important; text-align:center;">Bienvenido a GHP</h2>

    <p style="color:#f8f9fa !important; text-align:center;">
     Hidrotek gestion de personal. <br>
     Socio de invernaderos.
    </p>
   </div>
   <div class="col-md-6"> 
    <div class="ibox-content">
     <form class="m-t" role="form" action="workspace.php">
      <div class="form-group">
       <input type="email" class="form-control" placeholder="Usuario" required="">
      </div>
      <div class="form-group">
       <input type="password" class="form-control" placeholder="Contraseña" required="">
      </div>
      <button type="submit" class="btn btn-primary block full-width m-b" style="background-color: #057c21 !important;border-color: #057c21 !important;">Entrar</button>
      <a href="#">
       <small>¿Olvidaste tu contraseña?</small>
      </a>


     </form>
     <p class="m-t">
      <small>Recuerde ingresar correctamente sus credenciales, sin espacios.</small>
     </p>
    </div>
   </div>
  </div>
  <hr />
  <div class="row"> 
   <div class="col-md-6">
   <!-- <stron>Copyright</stron> Hidriteck 
   </div>
   <div class="col-md-6 text-right">
    <small>© 2023-2024</small>-->
   </div>
  </div>
 </div>

</body>

</html>
