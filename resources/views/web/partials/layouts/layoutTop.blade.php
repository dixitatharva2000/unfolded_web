<!DOCTYPE html>
<html lang="en">

@include('web.partials.head')

<body>
	<div class="paginacontainer">
		<div class="progress-wrap">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
			</svg>
		</div>
	</div>

	<!--=====progress END=======-->

	<!--=====PRELOADER START=======-->

	{{-- <div class="sec-preloader">
		<div class="overlay-preloader flex cac vac" id="preloader">
			<div>
				<div class="loader preloader flex vac">
					<svg width="200" height="200">
						<circle class="background" cx="90" cy="90" r="80" transform="rotate(-90, 100, 90)" />
						<circle class="outer" cx="90" cy="90" r="80" transform="rotate(-90, 100, 90)" />
					</svg>
					<span class="circle-background"></span>
					<span class="logo animated fade-in"> </span>
				</div>
			</div>
		</div>
	</div> --}}

	<!--=====PRELOADER START=======-->


    @include('web.partials.header')
