	</main>

		<footer>
			<div class="logo-rodape">
				<a href="index.html">
					<img src="images/Logo-Lucas-Rodape-01.svg" alt="Logo TAG Rodape">
				</a>

				<p>2017 Lucas Nascimento</p>
			</div>
		</footer>
	</div>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>
	<script>
		$(function(){
			
			$('.toggle').click(function(){
				$('.layout').toggleClass('ativo');
				$('.menu-responsivo').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});

			new WOW().init();
		});
	</script>
</body>
</html>