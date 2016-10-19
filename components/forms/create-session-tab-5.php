<!--div class="row">
  <div class="col-xs-12 col-sm-4 col-sm-offset-2">
    <div class="form-group">
      <label class="control-label" for="session_id">Session ID</label>
      <input type="text" id="session_id" class="form-control" placeholder="TBD" disabled>
    </div>
  </div>
</div-->

<fieldset>
  <legend>Presenter Information</legend>
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <div class="form-group">
        <label class="control-label" for="session_primary-presenter">Select the Primary Presenter</label>
        <input type="text" id="session_primary-presenter" class="form-control">
      </div>

      <div class="row">
        <div class="col-xs-6">
          <label class="control-label checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> Add a Co-Presenter
          </label>
        </div>

        <div class="col-xs-6">
          <p class="text-right">
            <a href="#" class="small">see full list of Presenters</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</fieldset>

<fieldset>
  <legend>Duration Information</legend>
  <div class="row">
    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_duration">Duration</label>
        <select class="form-control">
          <option selected disabled>Select a Duration</option>
          <option>This Shouldn't</option>
          <option>be a LOV</option>
          <option>but rather a Duration Picker</option>
          <option>from Kendo UI</option>
        </select>
      </div>
    </div>

    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_language">Presentation Language</label>
        <select class="form-control">
          <option selected disabled>Select a Language</option>
          <option>English</option>
          <option>Chinese</option>
          <option>Korean</option>
          <option>Japanese</option>
        </select>
      </div>
    </div>

    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_audience">Audience</label>
        <select class="form-control">
          <option selected disabled>Select your Audience</option>
          <option>All</option>
          <option>NXP employees</option>
          <option>Rocket Scientists</option>
        </select>
      </div>
    </div>

    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_internal-use"><em>For Internal Use:</em></label>
        <div class="radio">
          <label>
            <input type="radio" name="breaks-option" id="breaks-option" value="splits-across-breaks">
            Splits across breaks
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="attendees-option" id="attendees-option" value="assigned-to-attendees">
            Assigned to attendees
          </label>
        </div>
        <div class="radio disabled">
          <label>
            <input type="radio" name="mandatory-option" id="mandatory-option" value="mandatory-general-session">
            Mandatory general session
          </label>
        </div>
      </div>
    </div>
  </div>
</fieldset>

<fieldset>
  <legend>Comments &amp; Requirements</legend>
  <div class="row">
    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_board_needs">Board Needs</label>
        <textarea class="form-control" rows="4"></textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_hardware_needs">Hardware Needs</label>
        <textarea class="form-control" rows="4"></textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_software_needs">Software Needs</label>
        <textarea class="form-control" rows="4"></textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <label class="control-label" for="session_comments">Comments</label>
        <textarea class="form-control" rows="4"></textarea>
      </div>
    </div>
  </div>
</fieldset>
