<fieldset>
  <legend>Global Information</legend>
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="form-group">
        <label class="control-label" for="session_template">Select a Template <span class="required">*</span>
        </label>
        <select class="form-control">
          <option selected disabled>Choose Template</option>
          <option>FTF Americas</option>
          <option>FTF China</option>
          <option>Tech Days Americas</option>
          <option>Tech Days Europe</option>
        </select>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4 col-sm-offset-2">
      <div class="form-group">
        <label class="control-label" for="session_id">Session ID</label>
        <input type="text" id="session_id" class="form-control" placeholder="TBD" disabled>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <div class="form-group">
        <label class="control-label" for="session_title">Session Title<span class="required">*</span></label>
        <input type="text" id="session_title" required="required" class="form-control">
      </div>

      <div class="form-group">
        <label class="control-label" for="session_abstract">Session Abstract<span class="required">*</span></label>
        <textarea class="form-control" rows="9"></textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-4">
      <div class="form-group">
        <label class="control-label" for="maracom_contact">Marcom Contact <span class="required">*</span>
        </label>
        <select class="form-control" id="marcon_contact">
          <option selected disabled>Choose Contact</option>
          <option>Ashley Snoey</option>
          <option>Ali Stricklen</option>
        </select>
      </div>

      <div class="form-group">
        <label class="control-label" for="track_owner">Track Owner <span class="required">*</span>
        </label>
        <select class="form-control" id="track_owner">
          <option selected disabled>Choose Track Owner</option>
          <option>Ashley Snoey</option>
          <option>Ali Stricklen</option>
        </select>
      </div>

      <div class="form-group">
        <label class="control-label" for="session_company">Company<span class="required">*</span></label>
        <input type="text" id="session_company" required="required" class="form-control">
      </div>

      <div class="form-group">
        <label class="control-label" for="session_business_unit">Business Unit Requesting Content<span class="required">*</span></label>
        <input type="text" id="session_business_unit" required="required" class="form-control">
      </div>
    </div>
  </div>
</fieldset>
