let bouton = document.getElementById("bouton");

document.addEventListener("mousemove", (event) => {
    // Position du curseur
    let mouseX = event.clientX;
    let mouseY = event.clientY;

    // Position du bouton
    let boutonRect = bouton.getBoundingClientRect();
    let boutonX = boutonRect.left + boutonRect.width / 2; // Centre du bouton
    let boutonY = boutonRect.top + boutonRect.height / 2;

    // Calcul de la distance entre la souris et le bouton
    let distanceX = mouseX - boutonX;
    let distanceY = mouseY - boutonY;
    let distance = Math.sqrt(distanceX ** 2 + distanceY ** 2); // Distance euclidienne

    // Si la souris est trop proche, déplacer le bouton
    let seuil = 100; // Distance minimum avant que le bouton "fuit"
    if (distance < seuil) {
        // Déplacement du bouton dans la direction opposée
        let offsetX = -distanceX * 0.5; // Multiplier pour ajuster la vitesse
        let offsetY = -distanceY * 0.5;

        let newLeft = boutonRect.left + offsetX;
        let newTop = boutonRect.top + offsetY;

        // Limiter les mouvements pour ne pas sortir de l'écran
        let maxWidth = window.innerWidth - boutonRect.width;
        let maxHeight = window.innerHeight - boutonRect.height;

        bouton.style.position = "absolute";
        bouton.style.left = Math.min(Math.max(newLeft, 0), maxWidth) + "px";
        bouton.style.top = Math.min(Math.max(newTop, 0), maxHeight) + "px";
    }
});