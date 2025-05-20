document.querySelectorAll(".dropdown-option").forEach(function (option) {
    option.addEventListener("click", function (e) {
        e.preventDefault();
        document.getElementById("role").value = this.getAttribute("data-value");
        document.getElementById("dropdownSelectedText").textContent =
            this.textContent;
        document.getElementById("dropdownDivider").classList.add("hidden");
    });
});
