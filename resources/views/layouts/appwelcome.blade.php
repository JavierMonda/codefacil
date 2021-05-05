<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - CodeFácil.com</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
	<!-- Quantcast Choice. Consent Manager Tag v2.0 (for TCF 2.0) -->
	<script type="text/javascript" async=true>
	(function() {
	  var host = window.location.hostname;
	  var element = document.createElement('script');
	  var firstScript = document.getElementsByTagName('script')[0];
	  var milliseconds = new Date().getTime();
	  var url = 'https://quantcast.mgr.consensu.org'
		.concat('/choice/', 'YQEYWC-LsJY5-', '/', host, '/choice.js')
		.concat('?timestamp=', milliseconds);
	  var uspTries = 0;
	  var uspTriesLimit = 3;
	  element.async = true;
	  element.type = 'text/javascript';
	  element.src = url;

	  firstScript.parentNode.insertBefore(element, firstScript);

	  function makeStub() {
		var TCF_LOCATOR_NAME = '__tcfapiLocator';
		var queue = [];
		var win = window;
		var cmpFrame;

		function addFrame() {
		  var doc = win.document;
		  var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);

		  if (!otherCMP) {
			if (doc.body) {
			  var iframe = doc.createElement('iframe');

			  iframe.style.cssText = 'display:none';
			  iframe.name = TCF_LOCATOR_NAME;
			  doc.body.appendChild(iframe);
			} else {
			  setTimeout(addFrame, 5);
			}
		  }
		  return !otherCMP;
		}

		function tcfAPIHandler() {
		  var gdprApplies;
		  var args = arguments;

		  if (!args.length) {
			return queue;
		  } else if (args[0] === 'setGdprApplies') {
			if (
			  args.length > 3 &&
			  args[2] === 2 &&
			  typeof args[3] === 'boolean'
			) {
			  gdprApplies = args[3];
			  if (typeof args[2] === 'function') {
				args[2]('set', true);
			  }
			}
		  } else if (args[0] === 'ping') {
			var retr = {
			  gdprApplies: gdprApplies,
			  cmpLoaded: false,
			  cmpStatus: 'stub'
			};

			if (typeof args[2] === 'function') {
			  args[2](retr);
			}
		  } else {
			queue.push(args);
		  }
		}

		function postMessageEventHandler(event) {
		  var msgIsString = typeof event.data === 'string';
		  var json = {};

		  try {
			if (msgIsString) {
			  json = JSON.parse(event.data);
			} else {
			  json = event.data;
			}
		  } catch (ignore) {}

		  var payload = json.__tcfapiCall;

		  if (payload) {
			window.__tcfapi(
			  payload.command,
			  payload.version,
			  function(retValue, success) {
				var returnMsg = {
				  __tcfapiReturn: {
					returnValue: retValue,
					success: success,
					callId: payload.callId
				  }
				};
				if (msgIsString) {
				  returnMsg = JSON.stringify(returnMsg);
				}
				event.source.postMessage(returnMsg, '*');
			  },
			  payload.parameter
			);
		  }
		}

		while (win) {
		  try {
			if (win.frames[TCF_LOCATOR_NAME]) {
			  cmpFrame = win;
			  break;
			}
		  } catch (ignore) {}

		  if (win === window.top) {
			break;
		  }
		  win = win.parent;
		}
		if (!cmpFrame) {
		  addFrame();
		  win.__tcfapi = tcfAPIHandler;
		  win.addEventListener('message', postMessageEventHandler, false);
		}
	  };

	  if (typeof module !== 'undefined') {
		module.exports = makeStub;
	  } else {
		makeStub();
	  }

	  var uspStubFunction = function() {
		var arg = arguments;
		if (typeof window.__uspapi !== uspStubFunction) {
		  setTimeout(function() {
			if (typeof window.__uspapi !== 'undefined') {
			  window.__uspapi.apply(window.__uspapi, arg);
			}
		  }, 500);
		}
	  };

	  var checkIfUspIsReady = function() {
		uspTries++;
		if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
		  console.warn('USP is not accessible');
		} else {
		  clearInterval(uspInterval);
		}
	  };

	  if (typeof window.__uspapi === 'undefined') {
		window.__uspapi = uspStubFunction;
		var uspInterval = setInterval(checkIfUspIsReady, 6000);
	  }
	})();
	</script>
	<!-- End Quantcast Choice. Consent Manager Tag v2.0 (for TCF 2.0) -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38114280-19"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-38114280-19');
	</script>
	<script src='https://www.google.com/recaptcha/api.js?render=6LdatasZAAAAAKclP0gK4ViHweQXdRXjXz219Lkg'> 
	</script>
	<script>
	grecaptcha.ready(function() {
	grecaptcha.execute('6LdatasZAAAAAKclP0gK4ViHweQXdRXjXz219Lkg', {action: 'formulario'})
	.then(function(token) {
	var recaptchaResponse = document.getElementById('recaptchaResponse');
	recaptchaResponse.value = token;
	});});
	</script>

	<script data-ad-client="ca-pub-3796249538785179" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <div id="app">
        @extends('layouts.partials.navwelcome')
        @yield('content')
        @extends('layouts.partials.footer')
    </div>
</body>
</html>
