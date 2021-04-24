const navSlide = () => {
  const toggle = document.querySelector(".toggle");
  const navBar = document.querySelector(".nav-bar");
  const logo = document.querySelector(".logo");
  const navClose = document.querySelectorAll(".nav-links");

  toggle.addEventListener("click", () => {
    toggle.classList.toggle("active");
    navBar.classList.toggle("active");
    logo.classList.toggle("active");
  });

  function linkAction() {
    toggle.classList.remove("active");
    navBar.classList.remove("active");
    logo.classList.remove("active");
  }

  navClose.forEach((n) => n.addEventListener("click", linkAction));
};

navSlide();
