<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenLite.min.js'></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/animatescroll.js"></script>
    <script src='http://www.queness.com/resources/html/simple-portfolio-page/js/jquery.mixitup.min.js'></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
    window.sr = ScrollReveal();
	sr.reveal('.section-Portfolio', {
			duration: 2000,
			origin:'top',
			distance:'300px'
		});
		sr.reveal('.A-right', {
			duration: 2000,
			origin:'right',
			distance:'300px'
		});
		sr.reveal('.A-left', {
			duration: 2000,
			origin:'left',
			distance:'300px',
			viewFactor: 0.2
		});
		sr.reveal('.A-bottom', {
			duration: 2000,
			origin:'bottom',
			distance:'300px',
			viewFactor: 0.2
		});
		sr.reveal('.A-top', {
			duration: 2000,
			origin:'top',
			distance:'300px',
			viewFactor: 0.2
		});
		
		$(window).on('scroll', function(){
			if ($(window).scrollTop()){
			$('nav').addClass('black')}
			else{
				$('nav').removeClass('black')
			}
		})
	function changeLang(){
  document.getElementById('form_lang').submit();
 }

    </script>