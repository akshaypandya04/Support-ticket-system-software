 <!--  ************************* Footer Start Here ************************** -->
            <!--     <div class="copy">
            <div class="container">
                <a href="#">2023 &copy; All Rights Reserved</a>
            </div>
        </div> -->

   <script>
       
       $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
       
   </script>
   
    </body>

    <script src="{{asset('front-end/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('front-end/assets/js/popper.min.js') }}"></script>
    <script src="{{asset('front-end/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('front-end/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{asset('front-end/assets/plugins/testimonial/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('front-end/assets/js/script.js') }}"></script>


{{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 3000;
            @if (Session::has('errorsss'))
                toastr.error('{{ Session::get('errorsss') }}');
            @elseif(Session::has('successs'))
                toastr.success('{{ Session::get('successs') }}');
            @endif
        });

    </script>


</html>