<!-- Bootstrap core JavaScript-->
<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('backend/js/kvm.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>



<script src="{{ asset('backend/assets/js/code.js') }}"></script>




<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>

<script type="text/javascript">

    $(document).ready(function() {
    $(".alert").hide();
    
    $(".alert").fadeTo(5000, 1000).slideUp(1000, function() {
    $(".alert").slideUp(1000);
    });
    });
    </script>

</body>
</html>