<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>icinema</title>



		<script>
		  (function(d) {
		    var config = {
		      kitId: 'byf8pmx',
		      scriptTimeout: 3000,
		      async: true
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>

		<link rel="stylesheet" href="{{elixir('css/app.css')}}" media="screen" title="no title">

	</head>
	<body>

		@yield('content')
		<script src="{{ elixir('js/app.js') }}"></script>
	</body>
</html>
