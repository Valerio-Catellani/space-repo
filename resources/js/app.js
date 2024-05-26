import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// script for animated
import * as THREE from 'three';
// import simpleParallax from 'simple-parallax-js';


class HypeNav {
    constructor(hypeElement) {
        this.hypeElement = hypeElement;
        this.openElement = '';
        this.eventTarget = {
            orignaltemplate: '',
            eventElement: ''
        }
        this.initialPositionWindow = 0;
        this.updateScrollPosition = this.updateScrollPosition.bind(this);
        this.render = this.render.bind(this);
        window.addEventListener('scroll', this.updateScrollPosition);
        this.render();
    }

    checkMovement() {
        return this.initialPositionWindow !== 0; //return true or false
    }

    updateScrollPosition() {
        const currentScrollPosition = window.scrollY;
        if (currentScrollPosition !== this.initialPositionWindow || this.openMenu !== '') {
            this.initialPositionWindow = currentScrollPosition;
            this.render();
        }
    }

    toggleMenu(menuItem, eventTarget) {
        const menuToOpen = document.getElementById(menuItem);
        if (this.openElement === menuToOpen) {
            menuToOpen.classList.toggle('d-none');
            eventTarget.classList.remove('active-color');
            eventTarget.innerHTML = this.eventTarget.orignaltemplate;
            this.hypeElement.classList.remove('border-opened-menu');
            this.openElement = '';
        } else {
            this.closeAll();
            this.openElement = menuToOpen;
            this.eventTarget.eventElement = eventTarget;
            this.eventTarget.orignaltemplate = eventTarget.innerHTML;
            //console.log(this.eventTarget);
            eventTarget.classList.add('active-color');
            eventTarget.innerHTML = '<i class="fa-solid fa-xmark"></i>';
            menuToOpen.classList.toggle('d-none');
            this.hypeElement.classList.add('border-opened-menu');
        }

    }

    closeAll() {
        this.openElement !== '' ? this.openElement.classList.add('d-none') : '';
        if (this.eventTarget.eventElement !== '') {
            this.eventTarget.eventElement.classList.remove('active-color');
            this.eventTarget.eventElement.innerHTML = this.eventTarget.orignaltemplate;
        }
    }

    render() {
        const renderElement = this.hypeElement;
        renderElement.classList.toggle('window-movement', this.checkMovement());
    }
}


document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('hype-custom-nav')) {
        const headerHandler = new HypeNav(document.getElementById('hype-custom-nav'));

        // Aggiungi un listener per il clic sul pulsante di ricerca
        document.getElementById('hype-nav-search-button').addEventListener('click', function (event) {
            headerHandler.toggleMenu('hype-nav-search-bar-input', event.currentTarget);
        });

        // Aggiungi un listener per il clic sul pulsante di chiusura della ricerca
        document.getElementById('hype-nav-login-button').addEventListener('click', function (event) {
            headerHandler.toggleMenu('hype-nav-login-bar-input', event.currentTarget);
        });

        document.getElementById('hype-nav-kebab-button').addEventListener('click', function (event) {
            headerHandler.toggleMenu('hype-nav-kebab-menu', event.currentTarget);
        });
    }

    // Esegui l'animazione della sfera solo sulla pagina specifica
    if (document.getElementById('animated')) {
        const container = document.getElementById('animated');
        planet('/images/jup.jpg', container);
    }

    if (document.getElementById('animated-field')) {
        document.querySelectorAll('.pianeta').forEach((pianeta) => {
            //console.log(pianeta.id);
            planet(`/images/planet_details/${pianeta.id}.jpg`, pianeta);
        });
    }
    if (document.getElementById('solar_sistem')) {
        createPlanetsRotation()
    }

});

// function createSphereWithAura() {
//     const scene = new THREE.Scene();

//     // Sfera principale
//     const geometry = new THREE.SphereGeometry(1, 32, 32);
//     const material = new THREE.MeshPhongMaterial({ color: 0xffffff });
//     const sphere = new THREE.Mesh(geometry, material);
//     scene.add(sphere);

//     // Aura intorno alla sfera
//     const auraGeometry = new THREE.SphereGeometry(1.1, 32, 32); // Slightly larger radius
//     const auraMaterial = new THREE.MeshBasicMaterial({ color: 0x00ffff, transparent: true, opacity: 0.5 });
//     const aura = new THREE.Mesh(auraGeometry, auraMaterial);
//     scene.add(aura);

//     // Luce
//     const light = new THREE.DirectionalLight(0xffffff, 1);
//     light.position.set(5, 5, 5);
//     scene.add(light);

//     // Dimensioni personalizzate
//     const container = document.getElementById('container');
//     const width = container.offsetWidth;
//     const height = 500;

//     // Telecamera
//     const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
//     camera.position.z = 3;

//     // Renderer
//     const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
//     renderer.setSize(width, height);
//     container.appendChild(renderer.domElement);

//     // Animazione
//     function animate() {
//         requestAnimationFrame(animate);
//         sphere.rotation.x += 0.01;
//         sphere.rotation.y += 0.01;
//         aura.rotation.x += 0.01; // L'aura ruota insieme alla sfera principale
//         aura.rotation.y += 0.01;
//         renderer.render(scene, camera);
//     }

//     animate();
// }





function planet(texturePlanet, element) {

    // Creiamo la scena
    const scene = new THREE.Scene();

    // Aggiungiamo una sfera
    const geometry = new THREE.SphereGeometry(1, 30, 90);
    const material = new THREE.MeshPhongMaterial({ color: 0xB3A288, opacity: 0.8 });
    const textureLoader = new THREE.TextureLoader();
    const texture = textureLoader.load(texturePlanet);
    material.map = texture;
    const sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);

    // luci di scena
    const light = new THREE.DirectionalLight(0xffffff, 10);
    light.position.set(1, 1, 1).normalize();
    scene.add(light);

    // dimensioni pesonalizzate
    const container = element
    const width = container.offsetWidth;
    const height = 700;
    // const width = 700;
    // const height = 700;

    // Creiamo la telecamera
    const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
    camera.position.z = 2;

    // Creiamo il renderer
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(width, height);
    const animated = element
    animated.appendChild(renderer.domElement);

    // Animazione: fai ruotare la sfera
    function animate() {
        requestAnimationFrame(animate);
        sphere.rotation.x += 0.01;
        sphere.rotation.y += 0.01;
        renderer.render(scene, camera);
    }

    // Avviamo l'animazione
    animate();

}

//script per animazioni parallax
// const aboutUs = document.getElementsByClassName('parallax');
// new simpleParallax(aboutUs, {
//     overflow: true,
//     orientation: 'right',
//     scale: '1.8',
//     maxTransition: 50,
//     transition: 'cubic-bezier(0,0,0,2)'
// });

// const offers = document.getElementsByClassName('parallax2');
// new simpleParallax(offers, {
//     overflow: true,
//     orientation: 'left',
//     scale: '1.8',
//     maxTransition: 40,
//     transition: 'cubic-bezier(0,0,0,2)'
// });



// import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';


import { AmbientLight, Material } from 'three';
import * as textures from '../../public/images/solar_sistem/index.js'; 
//ho importato tutta la logica sopra in un index js presente dentro la cartella solar_sistem





/**
 * Crea la rotazione delle stelle
 * 
 */
function createPlanetsRotation() {

    //creating a scene to add all elements
    const scene = new THREE.Scene();

    const solarSystem = document.getElementById('solar_sistem');
    const Width = solarSystem.offsetWidth
    const Height = 800

    //creating a camera instance
    const camera = new THREE.PerspectiveCamera(
        75,
        Width / Height,
        0.1, 1000
    );

    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(Width, Height);
    solarSystem.appendChild(renderer.domElement);

    //setting up texture loader


    let arryaTextures = [];
    for (let i = 0; i < 6; i++) {
        arryaTextures.push(textures.starsTexture);
    }
    const cubeTextureLoader = new THREE.CubeTextureLoader();
    scene.background = cubeTextureLoader.load(arryaTextures);

    //setting up orbit control

    //  const orbit = new OrbitControls(camera, renderer.domElement);
    camera.position.set(0, 40, 250);
    //  orbit.update();

    //seting up light
    const ambientLight = new THREE.AmbientLight(0x333333);
    ambientLight.intensity = 0.8;
    scene.add(ambientLight);

    //loading planets
    const textureload = new THREE.TextureLoader();
    //sun
    const sunGeo = new THREE.SphereGeometry(12, 25, 20);
    const sunMat = new THREE.MeshBasicMaterial({

        map: textureload.load(textures.sunTexture)
    });
    const sun = new THREE.Mesh(sunGeo, sunMat);
    scene.add(sun);

    //adding point light
    const pointLight = new THREE.PointLight(0xffffff, 12000, 30000);
    scene.add(pointLight);

    //loading another planets now
    //using function

    function createPlanet(size, texture, position, ring) {
        const geometry = new THREE.SphereGeometry(size, 25, 20);
        const material = new THREE.MeshStandardMaterial({
            map: textureload.load(texture)
        });
        const planet = new THREE.Mesh(geometry, material);
        const planetObj = new THREE.Object3D;
        planetObj.add(planet);
        scene.add(planetObj);
        planet.position.x = position;

        if (ring) {
            const RingGeo = new THREE.RingGeometry(
                ring.innerRadius,
                ring.outerRadius, 30
            );
            const RingMat = new THREE.MeshStandardMaterial({
                map: textureload.load(ring.texture),
                side: THREE.DoubleSide
            });
            const Ring = new THREE.Mesh(RingGeo, RingMat);
            planetObj.add(Ring);

            Ring.position.x = position;
            Ring.rotation.x = -0.5 * Math.PI;
        }
        return { planet, planetObj };
    }

    const mercury = new createPlanet(4, textures.mercuryTexture, 20);
    const venus = new createPlanet(5, textures.venusTexture, 40);
    const earth = new createPlanet(5.56, textures.earthTexture, 60);
    const mars = new createPlanet(5, textures.marsTexture, 80);
    const jupiter = new createPlanet(6, textures.jupiterTexture, 100);
    const saturn = new createPlanet(8, textures.saturnTexture, 150, {
        innerRadius: 10,
        outerRadius: 20,
        texture: textures.saturnRingTexture
    });
    const uranus = new createPlanet(8.2, textures.uranusTexture, 200, {
        innerRadius: 10,
        outerRadius: 20,
        texture: textures.uranusRingTexture
    });
    const neptune = new createPlanet(5, textures.neptuneTexture, 240);


    function animate() {


        sun.rotateY(0.002);
        mercury.planet.rotateY(0.001);
        mercury.planetObj.rotateY(0.001);
        venus.planet.rotateY(0.0012);
        venus.planetObj.rotateY(0.0015);
        earth.planet.rotateY(0.012);
        earth.planetObj.rotateY(0.0012);
        mars.planet.rotateY(0.013);
        mars.planetObj.rotateY(0.0019);
        jupiter.planet.rotateY(0.04);
        jupiter.planetObj.rotateY(0.0023);
        saturn.planet.rotateY(0.01);
        saturn.planetObj.rotateY(0.0021);
        uranus.planet.rotateY(0.01);
        uranus.planetObj.rotateY(0.0015);
        neptune.planet.rotateY(0.01);
        neptune.planetObj.rotateY(0.001);

        renderer.render(scene, camera);

    }
    renderer.setAnimationLoop(animate);

    //setting window size

    window.addEventListener('resize', function () {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });


}



