@if(session()->has('sweetalert'))
    <script>
        $(function () {
            swal({
                title: "{!! session('sweetalert.title') !!}",
                html: "{!! session('sweetalert.message') !!}",
                type: "{{ session('sweetalert.type') }}",
                timer: 5000,
                showConfirmButton: false,
            });
        });
    </script>
@endif

@if(session()->has('sweetalert_overlay'))
    <script>
        $(function () {
            swal({
                title: "{!! session('sweetalert_overlay.title') !!}",
                html: "{!! session('sweetalert_overlay.message') !!}",
                type: "{{ session('sweetalert_overlay.type') }}",
                confirmButtonText: "Okay",
            });
        });
    </script>
@endif
