/******************************
        ログアウト
******************************/

var target = document.getElementById("logout");
target.addEventListener("click", logout, true);

function logout() {
    window.location.href = "/logout";
}

/******************************
        メニューリスト表示
******************************/
const menuList = document.getElementById("menu_list");
const openButton = document.getElementById("menuListOpen");
const closeButton = document.getElementById("menuListClose");
menuList.style.visibility = "hidden";
openButton.addEventListener(
    "click",
    function() {
        menuList.style.visibility = "visible";
    },
    false
);
closeButton.addEventListener(
    "click",
    function() {
        menuList.style.visibility = "hidden";
    },
    false
);
