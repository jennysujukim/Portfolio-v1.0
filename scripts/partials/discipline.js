// -----------------------------
// Discipline - Title Section
// ----------------------------- 

gsap.fromTo(".discipline-title h1", 
    {
        y: "20%",
        opacity: 0
    },
    { 
        y: "0%",
        opacity: 1,
        duration: 0.7,
        ease: Power1
    })

gsap.fromTo(".discipline-title-filter", 
{
    y: "20%",
    opacity: 0
},
{ 
    y: "0%",
    opacity: 1,
    duration: 0.7,
    ease: Power1
})   

// -----------------------------
// Discipline - Title Section - Button
// ----------------------------- 

const buttons = document.querySelectorAll('.button-anim');

buttons.forEach(button => {
  const arrow = button.querySelector('.button-arrow');
  
  button.addEventListener('mouseover', () => {
    arrow.classList.add('active');
  });

  button.addEventListener('mouseout', () => {
    arrow.classList.remove('active');
  });
});


// -----------------------------
// Discipline - Project Hover
// ----------------------------- 


const cardLinks = document.querySelectorAll('.project-card-link');

cardLinks.forEach(cardLink => {

  const thumbnail = cardLink.querySelector('.project-thumbnail');

  cardLink.addEventListener('mouseover', () => {
    thumbnail.classList.add('active');
  });

  cardLink.addEventListener('mouseout', () => {
    thumbnail.classList.remove('active');
  })

})


// -----------------------------
// Discipline - Projects Scroll Timeline
// -----------------------------  

// gsap.to(mask, {
//   width: "100%",
//   scrollTrigger: {
//     trigger: ".discipline-project",
//     start: "",
//     scrub: 1
//   }
// })

// -----------------------------
// Discipline - Projects
// -----------------------------  

const projectLists = gsap.utils.toArray('.project-card');

gsap.fromTo(projectLists, 
  {
      y: "30%",
      opacity: 0
  },
  {
      y: "0%",
      opacity: 1,
      stagger: 0.5,
      scrollTrigger: {
          trigger: ".project-card",
          start: "-=450 bottom",
          end: () => "+=" + document.querySelector(".discipline-wrapper").offsetHeight,
          scrub: 1
      }
  }
);


mm.add("(min-width: 768px)", () => {
  
  const container = document.querySelector('.project-list');
  const sections = gsap.utils.toArray('.project-card');

  let scrollTween = gsap.to(sections, {

  yPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".discipline-wrapper",
    pin: true, 
    scrub: 1,
    // snap: 1 / (sections.length - 1),
    start: "60px 60px",
    end: () => "+=" + document.querySelector(".discipline-wrapper").offsetWidth
  }

});


});
