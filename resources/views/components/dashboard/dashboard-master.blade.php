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
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="{{route('home')}}">
				<img src="{{asset('img/logo-inverse.png')}}" style="max-height:50px;">
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="{{Auth()->user()->avatar}}" class="img-fluid rounded-circle mb-2" alt="{{Auth()->user()->name}}" />
					<div class="font-weight-bold">{{Auth()->user()->name}}</div>
					{{-- <small>{{Auth()->user()->name}}</small>  --}}
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a href="{{route('dashboard.index')}}" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>


					@if(auth()->user()->userHasRole('Admin'))
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('dashboard.users')}}">
							<i class="align-middle mr-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Users</span>
						</a>
					</li>
					{{-- <li class="sidebar-item">
						<a href="#inspection" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fas fa-car"></i> <span class="align-middle">Inspection</span>
						</a>
						<ul id="inspection" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.inspection-awaiting-payt')}}">Awaiting Payment for Inspection</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.manage-inspection-pending')}}">Pending Inspection</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.manage-inspection')}}">Finished Inspection</a></li>
						</ul>
					</li> --}}
					<li class="sidebar-item">
						<a href="#authorization" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fas fa-cog"></i> <span class="align-middle">Authorization</span>
						</a>
						<ul id="authorization" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.roles')}}">Roles</a></li>
							{{-- <li class="sidebar-item"><a class="sidebar-link" href="">Permissions</a></li> --}}
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#cat" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Category</span>
						</a>
						<ul id="cat" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.categories')}}">Manage Categories</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a href="#faq" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">FAQs</span>
						</a>
						<ul id="faq" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.faq')}}">Manage FAQs</a></li>
						</ul>
					</li>
					{{-- <li class="sidebar-item">
						<a class="sidebar-link" href="{{route('dashboard.location')}}">
							<i class="align-middle mr-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Location</span>
						</a>
					</li> --}}
					<li class="sidebar-item">
						<a href="#post" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Posts</span>
						</a>
						<ul id="post" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.create-post')}}">Create Post</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.manage-post')}}">Manage Post</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a href="#event" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle mr-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">Event</span>
						</a>
						<ul id="event" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.create-event')}}">Create Event</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{route('dashboard.manage-event')}}">Manage Event</a></li>
						</ul>
					</li>
					@else
					<li class="sidebar-item">
						<a href="{{route('dashboard.manage-inspection')}}" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-car"></i> <span class="align-middle">Inspection</span>
						</a>
					</li>
					@endif

					<li class="sidebar-header">
						Profile
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('dashboard.profile', auth()->user())}}">
							<i class="align-middle mr-2 fas fa-fw fa-user-alt"></i> <span class="align-middle">Profile</span>
						</a>
					</li>


					<li class="sidebar-item">
						<form action="/logout" method="post">
							@csrf
							<button class="btn btn-primary dropdown-item sidebar-link"><i class="align-middle mr-2 fas fa-fw fa-arrow-alt-circle-right"></i> Logout</button>
							</form>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex mr-2">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="form-inline d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-toggle="dropdown">
								<i class="align-middle fas fa-envelope-open"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Michelle Bilodeau</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">5m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Kathie Burton</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Alexander Groves</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Daisy Seger</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ml-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
								<span class="indicator"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ml-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="{{route('dashboard.profile', auth()->user())}}"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<form action="/logout" method="post">
								@csrf
								<button class="btn btn-primary dropdown-item"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Logout</button>
								</form>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
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
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-4 text-right">
							<p class="mb-0">
								&copy; 2020 - <a href="dashboard-default.html" class="text-muted">Spark</a>
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
	<script src="{{asset('js/app-modern.js')}}"></script>
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
