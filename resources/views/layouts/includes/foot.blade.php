<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/common_scripts.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('js/modernizr_tables.js') }}"></script>
<script src="{{ asset('js/tables_func.js') }}"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
            $(".alert").fadeOut(1500);
        },3000);
    });
</script>