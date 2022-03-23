YUI().use("node-base", function(Y)
{
    Y.on(
        "available",
        function()
        {
            printMessage("Element #container 'available'");
        },
        "#container"
    );
    Y.on(
        "contentready",
        function()
        {
            printMessage("Element #container 'contentready'");
        },
        "#container"
    );
    Y.on(
        "domready",
        function()
        {
            printMessage("Element #container 'domready'");
        },
        "#container"
    );
    Y.on(
        "load",
        function()
        {
            printMessage("Element #container 'load'");
        },
        Y.config.win
    );
    var order = 1;
    var container = Y.one('#container');
    function printMessage(message){
        container.append('<p>' + order++ + '. ' + message + '</p>');
    }
});