<x-dashboard.dashboard-register>
    @section('content')

    <div class="main">

        <main class="content">
            <div class="container-fluid">

                <div class="header">
                    <h1 class="header-title">
                        Register
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Secure a spot</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="row">

                    <div class="col-12">
                        <form id=""  class="wizard wizard-primary" action="javascript:void(0)">
                            {{-- <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="#validation-step-1">INFORMATION<br /><small>Bio Data</small></a></li>
                                <li class="nav-item"><a class="nav-link" href="#validation-step-2">Address<br /><small>Bio Data</small></a></li>
                                <li class="nav-item"><a class="nav-link" href="#validation-step-3">Third Step<br /><small>Step description</small></a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#validation-step-4">SUMMARY<br /><small>Confirm Information</small></a></li> 
                            </ul> --}}

                            <div class="tab-content container-fluid p-4">
                                <div id="selfservice_stage" class="progress thin">
                                    <div id="selfservice_stage_progressbar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                    </div>
                                </div>
                                <div id="step-1" class="mt-4">
                                    <h3>INFORMATION BIO-DATA</h3>
                                    <div class="form-group">
                                        Registration Type <span class="text-danger">*</span>
                                        <div class="custom-controls-stacked mt-3">

                                            <label class="custom-control custom-radio">
                                                <input name="reg_type" type="radio" id="reg_type" class="custom-control-input" value="Participant" required>
                                                <span class="custom-control-label">Participant</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="reg_type" type="radio" id="reg_type" class="custom-control-input" value="Sponsor" required onclick="sponsor()">
                                                <span class="custom-control-label">Sponsor</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="reg_type" type="radio" class="custom-control-input" value="Special guest" required>
                                                <span class="custom-control-label">Special guest</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Email Address
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input name="email_address" id="email_address" type="email" class="form-control required">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label class="form-label">Title/Rank
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input name="title" id="title" type="text" class="form-control required">
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <label class="form-label">First Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input name="firstname" id="firstname" type="text" class="form-control required">
                                            </div>
                                            <div class="col-md-6">
                                                    <label class="form-label">Last Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input name="lastname" id="lastname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sponsor-amount">
                                        
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block" onclick="next()">Next</button>
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="step-2" class="d-none mt-4">
                                    <h3>ADDRESS</h3>
                                    <div class="form-group">
                                        <label class="form-label">Address 1
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input name="address" type="text" id="address1" class="form-control required" required> 
                                    </div>
                                    <div class="form-group mb-0">
                                        <label class="form-label">Address 2</label>
                                        <input name="wizard-address" id="address2" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Country/Region
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input name="country" id="country" type="text" class="form-control required" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <label class="form-label">City
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input name="city" id="city" type="text" class="form-control required" required>
                                            </div>
                                            <div class="col-md-6">
                                                    <label class="form-label">State/Province
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input name="state" type="text" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <label class="form-label">ZIP/Postal Code
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input name="zip" id="zip" type="text" class="form-control required" required>
                                            </div>
                                            <div class="col-md-6">
                                                    <label class="form-label">Phone Number
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input name="phone_no" id="phone_no" type="number" class="form-control required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        Do you require specific aids or services? <span class="text-danger">*</span>
                                        <div class="custom-controls-stacked mt-3">
                                            <label class="custom-control custom-radio">
                                                <input name="aid" type="radio" id="aid" class="custom-control-input" value="No" required>
                                                <span class="custom-control-label">No</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="aid" id="aid" type="radio" class="custom-control-input" value="visual" required>
                                                <span class="custom-control-label">Visual</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="aid" id="aid" type="radio" class="custom-control-input" value="audio" required>
                                                <span class="custom-control-label">Audio</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input name="aid" id="aid" type="radio" class="custom-control-input" value="mobile" required>
                                                <span class="custom-control-label">Mobile</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block" onclick="next1()">Next</button>
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                        </div>
                                    </div>

                                </div>
                                <div id="step-3" class="d-none mt-4">
                                    <h3>REVIEW</h3>
                                    <div id="response">
                                    <div class="form-group">
                                        How did you hear about us? <span class="text-danger">*</span>
                                        <div class="custom-controls-stacked mt-3">
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Event Website">
                                                <span class="custom-control-label">Event Website</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Family/Friend">
                                                <span class="custom-control-label">Family/Friend</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Employer/Colleague">
                                                <span class="custom-control-label">Employer/Colleague</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Online Advertisement">
                                                <span class="custom-control-label">Online Advertisement</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Press Release/Media">
                                                <span class="custom-control-label">Press Release/Media</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Publication or Advertisement">
                                                <span class="custom-control-label">Publication or Advertisement</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Social Media">
                                                <span class="custom-control-label">Social Media</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Direct Mail">
                                                <span class="custom-control-label">Direct Mail</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Email">
                                                <span class="custom-control-label">Email</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Word of mouth">
                                                <span class="custom-control-label">Word of mouth</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Past Attendee">
                                                <span class="custom-control-label">Past Attendee</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Web Search">
                                                <span class="custom-control-label">Web Search</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input  id="how_did_you_hear" required type="radio" class="custom-control-input" value="Other">
                                                <span class="custom-control-label">Other</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" onclick="next2()">Next</button>
                                        </div>
                                    </div>
                                    <div class="col-md-9">

                                    </div>
                                </div>
                                <div id="step-4" class="d-none mt-4">
                                    <h3>REVIEW</h3>
                                    <div id="response">
                                    
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" onclick="next3()">Next</button>
                                        </div>
                                    </div>
                                    <div class="col-md-9">

                                    </div>
                                </div>
                                    {{-- <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">I agree with the Terms and Conditions</span>
                                        </label>
                                    </div> --}}
                                </div>
                               
                            </div>
                        </form>
                        <script src="https://js.paystack.co/v1/inline.js"></script>
                    </div>
                </div>

            </div>
        </main>

    </div>

    @endsection
</x-dashboard.dashboard-register>
