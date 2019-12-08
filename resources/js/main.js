import { runInContext } from "vm";

$(function() {
    // ボタンクリックで時刻を更新
    $(".logout").click(function() {
        window.location.href = route("auth.logout");
    });
});
