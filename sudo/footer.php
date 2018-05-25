


<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 Pikash</p>
</div>
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
				<script src="../js/amcharts.js"></script>
		       <script src="../js/serial.js"></script>
				<script src="../js/export.js"></script>
				<script src="../js/light.js"></script>
				<!-- Chart code -->

	<!-- //amcharts -->
		<script src="../js/chart1.js"></script>
				<script src="../js/Chart.min.js"></script>
		<script src="../js/modernizr.custom.js"></script>

		<script src="../js/classie.js"></script>
		<script src="../js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="../js/circles.js"></script>
					         <script>
								var colors = [
										['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);

									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}

				</script>
	<!-- //circle -->
	<!--skycons-icons-->
<script src="../js/skycons.js"></script>
<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
							
<!--//skycons-icons-->
<!-- //js -->
<script src="../js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
		</script>
		<script src="../js/flipclock.js"></script>

	<script type="text/javascript">
		var clock;

		$(document).ready(function() {

			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="../js/bars.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>

<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>


</body>
</html>
