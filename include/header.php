<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">					
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">							
                                <li><a href="#"><i class="fas fa-phone-alt text-white mr-1"></i>981 244 677 | 936 885 735</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-white mr-1"></i>casalarcon3@gmail.com | urbeintegralsac@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-white mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Salir</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Ingresar</a>&nbsp;&nbsp;
								<?php } ?>
								| </li>
								<li><i class="fas fa-user text-white mr-1"></i><a href="register.php"> Registrar</li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="main-nav secondary-nav hover-white-nav py-2">
                <div class="container">				
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Buscar</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">Quienes Somos</a> </li>
										
										<li class="nav-item"> <a class="nav-link" href="agent.php">Agentes</a> </li>
										
										<li class="nav-item"> <a class="nav-link" href="property.php">Propiedades</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contactanos</a> </li>
										
										<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi Cuenta</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php">Perfil</a> </li>
												<li class="nav-item"> <a class="nav-link" href="request.php">Solicitud de Propiedad</a> </li>
												<li class="nav-item"> <a class="nav-link" href="feature.php">Mis propiedades</a> </li>
												<!--<li class="nav-item"> <a class="nav-link" href="logout.php">Salir</a> </li>	-->
											</ul>
                                        </li>
										<?php } else { ?>
										<!--<li class="nav-item"> <a class="nav-link" href="login.php">Ingresar/Registrar</a> </li>-->
										<?php } ?>										
                                    </ul>
									<a class="btn btn-secondary d-none d-xl-block" href="submitproperty.php">Registrar Propiedad</a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>