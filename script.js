function openModal() {
    var modalImage = document.getElementById('modalImage');
    var modalProductName = document.querySelector('.modal-content .product-name');
    var modalProductPrice = document.querySelector('.modal-content .product-price');
    document.getElementById("myModal").style.display = "block";
}
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}
