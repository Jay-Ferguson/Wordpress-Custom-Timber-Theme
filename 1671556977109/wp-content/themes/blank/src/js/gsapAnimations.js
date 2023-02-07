import { gsap } from "gsap/dist/gsap.js";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";
import { Flip } from "gsap/Flip.js";
import { Draggable } from "gsap/Draggable.js";

gsap.registerPlugin(Flip, ScrollTrigger, Draggable, Flip);

const menuBtn = document.querySelector(".menuBtn");
const exitBtn = document.querySelector(".exit");

let t1 = gsap.timeline({ paused: true });

t1.to(
  ".menu",
  { opacity: 1, duration: .5, top: 0, ease: "power1.out" }
);

t1.to(
  ".nav__main-item",
  { opacity: 1, duration: .7, stagger: 0.051, marginTop: 0, ease: "power1.out" },
  ">-0.5"
);


menuBtn.addEventListener("click", () => {
  console.log('click test');
  t1.play().timeScale(1);
});

exitBtn.addEventListener("click", () => {
  t1.timeScale(3);
  t1.reverse();

});





//error

