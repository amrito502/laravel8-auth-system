<script src="{{ asset('admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('admin/js/tags-input.js') }}"></script>
<script src="{{ asset('admin/vendors/core/core.js') }}"></script>
<script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('admin/vendors/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/template.js') }}"></script>

<script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>

<script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/data-table.js') }}"></script>

<script src="{{ asset('admin/js/sweet-alert.js') }}"></script>
<script src="{{ asset('admin/vendors/sweetalert2/sweetalert2.min.js') }}"></script>

<script src="{{ asset('admin/js/dashboard-light.js') }}"></script>
@yield('script')
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>

</body>

</html>
