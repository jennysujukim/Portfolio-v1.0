<?php

    $title_tag = "Food Tracker - Web Development & Design | Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "artifact";
    $partial_js = "artifact";
    $partial_artifact_js = "food-tracker";
    $partial_artifact_css = "food-tracker";
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
                    <h1>Food<br>Tracker</h1>
                    <div class="artifact-intro-sub">
                        <span>Fetch API</span>
                    </div>
                    <div class="intro-btn">
                        <a class="artifact-btn" href="https://foodtracker.seojeongkim.com/" target="_blank">View Live Site</a> 
                        <a class="artifact-btn" href="https://github.com/jennysujukim/food-tracker-2023" target="_blank">See Code</a> 
                    </div>
                </div>
                <div class="grid-dk-6 artifact-intro-detail-wrapper">
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Date</p>
                        <p>Mar, 2023</p>
                    </div>
                    <div class="artifact-intro-detail is-flex">
                        <p class="artifact-intro-detail-title">Tech</p>
                        <div>
                            <p>Vanilla JS</p>
                            <p>API Integration</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="intro">
                <h2 class="artifact-subtitle">About the Project</h2>
                <p>This simple food tracker displays the basic nutrition information such as calories, carbs, fat and protein. User can add up the list of food on their list and also clear them. <a href="https://www.edamam.com/">Edamam</a> API is integrated to fetch nutrition data.</p>
            </div>
        </section>

        <section id="overview">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>01/</span>
                    <h3>Overview</h3>
                </div>
                <p>
                The project primarily utilizes API and vanilla JS for data retrieval and handling. To successfully finish the project, a comprehensive understanding of the data using fetch process is essential. Additional functionality is added to interact with users.</p>
            </div>
        </section>

        <section id="develop">
            <div class="artifact-sub-container">
                <div class="artifact-subtitle is-flex">
                    <span>02/</span>
                    <h3>Development</h3>
                </div>
                <div>
                    <h4 class="artifact-subtitle-h4-v2">API & fetch()</h4>
                    <p>I use <code class="language-javascript">fetch()</code> to make a request from Edamam endpoint and parse the response data with <code class="language-javascript">response.json()</code> to add on JavaScript object. In line with the chain of promises, data and error are handled in <code class="language-javascript">.then</code> and <code class="language-javascript">.catch</code>. <code class="language-javascript">.finally</code> is added to finalize tasks regardelss of the request's success and failure. Preloader is added to provide feedback to users that request is made.</p>
                    <div class="code-container">
                        <pre>
                            <code class="language-javascript">
    fetch(uri)

    .then(
        response => response.json()
    )

    .then((data) => {
        console.log(data);
        // want to display the first one
        addToContainer(data.hints[0]);
    })

    .catch((error) => {

        console.error('Error', error);

        var resultContainer = document.querySelector('#result-container');

        var errorMsg = document.createElement('div');
        errorMsg.innerText = 'Results not found';
        errorMsg.classList.add('error-msg');

        resultContainer.appendChild(errorMsg);

    })

    .finally(

        () => document.querySelector('#spinner').classList.remove('page-loading')

    )
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="artifact-sub-container develop-phase-3">
                <h4 class="artifact-subtitle-h4-v2">Manage Data with JS</h4>
                <p>After successfully retrieved data, search functionality is added with vanilla JS. <code class="language-html">form</code> and eventListener are created to process data. <code class="language-javascript">e.preventDefault()</code> is added to prevent the default form submission and use <code class="language-javascript">e.target.value</code> to retrieve value of search input.</p>
                <div class="code-container">
                    <pre>
                        <code class="language-javascript">
    function addToContainer(result) {

    // create container for displaying search result
    var resultContainer = document.querySelector('#result-container');

    // create box for displaying search result (which will be inside of resultContainer)
    var box = document.createElement('div');
    box.classList.add('info-container');

    // Food Title
    var title = document.createElement('div');
    title.innerText = result.food.label;
    title.classList.add('food-name');

    // Food nutrients list
    var nutrients = document.createElement('ul');

    var kcal = document.createElement('li');
    kcal.innerText = 'Calories:' + result.food.nutrients.ENERC_KCAL.toFixed(0);
    kcal.classList.add('food-nutrients');
    nutrients.appendChild(kcal);

    var carb = document.createElement('li');
    carb.innerText = 'Carbs:' + result.food.nutrients.CHOCDF.toFixed(0);
    carb.classList.add('food-nutrients');
    nutrients.appendChild(carb);

    var fat = document.createElement('li');
    fat.innerText = 'Fat:' + result.food.nutrients.FAT.toFixed(0);
    fat.classList.add('food-nutrients');
    nutrients.appendChild(fat);

    var protein = document.createElement('li');
    protein.innerText = 'protein:' + result.food.nutrients.PROCNT.toFixed(0);
    protein.classList.add('food-nutrients');
    nutrients.appendChild(protein);


    box.appendChild(title);
    box.appendChild(nutrients);

    resultContainer.appendChild(box);
    }

    searchForm.addEventListener('submit', (e) => {
    e.preventDefault();
    searchValue = e.target.querySelector('.search-input').value;
    loadItem(searchValue);

    })
                        </code>
                    </pre>
                </div>
        </section>
        <div class="livesite-btn">
            <a class="artifact-btn" href="https://foodtracker.seojeongkim.com/" target="_blank">View Live Site</a>
            <a class="artifact-btn" href="https://github.com/jennysujukim/food-tracker-2023" target="_blank">See Code</a> 
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