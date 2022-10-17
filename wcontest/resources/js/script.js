const sidebarToggle = document.querySelector("#sidebar-toggle");
const sidebarMenu = document.querySelector("#sidebar-menu");

sidebarToggle || sidebarMenu != null
  ? sidebarToggle.addEventListener("click", () => {
      sidebarMenu.classList.toggle("active");
    })
  : "";
