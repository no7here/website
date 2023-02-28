function downloadOverlay() {
    let overlay = document.getElementById("overlay");

    if (overlay.style.opacity == 1) {
        overlay.style.display = "none"
    } else {
        overlay.style.display = "flex";
    }
}

function license() {
    let download = document.getElementById("download");
    let checkbox = document.getElementById("license-checkbox");

    if (checkbox.checked) {
        download.classList.remove("download-button-disabled");
        download.href = "/assets/audio/track.mp3"
    } else {
        download.classList.add("download-button-disabled");
        download.href = "#"
    }
}