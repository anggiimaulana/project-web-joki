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

    // Run updateWord every 3,5 seconds
    setInterval(updateWord, 3500);
});
