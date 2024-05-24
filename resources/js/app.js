import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// script for animated
import * as THREE from 'three';

// Creiamo la scena
const scene = new THREE.Scene();

// Aggiungiamo una sfera
const geometry = new THREE.SphereGeometry(1, 32, 32);
const material = new THREE.MeshPhongMaterial({ color: 0xB3A288, transparent: true, opacity: 0.8 });
const textureLoader = new THREE.TextureLoader();
const texture = textureLoader.load('/images/jup.jpg');
material.map = texture;
const sphere = new THREE.Mesh(geometry, material);
scene.add(sphere);

// luci di scena
const light = new THREE.DirectionalLight(0xffffff, 10);
light.position.set(1, 1, 1).normalize();
scene.add(light);


// dimensioni pesonalizzate
const width = 700;
const height = 700;

// Creiamo la telecamera
const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
camera.position.z = 2;

// Creiamo il renderer
const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
renderer.setSize(width, height);
const animated = document.getElementById('animated');
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


