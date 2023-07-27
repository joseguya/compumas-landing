<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif

    @if($errors->any())
        toastr.options.timeOut = 0;
        toastr.options.extendedTimeOut = 60;
        toastr.options.closeButton = true;
        toastr.error("@foreach($errors->all() as $error) {{$error}} <br>  @endforeach");

    @endif
</script>