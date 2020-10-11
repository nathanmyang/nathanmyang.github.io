const navSlide = () => {
  const navMenu = document.querySelector(".nav-menu");
  const nav = document.querySelector(".nav-container");
  const navLinks = document.querySelectorAll(".nav-links");

  navMenu.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
    //Animate Links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.3
        }s`;
      }
    });
    //Menu animation
    navMenu.classList.toggle("toggle");
  });
};

navSlide();
