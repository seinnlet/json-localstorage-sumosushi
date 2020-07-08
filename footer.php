	<footer class="bg-light py-3">
		<div class="container">
			<div class="row">
				<div class="col-6">
					&copy; 2020 | <a href="index.php" class="text-dark"><em>Sumo Sushi</em></a>
				</div>
				<div class="col-6 text-right">
					JSON Read Write Sample
				</div>
			</div>
		</div>
	</footer>

	<!-- script -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/localstorage.js"></script>
	<script type="text/javascript" src="custom.js"></script>
	<script>
    $('.image').on('change',function(e){
        var fileName = e.target.files[0].name;
        $(this).next('.custom-file-label').html(fileName);
    })
	</script>
</body>
</html>