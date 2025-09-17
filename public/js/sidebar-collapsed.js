const btn = document.getElementById("toogle-btn");

// Toggle sidebar collapse
function toggleSidebar() {
  console.log("clicked");
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("collapsed");
}

btn.addEventListener("click", toggleSidebar);
