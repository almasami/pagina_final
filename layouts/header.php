
<link rel="stylesheet" href="./Styles.css">
<script src="https://kit.fontawesome.com/88aabbb5fe.js" crossorigin="anonymous"></script>
<style type="text/css">
	* {
		padding: 0;
		margin: 0;
	}

	#header {
		height: 70px
		margin: auto;
		width: 100%;
		font-family: Arial, Helvetica, sans-serif;
    z-index: 1000;
	}
  header {
    align-items: right;
    justify-content: space-between;
    
    position: relative;
    top: 0;
		width: 100%;
    z-index: 1000;
	}


	ul, ol
	{
		list-style: none;
	}
	.nav {
		list-style: none;
		display: flex;
		background-color: #FCEFCF;
    z-index: 1000;
	}

	.nav li {
		position: relative;
    z-index: 1000;
	margin-top: auto;
	margin-bottom: auto;
	}

	.nav li a {
		background-color: #FCEFCF;
		display: block;
		padding: 10px 15px;
		text-decoration: none;
		color: #000;
    z-index: 1000;
	}
	.nav> li{
		float:left;
	}
	.nav li a:hover {
		background-color: #FCEFCA;

		color: #000;
	}

	.nav li ul {
		display: none;
		position: absolute;
		min-width: 140px;
		background-color: #FCEFCF;
    z-index: 1000;
	}

	.nav li:hover > ul {
		display: block;
	}

	.nav li ul li {
		position: relative;
	}

	.nav li ul li ul {
		right: -140px;
		top: 0px;
	}

	.nav li ul li a {
		padding: 8px 10px;
	
	}

	.nav li ul li a:hover {
		background-color: #FCEFCA;
		
		color:#007bff;
	}
  .nav-bar-logo img {
    height: 60px;   
    width:60px;
	
  }

	.brand img{
		width: 175px;
		height: 75px;
		
		line-height: 80px;
	}
  .nav-bar{
    margin: 0;
    	

    left: 0px;
  }
  .last-element{
	margin-right: 30px;


  }
  .first-element{
	margin-left: auto;
  }
</style>
<header>
			

<div id="header">
<nav class= "nav-bar">

	<ul class="nav">
  <li>
	<div class="logo"><a href="indexprueba.php" class="nav-bar-logo"><img src="imagenes\logos\hoja_byn__2_-removebg-.png" ></a></div>
	</li>	
	<li><a href="#">Ejido</a>
			<ul>
			<li><a href="mapa.php">Encuéntranos</a></li>
				<li><a href="galeria.php">Galería</a></li>
				
			</ul>
		</li>
		<li class= "first-element"><a href="centenario.php" >Centenario</a>
			<ul>
				<li><a href="celebracion.php">Celebración</a></li>
				<li><a href="dotaciones.php">Dotaciones</a></li>
				<li><a href="ejidatarios.php">Ejidatarios</a></li>
			</ul>
		</li>
		<li><a href="comisariado.php">Comisariado</a>
			<ul>
				<li><a href="convocatoria.php">Convocatoria</a></li>
				
			</ul>
		</li>
		<li><a href="agricultura.php">Agricultura</a>
			<ul>
				<li><a href="presas.php">Presas</a></li>
				<li><a href="produccion_riego.php">Producción agrícola</a></li>
				<li><a href="riego.php">Riego</a></li>
				<li><a href="temporal.php">Temporal</a></li>
			</ul>
		</li>
		<li><a href="ganaderia.php">Ganadería</a>
			<ul>
			<li><a href="produccion_ganadera">Producción ganadería</a></li>
				<li><a href="uso_comun.php">Uso Común</a></li>
				
			</ul>
		</li>
		
		
	
		</li>
</nav>
</div>


<div class="container-fluid px-0" style= "padding: 0; width: 100% 
		display: flex;
		justify-content: center;">

  <div class="row">
    <div class="col-md-12">
      <div class="p-5 text-center bg-image rounded-3 position-relative" style="background-image: url('imagenes/fotos/Ejidal_verde.png'); height: 300px; width: 100%; background-size:cover; background-position: center;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.3); position: absolute; bottom: 0; left: 0; width: 100%; height: 100%;">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Ejido Juan Mata Ortiz</h1>
              <h4 class="mb-3">Resolución Presidencial</h4>
              <h4 class="mb-3">25 octubre 1923</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
	
