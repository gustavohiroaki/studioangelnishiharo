let alreadyShowed = showedCookieExists();
let splash = document.querySelector("#splash");
let studioName = document.querySelector(".studio-name");
let nameFragment = document.querySelectorAll(".name-fragment");

function showed() {
    var date = new Date();
    date.setMinutes(date.getMinutes() + 60);
    date = date.toGMTString();
    document.cookie = "showed=true" + "; expires=" + date + "; path=/";
}

function showedCookieExists() {
    var cname = "showed" + "=";
    var cookies = document.cookie;

    return cookies.indexOf(cname) !== -1;
}

window.addEventListener("DOMContentLoaded", () => {
    if (!alreadyShowed) {
        splash.classList.add("active");
        setTimeout(() => {
            nameFragment.forEach((span, index) => {
                setTimeout(() => {
                    span.classList.add("active");
                }, (index + 1) * 400);
            });
            setTimeout(() => {
                splash.style.top = "-100vh";
            }, 3000);
        });
        showed();
    }
});
