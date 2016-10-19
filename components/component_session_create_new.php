<div class="x_panel">
  <div class="x_title">
    <h2>Create New Session</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>

  <div class="x_content">
    <!-- Smart Wizard -->
    <div id="wizard" class="form_wizard wizard_horizontal">
      <ul class="wizard_steps">
        <li>
          <a href="#step-1">
            <span class="step_no"></span>
            <span class="step_descr">Global Session Info &ast;</span>
          </a>
        </li>
        <li>
          <a href="#step-2">
            <span class="step_no"></span>
            <span class="step_descr">Track Info</span>
          </a>
        </li>
        <li>
          <a href="#step-3">
            <span class="step_no"></span>
            <span class="step_descr">Presentation Info</span>
          </a>
        </li>
        <li>
          <a href="#step-4">
            <span class="step_no"></span>
            <span class="step_descr">Event Info</span>
          </a>
        </li>
        <li>
          <a href="#step-5">
            <span class="step_no"></span>
            <span class="step_descr">Presenter &amp; Duration Info</span>
          </a>
        </li>
      </ul>

      <div>
        <!-- div needed for js to write content. Otherwise it adds a div with set height -->
        <form>
          <div id="step-1">
            <!--h2>Global Session Info</h2-->
            <?php include('components/forms/create-session-tab-1.php'); ?>
          </div>

          <div id="step-2">
            <!--h2 class="StepTitle">Session Track Info</h2-->
    				<?php include('components/forms/create-session-tab-2.php'); ?>
          </div>

          <div id="step-3">
            <!--h2 class="StepTitle">Presentation Info</h2-->
            <?php include('components/forms/create-session-tab-3.php'); ?>
          </div>

          <div id="step-4">
            <!--h2 class="StepTitle">Event Info</h2-->
            <?php include('components/forms/create-session-tab-4.php'); ?>
          </div>

          <div id="step-5">
            <!--h2 class="StepTitle">Presenter &amp; Duration</h2-->
            <?php include('components/forms/create-session-tab-5.php'); ?>
          </div>
        </form>
      </div>
    </div>
    <!-- End SmartWizard Content -->
  </div>
</div>
