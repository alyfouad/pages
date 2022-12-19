<script>
    var config = {
        url: "{{url('/')}}",
    };
</script>
<script src="{{asset('/')}}assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
<script src="{{asset('/')}}assets/plugins/liga.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="{{asset('/')}}assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/plugins/classie/classie.js"></script>
<script src="{{asset('/')}}assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('/')}}assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->



<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{asset('/')}}assets/pages/js/pages.js"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="{{asset('/')}}assets/js/tables.js" type="text/javascript"></script>
{{-- <script src="{{asset('/')}}assets/js/datatables.js" type="text/javascript"></script> --}}
<script src="{{asset('/')}}assets/js/scripts.js" type="text/javascript"></script>
@yield('js')
<!-- END PAGE LEVEL JS -->

