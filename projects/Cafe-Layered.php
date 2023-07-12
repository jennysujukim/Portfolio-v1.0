<?php

    $title_tag = "Cafe Layered - Web Development & Design | Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "artifact";
    $partial_js = "artifact";
    $partial_artifact_js = "cafe-layered";
    $partial_artifact_css = "cafe-layered";
    require(__DIR__ . '/../init.php');
    require(__DIR__ . '/../data/projects.php');
     
?>
<!DOCTYPE html>
<html lang="en"> 
<?php include(get_project_path('partials/global/head.php'));?>
<body>
    <?php include(get_project_path('partials/global/header.php'));?>
    <main class="artifact-bg">

        <div class="banner" id="artifact-banner"></div>

        <section class="artifact-container">
            <div class="grid-dk">
                <div class="grid-dk-6" id="artifact-intro-title">
                    <h1>CAFE LAYERED</h1>
                    <div class="artifact-intro-sub">
                        <span>Responsive website</span>
                    </div>
                    <div class="intro-btn">
                        <a class="artifact-btn" href="https://cafelayered.seojeongkim.com/" target="_blank">View Live Site</a> 
                        <a class="artifact-btn" href="https://github.com/jennysujukim/cafe-layered-2023" target="_blank">See Code</a> 
                    </div>
                </div>
                <div class="grid-dk-6 artifact-intro-detail-wrapper">
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Date</p>
                        <p>Jan, 2023</p>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Roles</p>
                        <div>
                            <p>Web Design</p>
                            <p>Web Development</p>
                        </div>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Skills</p>
                        <div>
                            <p>HTML</p>
                            <p>Tailwind CSS</p>
                            <p>JavaScript</p>
                            <p>Custom Elements</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro">
                <h2 class="artifact-subtitle">About the Project</h2>
                <p>The project is conducted to design and develop a responsive website for the fictitious local cafe. It involved building a live site from scratch that could adapt to desktop, tablet, and mobile devices. Throughout the project, I gained a deep understanding of the limitations and advantages of various browsers, which allowed me to develop an effective website that catered to the needs of the users. To ensure that the website could adapt to different browsers, I actively utilized grid layouts, and I also created custom elements that could be reused as components.</p>
                
            </div>
        </section>

        <section id="overview">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>01/</span>
                    <h3>Overview</h3>
                </div>
                <p>The project followed a three-stage process. In the design stage, I created the concept for the website's content and established the basic layout structure. Using this ideation as a foundation, I proceeded to develop the live site by hand-coding it. As the project progressed, I revised the code in multiple phases to enhance the website's dynamic features and minimize the repetition of code. To achieve these improvements, I employed TailwindCSS and custom elements.</p>
            </div>
        </section>

        <section id="design">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>02/</span>
                    <h3>Design</h3>
                </div>
                <p>During this stage, I selected the core content, graphics, and images that would be featured on the website. To ensure that the website would be fully responsive, I adopted a mobile-first approach. I created low-fidelity wireframes that took into account the functionality and unique features of each section, as well as the different types of browsers that the website would be accessed on.</p>
            </div>
            <div class="typography artifact-sub-container">
                <img src="<?php echo get_url('images/project-cafeLayered/typography-raleway.png');?>" alt="Typeface of Raleway">
                <img src="<?php echo get_url('images/project-cafeLayered/typography-spacemono.png');?>" alt="Typeface of Space Mono">
            </div>
            <div class="colour">
                <div class="colour-swatch colour-1">
                    <div class="colour-info">
                        <p>HEX #F6F6F6</p>
                        <p>RGB 246 246 246</p>
                    </div>
                </div>
                <div class="colour-swatch colour-2">
                    <div class="colour-info">
                        <p>HEX #E7E6E4</p>
                        <p>RGB 231 230 228</p>
                    </div>
                </div>
                <div class="colour-swatch colour-3">
                    <div class="colour-info">
                        <p>HEX #D9D5CF</p>
                        <p>RGB 217 213 207</p>
                    </div>
                </div>
                <div class="colour-swatch colour-4">
                    <div class="colour-info">
                        <p>HEX #C1BBB0</p>
                        <p>RGB 193 187 176</p>
                    </div>
                </div>
                <div class="colour-swatch colour-5">
                    <div class="colour-info">
                        <p>HEX #A68972</p>
                        <p>RGB 166 137 114</p>
                    </div>
                </div>
                <div class="colour-swatch colour-6">
                    <div class="colour-info">
                        <p>HEX #212121</p>
                        <p>RGB 33 33 33</p>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2 wireframes-title">Wireframes</h4>
                <div class="wireframes-container">
                    <div class="wireframes">
                        <p>Mobile</p>
                        <div class="wireframes-img">
                            <img src="<?php echo get_url('images/project-cafeLayered/design-mobile.jpg');?>" alt="Wireframes of mobile version">
                        </div>               
                    </div>
                    <div class="wireframes">
                        <p>Tablet</p>
                        <div class="wireframes-img">
                            <img src="<?php echo get_url('images/project-cafeLayered/design-tablet.jpg');?>" alt="Wireframes of tablet version">
                        </div>
                    </div>
                    <div class="wireframes">
                        <p>Desktop</p>
                        <div class="wireframes-img">
                            <img src="<?php echo get_url('images/project-cafeLayered/design-desktop.jpg');?>" alt="Wireframes of desktop version">
                        </div>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Grids</h4>
                <p>Grids are used to establish the consistent and responsive layout. Specifically, I employed a 12-column grid for desktop (1280px) and laptop (1024px), a 6-column grid for tablet (640px), and a 2-column grid for mobile (320px).</p>
                <div class="grid-container">
                    <div class="grid">
                        <div class="grid-title">
                            <p>Mobile</p>
                            <p>320px</p>
                        </div>                        
                        <div class="grid-img grid-mobile"></div>
                    </div>
                    <div class="grid">
                        <div class="grid-title">
                            <p>Tablet</p>
                            <p>640px</p>
                        </div> 
                        <div class="grid-img grid-tablet"></div>
                    </div>
                    <div class="grid">
                        <div class="grid-title">
                            <p>Laptop & Desktop</p>
                            <p>1024px & 1280px</p>
                        </div>                        
                        <div class="grid-img grid-desktop"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="develop">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>03/</span>
                    <h3>Development</h3>
                </div>
                <h4 class="artifact-subtitle-h4-v2">Phase 1: Code with HTML, CSS, and JavaScript</h4>
                <p>I created the basic HTML structure for the website. Due to the iterative content layout of the menu section, I opted to use a card design to organize the code. I utilized media queries that changed based on the 'min-width' parameter to ensure the responsive design. For the carousel gallery section, I integrated a for loop that would move the image width whenever the event was called.</p>
            </div>
            <div class="artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Phase 2: Apply Tailwind CSS</h4>
                <p><a href="https://tailwindcss.com/" tareget="_blank">TailwindCSS</a> is a CSS framework that enables the rapid development of custom user interfaces. In this project, I replaced the initial typed CSS with TailwindCSS to streamline the styling process. Since the website is a single-page site, TailwindCSS proved to be a valuable tool in reducing the overall amount of CSS required. To further customize the framework, I stored custom values and set screen size in the 'tailwind.config.js' file, which allowed for easy adjustments as needed including media queries.</p>
                <div class="code-container">
                    <pre>
                        <code class="language-javascript">
    tailwind.config = {
        theme: {
            screens: {
                'tablet': '640px',
                'laptop': '1024px',
                'desktop': '1280px'
            },
            colors: {
                'white': '#F6F6F6',
                'lightgrey': '#E7E6E4',
                'lightbeige': '#D9D5CF',
                'beige': '#C1BBB0',
                'brown': '#A68972',
                'black': '#212121'
            },
            fontFamily: {
                'Raleway': ['Raleway', 'sans-serif'],
                'SpaceMono': ['Space Mono', 'monospace']
            },
            extend: {
                width: {
                    '60vw': '60vw'
                },
                maxWidth: {
                    '45%': '45%'
                },
                height: {
                    '40vh': '40vh',
                    '50vh': '50vh',
                    '60vh': '60vh'
                },
                fontSize: {
                    '20vw': '20vw'
                },
                zIndex: {
                    'minus-100': '-100'
                },
                gridTemplateRows: {
                    'layout-tablet': '20% 10% 20% 40%',
                    'layout-laptop': '22% 10% 22% 40%',
                },
                inset: {
                    '5vh': '5vh',
                    '2%': '2%'
                },
                backgroundImage: {
                    'indoor': "url('../images/gallery-indoor.jpg')",
                    'outdoor': "url('../images/gallery-outdoor.jpg')",
                    'coffeemachine': "url('../images/gallery-coffeemachine.jpg')",
                    'dripcoffee': "url('../images/gallery-dripcoffee.jpg')"
                },
                strokeWidth: {
                    '6': '6px'
                }
            }
        }
    }
                        </code>
                    </pre>
                </div>
            </div>
            <div class="artifact-sub-container develop-phase-3">
                <h4 class="artifact-subtitle-h4-v2">Phase 3: Add Custom Elements</h4>
                <p>To create a reusable web component that represents a menu card with an image, title, description, and price, I utilized autonomous custom elements extending HTMLElement. In order to encapsulate the component, I created a <code class="language-javascript">shadow DOM</code> that is attached to the element in the <code class="language-javascript">constructor</code> method.</p>
                <p>To prevent XSS attacks, I opted to use <code class="language-javascript">document.createElement</code> and <code class="language-javascript">textContent</code> instead of templates and inner HTML. I used <code class="language-javascript">setAttribute</code> to create a class for each element. To handle long content, I used slots to allow values to be passed into the element.</p>
                <p> I also defined a <code class="language-javascript">static observedAttributes</code> method that returns an array of attribute names that will be observed for changes using the <code class="language-javascript">attributeChangedCallback</code> method. In this method, I utilized <code class="language-javascript">this.getAttribute</code> to obtain the new values of the observed attributes and updated the content accordingly.</p>
                <div class="code-container">
                    
                </div>
                <div class="code-container">
                    <pre>
                        <code class="language-javascript">
                            
    class MenuCard extends HTMLElement {
        constructor(){
            super();

            const shadow = this.attachShadow({mode: 'open'});

            const container = document.createElement('div');
            container.setAttribute('class', 'wrapper');

            // ...
            
            shadow.appendChild(container);

            // ...

        }

        static get observedAttributes() {
            return ["name", "image", "price"];
        }

        attributeChangedCallback(attributeName, oldValue, newValue) {
            this.shadowRoot.querySelector(".menu-title").textContent = this.getAttribute("name");
            this.shadowRoot.querySelector(".menu-img").src = this.getAttribute("image");
            this.shadowRoot.querySelector(".menu-img").alt = this.getAttribute("name");
            this.shadowRoot.querySelector(".menu-price").textContent = this.getAttribute("price");
        }
        
    };

    export default MenuCard;
                        </code>
                    </pre>
                </div>
            </div>
        </section>
        <div class="livesite-btn">
            <a class="artifact-btn" href="https://cafelayered.seojeongkim.com/" target="_blank">View Live Site</a>
            <a class="artifact-btn" href="https://github.com/jennysujukim/cafe-layered-2023" target="_blank">See Code</a> 
        </div>

        <div class="artifact-next is-flex">
            <a href="#">Next Project</a>
            <svg class="project-arrow" width="40" height="41" viewBox="0 0 40 41" fill="none">
                <path class="project-arrow-path" d="M19 1L38 20.5L19 40"/>
                <path class="project-arrow-path"  d="M0 21L38 21"/>
            </svg>
        </div>

    </main>
    <?php include(get_project_path('partials/global/footer.php'));?>
</body>
</html>