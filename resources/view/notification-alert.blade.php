<div id="toaster"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@php($toast = Session::get('notification-alert'))

@if(isset($toast) && $toast['mode']=='toastr')
    <script type="text/javascript">
        toastr.options = "{{config('notification-alert.toaster')}}"
    </script>
    <script type="text/javascript">
        @if($toast['type'] == 'success')
        toastr.success("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
        @elseif($toast['type'] == 'warning')
        toastr.warning("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
        @elseif($toast['type'] == 'information')
        toastr.info("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
        @elseif($toast['type'] == 'error')
        toastr.error("{!! $toast['message'] !!}", "{!! $toast['title'] !!}");
        @endif
    </script>
@endif
