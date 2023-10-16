<?php 

    $titulo = 'LuiSxMendoza';  

    //? Obtener Edad
    $fecha_nacimiento = new DateTime("1999-05-05");
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    include_once __DIR__ . '/templates/header.php';
    
?>


<main class="biografia hidden">
    <div class="biografia__contenedor">
        <div class="biografia__grid">

            <div class="biografia__texto">
                <div class="flex">
                    <div class="flex__icono hidden"></div>
                    <div class="flex__info hidden">
                        <p><span>Hola, Mi nombre es:</span>Juan Luis Martinez Mendoza</p>
                    </div>
                </div>
            </div>      

            <div class="biografia__foto hidden">
                <picture>
                    <source srcset="build/img/foto.webp" type="image/webp">
                    <img src="build/img/foto.jpg" alt="foto">
                </picture>
            </div>

        </div>

        <div class="info">

            <a class="botonheadin hidden" href="build/doc/Cv-LM.pdf">
                <div class="curriculumin"></div> 
                <span>Descargar CV</span>
            </a>

            <div class="cargo hidden">
                <h1 class="cargo__titulo">
                    <span class="typed"></span>
                </h1>
            </div>

            <div class="sobre hidden">
                    <p class="sobre__texto">
                        Tengo <?php echo $edad->y; ?> años, soy Mexicano y desde chico me ha llamado la atención la 
                        tecnología. Soy autodidacta, decidí estudiar programación 
                        enfocada al desarrollo web por mi cuenta, gracias a mi esfuerzo 
                        y perseverancia hoy puedo decir que soy Desarrollador. 
                        Me gusta trabajar en áreas donde se llevan a cabo tareas 
                        Full Stack y Actualmente estoy en busca de una oportunidad 
                        laboral para adquirir experiencia profesional.
                    </p>

                    <p class="sobre__texto">
                        De igual manera me dedico a realizar páginas y aplicaciones web para 
                        cualquier giro, 100% Responsivas, con buen Posicionamiento SEO y 
                        siguiendo las Mejores prácticas. Así que si requieres un trabajo 
                        Original y Optimizado soy tu mejor opción! <span>¡Cotiza YA!</span>
                    </p>
            </div>
            
        </div>

    </div>

</main>


<div class="hidden" id="particles-js"></div>


<div class="img-full2" id="fullImgBox2">
    <img src="build/img/HistorialAcademico.jpg" alt="imagen certificado full" id="fullImg2">
    <span onclick="closeImg2()">X</span>
</div>


<section class="certificados hidden">
    
    <div class="certificados__contenedor">
        <h2 class="certificados__titulo hidden">Algunas de Mis Certificaciónes:</h2>

        <div class="loader-center hidden">
            <div class="loader">
                <svg viewBox="0 0 80 80">
                    <circle id="test" cx="40" cy="40" r="32"></circle>
                </svg>
            </div>
            <div class="loader triangle">
                <svg viewBox="0 0 86 80">
                    <polygon points="43 8 79 72 7 72"></polygon>
                </svg>
            </div>
            <div class="loader">
                <svg viewBox="0 0 80 80">
                    <rect x="8" y="8" width="64" height="64"></rect>
                </svg>
            </div>
        </div>

        <div class="slider img-gallery2">
            <div class="slide-track">
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoCssGuiaCompleta.webp" type="image/webp">
                        <img src="build/img/CertificadoCssGuiaCompleta.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoGoogle1.webp" type="image/webp">
                        <img src="build/img/CertificadoGoogle1.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoDesarrolloWebCompleto.webp" type="image/webp">
                        <img src="build/img/CertificadoDesarrolloWebCompleto.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoGoogle2.webp" type="image/webp">
                        <img src="build/img/CertificadoGoogle2.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoGithub.webp" type="image/webp">
                        <img src="build/img/CertificadoGithub.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoTiendasVirtuales.webp" type="image/webp">
                        <img src="build/img/CertificadoTiendasVirtuales.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/HistorialAcademico.webp" type="image/webp">
                        <img src="build/img/HistorialAcademico.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoPluginsWp.webp" type="image/webp">
                        <img src="build/img/CertificadoPluginsWp.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>




                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoCssGuiaCompleta.webp" type="image/webp">
                        <img src="build/img/CertificadoCssGuiaCompleta.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoGoogle1.webp" type="image/webp">
                        <img src="build/img/CertificadoGoogle1.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoDesarrolloWebCompleto.webp" type="image/webp">
                        <img src="build/img/CertificadoDesarrolloWebCompleto.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoGoogle2.webp" type="image/webp">
                        <img src="build/img/CertificadoGoogle2.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoGithub.webp" type="image/webp">
                        <img src="build/img/CertificadoGithub.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoTiendasVirtuales.webp" type="image/webp">
                        <img src="build/img/CertificadoTiendasVirtuales.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/HistorialAcademico.webp" type="image/webp">
                        <img src="build/img/HistorialAcademico.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/CertificadoPluginsWp.webp" type="image/webp">
                        <img src="build/img/CertificadoPluginsWp.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                
            </div>
        </div>
    </div>

</section>


<section class="habilidades hidden" id="habilidades">
    <div class="habilidades__contenedor">
        <div class="habilidades__svg">
            <div class="pyramid-loader">
                <div class="wrapper">
                    <span class="side side1"></span>
                    <span class="side side2"></span>
                    <span class="side side3"></span>
                    <span class="side side4"></span>
                    <span class="shadow"></span>
                </div>  
            </div>
        </div>

        <h2 class="habilidades__titulo hidden">¡Mis Principales Habilidades!</h2>

        <ul class="habilidades__lista">
            <li class="lista hidden">
                <h2 class="lista__nombre">Html 5</h2>
                <img src="build/img/html-1.svg" alt="logo html 5" class="lista__icono">
                <progress class="barra" value="90" max="100"></progress>
                <P class="barra-titulo">Avanzado</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">Css 3</h2>
                <img src="build/img/css-3.svg" alt="logo css3" class="lista__icono">
                <progress class="barra" value="85" max="100"></progress>
                <P class="barra-titulo">Avanzado</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">Sass</h2>
                <img src="build/img/sass-1.svg" alt="logo sass" class="lista__icono">
                <progress class="barra" value="80" max="100"></progress>
                <P class="barra-titulo">Avanzado</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">Php</h2>
                <img src="build/img/php-1.svg" alt="logo php" class="lista__icono">
                <progress class="barra" value="65" max="100"></progress>
                <P class="barra-titulo">Intermedio</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">JavaScript</h2>
                <img src="build/img/javascript-1.svg" alt="logo javascript" class="lista__icono">
                <progress class="barra" value="65" max="100"></progress>
                <P class="barra-titulo">Intermedio</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">MySql</h2>
                <img src="build/img/mysql-6.svg" alt="logo mysql" class="lista__icono">
                <progress class="barra" value="40" max="100"></progress>
                <P class="barra-titulo">Principiante</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">GitHub</h2>
                <img src="build/img/Github.svg" alt="logo github" class="lista__icono">
                <progress class="barra" value="55" max="100"></progress>
                <P class="barra-titulo">Intermedio</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">NodeJs</h2>
                <img src="build/img/nodejs-icon.svg" alt="logo nodejs" class="lista__icono">
                <progress class="barra" value="35" max="100"></progress>
                <P class="barra-titulo">Principiante</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">WordPress</h2>
                <img src="build/img/wordpress-blue.svg" alt="logo wordpress" class="lista__icono">
                <progress class="barra" value="40" max="100"></progress>
                <P class="barra-titulo">Principiante</P>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">WooCommerce</h2>
                <img src="build/img/woocommerce.svg" alt="logo woocommmerce" class="lista__icono">
                <progress class="barra" value="35" max="100"></progress>
                <P class="barra-titulo">Principiante</P>
            </li>
        </ul>
    </div>
</section>

<div class="img-full" id="fullImgBox">
    <img src="build/img/SalonDeBelleza.jpg" alt="imagen proyecto full" id="fullImg">
    <span onclick="closeImg()">X</span>
</div>

<div class="vector">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#161a33" fill-opacity="1" d="M0,224L120,186.7C240,149,480,75,720,
        53.3C960,32,1200,64,1320,80L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,
        240,0,120,0L0,0Z">
        </path>
    </svg>
</div>


<section class="proyectos hidden" id="proyectos">
    <div class="proyectos__contenedor">
        <div class="proyectos__svg">
            <div class="three-body">
                <div class="three-body__dot"></div>
                <div class="three-body__dot"></div>
                <div class="three-body__dot"></div>
            </div>
        </div>

        <h2 class="proyectos__titulo hidden">¡Algunós de Mis Proyectos!</h2>

        <div class="proyectos__galeria">
            <div class="proyectos__grid ">
                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/SalonDeBelleza.webp" type="image/webp">
                        <img src="build/img/SalonDeBelleza.jpg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">¡Salón de Belleza!</h3>   

                        <p class="proyecto__descripcion">
                            Aplicación Web para Administrar un Salón de Belleza, 
                            con funciones para permitir registrar usuarios, 
                            validar por medio de correos y así evitar Spam. 
                            Entre muchas funciones más! 
                            <span>Tecnologías Usadas:</span>
                            <ul class="proyecto__lista">
                                <li><p class="nombre">MVC</p></li>
                                <li><p class="nombre">PHP</p></li>
                                <li><p class="nombre">JS</p></li>
                                <li><p class="nombre">SASS</p></li>
                                <li><p class="nombre">MySQL</p></li>
                                <li><p class="nombre">Consumo de Api's</p></li>
                            </ul>
                        </p>
                        <a href="https://jujmeqa.domcloud.io/" 
                            target="new"
                            class="proyecto__boton"
                        >
                            Ver Proyecto
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/TaskManager.webp" type="image/webp">
                        <img src="build/img/TaskManager.jpg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">¡Task Manager!</h3>   

                        <p class="proyecto__descripcion">
                            Aplicación Web para Administrar Proyectos y Tareas, 
                            con funciones para permitir registrar usuarios, 
                            validar por medio de correos y así evitar Spam. 
                            Entre muchas funciones más! 
                            <span>Tecnologías Usadas:</span>
                            <ul class="proyecto__lista">
                                <li><p class="nombre">MVC</p></li>
                                <li><p class="nombre">PHP</p></li>
                                <li><p class="nombre">JS</p></li>
                                <li><p class="nombre">SASS</p></li>
                                <li><p class="nombre">MySQL</p></li>
                                <li><p class="nombre">Consumo de Api's</p></li>
                            </ul>
                        </p>
                        <a href="https://hujdagu.domcloud.io/" 
                            target="new"
                            class="proyecto__boton"
                        >
                            Ver Proyecto
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="contacto hidden">
    <div class="contacto__contenedor" id="contacto">

        <h2 class="title hidden"><span class="salto">¿Tienes dudas?</span><span class="salto">Contactame:</span></h2>

        <form class="form" method="post" id="form" action="classes/Email.php">
            <label for="nombre" class="label hidden">Nombre:</label>
            <input name="nombre" type="text" placeholder="Ingresa tu Nombre" class="input hidden" id="nombre">
            <label for="nombre" class="label hidden">Correo:</label>
            <input name="correo" type="mail" placeholder="Ingresa tu Correo" class="input hidden" id="correo">
            <label for="nombre" class="label hidden">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" class="hidden" placeholder="Indica que atención Requieres"></textarea>
            
            <button type="submit" id="submit">Enviar</button>
        </form>
    </div>
</section>


<?php 
    include_once __DIR__ . '/templates/footer.php';
?>