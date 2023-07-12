// -----------------------------
// Media Query
// -----------------------------

let mm = gsap.matchMedia();

// -----------------------------
// Light / Dark Mode
// -----------------------------


const toggleSwitch = document.querySelector('.header-mode');
const currentMode = localStorage.getItem('mode');

if (currentMode) {
  document.body.classList.toggle('dark-mode', currentMode === 'dark');
  updateColors(currentMode);
}

toggleSwitch.addEventListener('click', switchTheme);

function switchTheme() {
  const isDarkMode = document.body.classList.toggle('dark-mode');

  localStorage.setItem('mode', isDarkMode ? 'dark' : 'light');

  updateColors(isDarkMode ? 'dark' : 'light');
}

function updateColors(mode) {
  const currentModeHighlight = mode === 'dark' ? 'purple' : 'lavender';
  const primaryColorLight = mode === 'light' ? '#0E0E10' : '#FDFBFB';
  const primaryColorDark = mode === 'dark' ? '#0E0E10' : '#FDFBFB';
  const primaryColorPurple = currentModeHighlight === 'purple' ? '#5735B8' : '#BDC0FF';
  const primaryColorLavender = currentModeHighlight === 'lavender' ? '#5735B8' : '#BDC0FF';

  document.documentElement.style.setProperty('--white', primaryColorLight);
  document.documentElement.style.setProperty('--black', primaryColorDark);
  document.documentElement.style.setProperty('--purple', primaryColorPurple);
  document.documentElement.style.setProperty('--lavender', primaryColorLavender);
}


// -----------------------------
// Global Navigation
// -----------------------------

tlNav = new TimelineMax({paused: true});

tlNav.to(".nav-container", 1, {
    left: 0,
    ease: Expo.easeInOut
});

tlNav.staggerFrom(".nav > ul > li", 0.8, {
    x:-100,
    opacity: 0,
    ease: Expo.easeInOut
}, "0.1", "-=0.8");

tlNav.reverse();

document.querySelector(".nav-open").onclick = function() {
    tlNav.play();
};

document.querySelector(".nav-close").onclick = function() {
    tlNav.reverse();
};


// -----------------------------
// Videos
// -----------------------------

const videos = document.querySelectorAll('#video');

videos.forEach(video => {
  video.play();
});
