document.addEventListener("DOMContentLoaded", function () {
    const icon = document.getElementById("theme-icon");
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
        if (icon) icon.textContent = "☀️";
    }

    if (icon) {
        icon.addEventListener("click", () => {
            const darkMode = document.body.classList.toggle("dark-mode");
            localStorage.setItem("theme", darkMode ? "dark" : "light");
            icon.textContent = darkMode ? "☀️" : "🌙";
        });
    }
});
