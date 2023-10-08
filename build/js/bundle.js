document.addEventListener('DOMContentLoaded', function() {

	particulasJs();

    eventListeners();

    removerNav();

    mobileMenuMostrar();

    removerNavInteigente();

	openFullImg();

	closeImg();
	
});

//! Particulas
function particulasJs() {
	particlesJS(
	{
		"particles": {
		  "number": {
			"value": 85,
			"density": {
			  "enable": true,
			  "value_area": 800
			}
		  },
		  "color": {
			"value": "#394659"
		  },
		  "shape": {
			"type": "circle",
			"stroke": {
			  "width": 0,
			  "color": "#000000"
			},
			"polygon": {
			  "nb_sides": 5
			},
			"image": {
			  "src": "img/github.svg",
			  "width": 100,
			  "height": 100
			}
		  },
		  "opacity": {
			"value": 0.8,
			"random": false,
			"anim": {
			  "enable": false,
			  "speed": 1,
			  "opacity_min": 0.1,
			  "sync": false
			}
		  },
		  "size": {
			"value": 3,
			"random": true,
			"anim": {
			  "enable": false,
			  "speed": 30,
			  "size_min": 0.1,
			  "sync": false
			}
		  },
		  "line_linked": {
			"enable": true,
			"distance": 160,
			"color": "#4cb8b3",
			"opacity": 0.6,
			"width": 1.5
		  },
		  "move": {
			"enable": true,
			"speed": 6,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
			  "enable": false,
			  "rotateX": 600,
			  "rotateY": 1200
			}
		  }
		},
		"interactivity": {
		  "detect_on": "canvas",
		  "events": {
			"onhover": {
			  "enable": false,
			  "mode": "repulse"
			},
			"onclick": {
			  "enable": true,
			  "mode": "push"
			},
			"resize": true
		  },
		  "modes": {
			"grab": {
			  "distance": 400,
			  "line_linked": {
				"opacity": 1
			  }
			},
			"bubble": {
			  "distance": 400,
			  "size": 40,
			  "duration": 2,
			  "opacity": 8,
			  "speed": 3
			},
			"repulse": {
			  "distance": 200,
			  "duration": 0.4
			},
			"push": {
			  "particles_nb": 4
			},
			"remove": {
			  "particles_nb": 2
			}
		  }
		},
		"retina_detect": true
	}
)
}

//! Galeria PROYECTOS

const fullImgBox = document.getElementById("fullImgBox"),
fullImg = document.getElementById("fullImg");

function openFullImg(reference) {
	fullImgBox.style.display = "flex";
	fullImg.src = reference;
}

function closeImg() {
	fullImgBox.style.display = "none";
}

//! Galeria CERTIFICADOS

const fullImgBox2 = document.getElementById("fullImgBox2"),
fullImg2 = document.getElementById("fullImg2");

function openFullImg2(reference) {
	fullImgBox2.style.display = "flex";
	fullImg2.src = reference;
}

function closeImg2() {
	fullImgBox2.style.display = "none";
}

//! Poner y quitar clase a menu navegacion
function eventListeners() {
	const mobileMenu = document.querySelector(".mobile-menu");

	mobileMenu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive() {
	const navegacion = document.querySelector("#nav");

	if (navegacion.classList.contains("mostrar")) {
		navegacion.classList.remove("mostrar");
	} else {
		navegacion.classList.add("mostrar");
	}
}

function removerNav() {
	const mobileMen = document.querySelector(".navegacion");

	mobileMen.addEventListener("click", navegacionInteligente);
}

function navegacionInteligente() {
	const nav = document.querySelector("#nav");

	if (nav.classList.contains("mostrar")) {
		nav.classList.remove("mostrar");
	} else {
		return;
	}
}

function mobileMenuMostrar() {
	const mobileNav = document.querySelector(".mobile-menu");

	mobileNav.addEventListener("click", navegacionNueva);
}

function navegacionNueva() {
	const nav = document.querySelector("#mobile-menu");

	if (nav.classList.contains("mostrar")) {
		nav.classList.remove("mostrar");
	} else {
		nav.classList.add("mostrar");
	}
}

function removerNavInteigente() {
	const mobileMen = document.querySelector(".navegacion");

	mobileMen.addEventListener("click", navegacionInteligente2);
}

function navegacionInteligente2() {
	const nav = document.querySelector("#mobile-menu");

	if (nav.classList.contains("mostrar")) {
		nav.classList.remove("mostrar");
	} else {
		return;
	}
}

//! Tipografia Dinamica

const typed = new Typed('.typed', {
    strings: [
        'Soy Desarrollador Web!', 
        "I'm Web Developer!"
    ], 
    loop: true, 
    typeSpeed: 75,
    backDelay: 1500,
    loopCount: Infinity,
    backSpeed: 80,
    fadeOutDelay: 500
});

//! Validar Form

const $nombre = document.getElementById("nombre"),
	  $correo = document.getElementById("correo"),
	  $mensaje = document.getElementById("mensaje"),
      $submit = document.getElementById("submit");

function validarInputs() {
	let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	let regexNombre = /^([a-z ñáéíóú]{2,60})$/i;
	if ($nombre.value === "") {
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'El nombre es obligatorio!',
			footer: '<a href="">Why do I have this issue?</a>'
		});
		return false
	}
	if (!regexNombre.test($nombre.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'El nombre es incorrecto!',
			footer: '<a href="">Why do I have this issue?</a>'
		});
		return false
	}
	if ($correo.value === "") {
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'El correo es obligatorio!',
			footer: '<a href="">Why do I have this issue?</a>'
		});
		return false
	}
	if (!regexEmail.test($correo.value)) {
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'El correo es incorrecto!',
			footer: '<a href="">Why do I have this issue?</a>'
		});
		return false
	}
	if ($mensaje.value === "") {
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'El mensaje es necesario!',
			footer: '<a href="">Why do I have this issue?</a>'
		});
		return false
	}
	else {
		Swal.fire(
			'Correo enviado exitosamente!',
			'En breve te contactaremos!',
			'success'
		);
	}
	return true
}

form.addEventListener("click", (e) =>{
	if (e.target === $submit) {
		//e.preventDefault();
		validarInputs();
	}
	
});

//! Scroll Advanced
const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		console.log(entry)
		if(entry.isIntersecting) {
			entry.target.classList.add('show');
		} else {
			entry.target.classList.remove('show');
		}
	});
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

//? Titulo barra dimamico

function flashTitleNot() {
    var origTitle = document.title;
    var isFlash = false;
    function changeTitle() {
        document.title = isFlash ?
        "(1) ¡Bienvenido! A Mi Sitio Web" : origTitle;
        isFlash = !isFlash;
    }
    setInterval(changeTitle, 2500);
}
window.onload = flashTitleNot;
