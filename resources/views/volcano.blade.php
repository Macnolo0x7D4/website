@extends('layouts.layout1')
@section('title')
	Volcano
@endsection
@section('main')
<link rel="stylesheet" href="/css/volcano.css">
<canvas id='canvas' width="1024px" height="600px">
	HTML5 canvas appears to be unsupported in the current browser.<br />
	Please try updating or use a different browser.
</canvas>
<div id='status'>
	<div id='status-progress' style='display: none;' oncontextmenu='event.preventDefault();'><div id ='status-progress-inner'></div></div>
	<div id='status-indeterminate' style='display: none;' oncontextmenu='event.preventDefault();'>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div id='status-notice' class='godot' style='display: none;'></div>
</div>

<script type='text/javascript' src='/js/Volcano.js'></script>
<script type='text/javascript'>//<![CDATA[

	var engine = new Engine;
	var setStatusMode;
	var setStatusNotice;

	(function() {

		const MAIN_PACK = '/Volcano.pck';
		const INDETERMINATE_STATUS_STEP_MS = 100;

		var canvas = document.getElementById('canvas');
		var statusProgress = document.getElementById('status-progress');
		var statusProgressInner = document.getElementById('status-progress-inner');
		var statusIndeterminate = document.getElementById('status-indeterminate');
		var statusNotice = document.getElementById('status-notice');

		var initializing = true;
		var statusMode = 'hidden';

		var animationCallbacks = [];
		function animate(time) {
			animationCallbacks.forEach(callback => callback(time));
			requestAnimationFrame(animate);
		}
		requestAnimationFrame(animate);

		function adjustCanvasDimensions() {
			canvas.width = innerWidth;
			canvas.height = innerHeight;
		}
		animationCallbacks.push(adjustCanvasDimensions);
		adjustCanvasDimensions();

		setStatusMode = function setStatusMode(mode) {

			if (statusMode === mode || !initializing)
				return;
			[statusProgress, statusIndeterminate, statusNotice].forEach(elem => {
				elem.style.display = 'none';
			});
			if (animateStatusIndeterminate in animationCallbacks) {
				animationCallbacks.erase(animateStatusIndeterminate);
			}
			switch (mode) {
				case 'progress':
					statusProgress.style.display = 'block';
					break;
				case 'indeterminate':
					statusIndeterminate.style.display = 'block';
					animationCallbacks.push(animateStatusIndeterminate);
					break;
				case 'notice':
					statusNotice.style.display = 'block';
					break;
				case 'hidden':
					break;
				default:
					throw new Error('Invalid status mode');
			}
			statusMode = mode;
		}

		function animateStatusIndeterminate(ms) {

			var i = Math.floor(ms / INDETERMINATE_STATUS_STEP_MS % 8);
			if (statusIndeterminate.children[i].style.borderTopColor == '') {
				Array.prototype.slice.call(statusIndeterminate.children).forEach(child => {
					child.style.borderTopColor = '';
				});
				statusIndeterminate.children[i].style.borderTopColor = '#dfdfdf';
			}
		}

		setStatusNotice = function setStatusNotice(text) {

			while (statusNotice.lastChild) {
				statusNotice.removeChild(statusNotice.lastChild);
			}
			var lines = text.split('\n');
			lines.forEach((line) => {
				statusNotice.appendChild(document.createTextNode(line));
				statusNotice.appendChild(document.createElement('br'));
			});
		};

		engine.setProgressFunc((current, total) => {

			if (total > 0) {
				statusProgressInner.style.width = current/total * 100 + '%';
				setStatusMode('progress');
				if (current === total) {
					// wait for progress bar animation
					setTimeout(() => {
						setStatusMode('indeterminate');
					}, 500);
				}
			} else {
				setStatusMode('indeterminate');
			}
		});

		function displayFailureNotice(err) {
			var msg = err.message || err;
			console.error(msg);
			setStatusNotice(msg);
			setStatusMode('notice');
			initializing = false;
		};

		if (!Engine.isWebGLAvailable()) {
			displayFailureNotice('WebGL not available');
		} else {
			setStatusMode('indeterminate');
			engine.setCanvas(canvas);
			engine.startGame(MAIN_PACK).then(() => {
				setStatusMode('hidden');
				initializing = false;
			}, displayFailureNotice);
		}
	})();
//]]></script>
@endsection