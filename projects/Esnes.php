<?php

    $title_tag = "Esnes - Branding, Graphic Design | Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "artifact";
    $partial_js = "artifact";
    $partial_artifact_js = "esnes";
    $partial_artifact_css = "esnes";
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
                    <h1>ESNES</h1>
                    <div class="artifact-intro-sub">
                        <span>Group Project</span>
                        <span>Fictional Brand</span>
                    </div>
                </div>
                <div class="grid-dk-6 artifact-intro-detail-wrapper">
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Date</p>
                        <p>Nov, 2022</p>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Roles</p>
                        <div>
                            <p>Branding</p>
                            <p>Visual Design</p>
                            <p>Graphic Design</p>
                        </div>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Software</p>
                        <div>
                            <p>Figma</p>
                            <p>Illustrator</p>
                            <p>Photoshop</p>
                            <p>Indesign</p>
                            <p>Dimension</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro">
                <h2 class="artifact-subtitle">About the Project</h2>
                <p>The project establishes the brand identity and launches the event for the fictitious perfume brand ‘Esnes’. Working together as a team, we identified the target audience and brand’s value proposition. Based on this analysis, the team proposed marketing strategies and core design concept to successfully launch event. The project delivered a logo, product packaging, poster, social media Ads and live website aligning with the brand’s identity. I understand the process of branding and collaborate as a team in executing uniform design and narrative.</p>
            </div>
        </section>
        
        <video class="artifact-video" id="video" playsinline autoplay muted loop>
            <source src="<?php echo get_url('images/project-esnes/esnes-logo-anim.mp4')?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <section id="overview">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>01/</span>
                    <h3>Overview</h3>
                </div>
                <p>Esnes was expected to launch a new product collection at the end of the year. The project was mainly divided into two sections: brand design and event marketing. In the brand design section, the brand’s value and identity were developed through its logo, stationery and core design concept. In the event marketing section, specific marketing strategies were proposed, and the materials such as product packaging, poster, social media Ads and live event website were created in accordance with the brand’s design concept.</p>
            </div>
            <div class="sense-wrapper">
                <div class="sense-container is-flex">
                    <svg class="sense" width="893" height="217" viewBox="0 0 893 217">
                        <path class="sense-1 sense-path" d="M83.132 216.1C67.732 216.1 53.932 213.6 41.732 208.6C29.532 203.6 19.732 196.2 12.332 186.4C5.13201 176.6 1.33201 164.8 0.932007 151H55.532C56.332 158.8 59.032 164.8 63.632 169C68.232 173 74.232 175 81.632 175C89.232 175 95.232 173.3 99.632 169.9C104.032 166.3 106.232 161.4 106.232 155.2C106.232 150 104.432 145.7 100.832 142.3C97.432 138.9 93.132 136.1 87.932 133.9C82.932 131.7 75.732 129.2 66.332 126.4C52.732 122.2 41.632 118 33.032 113.8C24.432 109.6 17.032 103.4 10.832 95.1999C4.63201 86.9999 1.53201 76.2999 1.53201 63.0999C1.53201 43.4999 8.63201 28.1999 22.832 17.1999C37.032 5.9999 55.532 0.399902 78.332 0.399902C101.532 0.399902 120.232 5.9999 134.432 17.1999C148.632 28.1999 156.232 43.5999 157.232 63.3999H101.732C101.332 56.5999 98.832 51.2999 94.232 47.4999C89.632 43.4999 83.732 41.4999 76.532 41.4999C70.332 41.4999 65.332 43.1999 61.532 46.5999C57.732 49.7999 55.832 54.4999 55.832 60.6999C55.832 67.4999 59.032 72.7999 65.432 76.5999C71.832 80.3999 81.832 84.4999 95.432 88.8999C109.032 93.4999 120.032 97.8999 128.432 102.1C137.032 106.3 144.432 112.4 150.632 120.4C156.832 128.4 159.932 138.7 159.932 151.3C159.932 163.3 156.832 174.2 150.632 184C144.632 193.8 135.832 201.6 124.232 207.4C112.632 213.2 98.932 216.1 83.132 216.1Z"/>
                        <path class="sense-2 sense-path" d="M242.802 44.4999V87.0999H311.502V126.7H242.802V172.9H320.502V214H191.502V3.3999H320.502V44.4999H242.802Z"/>
                        <path class="sense-3 sense-path" d="M542.207 214H490.907L405.107 84.0999V214H353.807V3.3999H405.107L490.907 133.9V3.3999H542.207V214Z"/>
                        <path class="sense-4 sense-path" d="M655.593 216.1C640.193 216.1 626.393 213.6 614.193 208.6C601.993 203.6 592.193 196.2 584.793 186.4C577.593 176.6 573.793 164.8 573.393 151H627.993C628.793 158.8 631.493 164.8 636.093 169C640.693 173 646.693 175 654.093 175C661.693 175 667.693 173.3 672.093 169.9C676.493 166.3 678.693 161.4 678.693 155.2C678.693 150 676.893 145.7 673.293 142.3C669.893 138.9 665.593 136.1 660.393 133.9C655.393 131.7 648.193 129.2 638.793 126.4C625.193 122.2 614.093 118 605.493 113.8C596.893 109.6 589.493 103.4 583.293 95.1999C577.093 86.9999 573.993 76.2999 573.993 63.0999C573.993 43.4999 581.093 28.1999 595.293 17.1999C609.493 5.9999 627.993 0.399902 650.793 0.399902C673.993 0.399902 692.693 5.9999 706.893 17.1999C721.093 28.1999 728.693 43.5999 729.693 63.3999H674.193C673.793 56.5999 671.293 51.2999 666.693 47.4999C662.093 43.4999 656.193 41.4999 648.993 41.4999C642.793 41.4999 637.793 43.1999 633.993 46.5999C630.193 49.7999 628.293 54.4999 628.293 60.6999C628.293 67.4999 631.493 72.7999 637.893 76.5999C644.293 80.3999 654.293 84.4999 667.893 88.8999C681.493 93.4999 692.493 97.8999 700.893 102.1C709.493 106.3 716.893 112.4 723.093 120.4C729.293 128.4 732.393 138.7 732.393 151.3C732.393 163.3 729.293 174.2 723.093 184C717.093 193.8 708.293 201.6 696.693 207.4C685.093 213.2 671.393 216.1 655.593 216.1Z"/>
                        <path class="sense-5 sense-path" d="M815.263 44.4999V87.0999H883.963V126.7H815.263V172.9H892.963V214H763.963V3.3999H892.963V44.4999H815.263Z"/>
                    </svg>
                </div>  
            </div>
            
        </section>

        <section id="about-brand">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>02/</span>
                    <h3>About Brand</h3>
                </div>
                <h4 class="artifact-subtitle-h4-v2">Brand Value & Identity</h4>
                <div class="value grid-dk">
                    <div class="value-img">
                        <img src="<?php echo get_url('images/project-esnes/brand-value.jpg');?>" alt="Image of Esnes brand value">
                    </div>
                    <div class="value-content">
                        <div class="value-slogan is-flex">
                            <span class="value-slogan-1">Immersive</span>
                            <span class="value-slogan-2">Sensations</span>
                        </div>
                        <p class="grid-dk-8">Esnes considers perfume to be a complex collection of senses. Perfume is not simply a pleasant smell. Instead, Esnes perceives it to be more powerful. It can trigger memory, which is the collection of sensations that you see, hear, touch.</p>
                    </div>
                    
                </div>
            </div>
            <div class="identity is-flex artifact-sub-container">
                <div class="identity-container">
                    <img class="simplicity" src="<?php echo get_url('images/project-esnes/identity-simplicity.jpg');?>" alt="Image of Esnes Simplicity">
                    <span class="simplicity-txt">Simplicity</span>
                </div>
                <div class="identity-container">
                    <img class="timeless" src="<?php echo get_url('images/project-esnes/identity-timeless.jpg');?>" alt="Image of Esnes Timeless">
                    <span class="timeless-txt">Timeless</span>
                </div>
                <div class="identity-container">
                    <img class="uniqueness" src="<?php echo get_url('images/project-esnes/identity-uniqueness.jpg');?>" alt="Image of Esnes Uniqueness">
                    <span class="uniqueness-txt">Uniqueness</span>
                </div>
            </div>
            <div class="artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Target Market</h4>
                <div class="target-img">
                    <img src="<?php echo get_url('images/project-esnes/target-market.jpg');?>" alt="Image of Esnes target market">
                </div>
                <div class="target-info">
                    <div class="target-info-section"> 
                        <div class="target-info-title">Deomographic</div>
                        <div class="target-info-detail">
                            <p>Age: 25-40</p>
                            <p>Gender: Female</p>
                            <p>Occupation: Designer</p>
                            <p>Income level: $80-90K annually</p>
                            <p>Education: College graduate</p>
                        </div>
                    </div>
                    <div class="target-info-section"> 
                        <div class="target-info-title">Psychographic</div>
                        <div class="target-info-detail">
                            <p>Personality: calm, down-to-earth</p>
                            <p>Values: Creativity, aesthetics</p>
                            <p>Attitudes: trusting, organized</p>
                            <p>Interests: perfume, exhibits, fashion</p>
                            <p>Lifestyle: stick to routine</p>
                        </div>
                    </div>
                    <div class="target-info-section"> 
                        <div class="target-info-title">Geographic</div>
                        <div class="target-info-detail">
                            <p>Live in: Greater Vancouver</p>
                            <p>Shop at: Curated concept stores, department store, online</p>
                        </div>
                    </div>
                    <div class="target-info-section"> 
                        <div class="target-info-title">Behavioural</div>
                        <div class="target-info-detail">
                            <p>Trend-savvy: aesthetic is important</p>
                            <p>Loyal to brand: Identify herself with the brand she likes</p>
                            <p>Quality over quantity: prefer to shop quality products</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Brand Logo</h4>
                <svg class="logo-construction" width="831" height="220" viewBox="0 0 831 349">
                    <path class="logo-construction-letter" d="M110.307 261.879C103.564 261.879 96.7357 259.301 89.839 254.143C82.9252 248.986 77.2435 242.453 72.7427 234.562C68.2419 226.654 66 219.004 66 211.577C66 195.452 69.2858 178.277 75.8744 160.054C82.446 141.848 91.5161 124.743 103.085 108.789C114.636 92.8354 128.036 79.7699 143.284 69.6097C158.532 59.4495 174.653 54.3608 191.681 54.3608C202.907 54.3608 211.669 56.6989 217.916 61.375C224.179 66.0511 227.311 72.5838 227.311 80.9561C227.311 90.9615 224.179 99.6604 217.916 107.07C211.652 114.497 203.232 120.858 192.639 126.17C182.046 131.482 170.255 135.917 157.249 139.476C144.243 143.035 131.014 146.095 117.528 148.673C115.595 149 114.072 149.395 112.959 149.877C111.83 150.358 110.957 151.562 110.307 153.504C108.048 160.604 105.806 168.34 103.564 176.73C101.322 185.119 100.193 193.01 100.193 200.437C100.193 211.732 102.366 220.431 106.696 226.551C111.025 232.688 117.357 235.748 125.709 235.748C137.26 235.748 147.049 232.843 155.075 227.049C163.101 221.239 248.651 133.442 253.785 127.631C256.986 124.09 259.878 122.319 262.445 122.319C265.645 122.319 262.787 117.23 262.787 120.445V122.13C262.787 122.938 262.462 123.66 261.829 124.313C255.411 134.955 173.01 229.938 164.984 237.192C156.958 244.447 149.051 252.63 139.913 256.327C130.757 260.023 120.9 261.897 110.307 261.897V261.879ZM120.9 137.568C124.425 137.568 130.449 136.519 138.954 134.422C147.46 132.324 156.359 128.938 165.686 124.261C174.995 119.585 182.936 113.792 189.525 106.846C196.096 99.9183 199.399 91.6148 199.399 81.936C199.399 77.7413 198.27 74.1139 196.028 71.0538C193.786 67.9937 190.568 66.4637 186.393 66.4637C179.65 66.4637 172.343 69.2831 164.488 74.9219C156.615 80.5779 149.154 87.3341 142.103 95.2422C135.035 103.15 129.183 110.801 124.528 118.227C119.873 125.654 117.546 131.138 117.546 134.68C117.546 136.622 118.658 137.585 120.917 137.585L120.9 137.568Z"/>
                    <path class="logo-construction-letter" d="M212.525 261.037C205.457 261.037 199.365 259.026 194.231 254.986C189.097 250.963 186.53 245.874 186.53 239.754C186.53 232.345 188.207 226.775 191.578 223.061C194.95 219.365 197.756 217.491 199.998 217.491C202.24 217.491 204.567 218.385 206.98 220.156C209.393 221.927 212.029 224.11 214.921 226.689C218.446 229.267 222.382 231.76 226.712 234.184C231.042 236.608 236.74 237.812 243.808 237.812C252.468 237.812 259.382 234.666 264.516 228.373C269.65 222.081 272.371 215.394 272.696 208.294C272.696 201.211 271.498 193.543 269.085 185.309C266.672 177.091 263.215 168.942 258.731 160.88C254.556 153.143 251.099 145.803 248.378 138.874C245.639 131.946 244.287 126.05 244.287 121.219C244.287 111.867 246.769 103.082 251.749 94.8642C256.729 86.6467 262.821 79.4606 270.043 73.3404C277.265 67.2203 284.401 62.4582 291.469 59.0715C298.52 55.6848 304.15 54 308.326 54C312.502 54 316.677 55.2034 320.853 57.6274C325.029 60.0514 328.468 62.7849 331.206 65.8449C333.928 68.9222 338.069 73.9421 338.069 76.1942C338.069 78.1369 338.257 81.1282 336.323 83.8616C334.39 86.6123 335.399 89.9474 332.832 92.1823C330.265 94.4344 324.361 105.97 322.427 105.97C320.819 105.97 319.21 105.162 317.618 103.546C316.01 101.93 311.885 90.5148 310.927 87.9532C309.712 84.7212 304.561 80.2514 301.84 78.6354C299.102 77.0194 295.491 76.2114 291.007 76.2114C285.873 76.2114 281.372 78.3947 277.522 82.7442C273.671 87.0936 271.737 92.8356 271.737 99.9185C271.737 102.497 272.627 106.537 274.39 112.004C276.153 117.488 278.24 123.127 280.653 128.938C283.066 134.748 285.377 139.906 287.636 144.41C291.161 150.874 294.447 159.006 297.51 168.839C300.556 178.673 302.079 187.303 302.079 194.712C302.079 204.391 299.273 213.262 293.66 221.308C288.046 229.371 280.739 236.385 271.755 242.35C262.77 248.316 253.05 252.923 242.627 256.138C232.188 259.353 222.16 260.969 212.525 260.969V261.037Z"/>
                    <path class="logo-construction-letter" d="M532.221 261.879C525.478 261.879 518.65 259.301 511.753 254.143C504.839 248.986 499.157 242.453 494.657 234.562C490.156 226.654 487.914 219.004 487.914 211.577C487.914 195.452 491.2 178.277 497.788 160.054C504.36 141.848 513.43 124.743 524.999 108.789C536.55 92.8354 549.95 79.7699 565.198 69.6097C580.446 59.4495 596.567 54.3608 613.595 54.3608C624.821 54.3608 633.583 56.6989 639.83 61.375C646.093 66.0511 649.225 72.5838 649.225 80.9561C649.225 90.9615 646.093 99.6604 639.83 107.07C633.566 114.497 625.146 120.858 614.553 126.17C603.96 131.482 592.169 135.917 579.163 139.476C566.156 143.035 552.928 146.095 539.442 148.673C537.509 149 535.986 149.395 534.873 149.877C533.744 150.358 532.871 151.562 532.221 153.504C529.962 160.604 527.72 168.34 525.478 176.73C523.236 185.119 522.107 193.01 522.107 200.437C522.107 211.732 524.28 220.431 528.61 226.551C532.939 232.688 539.271 235.748 547.623 235.748C559.174 235.748 568.963 232.843 576.989 227.049C585.015 221.239 670.565 133.442 675.699 127.631C678.9 124.09 681.792 122.319 684.359 122.319C687.559 122.319 684.701 117.23 684.701 120.445V122.13C684.701 122.938 684.376 123.66 683.743 124.313C677.325 134.955 594.924 229.938 586.898 237.192C578.872 244.447 570.965 252.63 561.827 256.327C552.671 260.023 542.814 261.897 532.221 261.897V261.879ZM542.814 137.568C546.339 137.568 552.363 136.519 560.868 134.422C569.374 132.324 578.273 128.938 587.6 124.261C596.909 119.585 604.85 113.792 611.439 106.846C618.01 99.9183 621.313 91.6148 621.313 81.936C621.313 77.7413 620.183 74.1139 617.942 71.0538C615.7 67.9937 612.482 66.4637 608.307 66.4637C601.564 66.4637 594.257 69.2831 586.402 74.9219C578.529 80.5779 571.068 87.3341 564.017 95.2422C556.949 103.15 551.097 110.801 546.442 118.227C541.787 125.654 539.46 131.138 539.46 134.68C539.46 136.622 540.572 137.585 542.831 137.585L542.814 137.568Z"/>
                    <path class="logo-construction-letter" d="M634.439 261.037C627.371 261.037 621.279 259.026 616.145 254.986C611.011 250.963 608.444 245.874 608.444 239.754C608.444 232.345 610.121 226.775 613.492 223.061C616.863 219.365 619.67 217.491 621.912 217.491C624.154 217.491 626.481 218.385 628.894 220.156C631.307 221.927 633.943 224.11 636.835 226.689C640.36 229.267 644.296 231.76 648.626 234.184C652.956 236.608 658.654 237.812 665.722 237.812C674.382 237.812 681.295 234.666 686.429 228.373C691.563 222.081 694.284 215.394 694.61 208.294C694.61 201.211 693.412 193.543 690.999 185.309C688.586 177.091 685.129 168.942 680.645 160.88C676.469 153.143 673.012 145.803 670.291 138.874C667.553 131.946 666.201 126.05 666.201 121.219C666.201 111.867 668.683 103.082 673.663 94.8642C678.643 86.6467 684.735 79.4606 691.957 73.3404C699.179 67.2203 706.315 62.4582 713.383 59.0715C720.434 55.6848 726.064 54 730.24 54C734.415 54 738.591 55.2034 742.767 57.6274C746.942 60.0514 750.382 62.7849 753.12 65.8449C755.841 68.9222 759.983 73.9421 759.983 76.1942C759.983 78.1369 759.161 80.6468 758.237 83.8616C757.125 87.6782 754.216 92.9216 752.367 96.2051C750.69 99.1965 746.275 105.987 744.341 105.987C742.733 105.987 741.124 105.179 739.532 103.563C737.924 101.947 733.799 90.5319 732.841 87.9704C731.626 84.7384 726.475 80.2686 723.754 78.6526C721.016 77.0366 717.405 76.2286 712.921 76.2286C707.787 76.2286 703.286 78.4119 699.436 82.7614C695.585 87.1108 693.651 92.8528 693.651 99.9357C693.651 102.514 694.541 106.554 696.304 112.021C698.067 117.505 700.154 123.144 702.567 128.955C704.98 134.766 707.291 139.923 709.55 144.427C713.075 150.891 716.361 159.023 719.424 168.856C722.47 178.69 723.993 187.32 723.993 194.73C723.993 204.408 721.187 213.279 715.574 221.325C709.96 229.388 702.653 236.402 693.668 242.367C684.684 248.333 674.963 252.94 664.541 256.155C654.102 259.37 644.074 260.986 634.439 260.986V261.037Z"/>
                    <path class="logo-construction-letter" d="M317.396 262C315.462 262 313.614 261.278 311.851 259.817C310.089 258.373 308.548 256.585 307.282 254.504C305.998 252.407 305.109 250.069 304.629 247.49C304.15 244.912 304.39 242.659 305.348 240.717L361.206 103.34C366.991 89.1565 367.299 82.0564 362.165 82.0564C358.947 82.0564 355.576 82.469 352.051 83.2598C348.508 84.0678 344.658 86.0793 340.499 89.3113C336.323 92.5433 331.669 97.5288 326.535 104.302C325.251 105.592 323.882 106.159 322.444 106.004C321.007 105.849 319.946 104.629 319.313 102.377C319.313 100.434 319.877 97.9414 320.99 94.8813C322.102 91.8212 323.471 88.7611 325.08 85.701C326.689 82.6409 328.126 80.131 329.41 78.2055C334.218 70.796 340.722 64.9853 348.902 60.7905C357.082 56.613 366.631 54.3437 377.55 54.0171C381.075 54.0171 384.292 54.911 387.184 56.6818C390.077 58.4525 392.233 60.9625 393.688 64.1773C395.125 67.4093 395.057 70.9507 393.448 74.8188L361.668 157.046C360.71 159.298 360.95 160.604 362.387 160.914C363.825 161.241 365.04 160.604 365.998 158.988C379.158 136.416 392.558 117.316 406.197 101.672C419.837 86.0277 432.911 74.1827 445.438 66.1199C457.965 58.0571 469.038 54.0343 478.656 54.0343C485.398 54.0343 491.251 56.3723 496.231 61.0484C501.211 65.7245 504.411 72.0166 505.866 79.9075C507.303 87.8156 505.78 96.9271 501.297 107.242L456.99 212.695C452.181 224.299 452.968 230.11 459.403 230.11C463.254 230.11 467.994 228.666 473.607 225.76C479.22 222.855 484.919 219.399 490.703 215.359C496.488 211.337 501.536 207.623 505.866 204.236C510.196 200.85 513.002 198.512 514.286 197.222C514.594 196.913 514.85 196.741 515.004 196.741H515.723C516.682 196.741 517.571 197.154 518.376 197.944C519.18 198.752 519.574 199.801 519.574 201.09C519.574 203.669 518.923 205.921 517.64 207.864C509.289 217.869 500.372 226.895 490.909 234.958C481.445 243.021 471.656 249.399 461.542 254.057C451.428 258.734 441.229 261.072 430.961 261.072C428.068 261.072 425.176 260.023 422.301 257.926C419.409 255.828 417.253 253.163 415.798 249.949C414.361 246.734 414.429 243.347 416.038 239.788C425.347 218.179 434.725 196.655 444.206 175.217C453.67 153.779 462.586 132.256 470.92 110.646C476.054 97.4256 477.817 88.1594 476.226 82.8301C474.617 77.5179 471.571 74.6813 467.07 74.3718C463.527 74.0452 459.369 75.2658 454.543 77.9992C449.734 80.7499 444.275 84.9446 438.165 90.5834C432.056 96.2394 425.484 103.408 418.416 112.107C414.566 116.629 409.432 123.643 403.014 133.15C396.597 142.656 389.358 153.625 381.349 166.037C373.323 178.449 365.057 191.669 356.551 205.698C348.046 219.726 339.934 233.514 332.233 247.061C329.341 252.218 326.774 256 324.532 258.424C322.29 260.848 319.877 262.051 317.31 262.051L317.396 262Z"/>
                    <line class="logo-construction-line" y1="52.5" x2="831" y2="52.5"/>
                    <line class="logo-construction-line" y1="260.5" x2="831" y2="260.5"/>
                    <line class="logo-construction-line" x1="741.5" y1="3" x2="741.5" y2="345"/>
                    <path class="logo-construction-line" d="M66 2V344L379 2"/>
                    <path class="logo-construction-line" d="M482 3V345L796 3"/>
                </svg>
                <div class="logo-mockup-container">
                    <div class="logo-mockup">
                        <img src="<?php echo get_url('images/project-esnes/logo-paper-mockup.jpg');?>" alt="Mockup of Esnes logo 1">
                    </div>
                    <div class="logo-mockup">
                        <img src="<?php echo get_url('images/project-esnes/logo-stripes-mockup.jpg');?>" alt="Mockup of Esnes logo 2">
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-campaign" id="brand-campaign">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>03/</span>
                    <h3>Brand Campaign</h3>
                </div>
                <p>The campaign’s purpose is to showcase the new collection and attract customers by providing interactive activities at the venue. A small exhibition in collaboration with artists will be held at Nordstrom Vancouver, as well as an interactive art display that is open for visitors.</p>
            </div>
            <div class="campaign-concept artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Campaign Concept</h4>
                <div class="concept-container is-flex">
                    <div class="circle-container">
                        <div class="circle-left"></div>
                        <div class="circle-right"></div>
                    </div>
                    <p class="concept-txt">
                        The main message to convey to customers through the new product is <span>connection</span>. Considering the stress and loneliness during the pandemic, the brand presents new scent to <span>console</span> and connect people through its new product. 
                        We name the new product collection as <span>No.8</span>, where 8 represents the <span>infinity</span> symbolizing two individuals connecting each other. 
                    </p>
                </div>
                <div class="no-8-container is-flex">
                    <svg class="no-8" width="663" height="110" viewBox="0 0 663 228">
                        <path class="no-8-1 no-8-path" d="M155.354 5.99999L182.354 21.6L199.154 136.8L92.3535 5.99999H0.853516L29.6535 23.4L24.8535 217.2H8.35352V222H83.9535V217.2H47.6535L35.6535 40.8L189.554 222H205.154V21.6L232.154 5.99999H155.354Z"/>
                        <path class="no-8-2 no-8-path" d="M317.876 225C374.876 225 402.776 189.9 402.776 146.1C402.776 99 367.076 69 317.576 69C268.676 69 235.076 103.2 235.076 146.1C235.076 194.4 274.676 225 317.876 225ZM351.476 214.2C326.876 214.2 274.976 123.9 274.976 94.5C274.976 85.2 279.476 79.8 286.976 79.8C313.376 79.8 363.776 173.7 363.776 198.9C363.776 209.1 359.576 214.2 351.476 214.2Z"/>
                        <path class="no-8-3 no-8-path" d="M451.048 226.5C468.448 226.5 479.848 215.4 479.848 197.4C479.848 179.4 468.448 168.3 451.048 168.3C433.648 168.3 422.248 179.4 422.248 197.4C422.248 215.4 433.648 226.5 451.048 226.5Z"/>
                        <path class="no-8-4 no-8-path" d="M623.534 97.2L602.234 81.9C631.934 80.4 652.334 67.5 652.334 44.4C652.334 20.4 623.534 0 583.934 0C539.234 0 509.234 26.7 508.934 60.9C508.634 84.9 518.534 101.1 549.134 124.2C517.334 126.9 496.634 146.1 496.634 171C496.634 207 531.734 228 579.134 228C624.734 228 662.234 195.9 662.234 156.6C662.234 134.4 650.534 116.4 623.534 97.2ZM578.834 6.29999C595.034 6.29999 607.034 19.8 607.034 43.2C607.034 57.3 604.634 69 599.234 79.8L577.034 63.9C562.634 53.7 554.534 42.6 554.534 30.9C554.534 15.9 564.734 6.29999 578.834 6.29999ZM583.934 221.7C560.834 221.7 545.534 203.1 545.534 162.9C545.534 149.1 547.634 138.3 552.434 126.6C555.134 128.7 557.834 130.5 560.834 132.6L582.134 147.3C600.134 159.9 611.834 173.1 611.834 190.2C611.834 208.2 600.734 221.7 583.934 221.7Z"/>
                    </svg>
                </div>
            </div>
            <div class="artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Campaign Slogan</h4>
                <div class="slogan">
                    <img class="slogan-connect" src="<?php echo get_url('images/project-esnes/slogan-connect.png');?>" alt="Slogan of Esnes">
                    <img class="slogan-two" src="<?php echo get_url('images/project-esnes/slogan-two.png');?>" alt="Slogan of Esnes">
                </div>
                <p class="slogan-txt">
                    With No.8, the brand aims to comfort everyone and connect two minds regardless of physical distance. The slogan is selected as “<span>Connect Two</span>”, can also imply the meaning "<span>connect to</span>".
                </p>
            </div>
            <div class="campaign-moodboard artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Campaign Moodboard</h4>
                <div class="moodboard-grid">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-1.jpg');?>" alt="Image of moodboard 1">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-2.jpg');?>" alt="Image of moodboard 2">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-3.jpg');?>" alt="Image of moodboard 3">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-4.jpg');?>" alt="Image of moodboard 4">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-5.jpg');?>" alt="Image of moodboard 5">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-6.jpg');?>" alt="Image of moodboard 6">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-7.jpg');?>" alt="Image of moodboard 7">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-8.jpg');?>" alt="Image of moodboard 8">
                    <img class="moodboard-img" src="<?php echo get_url('images/project-esnes/moodboard-9.jpg');?>" alt="Image of moodboard 9">
                </div>
            </div>
            <div class="styleguide-container artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Typography & Colours</h4>
                <p>Warm and neutral red tones are selected to reflect the end-of-season mood. A serif typeface is used for the event titles to give a luxurious and soft feel. As a brand designer, I was responsible for ensuring that all deliverables had a uniform voice and adhered to the style guide.</p>
            </div>
            <div class="typo-colour-container">
                <div class="typography artifact-sub-container">
                    <img class="typo-colour" src="<?php echo get_url('images/project-esnes/typo-freightBig.png');?>" alt="Typeface of Freight Big">
                    <img class="typo-colour" src="<?php echo get_url('images/project-esnes/typo-freightDisp.png');?>" alt="Typeface of Freight Display">
                    <img class="typo-colour" src="<?php echo get_url('images/project-esnes/typo-neueMontreal.png');?>" alt="Typeface of Neue Montreal">
                </div>
                <div class="colour">
                    <div class="typo-colour colour-swatch colour-1">
                        <div class="colour-info">
                            <p>HEX #FBF8F3</p>
                            <p>RGB 251 248 243</p>
                            <p>CMYK 0 1 3 2</p>
                        </div>
                    </div>
                    <div class="typo-colour colour-swatch colour-2">
                        <div class="colour-info">
                            <p>HEX #DCCDBC</p>
                            <p>RGB 220 205 188</p>
                            <p>CMYK 0 7 15 14</p>
                        </div>
                    </div>
                    <div class="typo-colour colour-swatch colour-3">
                        <div class="colour-info">
                            <p>HEX #A25052</p>
                            <p>RGB 162 80 82</p>
                            <p>CMYK 0 51 49 36</p>
                        </div>
                    </div>
                    <div class="typo-colour colour-swatch colour-4">
                        <div class="colour-info">
                            <p>HEX #6C2D23</p>
                            <p>RGB 108 45 35</p>
                            <p>CMYK 0 58 68 58</p>
                        </div>
                    </div>
                    <div class="typo-colour colour-swatch colour-5">
                        <div class="colour-info">
                            <p>HEX #4B342F</p>
                            <p>RGB 75 52 47</p>
                            <p>CMYK 0 31 37 71</p>
                        </div>
                    </div>
                    <div class="typo-colour colour-swatch colour-6">
                        <div class="colour-info">
                            <p>HEX #232323</p>
                            <p>RGB 35 35 35</p>
                            <p>CMYK 0 0 0 86</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="applications">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex application-title">
                    <span>04/</span>
                    <h3>Applications</h3>
                </div>
                <h4 class="artifact-subtitle-h4-v2">Product</h4>
                <p>Product is designed to symbolize the shape of number 8, which is the collection name. In line with the brand’s core design concept, the packaging is created to be simple and refined yet unique. The product is created in 3D using Adobe Illustrator and exported as an obj. file so that realistic textures and lighting can be added on Adobe Dimension.</p>
                <div class="product-container is-flex">
                    <div class="product-bottle">
                        <img src="<?php echo get_url('images/project-esnes/product-bottle.png');?>" alt="Image of Esnes perfume bottle">
                    </div>
                    <div class="product-bg">
                        <img src="<?php echo get_url('images/project-esnes/product-bg.png');?>" alt="Image of Esnes perfume background">
                    </div>
                </div>
            </div>
            <div class="application-poster artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Posters</h4>
                <p>Two posters are designed with different purposes: one to promote the new product itself and the other to provide event details. Poster is developed using Adobe InDesign, and additional graphic assets for each deliverable are created using Adobe suites to ensure consistent design narrative.</p>
                <div class="poster-img">
                    <img class="poster-event" src="<?php echo get_url('images/project-esnes/poster-event.png');?>" alt="Poster of Esnes event">
                    <img class="poster-product" src="<?php echo get_url('images/project-esnes/poster-product.png');?>" alt="Poster of Esnes product">
                </div>
                <div>
                    <img class="poster-mockup" src="<?php echo get_url('images/project-esnes/poster-mockup.jpg');?>" alt="Mockup of Esnes posters">
                </div>
            </div>
            <div class="application-website artifact-sub-container">
                <h4 class="artifact-subtitle-h4-v2">Website</h4>
                <div class="website-txt">
                    <p>Live website for the event is designed with the team. All graphics are created by team and GSAP library was integrated to showcase the design.</p>
                    <div class="livesite-btn">
                        <a class="artifact-btn" href="https://esnes.dajeongpark.com/" target="_blank">View Live Site</a> 
                    </div>
                </div>
                <div class="website-mockup-container">
                    <div class="website-mockup">
                        <img src="<?php echo get_url('images/project-esnes/website-1.jpg');?>" alt="">
                        <img src="<?php echo get_url('images/project-esnes/website-2.jpg');?>" alt="">
                        <img src="<?php echo get_url('images/project-esnes/website-3.jpg');?>" alt="">
                    </div>
                    <img class="website-asset" src="<?php echo get_url('images/project-esnes/website-asset.png');?>" alt="">
                </div>
            </div>
        </section> 

        <video class="artifact-video" id="video" playsinline autoplay muted loop>
            <source src="<?php echo get_url('images/project-esnes/esnes-website-anim.mp4')?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="artifact-sub-container">
            <div class="artifact-credit">
                <h5>Credit to ❤️</h5>
                <p>Adelia Valitova</p>
                <p>Dajeong Park</p>
                <p>Emily Chu</p>
                <p>Haerin Bok</p>
            </div>
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