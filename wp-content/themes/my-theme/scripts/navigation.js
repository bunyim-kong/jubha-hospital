document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".mobile-menu-toggle");
  const menuPanel = document.querySelector(".menu-header");
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle");
  const mobileBreakpoint = window.matchMedia("(max-width: 1100px)");

  if (!menuToggle || !menuPanel) {
    return;
  }

  function closeDropdowns() {
    dropdownToggles.forEach(function (toggle) {
      toggle.setAttribute("aria-expanded", "false");
      toggle.closest(".dropdown").classList.remove("is-open");
    });
  }

  function closeMenu() {
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.setAttribute("aria-label", "Open navigation menu");
    menuPanel.classList.remove("is-open");
    document.body.classList.remove("menu-open");
    closeDropdowns();
  }

  menuToggle.addEventListener("click", function () {
    const willOpen = menuToggle.getAttribute("aria-expanded") !== "true";

    menuToggle.setAttribute("aria-expanded", String(willOpen));
    menuToggle.setAttribute("aria-label", willOpen ? "Close navigation menu" : "Open navigation menu");
    menuPanel.classList.toggle("is-open", willOpen);
    document.body.classList.toggle("menu-open", willOpen);
  });

  dropdownToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      const dropdown = toggle.closest(".dropdown");
      const willOpen = toggle.getAttribute("aria-expanded") !== "true";

      closeDropdowns();
      toggle.setAttribute("aria-expanded", String(willOpen));
      dropdown.classList.toggle("is-open", willOpen);
    });
  });

  document.addEventListener("click", function (event) {
    if (!event.target.closest(".dropdown")) {
      closeDropdowns();
    }
  });

  menuPanel.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", closeMenu);
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      const menuWasOpen = menuPanel.classList.contains("is-open");
      closeMenu();

      if (mobileBreakpoint.matches && menuWasOpen) {
        menuToggle.focus();
      }
    }
  });

  mobileBreakpoint.addEventListener("change", function (event) {
    if (!event.matches) {
      closeMenu();
    }
  });
});
