let modal = null;

function open_helper_modal() {
    modal = document.getElementById("modal-base");
    modal.style.display = "block";
}

function auth_logout() {
    const logout = document.getElementById("odhlasit2");
    logout.style.display = "block";
}

window.onclick = function (event) {
    if (event.target == modal && modal.style.display === "block") {
        modal.style.display = "none";
    }
} 