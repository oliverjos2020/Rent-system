<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from spark.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 05:22:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Spark - Responsive Admin &amp; Dashboard Template</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<link href="{{asset('css/modern.css')}}" rel="stylesheet">
	<!-- <link href="css/classic.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script></head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">

		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				
				<h2 class="text-light mt-4">DELSPACE</h2>

				

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						
					</ul>
				</div>

			</nav>
			<main class="content">
				<div class="container-fluid">



						@yield('content')


				</div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Developed by Centrifold Media Tech</a>
								</li>
								
							</ul>
						</div>
						<div class="col-4 text-right">
							<p class="mb-0">
								Powered by Delspace &copy; <?php echo date("Y"); ?>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
    <script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/app-modern.js')}}"></script>

<script>
    $(function() {
        $("#smartwizard-default-primary").smartWizard({
            theme: "default",
            showStepURLhash: false
        });
        $("#smartwizard-default-success").smartWizard({
            theme: "default",
            showStepURLhash: false
        });
        $("#smartwizard-default-danger").smartWizard({
            theme: "default",
            showStepURLhash: false
        });
        $("#smartwizard-default-warning").smartWizard({
            theme: "default",
            showStepURLhash: false
        });
        $("#smartwizard-arrows-primary").smartWizard({
            theme: "arrows",
            showStepURLhash: false
        });
        $("#smartwizard-arrows-success").smartWizard({
            theme: "arrows",
            showStepURLhash: false
        });
        $("#smartwizard-arrows-danger").smartWizard({
            theme: "arrows",
            showStepURLhash: false
        });
        $("#smartwizard-arrows-warning").smartWizard({
            theme: "arrows",
            showStepURLhash: false
        });
        // Validation
        var $validationForm = $("#smartwizard-validation");
        $validationForm.validate({
            errorPlacement: function errorPlacement(error, element) {
                $(element).parents(".error-placeholder").append(
                    error.addClass("invalid-feedback small d-block")
                )
            },
            highlight: function(element) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function(element) {
                $(element).removeClass("is-invalid");
            },
            rules: {
                "wizard-confirm": {
                    equalTo: "input[name=\"wizard-password\"]"
                },
				"country":{
					required: true
				}
            }
        });
        $validationForm
            .smartWizard({
                autoAdjustHeight: false,
                backButtonSupport: false,
                useURLhash: false,
                showStepURLhash: false,
                toolbarSettings: {
                    toolbarExtraButtons: [$("<button class=\"btn btn-submit btn-primary\" type=\"submit\">Finish</button>")]
                }
            })
            .on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                if (stepDirection === 1) {
                    return $validationForm.valid();
                }
				if (stepDirection === 2) {
                    return $validationForm.valid();
                }
                return true;
            });
        $validationForm.find(".btn-submit").on("click", function() {
            if (!$validationForm.valid()) {
                return;
            }
            
			var reg_type = $("#reg_type").val();
			var email_address = $("#email_address").val();
			var title = $("#title").val();
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var address1 = $("#address1").val();
			var address2 = $("#address2").val();
			var country = $("#country").val();
			var city = $("#city").val();
			var zip = $("#zip").val();
			var phone_no = $("#phone_no").val();
			var aid = $("#aid").val();
			var how_did_you_hear = $("#how_did_you_hear").val();
			// if(reg_type=="" || email_address="" || title="" || firstname="" || lastname="" || address1="" || country="" || city="" || zip="" || phone_no="" || aid="" || how_did_you_hear=""){
			// 	alert("All fields are required");
			// }else{
			
			// }
			var table = '<table class="table table-bordered table table-striped mt-4"><tr><th class="text-center" colspan="2">CONFIRM YOUR DETAILS</th></tr><tr><th>Registration Type</th><td>'+reg_type+'</td></tr><tr><th>Title</th><td>'+title+'</td></tr><tr><th>Firstname</th><td>'+firstname+'</td></tr><tr><th>Lastname</th><td>'+lastname+'</td></tr></tr><tr><th>Email Address</th><td>'+email_address+'</td></tr><tr><th>Address 1</th><td>'+address1+'</td></tr><tr><th>Address 2</th><td>'+address2+'</td></tr><tr><th>Country</th><td>'+country+'</td></tr><tr><th>City</th><td>'+city+'</td></tr><tr><th>ZIP Code</th><td>'+zip+'</td></tr><tr><th>Phone No</th><td>'+phone_no+'</td></tr><tr><th>Do you require specific aids or services?</th><td>'+aid+'</td></tr></table>';
            $("#response").html(table);
            // alert(address);
            // alert("Great! The form is valid and ready to submit.");
			// <a onclick=\"loadModal(\'setup/monify.php?bn='+obj.responseBody.bankName+'&&acn='+obj.responseBody.accountName+'&&ref='+obj.responseBody.paymentReference+'&&fee='+obj.responseBody.fee+'&&amount='+obj.responseBody.amount+'&&acnn='+obj.responseBody.accountNumber+'\',\'modal_div\')\" href="javascript:void(0)">Click to proceed</a>
            // return false;
        });
    });

	function sponsor(){
		var input-amount = '<div class="form-group"><label class=\"form-label"\>Email Address <span class=\"text-danger"\>*</span> </label><input name="email_address" id="email_address" type="email" class="form-control required"></div>';
		$("#sponsor-amount").html(input-amount);
	}

</script>
	<script>
		$(function() {
			// Datatables basic
			$('#datatables-basic').DataTable({
				responsive: true
			});
			// Datatables with Buttons
			var datatablesButtons = $('#datatables-buttons').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
		});
	</script>
	<script>
		$(function() {
			if (!window.Quill) {
				return $("#quill-editor,#quill-toolbar,#quill-bubble-editor,#quill-bubble-toolbar").remove();
			}
			var editor = new Quill("#quill-editor", {
				modules: {
					toolbar: "#quill-toolbar"
				},
				placeholder: "Type something",
				theme: "snow"
			});
			var bubbleEditor = new Quill("#quill-bubble-editor", {
				placeholder: "Compose an epic...",
				modules: {
					toolbar: "#quill-bubble-toolbar"
				},
				theme: "bubble"
			});
		});
	</script>

</body>


<!-- Mirrored from spark.bootlab.io/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 05:22:19 GMT -->
</html>
