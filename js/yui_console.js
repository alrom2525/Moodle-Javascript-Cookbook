YUI().use("console", function(Y)
{

    var myConsole = new Y.Console({
    	strings:{
    			title: 'Log Console',
    			pause : 'Pause',
		        clear : 'Clear',
		        collapse : 'Collapse',
		        expand : 'Expand'
    		}
    	});
    	
    myConsole.render();
			
	Y.log("I am an info message.", "info");
	Y.log("I am a warning.", "warn");
	Y.log("I am an error.", "error");
 
});