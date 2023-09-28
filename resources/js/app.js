import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

function fixheader() {
    var header = document.getElementById("header");
    var body = document.getElementsByTagName("body")[0];
    var sticky = header.offsetTop;
    var halfViewPort = window.innerHeight / 2;

    if (window.pageYOffset > sticky + halfViewPort) {
        header.style.top = "0";
        header.classList.add("fixed-top");
        body.classList.add("fixed-top");
    } else {
        if (header.classList.contains("fixed-top")) {
            header.style.top = "-100px";

            setTimeout(function () {
                header.classList.remove("fixed-top");
                body.classList.remove("fixed-top");
            }, 250);
        }
    }
}

function roadDashedLine() {
    const animacionTop = document.getElementById("animacion").parentElement.offsetTop;
    const camino = document.getElementById("camino");
    const position = document.getElementById("position");

    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const step3 = document.getElementById("step3");
    const step4 = document.getElementById("step4");

    // Calcular la longitud total del camino
    const pathLength = camino.getTotalLength();
    camino.style.strokeDasharray = pathLength;

    // Obtener la altura de la pantalla
    const screenHeight = window.innerHeight;

    // Calcular la velocidad de crecimiento del camino
    const growthSpeed = 1; // Ajusta la velocidad según tu preferencia

    // Función para actualizar la animación en función del desplazamiento
    function updateAnimation() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Calcular el porcentaje de avance del camino
        const progress = (scrollTop - animacionTop) * growthSpeed / screenHeight;

        // Limitar el progreso a valores entre 0 y 1
        const clippedProgress = Math.min(Math.max(progress, 0), 1);

        // Calcular la posición en el camino
        const point = camino.getPointAtLength(pathLength * clippedProgress);

        // Actualizar la posición del "position"
        position.setAttribute("cx", point.x);
        position.setAttribute("cy", point.y);

        // Actualizar la longitud visible del camino
        camino.style.strokeDashoffset = pathLength * (1 - clippedProgress);

        // Actualizar el estado de los pasos
        // Buscamos la posicion del step1 y la comparamos con la posicion del scroll, si es mayor o igual al step1, creamos una alerta
        let step1Position = step1.getPointAtLength(pathLength * clippedProgress).y;
        let step2Position = step2.getPointAtLength(pathLength * clippedProgress).y;
        let step3Position = step3.getPointAtLength(pathLength * clippedProgress).y;
        let step4Position = step4.getPointAtLength(pathLength * clippedProgress).y;
        
        let allPositions = [step1Position, step2Position, step3Position, step4Position];

        for (let i = 0; i < allPositions.length; i++) {
            if(allPositions[i] <= point.y - 10){
                document.getElementById("dotStep" + (i + 1)).classList.add("active");
                document.getElementById("step" + (i + 1)).parentElement.classList.add("active");
            }else{
                document.getElementById("dotStep" + (i + 1)).classList.remove("active");
                document.getElementById("step" + (i + 1)).parentElement.classList.remove("active");
            }
        }
    }

    // Escuchar eventos de desplazamiento para actualizar la animación
    window.addEventListener("scroll", updateAnimation);
    window.addEventListener("resize", updateAnimation);

    // Inicializar la animación
    updateAnimation();
}

roadDashedLine();
window.onscroll = function () {
    fixheader();
};
