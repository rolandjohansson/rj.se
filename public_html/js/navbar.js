//Toggle menu dropdown

const NAVLINKCAT = document.querySelectorAll(".nav-link-category");
const NAVLINKLIST = document.querySelector(".nav-link-list");

function navLinkListToggle(e, clickedElement) {
  e.preventDefault();
  clickedElement.children[1].classList.toggle("dropped");
}

Array.from(NAVLINKCAT).forEach(function(element) {
  element.addEventListener("click", function(e) {
    navLinkListToggle(e, this);
  }, false);
});

/* ------------------------ */

const NAVTOGGLEBUTTON = document.querySelector("#nav-toggle-button");
const NAVLINKS = document.querySelector(".nav-links");
const NAVLINK = document.querySelector(".nav-link");

function toggleHide() {
  NAVLINKS.classList.toggle("hidden");
}

NAVTOGGLEBUTTON.addEventListener("click", toggleHide, false);
NAVLINK.addEventListener("click", toggleHide, false);

/* ------------------------ */

// function hideAll() {
//   let result = document.querySelector("nav").classList.contains("dropped");
//   console.log(result);
//   // if (result) {
//   //   console.log("hello");
//   //   document.querySelectorAll(".dropped").classList.remove("dropped");
//   // }
//   // document.querySelectorAll(".dropped").classList.remove("dropped");
// }

// NAVLINK.addEventListener("click", hideAll, false);

