import gsap from "gsap";
// get other plugins:
import ScrollTrigger from "gsap/ScrollTrigger";
import { Draggable, MotionPathPlugin } from "gsap/all";

// import Flip from "gsap/Flip";
// import Draggable from "gsap/Draggable";

// or all tools are exported from the "all" file (excluding members-only plugins):


gsap.registerPlugin(ScrollTrigger, Draggable, Flip, MotionPathPlugin);