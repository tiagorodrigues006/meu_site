<<!doctype html>
<html class="fixed">
	<head>
	


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
		<style>
			#abc {
    z-index: 20;
}

				width:100%;
				height:100%;
				opacity:.95;
				top:0;
				left:0;
				display:none;
				position:fixed;
				background-color:white;
				overflow:auto;
			}

			img#close {
				position:absolute;
				right:-14px;
				top:-14px;
				cursor:pointer;
				width: 20px;
			}
			div#popupContact {
				position:absolute;
				left:50%;
				top:17%;
				margin-left:-202px;
				font-family:'Raleway',sans-serif
			}

			#form {
				max-width:500px;
				min-width:450px;
				padding:10px 50px;
				font-family:raleway;
				background-color:#fff;
				border:2px solid gray;
				border-radius:10px;
			}

			#form p {
				margin-top:30px
			}
			#form h2 {
				background-color:#4169E1;
				padding:20px 35px;
				margin:-10px -50px;
				text-align:center;
				border-radius:10px 10px 0 0;
				color: white;
			}

			#form hr {
				margin:10px -50px;
				border:0;
				border-top:1px solid #ccc
			}
			#form input[type=text] {
				float: left;
				width:40%;
				margin-right: 5%;
				margin-left: 5%;
				padding:10px;
				margin-top:30px;
				border:1px solid #ccc;
				padding-left:40px;
				font-size:16px;
				font-family:raleway;
			}

			#form #name {
				background-image:url(../images/name.jpg);
				background-repeat:no-repeat;
				background-position:5px 7px
			}
			#form #email {
				background-image:url(../images/email.png);
				background-repeat:no-repeat;
				background-position:5px 7px
			}
			#form textarea {
				background-image:url(../images/msg.png);
				background-repeat:no-repeat;
				background-position:5px 7px;
				width:90%;
				height:95px;
				padding:10px;
				resize:none;
				margin-top:30px;
				border:1px solid #ccc;
				padding-left:40px;
				font-size:16px;
				font-family:raleway;
				margin-bottom:30px;
				margin-right: 5%;
				margin-left: 5%;
			}

			#form #submit {
				text-decoration:none;
				width:100%;
				text-align:center;
				display:block;
				background-color:#111;
				color:#fff;
				border:1px solid #BEBEBE;
				padding:10px 0;
				font-size:20px;
				cursor:pointer;
				border-radius:5px
			}
			#form span {
				font-weight:700
			}

			#form button {
				width:10%;
				height:45px;
				border-radius:3px;
				background-color:#cd853f;
				color:#fff;
				font-family:'Raleway',sans-serif;
				font-size:18px;
				cursor:pointer;
			}
			.error {
            color: #a94442; 
            background: #f2dede; 
            border: 1px solid #a94442;
            text-align: center;
            font-size: 12px;
            width: 100%;
            margin: 0 auto;
        }

        .success {
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            margin-bottom: 20px;
            font-size: 12px;
            text-align: center;
            width: 100%;
            margin: 0 auto;
        }
        .pag{
            font-size: 18px;
            text-align: center;
            width: 100%;
            margin: 0 auto;
        }
		.body-sign {
	display: table;
	height: 0vh;
	margin: 0 auto;
	max-width: 500px;
	padding: 0 15px;
	width: 100%;
	position:relative; 
		 
}
		</style>
	</head>
	<body>
		<section class="body">

			

			<div class="inner-wrapper">


			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Intervenções André Tavares</h2>
					
						<div class="right-wrapper pull-right" style="padding-right: 30px">
							<ol class="breadcrumbs">
								
								<li><span>André Tavares </span></li>
								<li><span>Intervenções André Tavares</span></li>
							</ol>
					
							
						</div>
					</header>

					<!-- start: page -->
						<section class="panel">
							
						
<?php 
							if(isset($_POST["submit"])){
	
	/* Guardar os dados do vetor $_POST para a respetiva variável */
	$marca=$_POST['marca'];
	$id_cliente=$_POST['cliente'];
	$tipo=$_POST['tipo'];
	$sn=$_POST["sn"];
	$modelo=$_POST["modelo"];



		$insere="INSERT INTO equipamentos (id_cliente,marca,tipo,sn,modelo) VALUES ('".$id_cliente."','".$marca."', '".$tipo."','".$sn."', '".$modelo."' ) " ;
				//Código PHP que executa o SQL
				$result=mysqli_query($ligax,$insere);
				
				//Se $result for 1, então o registo foi inserido com sucesso
				if($result){ 
					?>

					<div class="success">
						<h1>Equipamento criado com sucesso!</h1>
						
					</div>
					<div class="pag">Clique <a href="index.php">aqui</a> para voltar para a página inicial</div>

				<?php } else { ?>

					<div class="error">
						<h1>Erro ao criar o equipamento!</h1>
					</div>
				<?php 
					}
				} 
				


				if(isset($_POST["submit"])){
					$altera="Select * from cliente LIMIT 10";
				}
				?>
							
								<table class="table table-bordered table-striped mb-none" id="datatable-details">
									<thead>
										<tr>
											<th style=" width: 2%;">ID</th>
											<th style=" width: 20%;">Cliente</th>
											<th style=" width: 5%;">Solicitado</th>
											<th style=" width: 5%;">Remoto / Presencial</th>
											<th style=" width: 5%;">Data Inicial</th>
											<th style=" width: 5%;">Data Final</th>
											<th style=" width: 2%;">Time</th>
											<th style=" width: 5%;">Tipo Interv.</th>											
                                            <th style=" width: 40%;">Descrição</th>
											<th style=" width: 3%;">Créd. Cons.</th>
											<th style=" width: 2%;">Cont.</th>
											<th style=" width: 2%;">Fat</th>
                                            <th style=" width: 2%;">Ok</th>
											<th style=" width: 15%;">Tecnico</th>
											


											
											
										</tr>
									</thead>
									<tbody>
                                    <?php
										if(isset($_POST['procurar_cliente'])){											
											$nome=$_POST['nome'];
											if($nome==""){
												$nome=-1;
											}
											$email=$_POST['email'];
											if($email==""){
												$email=-1;
											}

										$altera="Select * from treinos where id = '".$_POST['id']."' or cliente like '".$nome."%'" ;
										}else{
                                        $altera="Select * from treinos ORDER BY id DESC";
										}
										$ids_especificos = array(36); // Lista de IDs específicos que você deseja visualizar

// Convertendo a lista de IDs em uma string separada por vírgulas para usar na consulta SQL
$ids_string = implode(', ', $ids_especificos);

// Construindo a consulta SQL
$altera = "SELECT * FROM treinos WHERE id IN ($ids_string)";
                                        $result= mysqli_query($ligax,$altera); 

                                        if ($result) {

                                        //Vai à base de dados selecionar os registos entre dois limites
                                        while($registo = mysqli_fetch_assoc($result)){
                                        $id=$registo['id'];
										$cliente=$registo['cliente'];
										$pessoa=$registo['pessoa'];
										$tipo_intervencao=$registo['tipo_intervencao'];
										$remoto=$registo['remoto'];
										$data_inicio=$registo['data_inicio'];
										$data_fim=$registo['data_fim'];
										$tempo=$registo['tempo'];
										$descricao=$registo['descricao'];
										$creditos_gastos=$registo['creditos_gastos'];
										$faturar=$registo['faturar'];
										$faturado=$registo['faturado'];
										$tecnico=$registo['tecnico'];

										$query2="select contrato from cliente where nome='$cliente'";
										$result2=mysqli_query($ligax,$query2);
										while($registo2=mysqli_fetch_assoc($result2)){
											
											
											$contrato=$registo2['contrato'];
											
										}



                                    ?>

										<tr class="gradeX">
											<td ><a href="index.php?pagina=editar_marcacao&id=<?php echo $id; ?>" ><?php echo $id; ?></td>
											<td><a href="index.php?pagina=editar_marcacao&id=<?php echo $id; ?>" ><?php echo $cliente; ?></td>
                                            <td><a href="index.php?pagina=editar_marcacao&id=<?php echo $id; ?>" ><?php echo $pessoa; ?></td>
											<td><a href="index.php?pagina=editar_marcacao&id=<?php echo $id; ?>" ><?php echo $remoto; ?></td>
											<td><?php echo $data_inicio; ?></td>
                                            <td><?php echo $data_fim; ?></td>
                                            <td><?php echo $tempo; ?></td>
											<td><?php echo $tipo_intervencao; ?></td>
                                            <td><?php echo $descricao; ?></td>
											<td><?php echo $creditos_gastos;?></td>
											<td><?php echo $contrato; ?></td>
                                            <td><?php echo $faturar; ?></td>
                                            <td><?php echo $faturado; ?></td>
                                            <td><?php echo $tecnico; ?></td>					
                                            


											
											


											
										</tr>

                                        <?php }} ?>

									</tbody>

								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>
			</div>

			
		</section>


		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.datatables.row.with.details.js"></script>

		
		<!-- Theme Initialization Files -->
	


		<!-- Examples -->
		<script>
			



			// Validating Empty Field
			function check_empty() {
			if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
			alert("Fill All Fields !");
			} else {
			document.getElementById('form').submit();
			alert("Form Submitted Successfully...");
			}
			}
			//Function To Display Popup
			function div_show() {
			document.getElementById('abc').style.display = "block";
			}
			//Function to Hide Popup
			function div_hide(){
			document.getElementById('abc').style.display = "none";
			}
		</script>
	</body>
</html>