<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('js/admin/bundle.js')}}"></script>
	<script src="{{asset('js/admin/theme/default.js')}}"></script>
	<script src="{{asset('js/admin/apps.min.js')}}"></script>

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script src="{{asset('plugins/nvd3/nvd3.min.js')}}"></script>
	<script src="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.js')}}"></script>
	<script src="{{asset('plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js')}}"></script>
	<script src="{{asset('plugins/bootstrap-calendar/js/bootstrap_calendar.min.js')}}"></script>
	<script src="{{asset('plugins/gritter/js/jquery.gritter.js')}}"></script>

	<script src="{{asset('js/admin/demo/dashboard-v2.js')}}"></script>
	<script>
	$(document).ready(function() {
		DashboardV2.init();
	});
	</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		@yield('scripts')
