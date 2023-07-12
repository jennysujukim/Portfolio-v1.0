// -----------------------------
// About - Profile
// -----------------------------  

gsap.fromTo(".about-profile-top div", 
    {
        y: "20%",
        opacity: 0
    },
    { 
        y: "0%", 
        opacity: 1,
        duration: 0.7,
        ease: Power1,
        stagger: 0.5
    })

gsap.fromTo(".about-profile-text p", 
{
    y: "50%",
    opacity: 0
},
{
    y: "0%",
    opacity: 1, 
    scrollTrigger: {
        trigger: ".about-profile-text p",
        start: "top bottom",
        end: "bottom bottom",
        scrub: 1,
        stagger: 0.5
    }
})

// -----------------------------
// About - Bulletpoints
// -----------------------------  

gsap.fromTo(".about-points h2", 
    {
        y: "20%",
        opacity: 0
    },
    { 
        y: "0%",
        opacity: 1,
        scrollTrigger: {
            trigger: ".about-points h2",
            start: "top +=80%",
            end: "bottom bottom",
            scrub: 1
        }
    })

mm.add({
    isMobile: "(max-width: 576px)",
    isDesktop: "(min-width: 576px)"
  }, (context) => {
  
    let { isMobile, isDesktop } = context.conditions;
  
    gsap.fromTo('.about-points-list', 
        {
            y: isMobile ? "30%" : "",
            x: isMobile ? "" : "20%",
            opacity: 0
        },
        {
            y: isMobile ? "0%" : "",
            x: isMobile ? "" : "0%",
            opacity: 1,
            stagger: 1,
            scrollTrigger: {
                trigger: ".about-points-list",
                start: "top +=70%",
                end: "+=700 bottom",
                scrub: 1
            }
        }
    );
  
  });

// -----------------------------
// About - Archives
// -----------------------------  

// Archives Title

gsap.fromTo(".about-archive h2", 
    {
        y: "20%",
        opacity: 0
    },
    { 
        y: "0%",
        opacity: 1,
        scrollTrigger: {
            trigger: ".about-archive h2",
            start: "top +=80%",
            end: "bottom bottom",
            scrub: 1
        }
    })


// Arcives Images lists


mm.add( 
    {
        isNorm: "(max-width: 1920px)",
        isMax: "(min-width: 1920px)"
    }, (context) => {

        let { isNorm, isMax } = context.conditions;

        const sections = gsap.utils.toArray('.about-archive-list');

        let scrollTween = gsap.to(sections, {

        xPercent: -100 * (sections.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".about-archive-wrapper",
            pin: true, 
            scrub: 1,
            start: isNorm ? "top +=40px" : "-=200 +=40px",
            end: () => "+=" + document.querySelector(".about-archive-wrapper").offsetWidth
        }

        });

        const archLists = gsap.utils.toArray('.list-container');

        gsap.fromTo(archLists, 
        {
            x: "20%",
            opacity: 0
        },
        { 
            x: "0%",
            opacity: 1,
            stagger: 1,
            scrollTrigger: {
                trigger: ".list-container",
                start: "top center",
                start: isNorm ? "top center" : "-=200 center",
                scrub: 1,
                end: () => "+=" + document.querySelector(".about-archive-list").offsetWidth
            }
        });
});




// const images = ['jenny-profile.jpg', 'aus-2.jpg', 'aus-3.jpg', 'aus-4.jpg', 'aus-5.jpg', 'aus-6.jpg'];

// let index = 0;

// const profileImg = document.querySelector('#profile-img');
// const profileCon = document.querySelector('#profile-container');

// function displayImg() {
//     profileImg.src = `../../images/about/${images[index]}`;
// }

// function loopImg() {
//     index++;
//     if (index >= images.length) {
//         index = 0;
//     }
//     displayImg();
// }

// call first image on load
// displayImg();

// profileCon.addEventListener('click', loopImg);

