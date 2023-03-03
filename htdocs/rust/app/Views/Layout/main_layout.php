<!DOCTYPE html>
<html lang="en" data-kit-theme="default">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> <?= $page_name . ' '. $app_name ?> </title>
  <link rel="icon" type="image/png" href="front/assets/images/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Mukta:400,700,800&amp;display=swap" rel="stylesheet">

  <!-- /assets/vendors -->
  <link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/ladda/dist/ladda-themeless.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/tempus-dominus-bs4/build/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap-sweetalert/dist/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/summernote/dist/summernote.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/ionrangeslider/css/ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="/assets/cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="/assets/vendors/c3/c3.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/chartist/dist/chartist.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/nprogress/nprogress.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/jquery-steps/demo/css/jquery.steps.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/dropify/dist/css/dropify.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/font-feathericons/dist/feather.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/font-linearicons/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/font-icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendors/font-awesome/css/font-awesome.min.css">

  <script src="/assets/vendors/jquery/dist/jquery.min.js"></script>
  <script src="/assets/vendors/popper.js/dist/umd/popper.js"></script>
  <script src="/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="/assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
  <script src="/assets/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
  <script src="/assets/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="/assets/vendors/spin.js/spin.js"></script>
  <script src="/assets/vendors/ladda/dist/ladda.min.js"></script>
  <script src="/assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="/assets/vendors/select2/dist/js/select2.full.min.js"></script>
  <script src="/assets/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
  <script src="/assets/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
  <script src="/assets/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="/assets/vendors/autosize/dist/autosize.min.js"></script>
  <script src="/assets/vendors/bootstrap-show-password/dist/bootstrap-show-password.min.js"></script>
  <script src="/assets/vendors/moment/min/moment.min.js"></script>
  <script src="/assets/vendors/tempus-dominus-bs4/build/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="/assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="/assets/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
  <script src="/assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
  <script src="/assets/vendors/summernote/dist/summernote.min.js"></script>
  <script src="/assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
  <script src="/assets/vendors/nestable/jquery.nestable.js"></script>
  <script type="text/javascript" src="/assets/cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.js"></script>
  <script src="/assets/vendors/editable-table/mindmup-editabletable.js"></script>
  <script src="/assets/vendors/d3/d3.min.js"></script>
  <script src="/assets/vendors/c3/c3.min.js"></script>
  <script src="/assets/vendors/chartist/dist/chartist.min.js"></script>
  <script src="/assets/vendors/peity/jquery.peity.min.js"></script>
  <script src="/assets/vendors/chartist-plugin-tooltips-updated/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="/assets/vendors/jquery-countTo/jquery.countTo.js"></script>
  <script src="/assets/vendors/nprogress/nprogress.js"></script>
  <script src="/assets/vendors/jquery-steps/build/jquery.steps.min.js"></script>
  <!-- <script src="/assets/vendors/jquery-steps/build/jquery.steps.js"></script>
  <script src="/assets/vendors/jquery-steps/build/jquery-3.3.1.min.js"></script>
  <script src="/assets/vendors/jquery-steps/build/jquery.steps.min.js"></script> -->
  <script src="/assets/vendors/chart.js/dist/Chart.bundle.min.js"></script>
  <script src="/assets/vendors/dropify/dist/js/dropify.min.js"></script>
  <script src="/assets/vendors/d3-dsv/dist/d3-dsv.js"></script>
  <script src="/assets/vendors/d3-time-format/dist/d3-time-format.js"></script>
  <script src="/assets/vendors/techan/dist/techan.min.js"></script>
  <script src="/assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="/assets/vendors/jqvmap/dist/maps/jquery.vmap.usa.js" charset="utf-8"></script>

  <!-- AIR UI HTML ADMIN TEMPLATE MODULES-->
  <link rel="stylesheet" type="text/css" href="/assets/components/kit/vendors/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/kit/core/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/styles/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/kit/widgets/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/kit/apps/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/ecommerce/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/dashboards/crypto-terminal/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/system/auth/style.css">

  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/footer/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/footer-dark/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/menu-left/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/menu-top/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/sidebar/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/support-chat/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/topbar/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/topbar-dark/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/components/airui/layout/subbar/style.css">


  <script src="/assets/components/kit/core/index.js"></script>
  <script src="/assets/components/airui/layout/menu-left/index.js"></script>
  <script src="/assets/components/airui/layout/menu-top/index.js"></script>
  <script src="/assets/components/airui/layout/sidebar/index.js"></script>
  <script src="/assets/components/airui/layout/support-chat/index.js"></script>
  <script src="/assets/components/airui/layout/topbar/index.js"></script>


  <!-- PRELOADER STYLES-->
  <style>
    .initial__loading {
      position: fixed;
      z-index: 99999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center center;
      background-repeat: no-repeat;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDFweCIgIGhlaWdodD0iNDFweCIgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIiBjbGFzcz0ibGRzLXJvbGxpbmciPiAgICA8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiBmaWxsPSJub25lIiBuZy1hdHRyLXN0cm9rZT0ie3tjb25maWcuY29sb3J9fSIgbmctYXR0ci1zdHJva2Utd2lkdGg9Int7Y29uZmlnLndpZHRofX0iIG5nLWF0dHItcj0ie3tjb25maWcucmFkaXVzfX0iIG5nLWF0dHItc3Ryb2tlLWRhc2hhcnJheT0ie3tjb25maWcuZGFzaGFycmF5fX0iIHN0cm9rZT0iIzAxOTBmZSIgc3Ryb2tlLXdpZHRoPSIxMCIgcj0iMzUiIHN0cm9rZS1kYXNoYXJyYXk9IjE2NC45MzM2MTQzMTM0NjQxNSA1Ni45Nzc4NzE0Mzc4MjEzOCIgdHJhbnNmb3JtPSJyb3RhdGUoODQgNTAgNTApIj4gICAgICA8YW5pbWF0ZVRyYW5zZm9ybSBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iIHR5cGU9InJvdGF0ZSIgY2FsY01vZGU9ImxpbmVhciIgdmFsdWVzPSIwIDUwIDUwOzM2MCA1MCA1MCIga2V5VGltZXM9IjA7MSIgZHVyPSIxcyIgYmVnaW49IjBzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSI+PC9hbmltYXRlVHJhbnNmb3JtPiAgICA8L2NpcmNsZT4gIDwvc3ZnPg==);
      background-color: #fff;
    }

    [data-kit-theme='dark'] .initial__loading {
      background-color: #0c0c1b;
    }
  </style>
  <script>
    $(document).ready(function () {
      $('.initial__loading').delay(200).fadeOut(400)
    })
  </script>
  <?php if (session()->get("success")): ?>
        <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("success") ?>',}, { type: 'success',},)})
        </script>
    <?php elseif (session()->get("error")): ?>
      <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("error") ?>',}, { type: 'danger',},)})
        </script>
    <?php endif; ?>
</head>
<body class="air__menu--gray air__topbar--fixed air__layout--cardsShadow">
<style id="primaryColor">:root { --kit-color-primary: #7ca1fd;}</style>
  <div class="initial__loading"></div>
  <div class="air__layout air__layout--hasSider">
  <?=  $this->renderSection('content')  ?>
  </div>
</body>
</html>