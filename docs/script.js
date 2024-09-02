function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    if (navMenu.style.display === 'flex' || navMenu.style.display === '') {
        navMenu.style.display = 'none';
    } else {
        navMenu.style.display = 'flex';
    }
}

const a ="https://argenticityzenx.github.io/pixel-papercraft-generator-builder/#minecraft-mickey-ears"
const b = "footer/index.html"
const c = "notification/index.html"
const d = "profile-card/index.html"
const e = "shopping-cart/index.html"
const f = "dashboard/index.html"

function redirect(n) {
    window.location.href = n;
}
