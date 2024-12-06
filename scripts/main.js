gsap.registerPlugin(ScrollTrigger);

const veinImg = document.querySelector("#veinImg");
const thermoImg = document.querySelector("#thermoImg");
const redCells = document.querySelector("#redCells");
const sec2 = document.querySelector(".sec2");
const sec3 = document.querySelector(".sec3");
const sec4 = document.querySelector(".sec4");
const sec5 = document.querySelector(".sec5");
const sec6 = document.querySelector(".sec6");
const bg = document.querySelector(".bg");

// function getScrollAmount() {
//   let sec2Width = sec2.scrollWidth;
//   return -(sec2Width - window.innerWidth);
// };

// console.log(getScrollAmount());
// gsap.to(sec2, {
//   x: getScrollAmount(),
//   scrollTrigger: {
//     trigger: sec2,
//     start: "top top",
//     end: "bottom bottom",
//     scrub: 1,
//     markers: true
//   }
// });

gsap.to(veinImg, {
  x: '50%',
  duration: 2,
  scrollTrigger: {
    trigger: veinImg,
    toggleActions: "restart reverse play reverse",
    start: "top 90%",
    end: "bottom 30%",
    markers: true
  }
});

gsap.to(thermoImg, {
  x: '-10%',
  duration: 2,
  scrollTrigger: {
    trigger: sec2,
    toggleActions: "restart reverse play reverse",
    start: "top 90%",
    end: "bottom 30%",
    markers: true
  }
});

gsap.to(bg, {
  backgroundColor: "#4630b8",
  duration: 2,
  scrollTrigger: {
    trigger: sec2,
    toggleActions: "restart reverse play reverse",
    start: "top 90%",
    end: "bottom 90%",
    markers: true
  }
});

gsap.to(bg, {
  backgroundColor: "#2e2e2e",
  duration: 2,
  scrollTrigger: {
    trigger: sec3,
    toggleActions: "restart reverse play reverse",
    start: "top 90%",
    end: "bottom 90%",
    markers: true
  }
});

gsap.to(bg, {
  backgroundColor: "#2d542d",
  duration: 2,
  scrollTrigger: {
    trigger: sec6,
    toggleActions: "restart reverse play reverse",
    start: "top 90%",
    end: "bottom 90%",
    markers: true
  }
});