<?php

    $title_tag = "Read Me - UI/UX Design | Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "artifact";
    $partial_js = "artifact";
    $partial_artifact_js = "read-me";
    $partial_artifact_css = "read-me";
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
                    <h1>Read Me</h1>
                    <div class="artifact-intro-sub">
                        <span>Personal Project</span>
                        <span>Fictional App</span>
                    </div>
                    <a class="artifact-btn" href="https://www.figma.com/proto/U4bh08gUSBbkh8ZymsRfcP/UI%2FUX-Design-%7C-Read-Me-%7C-Prototype?node-id=31-70&scaling=scale-down&page-id=3%3A3&starting-point-node-id=3%3A5" target="_blank">View Prototype</a> 
                </div>
                <div class="grid-dk-6 artifact-intro-detail-wrapper" id="artifact-reveal">
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Date</p>
                        <p>Oct, 2022</p>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Deliverables</p>
                        <div>
                            <p>UI Design</p>
                            <p>UX Research</p>
                            <p>Graphic Design</p>
                        </div>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Software</p>
                        <div>
                            <p>Figma</p>
                            <p>Adobe</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="artifact-reveal">
                <h2 class="artifact-subtitle">About the Project</h2>
                <p>The project aimed to use the design process to create an app and test it with users. The process included analysis, design, evaluation, and implementation, and involved creating hi-fi prototypes to demonstrate the app's features. Usability testing was performed using Maze software, and the feedback was reflected to improve the initial prototype.</p>
            </div>
        </section>

        <section class="artifact-container artifact-toc-list-wrapper">
            <ul class="artifact-toc-list">
                <li>
                    <a href="#analyze">
                        <div class="artifact-toc-list-title">
                            01/ Analyze
                            <svg class="highlight-circle" width="166" height="85" viewBox="0 0 166 85">
                                <path class="highlight-circle-path" d="M159.472 28.7451C178.993 93.7511 5.00006 92.919 5 48.7144C4.99994 8.21321 117.459 -12.4679 147.165 23.6468"/>
                            </svg>
                        </div>
                        <div class="artifact-toc-list-content">   
                            <p>Define Goals</p>
                            <p>User Persona</p>
                            <p>User Scenario</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#design">
                        <div class="artifact-toc-list-title">
                            02/ Design
                            <svg class="highlight-circle" width="166" height="85" viewBox="0 0 166 85">
                                <path class="highlight-circle-path" d="M159.472 28.7451C178.993 93.7511 5.00006 92.919 5 48.7144C4.99994 8.21321 117.459 -12.4679 147.165 23.6468"/>
                            </svg>
                        </div>
                        <div class="artifact-toc-list-content">   
                            <p>Flowchaart</p>
                            <p>Wireframes</p>
                            <p>Style Guide</p>
                            <p>Prototyping</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#evaluate">
                        <div class="artifact-toc-list-title">
                            03/ Evaluate
                            <svg class="highlight-circle" width="166" height="85" viewBox="0 0 166 85">
                                <path class="highlight-circle-path" d="M159.472 28.7451C178.993 93.7511 5.00006 92.919 5 48.7144C4.99994 8.21321 117.459 -12.4679 147.165 23.6468"/>
                            </svg>
                        </div>
                        <div class="artifact-toc-list-content">   
                            <p>Usability Test</p>
                            <p>Assessing</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#implement">
                        <div class="artifact-toc-list-title">
                            04/ Implement
                            <svg class="highlight-circle" width="166" height="85" viewBox="0 0 166 85">
                                <path class="highlight-circle-path" d="M159.472 28.7451C178.993 93.7511 5.00006 92.919 5 48.7144C4.99994 8.21321 117.459 -12.4679 147.165 23.6468"/>
                            </svg>
                        </div>
                        <div class="artifact-toc-list-content">   
                            <p>Revision</p>
                        </div>
                    </a>
                </li>
            </ul>
        </section>

        <video class="artifact-video" id="video" playsinline autoplay muted loop>
            <source src="<?php echo get_url('images/project-readMe/readMe-logo-anim.mp4')?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <section id="analyze">
            <div class="artifact-sub-container" id="artifact-reveal">
                <div class="artifact-subtitle is-flex">
                    <span>01/</span>
                    <h3>Analyze</h3>
                </div>
                <p>In this stage, the main audience and objectives of the app are identified to initiate its development. This information serves as the basis for the designer to create the flowchart.</p>
            </div>
            <div class="artifact-sub-container" id="artifact-reveal">
                <h4 class="artifact-subtitle-h4-v2">Define Goals</h4>
                <div class="grid-dk">
                    <div class="grid-dk-6 analyze-goals">
                        <p>Browse audio books and add on wishlist</p>
                        <p>Bookmark while listening to audio book</p>
                        <p>Support both light and dark modes</p>
                    </div>
                    <p class="grid-dk-6 analyze-goals-txt">READ ME is an app where people can listen to audio book with a monthly membership. It not only offers a wide range of books but also helps individuals with dyslexia or visual impairments to comfortably access books.</p>
                </div>
            </div>
            <div class="artifact-sub-container" id="artifact-reveal">
                <h4 class="artifact-subtitle-h4-v2">User Persona & Scenario</h4>
                <p>To improve communication with stakeholders, a user persona and scenario were developed to understand the user's personality. Defining the goals and frustrations of the target audience helps to gain a deeper understanding of their needs.</p>
            </div>
            <div class="artifact-sub-container">
                <div class="artifact-modal-img" id="open-modal">
                    <svg class="magnifier" width="91" height="94" viewBox="0 0 91 94">
                        <path class="magnifier-path" d="M76.7193 37V78.7193L35 78.7193"/>
                        <path class="magnifier-path" d="M20.8596 62.5789V20.8596L62.5789 20.8596" stroke="#FDFBFB" stroke-width="1.5"/>
                        <line class="magnifier-path" x1="21.5397" y1="21.4792" x2="76.5397" y2="78.4792" stroke="#FDFBFB" stroke-width="1.5"/>
                    </svg>
                    <img src="<?php echo get_url('images/project-readMe/readMe-user-persona.jpg');?>" alt="Read Me User Persona" loading="lazy">
                </div>
                <div class="artifact-modal hidden" id="modal">
                    <div class="artifact-modal-overlay" id="modal-overlay"></div>
                    <div class="artifact-modal-content" id="modal-content">
                        <img src="<?php echo get_url('images/project-readMe/readMe-modal-persona.jpg');?>" alt="Read Me User Persona" loading="lazy">
                        <div class="artifact-modal-close-btn" id="close-modal">
                            <p>close</p>
                            <svg class="close-x" width="48" height="48" viewBox="0 0 48 48">
                                <path class="close-x-path" d="M1 1L47 47"/>
                                <path class="close-x-path" d="M47 1L0.999998 47"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="design">
            <div class="artifact-sub-container" id="artifact-reveal">
                <div class="artifact-subtitle is-flex">
                    <span>02/</span>
                    <h3>Design</h3>
                </div>
                <h4 class="artifact-subtitle-h4-v2">Flowchart</h4>
                <p>A flowchart was designed to depict the sequence of steps a user follows to accomplish a specific task or goal while using the app. This provides a plan to map out screens and create a product that meets the user's needs effectively.</p>
            </div>
            <div class="artifact-sub-container">
                <div class="artifact-modal-img" id="open-modal">
                    <svg class="magnifier" width="91" height="94" viewBox="0 0 91 94">
                        <path class="magnifier-path" d="M76.7193 37V78.7193L35 78.7193"/>
                        <path class="magnifier-path" d="M20.8596 62.5789V20.8596L62.5789 20.8596" stroke="#FDFBFB" stroke-width="1.5"/>
                        <line class="magnifier-path" x1="21.5397" y1="21.4792" x2="76.5397" y2="78.4792" stroke="#FDFBFB" stroke-width="1.5"/>
                    </svg>
                    <img src="<?php echo get_url('images/project-readMe/readMe-flowchart.jpg');?>" alt="Read Me User Persona" loading="lazy">
                </div>
                <div class="artifact-modal hidden" id="modal">
                    <div class="artifact-modal-overlay" id="modal-overlay"></div>
                    <div class="artifact-modal-content" id="modal-content">
                        <img src="<?php echo get_url('images/project-readMe/readMe-modal-flowchart.jpg');?>" alt="Read Me User Persona" loading="lazy">
                        <div class="artifact-modal-close-btn" id="close-modal">
                            <p>close</p>
                            <svg class="close-x" width="48" height="48" viewBox="0 0 48 48">
                                <path class="close-x-path" d="M1 1L47 47"/>
                                <path class="close-x-path" d="M47 1L0.999998 47"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container" id="artifact-reveal">
                <h4 class="artifact-subtitle-h4-v2">Wireframes</h4>
                <div class="grid-dk">
                    <p class="grid-dk-8 design-wireframes-txt">To start on the app journey, users purchase the membership and thereafter access the main screen, which serves as the gateway to all other pages. The main screen dynamically adapts to the ongoing tasks performed by the app. The following is a list of screens that users are likely to encounter frequently :</p>
                    <div class="grid-dk-4 design-wireframes-list">
                        <ul>
                            <li>onboarding / payment</li>
                            <li>landing screen</li>
                            <li>search page</li>
                            <li>bookshelf page</li>
                            <li>profile setting page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container">
                <div class="artifact-modal-img" id="open-modal">
                    <svg class="magnifier" width="91" height="94" viewBox="0 0 91 94">
                        <path class="magnifier-path" d="M76.7193 37V78.7193L35 78.7193"/>
                        <path class="magnifier-path" d="M20.8596 62.5789V20.8596L62.5789 20.8596" stroke="#FDFBFB" stroke-width="1.5"/>
                        <line class="magnifier-path" x1="21.5397" y1="21.4792" x2="76.5397" y2="78.4792" stroke="#FDFBFB" stroke-width="1.5"/>
                    </svg>
                    <img src="<?php echo get_url('images/project-readMe/readMe-wireframes.jpg');?>" alt="Read Me User Persona" loading="lazy">
                </div>
                <div class="artifact-modal hidden" id="modal">
                    <div class="artifact-modal-overlay" id="modal-overlay"></div>
                    <div class="artifact-modal-content" id="modal-content">
                        <img src="<?php echo get_url('images/project-readMe/readMe-modal-wireframes.jpg');?>" alt="Read Me User Persona" loading="lazy">
                        <div class="artifact-modal-close-btn" id="close-modal">
                            <p>close</p>
                            <svg class="close-x" width="48" height="48" viewBox="0 0 48 48">
                                <path class="close-x-path" d="M1 1L47 47"/>
                                <path class="close-x-path" d="M47 1L0.999998 47"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container" id="artifact-reveal">
                <h4 class="artifact-subtitle-h4-v2">Prototyping</h4>
                <p>Hi-fi mockups and prototypes are developed based on the wireframes, while ensuring consistency in colours and tone. Interactive animations are incorporated to offer an intuitive and seamless user experience.</p>
            </div>
            <div class="prototype-img">
                <img src="<?php echo get_url('images/project-readMe/readMe-prototype.jpg');?>" alt="Read Me Prototypes">
            </div>
        </section>

        <section class="artifact-container" id="evaluate">
            <div id="artifact-reveal">
                <div class="artifact-subtitle is-flex">
                    <span>03/</span>
                    <h3>Evaluate</h3>
                </div>
                <h4 class="artifact-subtitle-h4-v2">Usability Test</h4>
                <div class="grid-dk">
                    <div class="grid-dk-4 evaluate-test">
                        <div class="is-flex evaluate-test-result">
                            <p>Responses/</p>
                            <span>8</span>
                        </div>
                        <div class="is-flex evaluate-test-result">
                            <p>Total Usability Score/</p>
                            <span>89</span>
                        </div>
                    </div>
                    <p class="grid-dk-8 evaluate-test-txt">To evaluate the usability of the app, an unmoderated test was conducted using the external tool, Maze. The test was performed in a remote environment without a live observer. Participants were assigned six tasks aligned with the app's user flow from start to finish, followed by four post-session questions.</p>
                </div>
            </div>
            <h4 class="artifact-subtitle-h4">Assessing</h4>
            <div class="grid-tb grid-dk">
                <div class="evaluate-painpoint grid-tb-3 grid-dk-6">
                    <h5 class="artifact-subtitle-h5">Pain Point 1.</h5>
                    <p>Lack of user control — no way to go back to the previous stage after logging in</p>
                    <div class="evaluate-painpoint-img is-flex">
                        <div class="artifact-img">
                            <img src="<?php echo get_url('images/project-readMe/readMe-painpoint1-1.jpg');?>" alt="Read Me Usability Test Heatmap for pain point 1" loading="lazy">
                        </div>
                        <div class="artifact-img">
                            <img src="<?php echo get_url('images/project-readMe/readMe-painpoint1-2.jpg');?>" alt="Read Me Usability Test Heatmap for pain point 2" loading="lazy">
                        </div>
                    </div>
                    <h5 class="artifact-subtitle-h5">Solution</h5>
                    <p>Adjust the wording for Sign-up buttons</p>
                    <p>Create the logout button on the profile page</p>
                </div>
                <div class="evaluate-painpoint grid-tb-3 grid-dk-6">
                    <h5 class="artifact-subtitle-h5">Pain Point 2.</h5>
                    <p>Small target area of the bookmark icon</p>
                    <div class="evaluate-painpoint-img">
                        <div class="artifact-img evaluate-painpoint-img-resize">
                            <img src="<?php echo get_url('images/project-readMe/readMe-painpoint2.jpg');?>" alt="Read Me Usability Test Heatmap for pain point 2" loading="lazy">
                        </div>
                    </div>
                    <h5 class="artifact-subtitle-h5">Solution</h5>
                    <p>Increase the size of the bookmark icon</p>
                </div>
            </div>
        </section>

        <section id="implement">
            <div class="artifact-sub-container" id="artifact-reveal">
                <div class="artifact-subtitle is-flex">
                    <span>04/</span>
                    <h3>Implement</h3>
                </div>
                <h4 class="artifact-subtitle-h4-v2">Revision</h4>
                <div class="grid-dk">
                    <p class="grid-dk-8 revision-txt">Based on the errors discovered during user testing, certain elements were modified to improve the user experience and user flow of the app, thereby facilitating the completion of the app's goals.</p>
                    <div class="btn-wrapper grid-dk-4 revision-btn">
                        <a class="artifact-btn" href="https://www.figma.com/proto/U4bh08gUSBbkh8ZymsRfcP/UI%2FUX-Design-%7C-Read-Me-%7C-Prototype?node-id=31-70&scaling=scale-down&page-id=3%3A3&starting-point-node-id=3%3A5" target="_blank">View Prototype</a> 
                    </div>
                </div>
            </div>
            <div class="revision-video">
                <video class="artifact-video" id="video" playsinline autoplay muted loop>
                <source src="<?php echo get_url('images/project-readMe/readMe-revision-1.mp4')?>" type="video/mp4">
                Your browser does not support the video tag.
            </div>
        </section>

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