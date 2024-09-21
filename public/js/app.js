const nav = document.querySelector("nav .nav-pills");
nav.addEventListener("click", (e) => {
    if (e.target.classList.contains("nav-link")) {
        document
            .querySelector(".nav .nav-link.active")
            ?.classList.remove("active");
        e.target.classList.add("active");
    }
});
