
@push('bottom')
<script type="text/javascript">
    var lang = '{{App::getLocale()}}';
    $(function() {
        $('.input_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            @if (App::getLocale() == 'ar')
            rtl: true,
            @endif
            language: lang
        });
        
        $('.open-datetimepicker').click(function() {
			  $(this).next('.input_date').datepicker('show');
		});
        
    });

</script>
@endpush
