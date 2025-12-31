"use strict";

/* ==============================
   Helpers
============================== */
const $ = (id) => document.getElementById(id);

/* ==============================
   Toggle Password Visibility
============================== */
const toggleBtn = $("togglePassword");
const passwordInput = $("password");
const toggleIcon = $("toggleIcon");

if (toggleBtn && passwordInput && toggleIcon) {
  toggleBtn.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";

    passwordInput.type = isPassword ? "text" : "password";
    toggleIcon.classList.toggle("bi-eye", !isPassword);
    toggleIcon.classList.toggle("bi-eye-slash", isPassword);
  });
}

/* ==============================
   Email Validation
============================== */
const emailInput = $("email");
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if (emailInput) {
  emailInput.addEventListener("input", function () {
    this.setCustomValidity(
      emailRegex.test(this.value) ? "" : "Format d'email invalide"
    );
  });
}

/* ==============================
   Password Strength Checker
============================== */
const strengthDiv = $("passwordStrength");

if (passwordInput && strengthDiv) {
  passwordInput.addEventListener("input", function () {
    const password = this.value;
    let strength = 0;

    if (password.length >= 8) strength++;
    if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^a-zA-Z0-9]/.test(password)) strength++;

    const levels = [
      { text: "Faible", class: "text-danger" },
      { text: "Faible", class: "text-danger" },
      { text: "Moyen", class: "text-warning" },
      { text: "Bon", class: "text-info" },
      { text: "Fort", class: "text-success" },
    ];

    strengthDiv.innerHTML = password
      ? `<small class="${levels[strength].class}">
           Force du mot de passe : ${levels[strength].text}
         </small>`
      : "";
  });
}

/* ==============================
   Confirm Password Validation
============================== */
const confirmPasswordInput = $("confirmPassword");

if (passwordInput && confirmPasswordInput) {
  confirmPasswordInput.addEventListener("input", function () {
    this.setCustomValidity(
      this.value !== passwordInput.value
        ? "Les mots de passe ne correspondent pas"
        : ""
    );
  });
}

/* ==============================
   Bootstrap Form Validation
============================== */
["loginForm", "registerForm"].forEach((formId) => {
  const form = $(formId);
  if (!form) return;

  form.addEventListener("submit", (event) => {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }

    form.classList.add("was-validated");
  });
});
