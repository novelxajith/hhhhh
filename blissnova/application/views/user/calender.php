
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="<?=BASEURL?>assets/vendor/css/pages/app-calendar.css" />
      <style>
   @media only screen and (max-width :768px) {
    .fc-button-group {
    font-weight: 500;
    font-size: 11px!important;
    letter-spacing: 0.4px;
    text-transform: uppercase;
}
}
      
   </style>
           
 <?php include 'header.php';?>
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card app-calendar-wrapper">
                <div class="row g-0">
                  <!-- Calendar Sidebar -->
                  <div class="col app-calendar-sidebar pt-1" id="app-calendar-sidebar">
                    <div class="p-3 pb-2 my-sm-0 mb-3">
                      <div class="d-grid">
                        <button
                          class="btn btn-primary btn-toggle-sidebar"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#addEventSidebar"
                          aria-controls="addEventSidebar">
                          <i class="mdi mdi-plus me-1"></i>
                          <span class="align-middle">Add Event</span>
                        </button>
                      </div>
                    </div>
                    <div class="p-4">
                      <!-- inline calendar (flatpicker) -->
                      <div class="inline-calendar"></div>

                      <hr class="container-m-nx my-4" />

                      <!-- Filter -->
                      <div class="mb-4">
                        <small class="text-small text-muted text-uppercase align-middle">Filter</small>
                      </div>

                      <div class="form-check form-check-secondary mb-3">
                        <input
                          class="form-check-input select-all"
                          type="checkbox"
                          id="selectAll"
                          data-value="all"
                          checked />
                        <label class="form-check-label" for="selectAll">View All</label>
                      </div>

                      <div class="app-calendar-events-filter">
                        <!--<div class="form-check form-check-danger mb-3">-->
                        <!--  <input-->
                        <!--    class="form-check-input input-filter"-->
                        <!--    type="checkbox"-->
                        <!--    id="select-personal"-->
                        <!--    data-value="personal"-->
                        <!--    checked />-->
                        <!--  <label class="form-check-label" for="select-personal">Personal</label>-->
                        <!--</div>-->
                        <!--<div class="form-check mb-3">-->
                        <!--  <input-->
                        <!--    class="form-check-input input-filter"-->
                        <!--    type="checkbox"-->
                        <!--    id="select-business"-->
                        <!--    data-value="business"-->
                        <!--    checked />-->
                        <!--  <label class="form-check-label" for="select-business">Business</label>-->
                        <!--</div>-->
                        <!--<div class="form-check form-check-warning mb-3">-->
                        <!--  <input-->
                        <!--    class="form-check-input input-filter"-->
                        <!--    type="checkbox"-->
                        <!--    id="select-family"-->
                        <!--    data-value="family"-->
                        <!--    checked />-->
                        <!--  <label class="form-check-label" for="select-family">Family</label>-->
                        <!--</div>-->
                        <!--<div class="form-check form-check-success mb-3">-->
                        <!--  <input-->
                        <!--    class="form-check-input input-filter"-->
                        <!--    type="checkbox"-->
                        <!--    id="select-holiday"-->
                        <!--    data-value="holiday"-->
                        <!--    checked />-->
                        <!--  <label class="form-check-label" for="select-holiday">Holiday</label>-->
                        <!--</div>-->
                        <!--<div class="form-check form-check-info">-->
                        <!--  <input-->
                        <!--    class="form-check-input input-filter"-->
                        <!--    type="checkbox"-->
                        <!--    id="select-etc"-->
                        <!--    data-value="etc"-->
                        <!--    checked />-->
                        <!--  <label class="form-check-label" for="select-etc">ETC</label>-->
                        <!--</div>-->
                      </div>
                    </div>
                  </div>
                  <!-- /Calendar Sidebar -->

                  <!-- Calendar & Modal -->
                  <div class="col app-calendar-content">
                    <div class="card shadow-none border-0 border-start rounded-0">
                      <div class="card-body pb-0">
                        <!-- FullCalendar -->
                        <div id="calendar"></div>
                      </div>
                    </div>
                    <div class="app-overlay"></div>
                    <!-- FullCalendar Offcanvas -->
                    <div
                      class="offcanvas offcanvas-end event-sidebar"
                      tabindex="-1"
                      id="addEventSidebar"
                      aria-labelledby="addEventSidebarLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Event</h5>
                        <button
                          type="button"
                          class="btn-close text-reset"
                          data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <form class="event-form pt-0" id="eventForm" onsubmit="return false">
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="text"
                              class="form-control"
                              id="eventTitle"
                              name="eventTitle"
                              placeholder="Event Title" />
                            <label for="eventTitle">Title</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <select class="select2 select-event-label form-select" id="eventLabel" name="eventLabel">
                              <option data-label="primary" value="Business" selected>Business</option>
                              <option data-label="danger" value="Personal">Personal</option>
                              <option data-label="warning" value="Family">Family</option>
                              <option data-label="success" value="Holiday">Holiday</option>
                              <option data-label="info" value="ETC">ETC</option>
                            </select>
                            <label for="eventLabel">Label</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="text"
                              class="form-control"
                              id="eventStartDate"
                              name="eventStartDate"
                              placeholder="Start Date" />
                            <label for="eventStartDate">Start Date</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="text"
                              class="form-control"
                              id="eventEndDate"
                              name="eventEndDate"
                              placeholder="End Date" />
                            <label for="eventEndDate">End Date</label>
                          </div>
                          <div class="mb-3">
                            <label class="switch">
                              <input type="checkbox" class="switch-input allDay-switch" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                              </span>
                              <span class="switch-label">All Day</span>
                            </label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="url"
                              class="form-control"
                              id="eventURL"
                              name="eventURL"
                              placeholder="https://www.google.com" />
                            <label for="eventURL">Event URL</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4 select2-primary">
                            <select
                              class="select2 select-event-guests form-select"
                              id="eventGuests"
                              name="eventGuests"
                              multiple>
                              <option data-avatar="1.png" value="Jane Foster">Jane Foster</option>
                              <option data-avatar="3.png" value="Donna Frank">Donna Frank</option>
                              <option data-avatar="5.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                              <option data-avatar="7.png" value="Lori Spears">Lori Spears</option>
                              <option data-avatar="9.png" value="Sandy Vega">Sandy Vega</option>
                              <option data-avatar="11.png" value="Cheryl May">Cheryl May</option>
                            </select>
                            <label for="eventGuests">Add Guests</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <input
                              type="text"
                              class="form-control"
                              id="eventLocation"
                              name="eventLocation"
                              placeholder="Enter Location" />
                            <label for="eventLocation">Location</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-4">
                            <textarea class="form-control" name="eventDescription" id="eventDescription"></textarea>
                            <label for="eventDescription">Description</label>
                          </div>
                          <div class="mb-3 d-flex justify-content-sm-between justify-content-start my-4 gap-2">
                            <div class="d-flex">
                              <button type="submit" class="btn btn-primary btn-add-event me-sm-2 me-1">Add</button>
                              <button
                                type="reset"
                                class="btn btn-label-secondary btn-cancel me-sm-0 me-1"
                                data-bs-dismiss="offcanvas">
                                Cancel
                              </button>
                            </div>
                            <button class="btn btn-label-danger btn-delete-event d-none">Delete</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /Calendar & Modal -->
                </div>
              </div>
            </div>
            <!-- / Content -->


 <?php include 'footer.php';?>
 
 
    <script src="<?=BASEURL?>assets/vendor/libs/fullcalendar/fullcalendar.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/select2/select2.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="<?=BASEURL?>assets/vendor/libs/moment/moment.js"></script>
    <script src="<?=BASEURL?>assets/js/app-calendar-events.js"></script>
    <script src="<?=BASEURL?>assets/js/app-calendar.js"></script>