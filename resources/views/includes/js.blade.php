
<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

<!-- Flot -->
<script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>

<!-- ChartJS-->
<script src="{{asset('s/plugins/chartJs/Chart.min.js')}}j"></script>

<!-- Peity -->
<script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- Peity demo -->
<script src="{{asset('js/demo/peity-demo.js')}}"></script>


<!-- Chosen -->
<script src="{{asset('js/plugins/chosen/chosen.jquery.js')}}"></script>

<script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 1000,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>
<script>
    $(document).ready(function(){
        $('.dataTables-example1').DataTable({
            pageLength: 1000,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
        });

    });

</script>
