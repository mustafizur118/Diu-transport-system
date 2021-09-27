const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const logincontainer = document.querySelector(".logincontainer");

sign_up_btn.addEventListener("click", () => {
    logincontainer.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    logincontainer.classList.remove("sign-up-mode");
});