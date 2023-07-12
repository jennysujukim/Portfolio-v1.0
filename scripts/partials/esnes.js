

// Overview - sense animation ----------


const senseTimeline = gsap.timeline({
  ease: Power1,
  scrollTrigger: {
    trigger: '.sense-wrapper',
    pin: true,
    start: "top top",
    scrub: 1,
    onEnter: () => {
      senseTimeline.play();
    },
    onLeaveBack: () => {
      senseTimeline.reverse();
    }
  }
});

senseTimeline
  .fromTo('.sense-1', { transform: "translateX(150px)" }, { transform: "translateX(0px)" })
  .to('.sense-1', { transform: "translate(730px)" })
  .fromTo('.sense-2', { transform: "translateX(60px)" }, { transform: "translateX(0px)" }, 0)
  .to('.sense-2', { transform: "translate(390px)" })
  .fromTo('.sense-4', { transform: "translateX(-60px)" }, { transform: "translateX(0px)" }, 0)
  .to('.sense-4', { transform: "translate(-400px)" })
  .fromTo('.sense-5', { transform: "translateX(-120px)" }, { transform: "translateX(0px)" }, 0)
  .to('.sense-5', { transform: "translateX(-750px)" });



// Brand Campaign ----------


// Background animation

gsap.fromTo('.brand-campaign', 
  {
    backgroundColor: "var(--white)"
  },
  {
    backgroundColor: "#DCCDBC",
    scrollTrigger: {
      trigger: '.brand-campaign',
      scrub:1,
      start: "top center",
      end: "bottom bottom"
    }
  }
)

// campaign concept animation


gsap.fromTo('.circle-left',

  {
    transform: "translateX(-150%)"
  },
  {
    transform: "translateX(0%)",
    scrollTrigger: {
      trigger: ".concept-container",
      scrub: 1,
      start: "top center",
      end: "bottom bottom"
    }
  }
);

gsap.fromTo('.circle-right',

  {
    transform: "translateX(150%)"
  },
  {
    transform: "translateX(0%)",
    scrollTrigger: {
      trigger: ".concept-container",
      scrub: 1,
      start: "top center",
      end: "bottom bottom"
    }
  }
);



gsap.to(".concept-txt span", {
  color: "var(--black)",
  stagger: 1,
  scrollTrigger: {
    trigger: ".concept-txt span",
    start: "top center",
    end: "bottom bottom",
    scrub: 1
  }
});


const no8Timeline = gsap.timeline({
  ease: Power1,
  scrollTrigger: {
    trigger: '.no-8-container',
    pin: true,
    start: "top +=200px",
    scrub: 1,
    onEnter: () => {
      no8Timeline.play();
    },
    onLeaveBack: () => {
      no8Timeline.reverse();
    }
  }
});

no8Timeline
  .fromTo('.no-8-1', { opacity: 0 }, { opacity: 1 })
  .fromTo('.no-8-2', { transform: "translateX(-150px)", opacity: 0 }, { transform: "translateX(0px)", opacity: 1 }, 0)
  .fromTo('.no-8-3', { transform: "translateX(-225px)", opacity: 0 }, { transform: "translateX(0px)", opacity: 1 }, 0)
  .fromTo('.no-8-4', { transform: "translateX(-300px)", opacity: 0 }, { transform: "translateX(0px)", opacity: 1 }, 0)
  .to('.no-8', {transform: "rotate(0deg)"});



// campaign slogan animation


gsap.fromTo('.slogan-connect',

  {
    transform: "translateY(-100%)",
    opacity: 0
  },
  {
    transform: "translateY(0%)",
    opacity: 1,
    scrollTrigger: {
      trigger: ".slogan-connect",
      scrub: 1,
      start: "top bottom",
      end: "bottom center"
    }
  }
);

gsap.fromTo('.slogan-two',

  {
    transform: "translateY(100%)",
    opacity: 0
  },
  {
    transform: "translateY(0%)",
    opacity: 1,
    scrollTrigger: {
      trigger: ".slogan-two",
      scrub: 1,
      start: "top bottom",
      end: "bottom center"
    }
  }
);


gsap.to(".slogan-txt span", {
  color: "var(--black)",
  stagger: 0.5,
  scrollTrigger: {
    trigger: ".slogan-txt span",
    start: "top center",
    end: "bottom center",
    scrub: 1
  }
});


// campaign moodboard animation


const moodboardImg = gsap.utils.toArray(".moodboard-img");

gsap.to(moodboardImg, {

  opacity: 1,
  ease: "slow",
  stagger: 0.7,
  scrollTrigger: {
    trigger: '.moodboard-grid',
    scrub: 1,
    start: "top center",
    end: "top bottom"
  }
})


// campaign Typo/Colours animation

const swatches = document.querySelectorAll('.colour-swatch');

swatches.forEach(swatch => {
  const colourInfo = swatch.querySelector('.colour-info');

  swatch.addEventListener('mouseover', () => {
    colourInfo.classList.add('visible');
  })

  swatch.addEventListener('mouseout', () => {
    colourInfo.classList.remove('visible');
  })
});

// Application Product animation

const productTimeline = gsap.timeline({
  ease: Power1,
  scrollTrigger: {
    trigger: '.product-container',
    pin: true,
    start: "top +=200px",
    scrub: 1,
    onEnter: () => {
      productTimeline.play();
    },
    onLeaveBack: () => {
      productTimeline.reverse();
    }
  }
})

productTimeline
.fromTo('.product-bottle img', 
  {
    transform: "translateY(-100%)",
    opacity: 0
  },
  {
    transform: "translateY(0%)",
    opacity: 1
  }
)

