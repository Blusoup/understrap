document.addEventListener("DOMContentLoaded", function (event) {
  // wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      // custom GSAP code goes here
      gsap.from(".hero__title", { duration: 2, x: "-100%" });
      gsap.from(".hero__image", { duration: 2, x: "200%" }).delay(1);
    },
    false
  );
});
