document.addEventListener("DOMContentLoaded", function (event) {
  // wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      // custom code goes here
      let html = `<button class="mainnav__expandbutton" data-respnav-expandbutton="" aria-expanded="false" aria-controls="childMenu-0" style="display: inline-flex;">
								<i class="fa fa-angle-down" title="Open submenu" data-respnav-opensub="" aria-hidden="true"></i><span class="sr-only">Open submenu</span>
								<i class="fa fa-angle-up" title="Close submenu" data-respnav-closesub="" aria-hidden="true"></i><span class="sr-only">Close submenu</span>
              </button>`;
      const newList = document.querySelectorAll(".mainnav__listitem");
      newList.forEach((el) => el.insertAdjacentHTML("beforeend", html));
    },
    false
  );
});
