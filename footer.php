</main><!--mainContent-->

<footer>
<div class="container">
<p>Made by hand on Earth, Milky Way Galaxy | Tyler Savin | After <script>document.write(new Date().getFullYear())</script> rotations around the star, Sun</p>
</div>
</footer>

<!-- Scripts -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="<?php echo site_url(); ?>/wp-content/themes/ts2017/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/ts2017/js/typed.js"></script>
<script>
	$(document).ready(function(){

	$('.variableLike').typed({
        strings: ["Sr. Designer", "coder", "professor", "freelancer", "VR enthusiast", "team player", "gamer", "gear head", "dragonslayer"],
        typeSpeed: 50,
        startDelay: 1000,
        backSpeed: 50,
        backDelay: 1750,
        loop: true,
	});

  $(".wp-caption").removeAttr('style');

//window.onscroll = function() {scrollProgressFunction()};

//function scrollProgressFunction() {
  //var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  //var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  //var scrolled = (winScroll / height) * 100;
  //document.getElementById("myBar").style.width = scrolled + "%";
//}

	});
 $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 90) {
        $("nav").addClass("scrolling");
    } else {
        $("nav").removeClass("scrolling");
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>