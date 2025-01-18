function self() {
    window.location.href = 'https://jokitugaslo.com';
}

function order() {
    window.location.href = 'https://jokitugaslo.com';
}

document.addEventListener("DOMContentLoaded", () => {
    const words = ["Profesional", "Sat-set", "Canggih", "Dipercaya", "Lengkap", "Berkualitas"];
    const descElement = document.getElementById("desc");
    let currentIndex = 0;

    const updateWord = () => {
        descElement.classList.add("opacity-0", "scale-90");

        setTimeout(() => {
            currentIndex = (currentIndex + 1) % words.length;
            descElement.textContent = words[currentIndex];

            descElement.classList.remove("opacity-0", "scale-90");
        }, 500);
    };

    // Run updateWord every 2 seconds
    setInterval(updateWord, 3500);
});

document.addEventListener("DOMContentLoaded", function () {
    const toggleVisibility = (buttonId, contentId) => {
        const button = document.getElementById(buttonId);
        const content = document.getElementById(contentId);

        button.addEventListener("click", () => {
            content.classList.toggle("hidden");
            button.textContent = content.classList.contains("hidden") ? "Baca Selengkapnya" : "Sembunyikan";
        });
    };

    // Subscribe
    toggleVisibility("button-laprak", "hidden-laprak");

    // Laprak
    toggleVisibility("button-subscribe", "hidden-subscribe");

    // Tubes
    toggleVisibility("button-tubes", "hidden-tubes");

    // Karya Ilmiah
    toggleVisibility("button-karya-ilmiah", "hidden-karya-ilmiah");

    // Magang
    toggleVisibility("button-magang", "hidden-magang");

    // Skripsi
    toggleVisibility("button-skripsi", "hidden-skripsi");

});

// Open image how-to-order-jokiinit
function openImage() {
    var imageUrl = document.getElementById('how-to-order-jokiinit').src;
    var modal = document.getElementById('image-modal');
    var modalImage = document.getElementById('large-image');
    
    modal.style.display = "flex";  
    modalImage.src = imageUrl;
}

function closeImage() {
    var modal = document.getElementById('image-modal');
    modal.style.display = "none";
}