<div class="x_panel">
  <div class="x_title">
    <h2><?php echo $componentTitle; ?></h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
    <form action="form_upload.html" class="dropzone">
      <div class="form-group select-file-group">
        <label for="exampleInputFile">Select a File</label>
        <input type="file" id="exampleInputFile">
      </div>

      <!--div class="form-group select-file-group">
        <label for="btn_select_file">Drag file over or </label>
        <button type="button" class="btn btn-default" id="btn_select_file"><i class="fa fa-folder-open-o"></i> Select a File</button>
      </div-->
    </form>
  </div>
</div>
