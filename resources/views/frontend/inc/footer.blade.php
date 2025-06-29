	<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer" style="background: #0dcaf0; color: #fff;">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

<script src="{{asset('back-end/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back-end/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>

 <script src="{{asset('back-end/assets/js/pace.min.js')}}"></script>	  

<script src="{{asset('back-end/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script> 
<!--<script src="{{asset('back-end/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>-->
<!--<script src="{{asset('back-end/assets/js/index3.js')}}"></script>-->

<script src="{{asset('back-end/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back-end/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

	<!--<script>-->
	<!--	new PerfectScrollbar('.best-selling-products');-->
	<!--	new PerfectScrollbar('.recent-reviews');-->
	<!--	new PerfectScrollbar('.support-list');-->
	<!--</script>-->
	<!--app JS-->
	<script src="{{asset('back-end/assets/js/app.js')}}"></script>


  <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable( {
                lengthChange: false,
                // buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );
         
            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>
    
    <script src="{{asset('back-end/assets/plugins/select2/js/select2.min.js')}}"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>


</body>

</html>