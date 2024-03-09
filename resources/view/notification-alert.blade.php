<div id="toaster"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--<script>
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    })
</script>--}}

@php($alerts = Session::get('notification-alert'))

@foreach($alerts as $alert)
    @if(isset($alert) && $alert['mode']=='toastr')
        <script type="text/javascript">
            @php($options=json_encode(config('notification-alert.toastr')))
                toastr.options = {!! $options !!}
        </script>
        <script type="text/javascript">
            @if($alert['type'] == 'success')
            toastr.success("{!! $alert['message'] !!}", "{!! $alert['title'] !!}");
            @elseif($alert['type'] == 'warning')
            toastr.warning("{!! $alert['message'] !!}", "{!! $alert['title'] !!}");
            @elseif($alert['type'] == 'info')
            toastr.info("{!! $alert['message'] !!}", "{!! $alert['title'] !!}");
            @elseif($alert['type'] == 'error')
            toastr.error("{!! $alert['message'] !!}", "{!! $alert['title'] !!}");
            @endif
        </script>
    @elseif(isset($alert) && $alert['mode']=='sweetalert2')
        <script type="text/javascript">
            @php($options=json_encode(config('notification-alert.sweetalert2')))

        </script>
        <script type="text/javascript">
            @if($alert['type'] == 'success')
            Swal.fire({
                title: "{{ $alert['title'] }}",
                text: "{{ $alert['message'] }}",
                icon: 'success',
            })
            @elseif($alert['type'] == 'warning')
            Swal.fire({
                title: "{{ $alert['title'] }}",
                text: "{{ $alert['message'] }}",
                icon: 'warning',
            })
            @elseif($alert['type'] == 'info')
            Swal.fire({
                title: "{{ $alert['title'] }}",
                text: "{{ $alert['message'] }}",
                icon: 'info',
            })
            @elseif($alert['type'] == 'error')
            Swal.fire({
                title: "{{ $alert['title'] }}",
                text: "{{ $alert['message'] }}",
                icon: 'error',
            })
            @endif
        </script>
    @endif
@endforeach
