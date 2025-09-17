const uploadBtn = document.querySelector(".upload-btn");
const fileInput = document.getElementById("store-logo-input");

uploadBtn.addEventListener("click", function (e) {
  e.preventDefault();
  fileInput.click();
});

fileInput.addEventListener("change", function (e) {
  const file = e.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      const logoCircle = document.querySelector(".logo-circle");
      logoCircle.style.backgroundImage = `url(${e.target.result})`;
      logoCircle.style.backgroundSize = "cover";
      logoCircle.style.backgroundPosition = "center";
    };
    reader.readAsDataURL(file);
  }
});

// Handle camera icon click
document.querySelector(".camera-icon").addEventListener("click", function () {
  document.querySelector(".upload-btn").click();
});

// Handle form submissions (demo)
document.querySelectorAll(".form-input").forEach((input) => {
  input.addEventListener("change", function () {
    console.log(
      `${this.previousElementSibling?.textContent || "Field"} updated:`,
      this.value,
    );
  });
});

// Handle toggle switches
document.querySelectorAll(".toggle input").forEach((toggle) => {
  toggle.addEventListener("change", function () {
    const label =
      this.closest(".notification-item").querySelector("h4").textContent;
    console.log(`${label} ${this.checked ? "enabled" : "disabled"}`);
  });
});

// --- Persistent Tab Functionality with Query String ---

// Helper to get query param
function getQueryParam(name) {
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(name);
}

// Helper to set query param without reloading
function setQueryParam(name, value) {
  const url = new URL(window.location);
  url.searchParams.set(name, value);
  window.history.replaceState({}, "", url);
}

// Activate the correct tab and content
function activateTab(tabName) {
  document.querySelectorAll(".tab-button").forEach((btn) => {
    btn.classList.toggle("active", btn.getAttribute("data-tab") === tabName);
  });
  document.querySelectorAll(".tab-content").forEach((content) => {
    content.classList.toggle("active", content.id === tabName);
  });
}

document.addEventListener("DOMContentLoaded", () => {
  // On load, activate tab from query param or default to store-profile
  const tab = getQueryParam("tab") || "store-profile";
  activateTab(tab);

  // Tab button click handler
  document.querySelectorAll(".tab-button").forEach((btn) => {
    btn.addEventListener("click", () => {
      const tabName = btn.getAttribute("data-tab");
      setQueryParam("tab", tabName);
      activateTab(tabName);
    });
  });
});
