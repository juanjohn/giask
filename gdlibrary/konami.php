<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en">
<head>
<title>Form Validation</title>
<link 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="accepting user input" />


<script type="text/javascript" >




var Konami = function(callback) {
	var konami= {
			addEvent:function ( obj, type, fn, ref_obj )
			{
				if (obj.addEventListener)
					obj.addEventListener( type, fn, false );
				else if (obj.attachEvent)
				{
					// IE
					obj["e"+type+fn] = fn;
					obj[type+fn] = function() { obj["e"+type+fn]( window.event,ref_obj ); }
					obj.attachEvent( "on"+type, obj[type+fn] );
				}
			},
	        input:"",
	        pattern:"3838404037393739666513",		
	        load: function(link) {					
				this.addEvent(document,"keydown", function(e,ref_obj) {											
					if (ref_obj) konami = ref_obj; // IE
					konami.input+= e ? e.keyCode : event.keyCode;
					if (konami.input.length > konami.pattern.length) konami.input = konami.input.substr((konami.input.length - konami.pattern.length));
					if (konami.input == konami.pattern) {
                    konami.code(link);
					konami.input="";
                   	return;
                    }
				},this);
           

				},
	        code: function(link) { window.location=link},
	        
	}

	typeof callback === "string" && konami.load(callback);
	if(typeof callback === "function")  {
		konami.code = callback;
		konami.load();
	}

	return konami;
}

var konami = new Konami('task3.php');

</script>

</head>
<body>
</body>
</html>