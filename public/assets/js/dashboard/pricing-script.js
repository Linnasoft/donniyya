var filMonthly = document.getElementById("fil-monthly"),
    filYearly = document.getElementById("fil-Yearly"),
    switcherInput = document.getElementById("switcher"),
    toggleSwitcher = document.getElementById("toggle-switcher"),
    monthlyBtn = document.getElementById("monthly"),
    yearlyBtn = document.getElementById("yearly");
filMonthly.addEventListener("click", function() {
    switcherInput.checked = !1, filMonthly.classList.add("toggler--is-active"), filYearly.classList.remove("toggler-is-active"), toggleSwitcher.classList.remove("toggle-bg-active"), monthlyBtn.classList.remove("package-hide"), yearlyBtn.classList.add("package-hide")
}), filYearly.addEventListener("click", function() {
    switcherInput.checked = !0, filYearly.classList.add("toggler-is-active"), filMonthly.classList.remove("toggler-is-active"), toggleSwitcher.classList.add("toggle-bg-active"), monthlyBtn.classList.add("package-hide"), yearlyBtn.classList.remove("package-hide")
}), switcherInput.addEventListener("click", function() {
    filYearly.classList.toggle("toggler-is-active"), filMonthly.classList.toggle("toggler-is-active"), toggleSwitcher.classList.toggle("toggle-bg-active"), monthlyBtn.classList.toggle("package-hide"), yearlyBtn.classList.toggle("package-hide")
});