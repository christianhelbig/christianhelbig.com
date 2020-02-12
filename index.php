<!-- Import header -->
<?php include "resources/templates/header.php"; ?>

<div class="jumbotron hero d-flex">
    <nav class="nav hero-navbar">
        <!-- Import navbar -->
        <?php include "resources/templates/navbar.php"; ?>
    </nav>
    <div class="container text-center justify-content-center align-self-center">
        <h1 class="display-3 text-bright">Hello, I'm <span class="text-emphasize">Christian Helbig</span>!</h1>
        <p class="font-italic text-bright">computer science undergraduate // tech enthusiast // aspiring developer</p>
    </div>
    <div class="container position-bottom">
        <i class="fas fa-chevron-down"></i>
    </div>
</div>

<!-- ABOUT SECTION -->

<section id="about" class="section">
    <div class="container">
        <div class="row">
            <!-- LEFT SIDE - PROFILE AREA-->
            <!-- Import card -->
            <?php include "resources/templates/vcard.php"; ?>
            <!-- RIGHT SIDE - ABOUT SECTION-->
            <div class="col-lg-8 d-flex left about">
                <h2 class="display-4">About me</h2>
                <div class="text">
                    <p>For me, programming is not just a job - it’s a passion. Whenever I dive into a new project, I start to forget the world around me and hours pass without me even noticing.</p>
                    <p>Things started, when I was a kid and my mother gave me her old computer. I was instantly fascinated and wanted to understand, how such 'magic' is even possible. I started to teach myself programming, I did internships on my summer breaks and after High School, I finally started freelancing as a Front-End Web-Developer.</p>
                    <p>But I wanted more. So after I finished my year abroad in Australia, I moved to Berlin, started to study computer science at the University of Technology Berlin and got a new job at Apple.</p>
                    <p>I'm always seeking new possibilities to grow. That's why I would love to gain more experience in Software Development soon and use the techniques and programming languages I've learnt in university.</p>
                </div>
                <!-- TESTIMONIALS -->
                <div class="testimonials-wrapper">
                    <ul class="testimonials">
                        <li class="element active">
                            <p class="quote">"He will be an asset to any future employer."</p>
                            <p class="author">Kerrie Brien - Secretary Manager @ Bondi Icebergs Club</p>
                        </li>
                        <li class="element">
                            <p class="quote">"Due to his quick wit, Christian was able to understand our processes fast and efficiently."</p>
                            <p class="author">Christian Kranich - Manager @ Apple Kurfürstendamm</p>
                        </li>
                        <li class="element">
                            <p class="quote">"Christian has a strong work ethic and was always looking for new tasks to learn."</p>
                            <p class="author">Kerrie Brien - Secretary Manager @ Bondi Icebergs Club</p>
                        </li>
                        <li class="element">
                            <p class="quote"> "Mr. Helbig stands out due to his thorough work."</p>
                            <p class="author">Julian Banse - Founder and CEO @ Becker Banse Medien GmbH</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS SECTION -->

<section id="skills" class="section section-emphasize"">
<div class="container">
    <h2 class="display-4">Skills</h2>
    <div class="row">
        <div class="col-md-6">
            <h6>Advanced</h6>
            <div class="row">
                <div class="col-3 skill-element">
                    <!-- C -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M117.5 33.5l.3-.2c-.6-1.1-1.5-2.1-2.4-2.6l-48.3-27.8c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.3.9 3.4l-.2.1c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4v-55.8c.1-.8 0-1.7-.4-2.6zm-53.5 55c9.1 0 17.1-5 21.3-12.4l12.9 7.6c-6.8 11.8-19.6 19.8-34.2 19.8-21.8 0-39.5-17.7-39.5-39.5s17.7-39.5 39.5-39.5c14.7 0 27.5 8.1 34.3 20l-13 7.5c-4.2-7.5-12.2-12.5-21.3-12.5-13.5 0-24.5 11-24.5 24.5s11 24.5 24.5 24.5z"></path>
                    </svg>
                    <p class="skill-tag">C</p>
                </div>
                <div class="col-3 skill-element">
                    <!-- Java -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M47.617 98.12c-19.192 5.362 11.677 16.439 36.115 5.969-4.003-1.556-6.874-3.351-6.874-3.351-10.897 2.06-15.952 2.222-25.844 1.092-8.164-.935-3.397-3.71-3.397-3.71zM80.806 87.66c-14.444 2.779-22.787 2.69-33.354 1.6-8.171-.845-2.822-4.805-2.822-4.805-21.137 7.016 11.767 14.977 41.309 6.336-3.14-1.106-5.133-3.131-5.133-3.131zM92.125 27.085c.001 0-42.731 10.669-22.323 34.187 6.024 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.793 15.634-29.58zM102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.095.171-4.45-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.952-3.487-32.013 6.85-13.742 9.815 49.821 8.076 90.817-3.637 77.896-9.468zM85 77.896c2.395-1.634 5.703-3.053 5.703-3.053s-9.424 1.685-18.813 2.474c-11.494.964-23.823 1.154-30.012.326-14.652-1.959 8.033-7.348 8.033-7.348s-8.812-.596-19.644 4.644c-12.812 6.195 31.691 9.019 54.733 2.957zM90.609 93.041c-.108.29-.468.616-.468.616 31.273-8.221 19.775-28.979 4.822-23.725-1.312.464-2 1.543-2 1.543s.829-.334 2.678-.72c7.559-1.575 18.389 10.119-5.032 22.286zM64.181 70.069c-4.614-10.429-20.26-19.553.007-35.559 25.271-19.947 12.304-32.923 12.304-32.923 5.23 20.608-18.451 26.833-26.999 39.667-5.821 8.745 2.857 18.142 14.688 28.815zM91.455 121.817c-19.187 3.612-42.854 3.191-56.887.874 0 0 2.874 2.38 17.646 3.331 22.476 1.437 57-.8 57.816-11.436.001 0-1.57 4.032-18.575 7.231z"></path>
                    </svg>
                    <p class="skill-tag">Java</p>
                </div>
                <div class="col-3 skill-element">
                    <!-- Javascript -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M2 1v125h125v-125h-125zm66.119 106.513c-1.845 3.749-5.367 6.212-9.448 7.401-6.271 1.44-12.269.619-16.731-2.059-2.986-1.832-5.318-4.652-6.901-7.901l9.52-5.83c.083.035.333.487.667 1.071 1.214 2.034 2.261 3.474 4.319 4.485 2.022.69 6.461 1.131 8.175-2.427 1.047-1.81.714-7.628.714-14.065-.001-10.115.046-20.188.046-30.188h11.709c0 11 .06 21.418 0 32.152.025 6.58.596 12.446-2.07 17.361zm48.574-3.308c-4.07 13.922-26.762 14.374-35.83 5.176-1.916-2.165-3.117-3.296-4.26-5.795 4.819-2.772 4.819-2.772 9.508-5.485 2.547 3.915 4.902 6.068 9.139 6.949 5.748.702 11.531-1.273 10.234-7.378-1.333-4.986-11.77-6.199-18.873-11.531-7.211-4.843-8.901-16.611-2.975-23.335 1.975-2.487 5.343-4.343 8.877-5.235l3.688-.477c7.081-.143 11.507 1.727 14.756 5.355.904.916 1.642 1.904 3.022 4.045-3.772 2.404-3.76 2.381-9.163 5.879-1.154-2.486-3.069-4.046-5.093-4.724-3.142-.952-7.104.083-7.926 3.403-.285 1.023-.226 1.975.227 3.665 1.273 2.903 5.545 4.165 9.377 5.926 11.031 4.474 14.756 9.271 15.672 14.981.882 4.916-.213 8.105-.38 8.581z"></path>
                    </svg>
                    <p class="skill-tag">Java<wbr>script</p>
                </div>
                <div class="col-3 skill-element">
                    <!-- jQuery -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M65.283 106.928c-.828-.187-1.633-.446-2.441-.685l-.609-.185c-.79-.242-1.573-.497-2.352-.765l-.323-.117c-.698-.245-1.388-.504-2.074-.769l-.582-.229c-.752-.297-1.5-.607-2.238-.931l-.447-.198c-.635-.288-1.263-.578-1.889-.879l-.546-.262c-.491-.239-.977-.493-1.461-.743-.324-.171-.654-.332-.975-.51-.592-.317-1.173-.646-1.751-.982l-.591-.33c-.769-.452-1.529-.921-2.28-1.397l-.615-.41c-.546-.351-1.088-.709-1.623-1.079l-.523-.367c-.516-.365-1.026-.734-1.534-1.109l-.679-.514c-.464-.355-.927-.713-1.384-1.082l-.617-.495c-.581-.479-1.156-.959-1.724-1.453l-.188-.159c-.614-.539-1.217-1.092-1.812-1.647l-.51-.491c-.441-.42-.875-.843-1.302-1.277l-.51-.509c-.543-.556-1.076-1.119-1.599-1.69l-.078-.084c-.553-.604-1.092-1.221-1.621-1.844l-.424-.504c-.395-.475-.785-.956-1.167-1.442l-.427-.532c-.459-.596-.908-1.189-1.347-1.794-12.15-16.574-16.516-39.432-6.804-58.204l-8.611 10.921c-11.029 15.851-9.656 36.476-1.231 53.32.2.404.411.801.617 1.198l.395.759.245.437.439.786c.262.461.53.92.805 1.379l.458.756c.304.491.615.976.934 1.46l.398.614c.438.655.888 1.309 1.352 1.951l.039.05.228.308c.4.553.814 1.099 1.232 1.639l.463.59c.373.469.752.935 1.139 1.399l.435.52c.518.61 1.047 1.217 1.586 1.812l.032.033.062.068c.526.575 1.066 1.137 1.612 1.699l.517.521c.423.426.853.845 1.287 1.262l.526.5c.58.547 1.166 1.083 1.764 1.607l.028.022.307.262c.526.456 1.062.909 1.603 1.353l.664.529c.441.354.887.702 1.336 1.044l.714.543c.495.365.995.724 1.499 1.075l.546.387.15.107c.478.329.967.646 1.456.963l.63.42c.749.474 1.51.943 2.278 1.396l.63.355c.565.326 1.134.646 1.711.959.312.168.632.327.946.488.407.213.811.429 1.225.636l.283.137.501.242c.641.306 1.287.607 1.94.897l.41.184c.748.327 1.502.641 2.263.941l.551.217c.704.271 1.418.539 2.135.791l.268.093c.786.275 1.581.53 2.381.779l.575.172c.814.245 1.618.538 2.458.693 53.339 9.727 68.833-32.053 68.833-32.053-13.014 16.954-36.112 21.426-57.997 16.447zM46.069 63.697c1.195 1.713 2.52 3.751 4.105 5.127.575.633 1.176 1.251 1.79 1.858l.472.465c.596.578 1.202 1.146 1.828 1.698l.074.064.018.018c.693.608 1.408 1.191 2.135 1.767l.484.378c.729.559 1.472 1.107 2.233 1.631l.065.049c.336.232.679.448 1.02.672l.482.319c.544.349 1.096.689 1.656 1.015l.234.136c.483.278.973.552 1.463.818l.521.271c.339.177.678.358 1.024.53l.155.07c.702.346 1.411.68 2.136.995l.472.194c.578.246 1.163.486 1.75.71l.75.275c.533.198 1.068.378 1.608.559l.727.233c.767.238 1.525.539 2.324.672 41.183 6.823 50.69-24.886 50.69-24.886-8.57 12.343-25.168 18.233-42.879 13.635-.787-.207-1.562-.431-2.333-.674l-.7-.227c-.548-.177-1.092-.365-1.632-.562l-.736-.274c-.591-.228-1.176-.462-1.756-.708l-.473-.2c-.727-.316-1.443-.65-2.148-.999-.364-.177-.721-.364-1.078-.548l-.622-.32c-.458-.248-.914-.506-1.363-.77l-.326-.185c-.558-.325-1.106-.661-1.65-1.008l-.498-.332c-.358-.232-.717-.469-1.069-.707-.759-.524-1.497-1.072-2.226-1.628l-.501-.395c-7.752-6.12-13.897-14.486-16.819-23.971-3.062-9.836-2.401-20.878 2.903-29.84l-6.517 9.2c-7.977 11.478-7.543 26.844-1.321 38.983 1.043 2.038 2.216 4.013 3.528 5.892zM89.476 49.498c.339.125.678.237 1.022.354l.451.143c.484.152.966.329 1.467.424 22.739 4.394 28.908-11.669 30.549-14.034-5.403 7.779-14.482 9.646-25.623 6.942-.88-.213-1.848-.531-2.696-.832-1.088-.388-2.16-.83-3.201-1.329-1.979-.951-3.864-2.104-5.612-3.424-9.969-7.565-16.162-21.994-9.657-33.745l-3.52 4.851c-4.702 6.92-5.164 15.514-1.901 23.156 3.441 8.112 10.492 14.475 18.721 17.494z"></path>
                    </svg>
                    <p class="skill-tag">jQuery</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 skill-element">
                    <!-- HTML -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M19.569 27l8.087 89.919 36.289 9.682 36.39-9.499 8.096-90.102h-88.862zm72.041 20.471l-.507 5.834-.223 2.695h-42.569l1.017 12h40.54l-.271 2.231-2.615 28.909-.192 1.69-22.79 6.134v-.005l-.027.012-22.777-5.916-1.546-17.055h11.168l.791 8.46 12.385 3.139.006-.234v.012l12.412-2.649 1.296-13.728h-38.555l-2.734-30.836-.267-3.164h55.724000000000004l-.266 2.471zM27.956 1.627h5.622v5.556h5.144v-5.556h5.623v16.822h-5.623v-5.633h-5.143v5.633h-5.623v-16.822zM51.738 7.206h-4.95v-5.579h15.525v5.579h-4.952v11.243h-5.623v-11.243zM64.777 1.627h5.862l3.607 5.911 3.603-5.911h5.865v16.822h-5.601v-8.338l-3.867 5.981h-.098l-3.87-5.981v8.338h-5.502v-16.822zM86.513 1.627h5.624v11.262h7.907v5.561h-13.531v-16.823z"></path>
                    </svg>
                    <p class="skill-tag">HTML</p>
                </div>
                <div class="col-3 skill-element">
                    <!-- CSS -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M19.67 26l8.069 90.493 36.206 10.05 36.307-10.063 8.078-90.48h-88.66zm69.21 50.488l-2.35 21.892.009 1.875-22.539 6.295v.001l-.018.015-22.719-6.225-1.537-17.341h11.141l.79 8.766 12.347 3.295-.004.015v-.032l12.394-3.495 1.308-14.549h-25.907000000000004l-.222-2.355-.506-5.647-.265-2.998h27.886000000000003l1.014-11h-42.473l-.223-2.589-.506-6.03-.265-3.381h55.597l-.267 3.334-2.685 30.154"></path><path d="M89 14.374l-7.149-8.374h7.149v-5h-16v4.363l8.39 7.637h-8.39v5h16zM70 14.374l-6.807-8.374h6.807v-5h-15v4.363l7.733 7.637h-7.733v5h15zM52 13h-8v-7h8v-5h-14v17h14z"></path>
                    </svg>
                    <p class="skill-tag">CSS</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h6>Basics</h6>
            <div class="row">
                <div class="col-3 skill-element">
                    <!-- Python -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M49.33 62h29.159c8.117 0 14.511-6.868 14.511-15.019v-27.798c0-7.912-6.632-13.856-14.555-15.176-5.014-.835-10.195-1.215-15.187-1.191-4.99.023-9.612.448-13.805 1.191-12.355 2.181-14.453 6.751-14.453 15.176v10.817h29v4h-40.224000000000004c-8.484 0-15.914 5.108-18.237 14.811-2.681 11.12-2.8 17.919 0 29.53 2.075 8.642 7.03 14.659 15.515 14.659h9.946v-13.048c0-9.637 8.428-17.952 18.33-17.952zm-1.838-39.11c-3.026 0-5.478-2.479-5.478-5.545 0-3.079 2.451-5.581 5.478-5.581 3.015 0 5.479 2.502 5.479 5.581-.001 3.066-2.465 5.545-5.479 5.545zM122.281 48.811c-2.098-8.448-6.103-14.811-14.599-14.811h-10.682v12.981c0 10.05-8.794 18.019-18.511 18.019h-29.159c-7.988 0-14.33 7.326-14.33 15.326v27.8c0 7.91 6.745 12.564 14.462 14.834 9.242 2.717 17.994 3.208 29.051 0 7.349-2.129 14.487-6.411 14.487-14.834v-11.126h-29v-4h43.682c8.484 0 11.647-5.776 14.599-14.66 3.047-9.145 2.916-17.799 0-29.529zm-41.955 55.606c3.027 0 5.479 2.479 5.479 5.547 0 3.076-2.451 5.579-5.479 5.579-3.015 0-5.478-2.502-5.478-5.579 0-3.068 2.463-5.547 5.478-5.547z"></path>
                    </svg>
                    <p class="skill-tag">Python</p>
                </div>
                <div class="col-3 skill-element">
                    <!-- PHP -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961s27.354 30.961 61.094 30.961 61.094-13.862 61.094-30.961-27.354-30.961-61.094-30.961zm-15.897 36.993c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34h14.04c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515-.759 1.357-1.75 2.624-2.972 3.748zm21.311 2.968l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528l-3.031 15.241h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zM38.934 54h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458s-2.772-1.721-5.546-1.721z"></path>
                    </svg>
                    <p class="skill-tag">PHP</p>
                </div>
                <div class="col-3 skill-element">
                    <!-- Git -->
                    <svg class="skill-icon" viewBox="0 0 128 128">
                        <path d="M124.742 58.378l-55.117-55.114c-3.172-3.174-8.32-3.174-11.497 0l-11.443 11.446 14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.462 6.607 2.293 9.993l13.992 13.994c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679-3.78 3.78-9.901 3.78-13.683 0-2.842-2.844-3.545-7.019-2.105-10.521l-13.048-13.049-.002 34.341c.922.455 1.791 1.063 2.559 1.828 3.779 3.777 3.779 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-4.088-9.905-.311-13.683.934-.933 1.855-1.638 2.855-2.11v-34.659c-1-.472-1.92-1.172-2.856-2.111-2.861-2.86-3.396-7.06-1.928-10.576l-14.233-14.313-37.754 37.79c-3.175 3.177-3.155 8.325.02 11.5l55.126 55.114c3.173 3.174 8.325 3.174 11.503 0l54.86-54.858c3.175-3.176 3.178-8.327.004-11.501z"></path>
                    </svg>
                    <p class="skill-tag">Git</p>
                </div>
            </div>
            <h6>Human Languages</h6>
            <div class="d-block">
                <p class="progress-bar-tag">German (native language)</p>
                <div class="progress"><div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>
                <p class="progress-bar-tag">English (C1)</p>
                <div class="progress"><div class="progress-bar" role="progressbar" style="width: 84%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>
                <p class="progress-bar-tag">Spanish (A2)</p>
                <div class="progress"><div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- EDUCATION AND WORK EXPERIENCE SECTION -->

<section id="education" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bottom-space-md">
                <h2 class="display-4">Education</h2>
                <ul>
                    <li class="active">
                        <h6>Oct 2018 - Present</h6>
                        <p>Computer Science undergraduate @ <a href="https://www.tu-berlin.de/menue/home/" target="_blank">University of Technology Berlin</a></p>
                    </li>
                    <li>
                        <h6>Jul 2017 - May 2018</h6>
                        <p>Work and Travel in Australia</p>
                    </li>
                    <li>
                        <h6>Jun 2017</h6>
                        <p>High School Diploma</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="display-4">Work Experience</h2>
                <ul>
                    <li class="active">
                        <h6>Jan 2019 - Present</h6>
                        <p>Technical Specialist @ <a href="https://www.apple.com/de/retail/kurfuerstendamm/" target="_blank">Apple Kurfürstendamm Berlin</a></p>
                    </li>
                    <li>
                        <h6>Nov 2017 - Jan 2019</h6>
                        <p>Freelancing Front-End Web-Developer</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS SECTION -->

<section id="projects" class="section section-emphasize">
    <div class="container">
        <div class="row">
            <div class="col-md-9 d-flex text-center">
                <h1 class="text-bright center">Check out my GitHub!</h1>
            </div>
            <div class="col-md-3 d-flex flex-vcenter">
                <a class="btn btn-light btn-block btn-valign-center btn-icon" target="_blank" href="https://github.com/christianhelbig" role="button"><i class="fab fa-github"></i> GitHub</a>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->

<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-vcenter bottom-space-lg">
                <h2 class="display-4">Contact</h2>
                <!-- Import contact form -->
                <?php include "resources/templates/contact.php"; ?>
            </div>
            <!-- Import card -->
            <?php include "resources/templates/vcard.php"; ?>
        </div>
    </div>
</section>

<!-- Import footer -->
<?php include "resources/templates/footer.php"; ?>