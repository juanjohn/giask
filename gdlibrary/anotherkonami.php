<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en">
<head>
<title>Form Validation</title>
<link 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="accepting user input" />


<script type="text/javascript" >




var Konami = {};

(function(Konami, window) {
	'use strict';

	/**
	 * Creates an event handler responding to the specified sequence.
	 * @param {...number|function()} arguments
	 * @return {function(Event)}
	 */
	var sequence = Konami.sequence = function() {
		var sequence = Array.prototype.slice.call(arguments),
			state = 0;

		/**
		 * Event handler
		 * @param {Event|number} e
		 */
		return function(e) {
			// patch legacy IE
			e = (e || window.event);
			e = (e.keyCode || e.which || e);

			if (e === sequence[state]) {
				// move next and peek
				var action = sequence[++state];

				// sequence complete when a function is reached
				if (typeof action !== 'function') {
					return;
				}

				// fire action
				action();
			}

			// reset when sequence completed or broken
			state = 0;
		};
	};

	/**
	 * Creates an event handler responding to the Konami Code.
	 * @param {function()} action completed sequence callback
	 * @return {function(Event)}
	 */
	Konami.code = function(action) {
		return sequence(38, 38, 40, 40, 37, 39, 37, 39, 66, 65, action);
	};

})(Konami, window);



</script>

</head>
<body>
</body>
</html>