<div id="toaster"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@php($toasts = Session::get('notification-alert'))

@foreach($toasts as $toast)
    @if(isset($toast) && $toast['mode']=='toastr')
        <script type="text/javascript">
            @php($options=json_encode(config('notification-alert.toastr')))
                toastr.options = {!! $options !!}
        </script>
        <script type="text/javascript">
            @if($toast['type'] == 'success')
              toastr.success("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
            @elseif($toast['type'] == 'warning')
              toastr.warning("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
            @elseif($toast['type'] == 'info')
              toastr.info("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
            @elseif($toast['type'] == 'error')
              toastr.error("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
            @endif
        </script>
    @endif
@endforeach
