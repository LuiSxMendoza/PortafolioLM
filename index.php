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
                    <p>
                        Tengo <?php echo $edad->y; ?> años, soy Mexicano, desde chico me ha llamado la atención la 
                        tecnología, soy autodidacta y decidí estudiar programación 
                        enfocada al desarrollo web por mi cuenta; Gracias a mi esfuerzo 
                        y perseverancia hoy puedo decir que soy Desarrollador. 
                        Me gusta trabajar en áreas donde se llevan a cabo tareas 
                        Full Stack, Actualmente estoy en busca de una oportunidad 
                        laboral para adquirir experiencia profesional.
                    </p>

                    <p>
                        También me dedico a realizar páginas y aplicaciones web para 
                        cualquier giro, 100% Responsivas, con buen Posicionamiento SEO y 
                        siguiendo las Mejores prácticas, Así que si requieres un trabajo 
                        Original y Optimizado soy tu mejor opción. <span>¡Cotiza YA!</span>
                    </p>
                </p>
            </div>
            
        </div>

    </div>

</main>


<div class="hidden" id="particles-js"></div>


<div class="img-full2" id="fullImgBox2">
    <img src="build/img/Historial academico.jpg" alt="imagen certificado full" id="fullImg2">
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
                        <source srcset="build/img/Certificado Css Guia Completa.webp" type="image/webp">
                        <img src="build/img/Certificado Css Guia Completa.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado google 1.webp" type="image/webp">
                        <img src="build/img/Certificado google 1.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado desarrollo web completo.webp" type="image/webp">
                        <img src="build/img/Certificado desarrollo web completo.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado google 2.webp" type="image/webp">
                        <img src="build/img/Certificado google 2.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado github.webp" type="image/webp">
                        <img src="build/img/Certificado github.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado tiendas virtuales.webp" type="image/webp">
                        <img src="build/img/Certificado tiendas virtuales.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Historial academico.webp" type="image/webp">
                        <img src="build/img/Historial academico.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado plugins wp.webp" type="image/webp">
                        <img src="build/img/Certificado plugins wp.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>




                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado Css Guia Completa.webp" type="image/webp">
                        <img src="build/img/Certificado Css Guia Completa.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado google 1.webp" type="image/webp">
                        <img src="build/img/Certificado google 1.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado desarrollo web completo.webp" type="image/webp">
                        <img src="build/img/Certificado desarrollo web completo.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado google 2.webp" type="image/webp">
                        <img src="build/img/Certificado google 2.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado github.webp" type="image/webp">
                        <img src="build/img/Certificado github.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado tiendas virtuales.webp" type="image/webp">
                        <img src="build/img/Certificado tiendas virtuales.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Historial academico.webp" type="image/webp">
                        <img src="build/img/Historial academico.jpg" 
                            alt="imagen certificado" 
                            class="certificado__imagen"
                            onclick="openFullImg2(this.src)"
                        >
                    </picture>
                </div>
                <div class="slide">
                    <picture>
                        <source srcset="build/img/Certificado plugins wp.webp" type="image/webp">
                        <img src="build/img/Certificado plugins wp.jpg" 
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
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">Css 3</h2>
                <img src="build/img/css-3.svg" alt="logo css3" class="lista__icono">
                <progress class="barra" value="85" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">Sass</h2>
                <img src="build/img/sass-1.svg" alt="logo sass" class="lista__icono">
                <progress class="barra" value="80" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">Php</h2>
                <img src="build/img/php-1.svg" alt="logo php" class="lista__icono">
                <progress class="barra" value="65" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">JavaScript</h2>
                <img src="build/img/javascript-1.svg" alt="logo javascript" class="lista__icono">
                <progress class="barra" value="55" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">MySql</h2>
                <img src="build/img/mysql-6.svg" alt="logo mysql" class="lista__icono">
                <progress class="barra" value="65" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">GitHub</h2>
                <img src="build/img/icons8-github-128.svg" alt="logo github" class="lista__icono">
                <progress class="barra" value="70" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">NodeJs</h2>
                <img src="build/img/nodejs-icon.svg" alt="logo nodejs" class="lista__icono">
                <progress class="barra" value="45" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">WordPress</h2>
                <img src="build/img/wordpress-blue.svg" alt="logo wordpress" class="lista__icono">
                <progress class="barra" value="40" max="100"></progress>
            </li>
            <li class="lista hidden">
                <h2 class="lista__nombre">WooCommerce</h2>
                <img src="build/img/woocommerce.svg" alt="logo woocommmerce" class="lista__icono">
                <progress class="barra" value="35" max="100"></progress>
            </li>
        </ul>
    </div>
</section>


<div class="vector">
    <svg xmlns="http://www.w3.org/2000/svg" 
        viewBox="0 0 1440 320"><path 
        fill="#000" 
        fill-opacity="0.93" d="M0,64L120,53.3C240,43,480,21,720,16C960,11,1200,21,1320,
        26.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
</div>

<div class="img-full" id="fullImgBox">
    <img src="build/img/01.jpeg" alt="imagen proyecto full" id="fullImg">
    <span onclick="closeImg()">X</span>
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
                        <source srcset="build/img/15.webp" type="image/webp">
                        <img src="build/img/15.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">App Salon</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://app-salon-jl.domcloud.io/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/01.webp" type="image/webp">
                        <img src="build/img/01.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Arquitectura</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://arquitectura-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/02.webp" type="image/webp">
                        <img src="build/img/02.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Gym</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="index.php" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/03.webp" type="image/webp">
                        <img src="build/img/03.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Cafeteria</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://cafeteria-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/04.webp" type="image/webp">
                        <img src="build/img/04.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">E-Comerce</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://e-comerce-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>
                
                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/05.webp" type="image/webp">
                        <img src="build/img/05.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    

                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">RealState</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://real-state-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/06.webp" type="image/webp">
                        <img src="build/img/06.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">WooCommerce</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="index.php" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/07.webp" type="image/webp">
                        <img src="build/img/07.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Carolina Spa</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://carolina-spa-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/08.webp" type="image/webp">
                        <img src="build/img/08.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Tech Pro</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://techpro-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/09.webp" type="image/webp">
                        <img src="build/img/09.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Nucleus Wallet</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://wallet-nucleus-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/10.webp" type="image/webp">
                        <img src="build/img/10.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Meeti</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://meeti-replica-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/11.webp" type="image/webp">
                        <img src="build/img/11.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Podcast App</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://podcast-app-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/12.webp" type="image/webp">
                        <img src="build/img/12.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Airbnb</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://airbnb-replica-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/13.webp" type="image/webp">
                        <img src="build/img/13.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Escuela Cocina</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        <a href="https://escuela-cocina-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
                        </a>
                    </div>
                </div>

                <div class="proyecto img-gallery hidden">
                    
                    <picture class="proyecto__pic">
                        <source srcset="build/img/14.webp" type="image/webp">
                        <img src="build/img/14.jpeg" 
                            alt="imagen proyecto" 
                            class="proyecto__imagen"
                            onclick="openFullImg(this.src)"
                        >
                    </picture>
                    
                    <div class="proyecto__info">
                        <h3 class="proyecto__nombre">Delivery App</h3>   

                        <p class="proyecto__descripcion">
                            Estos proyectos son de cursos que he tomado en los cuales he 
                            implementado Responsive Web Design siguiendo buenas prácticas 
                            y con las tecnologías: <span>HTML5, CSS3, JS, WordPress, WooCommerce, 
                            MySql, PHP</span>  y los muestro solo para generar contenido, en un futuro 
                            implementare nuevos proyectos personales.
                        </p>
                        
                        <a href="https://delivery-app-lm.netlify.app/" target="new">
                            <button class="proyecto__boton">Ver Proyecto</button>
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