<?php
    $partial_js = $partial_js ?? "";

    if (isset($partial_artifact_js)) {
        $js_url = get_url('scripts/partials/' . $partial_artifact_js . '.js');
    } else {
        $js_url = '';
    }

    $partial_artifact_js = $partial_artifact_js ?? "";
    
?>
<footer class="footer"> 
    <div class="container footer-wrapper">
        <div class="footer-content">
            <ul class="footer-content-social">
                <li><a href="https://www.linkedin.com/in/jenny-seojeong-kim/" target="_blank">LINKEDIN</a></li>
                <li><a href="https://github.com/jennysujukim" target="_blank">GITHUB</a></li>
                <li><a href="#" target="_blank">BEHANCE</a></li>
            </ul>
        </div>
        <div class="footer-content footer-content-email">
            <a href = "mailto: jennysujukim@gmail.com">JENNYSUJUKIM@GMAIL.COM</a>
        </div>
        <div class="footer-content">
            &copy; 2023<br>DESIGNED & CODED BY <br>JENNY KIM
        </div>
        <div class="footer-content footer-content-top">
            <a href="#">BACK TO TOP</a>
        </div>
    </div>
    <div class="footer-title">
        Keep In Touch!
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="<?php echo get_url('scripts/main.js');?>"></script>
<script src="<?php echo get_url('scripts/partials/' . $partial_js . '.js');?>"></script>
<?php echo 
'<script src="' . $js_url . '"></script>'; ?>