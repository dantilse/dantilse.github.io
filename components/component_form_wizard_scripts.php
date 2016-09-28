<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script src="vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<!-- jQuery Smart Wizard -->
<script>
$(document).ready(function() {
  $('#wizard').smartWizard();

  $('#wizard_verticle').smartWizard({
    transitionEffect: 'slide'
  });

  $('.buttonNext').addClass('btn btn-success');
  $('.buttonPrevious').addClass('btn btn-primary');
  $('.buttonFinish').addClass('btn btn-default');
});
</script>
<!-- /jQuery Smart Wizard -->
