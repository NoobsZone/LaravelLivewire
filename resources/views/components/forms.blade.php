<title>Livewire Dashboard - Forms</title>
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Forms</h1>
            <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
        </div>
        <div>
            <a href="/documentation/components/forms/index.html" class="btn btn-outline-gray" target="_blank"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">     
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                       
                        <div class="mb-3">
                            <label for="firstName">Name</label>
                            <input type="text" class="form-control is-valid" id="firstName" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>                
                        </div>
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-4 col-sm-6">

                        <!-- Form -->
                        <div class="my-4">
                            <label for="textarea">Example textarea</label>
                            <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="usernameValidate">Username</label>
                            <input type="text" class="form-control is-invalid" id="usernameValidate" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>               
                        </div>
                        <!-- End of Form -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="mb-3">
                            <label for="birthday">Birthday</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </span>
                                <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                            </div>
                        </div>
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="disabledTextInput">Name</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect">Disabled select menu</label>
                            <select id="disabledSelect" class="form-control" disabled>
                            <option>Disabled select</option>
                            </select>
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <label class="my-1 me-2" for="country">Country</label>
                            <select class="form-select" id="country" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <!-- End of Form -->
                    </div>
                </div>
                <div class="row mb-5 mb-lg-5">
                    <div class="col-lg-3 col-md-6">
                        <!-- Checkboxes -->
                        <div class="mb-3">
                            <span class="h6 fw-bold">Checkboxes Round</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                            <label class="form-check-label" for="defaultCheck10">
                              Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck20" disabled>
                            <label class="form-check-label" for="defaultCheck20">
                              Disabled checkbox
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                        <!-- Radio -->
                        <fieldset>
                            <legend class="h6">Radios</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Default radio
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  Second default radio
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                <label class="form-check-label" for="exampleRadios3">
                                  Disabled radio
                                </label>
                              </div>
                            <!-- End of Radio -->
                        </fieldset>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>