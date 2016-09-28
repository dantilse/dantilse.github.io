<!DOCTYPE html>
<html lang="en">
  <head>
		<!-- Dropzone.js -->
    <link href="vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <?php include('components/component_head.php'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <?php include('components/component_left_col.php'); ?>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php include('components/component_top_nav.php'); ?>
        </div>
        <!-- /top navigation -->

        <!-- /page content -->
        <div class="right_col" role="main">
          <div class="page-title">
            <div class="title_left">
              <h3>Page Title</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <!-- Row #1 -->
          <div class="row">
            <div class="col-xs-12">
              <?php $componentTitle = "File Upload"; include('components/component_file_upload.php'); ?>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <?php include('components/component_footer.php'); ?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- scripts -->
    <?php include('components/component_scripts.php'); ?>
		<!-- Dropzone.js -->
    <script src="vendors/dropzone/dist/min/dropzone.min.js"></script>

  </body>
</html>
