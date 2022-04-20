"use strict";
let navOpenBtn = document.querySelector(".openbtn-wrapper");
let naviDesktop = document.querySelector(".navigation-desktop");
navOpenBtn.addEventListener("click", function () {
  let navOpenBtnSpan = document.querySelectorAll(".openbtn-wrapper > span");
  let naviMobile = document.querySelector(".navigation-mobile");
  naviMobile.classList.toggle("active");
  navOpenBtnSpan.forEach((span) => span.classList.toggle("active"));
});

let navLinks = document.querySelectorAll(".nav-link");
navLinks.forEach((n) => {
  n.classList.remove("active");
  if (location.href == n.href + "/" || location.href == n.href) {
    n.classList.add("active");
  }
});
