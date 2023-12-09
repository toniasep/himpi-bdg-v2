@section('js')
    <!-- datepicker -->
    <script src="{{ url('assets/js/datepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-datepicker.id.min.js') }}"></script>


    <script>
        $('body').on('focus', ".datepicker", function() {
            $(this).datepicker({
                format: 'yyyy-mm-dd',
                ignoreReadonly: true,
                showTodayButton: true,
                orientation: "bottom auto",
                language: "id"
            });
        });
    </script>
    <script>
        $('#datepicker').datepicker({});
        //datepicker
        $('body').on('focus', ".examDate", function() {
            $(this).datepicker({
                format: 'yyyy-mm-dd',
                ignoreReadonly: true,
                showTodayButton: true
            });
        });
    </script>
@endsection
@section('css')
    <link href="{{ url('assets/css/bootstrap-datepicker3.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection
