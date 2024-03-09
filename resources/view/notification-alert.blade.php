<div id="toaster"></div>

<script type="text/javascript">
    toastr.options = "{{config('notification-alert.toaster')}}"
</script>

@if(Session::has('notification-alert'))
    @php($toast = Session::get('notification-alert'))
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
