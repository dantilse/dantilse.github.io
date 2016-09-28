<!DOCTYPE html>
<html lang="en">
  <head>
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
              <?php include('components/component_session_create_new.php'); ?>
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
    <!-- form wizard scripts -->
    <?php include('components/component_form_wizard_scripts.php'); ?>



  </body>
</html>
