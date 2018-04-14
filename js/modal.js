function openModal(index) {
    var modal = document.getElementsByClassName("modal")[index];
    modal.style.display = "block";
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

function closeModal(index) {
    var modal = document.getElementsByClassName("modal")[index];
    modal.style.display = "none";
}