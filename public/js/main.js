/******************************
        ログアウト
******************************/

var target = document.getElementById("logout");

function logout() {
    target.addEventListener("click", logout, true);
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
/******************************
        削除
******************************/
(function() {
    ("use strict");

    var cmds = document.getElementsByClassName("del");
    for (let i = 0; i < cmds.length; i++) {
        cmds[i].addEventListener("click", function(e) {
            e.preventDefault();
            if (confirm("削除してもよろしいですか？")) {
                document.getElementById("form_" + this.dataset.id).submit();
            }
        });
    }
})();
