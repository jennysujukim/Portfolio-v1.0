// -------------------------
// Artifact - Scroll Reveal
// -------------------------

gsap.fromTo("#artifact-banner", 
{
    y: "-50%",
    opacity: 0
},
{ 
    y: "0%",
    opacity: 1,
    duration: 0.7,
    ease: Power1
})


gsap.fromTo("#artifact-intro-title", 
{
    y: "50%",
    opacity: 0
},
{ 
    y: "0%",
    opacity: 1,
    duration: 0.7,
    ease: Power1
})

const artifactRevealUp = document.querySelectorAll('#artifact-reveal');

artifactRevealUp.forEach(revealUp => {
    gsap.fromTo(revealUp, 
    {
        y: "20%",
        opacity: 0
    },
    { 
        y: "0%",
        opacity: 1,
        stagger: 1,
        scrollTrigger: {
            trigger: revealUp,
            scrub: 1,
            start: "-=100 center",
            end: "center bottom"
        }
    })
});


// -------------------------
// Artifact - Image Modal
// -------------------------


const openBtns = document.querySelectorAll('#open-modal');
const closeBtns = document.querySelectorAll('#close-modal');

openBtns.forEach(button => {
  button.addEventListener("click", () => {
    const modal = button.nextElementSibling;
    openModal(modal);
  });
});

closeBtns.forEach(button => {
  button.addEventListener("click", () => {
    const modal = button.parentNode.parentNode;
    closeModal(modal);
  });
});

function openModal(modal) {
  modal.classList.remove('hidden');
}

function closeModal(modal) {
  modal.classList.add('hidden');
}










// const openModalBtns = document.querySelectorAll('[data-modal-target]');
// const closeModalBtns = document.querySelectorAll('[data-close-button]');

// openModalBtns.forEach(button => {
//     button.addEventListener('click', () => {
//         const modal = document.querySelector(button.dataset.modalTarget);
//         openModal(modal);
//     });
// });

// closeModalBtns.forEach(button => {
//     button.addEventListener('click', () => {
//         const modal = button.closest('.fav-modal');
//         closeModal(modal);
//     });
// });




// ---- Modal List Scrolling -----

// const sections = gsap.utils.toArray('.about-fav-list');

// let scrollTween = gsap.to(sections, {

// xPercent: -100 * (sections.length - 1),
// ease: "none",
// scrollTrigger: {
//     trigger: ".about-fav-container",
//     pin: true, 
//     scrub: 1,
//     start: "top +=150",
//     snap: 1 / (sections.length - 1)
// }

// });
