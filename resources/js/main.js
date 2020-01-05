import { runInContext } from "vm";

$(function() {
    $(".logout").click(function() {
        window.location.href = route("auth.logout");
    });
});
