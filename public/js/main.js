var target = document.getElementById("logout");
target.addEventListener("click", logout, true);

function logout() {
    window.location.href = "/logout";
}
