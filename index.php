 whatsadel
<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="styles.css">

<!--	Title
	=========================================================-->
<title>URBE - Gestión Integral</title>
</head>
<body>

<!--	Page Loader  -->
<!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
    <nav class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8" y="8" width="24" height="24" fill="none" stroke="white" stroke-width="2" transform="rotate(45 20 20)"/>
                    <rect x="12" y="12" width="16" height="16" fill="none" stroke="white" stroke-width="2" transform="rotate(45 20 20)"/>
                </svg>
                <div>
                    <div class="logo-text">URBE</div>
                    <div class="logo-subtext">GESTIÓN INTEGRAL SAC</div>
                </div>
            </div>
            <ul class="nav-menu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#busqueda">Buscar</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#caracteristicas">Características</a></li>
                <li><a href="#valores">Valores</a></li>
                <li><a href="#construccion">Construcción</a></li>
                <li><a href="#inmobiliaria">Inmobiliaria</a></li>
                <li><a href="#portafolio">Portafolio</a></li>
                <li><a href="#equipo">Equipo</a></li>
                <li><a href="#contacto">Contáctanos</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
		
        <!--	Banner Start   -->
        <!--<div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/page-top-bg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">-->
		<div class="full-row overlay-secondary" style="background-image: url('images/page-top-bg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">	
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-danger">Busca</span><br>
                                La casa de tus Sueños</h1>
                            <form method="post" action="propertygrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Selecciona el tipo</option>
                                                <option value="departamento">Departamento</option>
                                                <option value="plano">En Plano</option>
                                                <option value="terreno">Terreno</option>
                                                <option value="casa">Casa</option>
                                                <option value="comercial">Local Comercial</option>
                                                <option value="industrial">Local Industrial</option>
                                                <option value="hotel">Hotel</option>
                                                <option value="edificio">Edificio</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Alquiler o Venta</option>
                                                <option value="alquiler">Alquiler</option>
                                                <option value="venta">Venta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Ingresa Ciudad o Distrito" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-secondary w-100">Busca tu inmueble</button>
                                        </div>
                                    </div>								
                                </div>
                            </form>
							
							
					<div class="fact-counter">
                    <?php
                        // Conteos seguros y en un solo lugar (prepared statements y bind_result)
                        // Total propiedades
                        $totalProperties = 0; $totalSale = 0; $totalRent = 0; $totalAgents = 0;
                        if ($con && $stmt = $con->prepare("SELECT COUNT(*) FROM property")) {
                            $stmt->execute();
                            $stmt->bind_result($totalProperties);
                            $stmt->fetch();
                            $stmt->close();
                        }
                        // Venta
                        if ($con && $stmt = $con->prepare("SELECT COUNT(*) FROM property WHERE stype = ?")) {
                            $stype = 'venta';
                            $stmt->bind_param('s', $stype);
                            $stmt->execute();
                            $stmt->bind_result($totalSale);
                            $stmt->fetch();
                            $stmt->close();
                        }
                        // Alquiler
                        if ($con && $stmt = $con->prepare("SELECT COUNT(*) FROM property WHERE stype = ?")) {
                            $stype = 'alquiler';
                            $stmt->bind_param('s', $stype);
                            $stmt->execute();
                            $stmt->bind_result($totalRent);
                            $stmt->fetch();
                            $stmt->close();
                        }
                        // Agentes/usuarios
                        if ($con && $stmt = $con->prepare("SELECT COUNT(*) FROM user")) {
                            $stmt->execute();
                            $stmt->bind_result($totalAgents);
                            $stmt->fetch();
                            $stmt->close();
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php echo intval($totalProperties); ?>">0</div>
                                <div class="text-white h5">Propiedades Disponibles</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php echo intval($totalSale); ?>">0</div>
                                <div class="text-white h5">Propiedades Disponibles a la Venta</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php echo intval($totalRent); ?>">0</div>
                                <div class="text-white h5">Propiedades Disponibles en Alquiler</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php echo intval($totalAgents); ?>">0</div>
                                <div class="text-white h5">Nuestros Agentes</div>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
     
 <!--	Achievement
        ============================================================
        <div class="full-row overlay-secondary" style="background-image: url('images/page-top-bg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">		
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Propiedades Disponibles</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='venta'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Propiedades Disponibles a la Venta</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='alquiler'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Propiedades Disponibles en Alquiler</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-white my-4" data-speed="1500" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                               <div class="text-white h5">Nuestros Agentes</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>-->		
	 
        <!--	Text Block One
		======================================================
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Que Hacemos</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-secondary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-secondary py-3 m-0"><a href="#">Servicio de Venta</a></h5>
                                <p>Floro.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-secondary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-secondary py-3 m-0"><a href="#">Servicio de Alquiler</a></h5>
                                <p>Floro.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-secondary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-secondary py-3 m-0"><a href="#">Listar Propiedad</a></h5>
                                <p>Floro.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-secondary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-secondary py-3 m-0"><a href="#">Inversión Legal</a></h5>
                                <p>Floro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		Our Services  ---->
		
		

        

		

        
       
	   
	   
	   
	   
	   
        
    <!-- ========== ¿Quiénes Somos? ========== -->
    <section id="nosotros" class="full-row about">
        <div class="container">
            <div class="section-badge">¿Quiénes Somos?</div>
            <h2>Líderes en corretaje inmobiliario</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Somos una empresa de corretaje inmobiliario especializada en brindar asesoramiento experto en la compra y venta de inmuebles.</p>
                    <p>Contamos con una sólida trayectoria en el sector, respaldada por un equipo profesional en marketing y ventas, que desarrolla estrategias comerciales eficientes para agilizar cada proceso de transacción.</p>
                </div>
                <div class="stats">
                    <div class="stat-card">
                        <div class="stat-icon">🏠</div>
                        <div class="stat-number">+60</div>
                        <div class="stat-label">Propiedades disponibles</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">👨‍👩‍👧‍👦</div>
                        <div class="stat-number">+200</div>
                        <div class="stat-label">Familias encontraron su hogar</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">📅</div>
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Años de experiencia</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">📈</div>
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Clientes satisfechos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ¿Qué nos caracteriza? ========== -->
    <section id="caracteristicas" class="features">
        <div class="container">
            <div class="section-badge">Características</div>
            <h2>¿Qué nos caracteriza?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Experiencia Segura y Confiable</h3>
                    <p>Hacemos de tu compra o venta una experiencia segura y confiable</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3>Atención Exclusiva</h3>
                    <p>Atención exclusiva y garantía en cada paso de tu operación inmobiliaria</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⭐</div>
                    <h3>Respaldo Profesional</h3>
                    <p>Respaldo y confianza con una experiencia profesional adaptada a tus necesidades</p>
                </div>
            </div>
        </div>
    </section>

    <section id="valores" class="values">
        <div class="container">
            <div class="section-badge">Nuestros Valores</div>
            <h2>Lo que nos define</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h3>Confianza</h3>
                    <p>Cumplimos con los plazos y garantizamos una experiencia positiva para nuestros clientes</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💡</div>
                    <h3>Innovación</h3>
                    <p>Ofrecemos soluciones mejoradas e innovadoras que superan las expectativas de nuestros clientes</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🔒</div>
                    <h3>Seguridad</h3>
                    <p>Experiencia segura en cada transacción, protegiendo tus intereses en todo momento</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">👤</div>
                    <h3>Atención Personalizada</h3>
                    <p>Servicio adaptado a cada cliente, porque entendemos que cada proyecto es único</p>
                </div>
            </div>
        </div>
    </section>

    <section id="construccion" class="construction">
        <div class="container">
            <div class="section-badge">Construcción</div>
            <h2>Servicios de Construcción</h2>
            <p class="section-subtitle">Soluciones integrales en construcción, diseño y remodelación para tu hogar o negocio</p>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🏗️</div>
                    <h3>Remodelaciones y Arquitectura</h3>
                    <p>Diseños arquitectónicos modernos y funcionales</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3>Diseño de Interiores</h3>
                    <p>Espacios únicos que reflejan tu estilo</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔨</div>
                    <h3>Demoliciones</h3>
                    <p>Demolición controlada y segura</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🪵</div>
                    <h3>Acabados de Pisos</h3>
                    <p>Laminados, parquet, vinílicos, porcelanato, alfombras</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧱</div>
                    <h3>Revestimientos Decorativos</h3>
                    <p>Enchapes, piedra, 3D, pintura, drywall</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3>Expedientes Técnicos</h3>
                    <p>Documentación técnica completa y detallada</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📜</div>
                    <h3>Licencias Municipales</h3>
                    <p>Tramitación ágil y legal</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">👷</div>
                    <h3>Gestión y Supervisión de Obras</h3>
                    <p>Control técnico y de calidad</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3>Obras Nuevas</h3>
                    <p>Construcción de proyectos desde cero</p>
                </div>
            </div>
        </div>
    </section>

    <section id="inmobiliaria" class="real-estate">
        <div class="container">
            <div class="section-badge">Inmobiliaria</div>
            <h2>Servicios Inmobiliarios</h2>
            <p class="section-subtitle">Corretaje inmobiliario especializado en compra, venta y alquiler de propiedades</p>
            <div class="real-estate-features">
                <div class="feature-item">
                    <div class="feature-icon-small">✅</div>
                    <div>
                        <h4>Búsqueda Personalizada</h4>
                        <p>Encontramos la propiedad ideal según tus necesidades</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-small">💰</div>
                    <div>
                        <h4>Tasaciones Precisas</h4>
                        <p>Valoración real del mercado inmobiliario actual</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-small">⚖️</div>
                    <div>
                        <h4>Asesoría Legal</h4>
                        <p>Acompañamiento en todo el proceso legal y documentario</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon-small">📋</div>
                    <div>
                        <h4>Gestión Completa</h4>
                        <p>Desde la primera visita hasta la entrega de llaves</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portafolio" class="portfolio">
        <div class="container">
            <div class="section-badge">Portafolio 2024-2025</div>
            <h2>Inmuebles Vendidos</h2>
            <p class="section-subtitle">Más de 200 familias han encontrado su hogar ideal con nosotros</p>
            <div class="portfolio-grid">
                <div class="portfolio-card">
                    <div class="portfolio-badge">VENDIDO</div>
                    <div class="portfolio-type">Casa (2 pisos)</div>
                    <h3>San Isidro (Los Alcatraces)</h3>
                    <p class="portfolio-price">$594,000</p>
                </div>
                <div class="portfolio-card">
                    <div class="portfolio-badge">VENDIDO</div>
                    <div class="portfolio-type">Local Comercial</div>
                    <h3>Surquillo (Jirón Inca)</h3>
                    <p class="portfolio-price">$460,000</p>
                </div>
                <div class="portfolio-card">
                    <div class="portfolio-badge">VENDIDO</div>
                    <div class="portfolio-type">Departamento</div>
                    <h3>San Isidro (Rivera Navarrete)</h3>
                    <p class="portfolio-price">$159,000</p>
                </div>
                <div class="portfolio-card">
                    <div class="portfolio-badge">VENDIDO</div>
                    <div class="portfolio-type">Casa (2 pisos)</div>
                    <h3>Surco (Honor y Lealtad)</h3>
                    <p class="portfolio-price">$195,000</p>
                </div>
                <div class="portfolio-card">
                    <div class="portfolio-badge">VENDIDO</div>
                    <div class="portfolio-type">Casa (3 pisos)</div>
                    <h3>Surco (Urb La Capullana)</h3>
                    <p class="portfolio-price">$550,000</p>
                </div>
                <div class="portfolio-card">
                    <div class="portfolio-badge">VENDIDO</div>
                    <div class="portfolio-type">Casa</div>
                    <h3>Miraflores</h3>
                    <p class="portfolio-price">$510,000</p>
                </div>
            </div>
        </div>
    </section>

    <section id="equipo" class="team">
        <div class="container">
            <div class="section-badge">Nuestro Equipo</div>
            <h2>Profesionales a tu servicio</h2>
            <p class="section-subtitle">Un equipo multidisciplinario comprometido con la excelencia</p>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">CA</div>
                    <h3>Carlos Alarcón</h3>
                    <p>Gerente General</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">MA</div>
                    <h3>María Elena Alarcón</h3>
                    <p>Asesora Inmobiliaria</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">EG</div>
                    <h3>Enrique González</h3>
                    <p>Asesor Inmobiliario</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">KL</div>
                    <h3>Karla Linares</h3>
                    <p>Agente Inmobiliaria</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">DG</div>
                    <h3>Dayana Garrido</h3>
                    <p>Asistente de Gerencia / Asesora Inmobiliaria</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">RA</div>
                    <h3>Rafael Arguedas</h3>
                    <p>Asesor Inmobiliario</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">LC</div>
                    <h3>Lucia Castillo</h3>
                    <p>Social Media Manager / Publicista y Marketera</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">RA</div>
                    <h3>Rocío Aparicio</h3>
                    <p>Asesora Inmobiliaria</p>
                </div>
                <div class="team-card">
                    <div class="team-avatar">DB</div>
                    <h3>Dhanyxa Barrera</h3>
                    <p>Arquitecta</p>
                </div>
            </div>
        </div>
    </section>

        

<!--	How it work -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Como Funciona</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-secondary text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-secondary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Buscas la propiedad según tú necesidad</h5>
                            <!--<p>Floro</p>-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-secondary text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-secondary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Revisas las especificiones</h5>
                            <!--<p>Floro</p>-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-secondary text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-secondary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Te contactas con nosotros para mostrar y/o adquirir la propiedad</h5>
                            <!--<p>Floro</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	How It Work -->

        

        <!--	Popular Place -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Lugares Populares</h2></div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/1.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
                                        $state = 'gujarat';
                                        $count = 0;
                                        if ($con && $stmt = $con->prepare("SELECT COUNT(*) FROM property WHERE state = ?")) {
                                            $stmt->bind_param('s', $state);
                                            $stmt->execute();
                                            $stmt->bind_result($count);
                                            $stmt->fetch();
                                            $stmt->close();
                                        }
                                    ?>
                                    <h4 class="hover-text-secondary text-capitalize"><a href="stateproperty.php?id=<?php echo urlencode($state) ?>"><?php echo htmlspecialchars(ucfirst($state)); ?></a></h4>
                                    <span><?php echo intval($count); ?> Propiedades Listadas</span> </div>
                            </div>
                        </div>
                        <!-- repetir para las demás ciudades cambiando $state -->
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/2.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
                                        $state = 'mumbai';
                                        $count = 0;
                                        if ($con && $stmt = $con->prepare("SELECT COUNT(*) FROM property WHERE state = ?")) {
                                            $stmt->bind_param('s', $state);
                                            $stmt->execute();
                                            $stmt->bind_result($count);
                                            $stmt->fetch();
                                            $stmt->close();
                                        }
                                    ?>
                                    <h4 class="hover-text-secondary text-capitalize"><a href="stateproperty.php?id=<?php echo urlencode($state) ?>"><?php echo htmlspecialchars(ucfirst($state)); ?></a></h4>
                                    <span><?php echo intval($count); ?> Propiedades Listadas</span> </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/3.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
                                        $state = 'banglore';
                                        $count = 0;
                                        if ($stmt = $con->prepare("SELECT COUNT(*) FROM property WHERE state = ?")) {
                                            $stmt->bind_param('s', $state);
                                            $stmt->execute();
                                            $stmt->bind_result($count);
                                            $stmt->fetch();
                                            $stmt->close();
                                        }
                                    ?>
                                    <h4 class="hover-text-secondary text-capitalize"><a href="stateproperty.php?id=<?php echo urlencode($state) ?>"><?php echo htmlspecialchars(ucfirst($state)); ?></a></h4>
                                    <span><?php echo intval($count); ?> Propiedades Listadas</span> </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
                                        $state = 'rajasthan';
                                        $count = 0;
                                        if ($stmt = $con->prepare("SELECT COUNT(*) FROM property WHERE state = ?")) {
                                            $stmt->bind_param('s', $state);
                                            $stmt->execute();
                                            $stmt->bind_result($count);
                                            $stmt->fetch();
                                            $stmt->close();
                                        }
                                    ?>
                                    <h4 class="hover-text-secondary text-capitalize"><a href="stateproperty.php?id=<?php echo urlencode($state) ?>"><?php echo htmlspecialchars(ucfirst($state)); ?></a></h4>
                                    <span><?php echo intval($count); ?> Propiedades Listadas</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Popular Places -->

    <section class="social">
        <div class="container">
            <h2>¡Trabajamos con estas plataformas!</h2>
            <p class="section-subtitle">Síguenos en nuestras redes sociales y mantente actualizado con nuestras propiedades</p>
            <div class="social-grid">
                <div class="social-card">
                    <div class="social-icon facebook">f</div>
                    <h3>Facebook</h3>
                    <p>Urbe Gestión Integral</p>
                    <p class="social-stats">659 Me gusta • 817 seguidores</p>
                </div>
                <div class="social-card">
                    <div class="social-icon instagram">📷</div>
                    <h3>Instagram</h3>
                    <p>@urbeinmobiliariaperu</p>
                    <p class="social-stats">Síguenos en Instagram</p>
                </div>
                <div class="social-card">
                    <div class="social-icon tiktok">♪</div>
                    <h3>TikTok</h3>
                    <p>@urbeinmobiliariaperu</p>
                    <p class="social-stats">786 seguidores • 5496 Me gusta</p>
                </div>
                <div class="social-card">
                    <div class="social-icon urbania">🏘️</div>
                    <h3>Urbania</h3>
                    <p>Plataforma Inmobiliaria</p>
                    <p class="social-stats">Encuentra nuestras propiedades</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>¡Gracias por la confianza!</h2>
            <p class="section-subtitle">La satisfacción de nuestros clientes es nuestro mayor logro</p>
            <div class="testimonial-rating">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p>Calificación promedio: 5.0/5.0</p>
                <p class="rating-detail">Basado en más de 200 transacciones exitosas</p>
            </div>
        </div>
    </section>

    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-badge">Contacto</div>
            <h2>Conversemos sobre tu proyecto</h2>
            <p class="section-subtitle">Estamos listos para ayudarte a encontrar tu propiedad ideal o iniciar tu proyecto de construcción</p>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Teléfonos</h4>
                            <p>981 244 677 / 936 885 735</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h4>Email</h4>
                            <p>ventas@urbegestiónintegral.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h4>Dirección</h4>
                            <p>Av. Sauce Nro 157, Dpto 301, Surquillo, Lima, Perú</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <input type="text" placeholder="Tu nombre" required>
                        <input type="email" placeholder="tu@email.com" required>
                        <input type="tel" placeholder="999 999 999" required>
                        <select required>
                            <option value="">Selecciona un servicio</option>
                            <option value="construccion">Construcción</option>
                            <option value="inmobiliaria">Inmobiliaria</option>
                            <option value="consulta-general">Consulta General</option>
                        </select>
                        <select id="clientInterest" required>
                            <option value="">¿Qué estás buscando?</option>
                            <option value="comprar-casa">Comprar una casa</option>
                            <option value="alquilar-casa">Alquilar una casa</option>
                            <option value="comprar-departamento">Comprar un departamento</option>
                            <option value="alquilar-departamento">Alquilar un departamento</option>
                            <option value="comprar-terreno">Comprar un terreno</option>
                            <option value="construir">Construir mi propiedad</option>
                            <option value="remodelar">Remodelar mi propiedad</option>
                            <option value="asesoria">Asesoría inmobiliaria</option>
                            <option value="otro">Otro</option>
                        </select>
                        <textarea placeholder="Cuéntanos sobre tu proyecto o consulta..." rows="4" required></textarea>
                        <button type="submit" class="btn btn-primary">✉️ Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


		
		

        
        
        <!-- Scroll to top -->
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll" style="position: fixed; bottom: 2rem; left: 20px; z-index: 999;"><i class="fas fa-angle-up"></i></a>
        <!-- End Scroll To top -->
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
<script type="module" src="script.js"></script>
<a href="https://wa.me/51981244677" class="whatsapp-float" target="_blank" aria-label="Contactar por WhatsApp">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>
</body>

</html>
