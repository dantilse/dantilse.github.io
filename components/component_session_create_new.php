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
            <span class="step_no">1</span>
            <span class="step_descr">Global Session Info<br />
              <small>Required</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#step-2">
            <span class="step_no">2</span>
            <span class="step_descr">Track Info<br />
              <small>Select tracks</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#step-3">
            <span class="step_no">3</span>
            <span class="step_descr">Presentation Info<br />
              <small>Choose settings</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#step-4">
            <span class="step_no">4</span>
            <span class="step_descr">Event Info<br />
              <small>Specific to events</small>
            </span>
          </a>
        </li>
      </ul>

      <div id="step-1">
        <form><!-- class="form-horizontal form-label-left" -->
          <div class="row">
            <div class="col-sm-6">
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

            <div class="col-sm-4 col-sm-offset-2">
              <div class="form-group">
                <label class="control-label" for="session_id">Session ID</label>
                <input type="text" id="session_id" class="form-control" placeholder="TBD" disabled>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12"><h2>Global Session Info</h2></div>
            <div class="col-sm-8">
              <div class="form-group">
                <label class="control-label" for="session_title">Session Title<span class="required">*</span></label>
                <input type="text" id="session_title" required="required" class="form-control">
              </div>

              <div class="form-group">
                <label class="control-label" for="session_abstract">Session Abstract<span class="required">*</span></label>
                <textarea class="form-control" rows="4"></textarea>
              </div>
            </div>

            <div class="col-sm-4">
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
                <label class="control-label" for="session_creator">Session Creator / Company<span class="required">*</span></label>
                <input type="text" id="session_creator" required="required" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label class="control-label" for="session_company">Company Name<span class="required">*</span></label>
                <input type="text" id="session_company" required="required" class="form-control">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label" for="session_business_unit">Business Unit Requesting Content<span class="required">*</span></label>
                <input type="text" id="session_business_unit" required="required" class="form-control">
              </div>
            </div>
          </div>
        </form>

      </div>
      <div id="step-2">
        <h2 class="StepTitle">Session Track Info</h2>
				<form>
					<div class="row">
						<div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="session_template">Primary Track <span class="required">*</span>
                </label>
                <select class="form-control">
                  <option selected disabled>Choose a Primary Track</option>
                  <option>Primary Track 1</option>
                  <option>Primary Track 2</option>
                  <option>Primary Track 3</option>
                  <option>Primary Track 4</option>
                </select>
              </div>
            </div>

						<div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" for="session_template">Sub-Track <span class="required">*</span>
                </label>
                <select class="form-control">
                  <option selected disabled>Choose a Sub-Track</option>
                  <option>Sub-Track 1</option>
                  <option>Sub-Track 2</option>
                  <option>Sub-Track 3</option>
                  <option>Sub-Track 4</option>
                </select>
              </div>
            </div>
					</div>

					<h2 class="StepTitle">Secondary Tracks: (check all that apply)</h2>

					<div class="row">
						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Design, Software &amp; Services
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Insight &amp; Innovation
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Secure Connected &amp; Automated Vehicles
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Secure Mobile, Healthcare, &amp; Wearables
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Banking &amp; Retail
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Cities &amp; Infrastructure
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Home &amp; Buildings
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Machinery &amp; Industrial Automation
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Networks
							</label>
						</div>
					</div>

					<h2 class="StepTitle">Additional Sub-Tracks: (check all that apply)</h2>

					<div class="row">
						<div class="col-xs-12"><h4 class="checklist-title-header">Design, Software &amp; Services</h4></div>
						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Design, Software &amp; Services
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Insight &amp; Innovation
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Secure Connected &amp; Automated Vehicles
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Secure Mobile, Healthcare, &amp; Wearables
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Banking &amp; Retail
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Cities &amp; Infrastructure
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Home &amp; Buildings
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Machinery &amp; Industrial Automation
							</label>
						</div>

						<div class="form-check col-xs-12 col-sm-6 col-md-4">
							<label class="checkbox-inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> Smart Networks
							</label>
						</div>
					</div>
				</form>
      </div>

      <div id="step-3">
        <h2 class="StepTitle">Step 3 Content</h2>
        <p>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div id="step-4">
        <h2 class="StepTitle">Step 4 Content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

    </div>
    <!-- End SmartWizard Content -->
  </div>
</div>
