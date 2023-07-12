// -----------------------------
// Homepage - Banner Graphic (Bodymovin & Lottie)
// -----------------------------

const bannerGraphic = bodymovin.loadAnimation({
  container: document.querySelector('.hp-banner-graphic'),
  path: '../../hp-banner.json',
  render: 'svg',
  loop: true,
  autoplay: true,
  name: 'banner animation'
}); 

// -----------------------------
// Homepage - Banner Container
// -----------------------------

mm.add("(min-width: 576px)", () => {

  gsap.to('.hp-banner-scene', {
    borderRadius: "0",
    width: "100%",
    height: "100vh",
    ease: "none",
    scrollTrigger: {
      trigger: '.hp-banner',
      pin: true,
      pinSpacing: false,
      scrub: true
    }
  });
  
  gsap.to('.hp-banner-graphic', {
    width: "70%",
    scrollTrigger: {
      trigger: '.hp-banner-scene',
      scrub: true,
      start: "top top"
    }
  });

})


gsap.fromTo('.hp-banner-text .text-hello p',
{
  transform: "translateY(100%)",
},
{
  transform: "translateY(0%)",
  duration: 0.5,
  ease: Power1,
  delay: 0.5
}
)

gsap.fromTo('.hp-banner-text .text-h1 h1',
{
  transform: "translateY(100%)",
},
{
  transform: "translateY(0%)",
  duration: 0.5,
  ease: Power1,
  delay: 1
}
)

gsap.fromTo('.hp-banner-text .text-career p',
{
  transform: "translateY(100%)",
},
{
  transform: "translateY(0%)",
  duration: 0.5,
  ease: Power1,
  delay: 1.5
}
)

// -----------------------------
// Homepage - Scroll Animation
// -----------------------------

gsap.to(".hp-scroll", {

  scrollTrigger: {
    trigger: ".hp-bg",
    start: 'top top',
    end: () => "+=" + document.querySelector(".hp-bg").offsetHeight,
    scrub: true
  },
  rotation:360*5,
  duration: 1,
  top: '100vh',
  ease: 'none'

})

// -----------------------------
// Homepage - Mission
// -----------------------------

gsap.to(".hp-mission-title p", {
  backgroundPositionX: "0%",
  stagger: 1,
  scrollTrigger: {
    trigger: ".hp-mission-title p",
    start: "top center",
    end: "bottom top",
    scrub: 1
  }
})

gsap.fromTo(".hp-mission-graphic .planet",
  {
    transform: "translateY(100%)",
    opacity: 0,
    zIndex: "0"
  },

  {
    transform: "translateY(0%)",
    opacity: 1,
    zIndex: "100",
    scrollTrigger: {
      trigger: ".hp-mission-graphic .planet",
      start: "-=450 center",
      end: "bottom bottom",
      scrub: 1,
      duration: 2,
      ease: Power1
    }
  }

)

// -----------------------------
// Homepage - Recent Works
// -----------------------------

gsap.fromTo(".hp-works h2", 
{
    y: "50%",
    opacity: 0
},
{
    y: "0%",
    opacity: 1,
    scrollTrigger: {
        trigger: ".hp-works h2",
        start: "top bottom",
        end: "bottom bottom",
        scrub: 1
    }
})

const recentWorks = gsap.utils.toArray('.hp-works-list');

gsap.fromTo(recentWorks, 
  {
    y: "50%",
    opacity: 0
  },
  {
    y: "0%",
    opacity: 1,
    stagger: 0.5,
    scrollTrigger: {
      trigger: ".hp-works-list",
      start: "top bottom",
      end: "bottom center",
      scrub: 1
    }
  });


// -----------------------------
// Homepage - Banner Graphic Loader
// -----------------------------

// const graphic = document.querySelector('.hp-banner-graphic');

// graphic.addEventListener('load', () => {
//     document.querySelector('.loader-wrapper').classList.add('loaded')
// });
