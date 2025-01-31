// Open image how-to-order-jokiinit
function openImage() {
    var imageUrl = document.getElementById('how-to-order-jokiinit').src;
    var modal = document.getElementById('image-modal');
    var modalImage = document.getElementById('large-image');
    
    modal.style.display = "flex";  
    modalImage.src = imageUrl;
}

// Close image how-to-order-jokiinit
function closeImage() {
    var modal = document.getElementById('image-modal');
    modal.style.display = "none";
}