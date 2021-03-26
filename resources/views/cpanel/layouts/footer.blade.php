<!-- js -->
<script src="{{asset('assets/vendors/scripts/core.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/process.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/layout-settings.js')}}"></script>

<script src="{{asset('assets/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/jvectormap-setting.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/dashboard2.js')}}"></script>
<!-- fancybox Popup Js -->
<script src="{{asset('assets/src/plugins/fancybox/dist/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/steps-setting.js')}}"></script>
<script src="{{asset('assets/src/plugins/jquery-asColor/dist/jquery-asColor.js')}}"></script>
<script src="{{asset('assets/src/plugins/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
<script src="{{asset('assets/src/plugins/jquery-asColorPicker/jquery-asColorPicker.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/colorpicker.js')}}"></script>
<script src="{{asset('assets/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/calendar-setting.js')}}"></script>
<script src="{{asset('assets/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>

<script src="{{asset('assets/vendors/scripts/advanced-components.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/dashboard.js')}}"></script>
<!-- buttons for Export datatable -->
<script src="{{asset('assets/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
<!-- Datatable Setting js -->
<script src="{{asset('assets/vendors/scripts/datatable-setting.js')}}"></script>
{{--Dropzone--}}
<script src="{{asset('assets/src/plugins/dropzone/src/dropzone.js')}}"></script>
<!-- add sweet alert js & css in footer -->
<script src="{{asset('assets/src/plugins/sweetalert2/sweetalert2.all.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/sweetalert2/sweetalert2.css')}}">
<script src="{{asset('assets/src/plugins/sweetalert2/sweet-alert.init.js')}}"></script>
<script src="{{asset('assets/src/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/vendors/scripts/range-slider-setting.js')}}"></script>
<script>
    Dropzone.autoDiscover = false;
    $(".dropzone").dropzone({
        addRemoveLinks: true,
        removedfile: function (file) {
            var name = file.name;
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '#addHFO', function () {
            var html = '';
            html += '<tr>';
            html += '<td><input class="form-control time-picker-default" name="heureOuv[]" placeholder="time" type="text"></td>';
            html += '<td><input class="form-control time-picker-default" name="heureFerm[]" placeholder="time" type="text"></td>';
            html += '<td><button style="background: #dc3545;" type="button" name="remove" class="btn btn-danger btn-sm" id="rmHFO"><i class="fa fa-trash"></i></button></td></tr>';
            $('#item_table').append(html);
        });

        $(document).on('click', '#rmHFO', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
</body>
</html>
