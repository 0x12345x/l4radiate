@extends('layouts.bookcheetah')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop


@section('assets')
	<link rel="stylesheet" href="{{ asset('assets/styles/css/errorpage.css')}} ">

	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "452a12de-ea14-4da4-aeca-ef5d5287927c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

	<script type="text/javascript">
	var uvOptions = {};
		(function() {
		  var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
		  uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/YOURSPECIALKEY.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
		})();
	</script>

@stop

@section('toplinks2')
	@if (Auth::check())
		<li>Logged in as {{ Auth::user()->fullName() }}</li> |
		<li>College {{ Auth::user()->collegeName() }}</li> |
		<li>My Books</li> | 
	    <li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">My Account</a></li> | 
	    <li><a href="{{ URL::to('account/logout') }}">Log Out</a></li>
	@else
		<li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
	    <li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
	@endif
@stop

@section('assets')
	<!-- UserVoice JavaScript SDK (only needed once on a page) -->
	<script>(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/DaBJd20KGXiNvgpEJT8A.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})()</script>

	<!-- A tab to launch the Classic Widget -->
	<script>
	UserVoice = window.UserVoice || [];
	UserVoice.push(['showTab', 'classic_widget', {
	  mode: 'full',
	  primary_color: '#cc6d00',
	  link_color: '#007dbf',
	  default_mode: 'support',
	  forum_id: 215869,
	  tab_label: 'Feedback & Support',
	  tab_color: '#163fe3',
	  tab_position: 'middle-right',
	  tab_inverted: false
	}]);
	</script>
@stop

@section('content')
	
	<section class="not-found">
		<div class="error_container">
	        <h1>404 NOT FOUND</h1>
	        <span class="sad">:(</span>
	        <p>Sorry this page can not be found.</p>
	        <p>Please check if you typed your link correctly.</p>
	    </div>
	</section>

	<!-- UserVoice JavaScript SDK (only needed once on a page) -->
<script>(function(){
	var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/DaBJd20KGXiNvgpEJT8A.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)
})()
</script>

<!-- A link to launch the Classic Widget -->
<a href="javascript:void(0)" data-uv-lightbox="classic_widget" data-uv-mode="full" data-uv-primary-color="#cc6d00" data-uv-link-color="#007dbf" data-uv-default-mode="support" data-uv-forum-id="215869">
	Feedback &amp; Support
</a>

@stop