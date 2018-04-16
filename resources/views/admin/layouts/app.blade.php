<!DOCTYPE html>
<html lang="en">
<head>

	@include('admin.layouts.head')

</head>
<body class="hold-transition skin-purple sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('admin.layouts.header')
		</header>
		@include('admin.layouts.sidebar')

		@section('main-content')
			@show

		@include('admin.layouts.footer')

	</div>
</body>
</html>