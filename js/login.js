

document.addEventListener("DOMContentLoaded", function () {
    let loginContainer = document.querySelector(".login-container");
    let body = document.body;

    loginContainer.addEventListener("mouseenter", function () {
        body.classList.add("blurred");
    });

    loginContainer.addEventListener("mouseleave", function () {
        body.classList.remove("blurred");
    });
});