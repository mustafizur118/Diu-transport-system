
<!-- jQuery  -->
<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/admin/js/detect.js')}}"></script>
<script src="{{asset('assets/admin/js/fastclick.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/admin/js/waves.js')}}"></script>
<script src="{{asset('assets/admin/js/wow.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('assets/admin/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>


<!-- Datatables-->
@yield('datatable_script')
@yield('table_script')


<script src="{{asset('assets/admin/pages/dashborad.js')}}"></script>

<script src="{{asset('assets/admin/js/app.js')}}"></script>
