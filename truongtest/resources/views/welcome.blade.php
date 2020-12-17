{{--<!doctype html>--}}
{{--<html lang = "en">--}}
{{--<head>--}}
{{--    <meta charset = "utf-8">--}}
{{--    <title>jQuery UI Droppable - Default functionality</title>--}}
{{--    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"--}}
{{--          rel = "stylesheet">--}}
{{--    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>--}}
{{--    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>--}}
{{--    <style>--}}
{{--        #draggable-1 {--}}
{{--            width: 100px; height: 50px; padding: 0.5em; float: left;--}}
{{--            margin: 22px 5px 10px 0;--}}
{{--        }--}}
{{--        #droppable-1 {--}}
{{--            width: 120px; height: 90px;padding: 0.5em; float: left;--}}
{{--            margin: 10px;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <script>--}}
{{--        $(function() {--}}
{{--            $( "#draggable-1" ).draggable();--}}
{{--            $( "#droppable-1" ).droppable({--}}
{{--                drop: function( event, ui ) {--}}
{{--                    alert("Element: " + ui.draggable.text());--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id = "draggable-1" class = "ui-widget-content">--}}
{{--    <p>Drag me to my target</p>--}}
{{--</div>--}}
{{--<div id = "droppable-1" class = "ui-widget-header">--}}
{{--    <p>Drop here</p>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
{{--    <!doctype html>--}}
{{--<html lang = "en">--}}
{{--<head>--}}
{{--    <meta charset = "utf-8">--}}
{{--    <title>jQuery UI Accordion Example </title>--}}
{{--    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"--}}
{{--          rel = "stylesheet">--}}
{{--    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>--}}
{{--    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>--}}
{{--    <script>--}}
{{--        $(function() {--}}
{{--            $( "#accordion-1" ).accordion();--}}
{{--        });--}}
{{--    </script>--}}

{{--    <style>--}}
{{--        #accordion-1{font-size: 14px;}--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id = "accordion-1">--}}
{{--    <h3>Tab 1</h3>--}}
{{--    <div>--}}
{{--        <p>--}}
{{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit,--}}
{{--            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--            Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--            laboris nisi ut aliquip ex ea commodo consequat.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <h3>Tab 2</h3>--}}
{{--    <div>--}}
{{--        <p>--}}
{{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit,--}}
{{--            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--            Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--            laboris nisi ut aliquip ex ea commodo consequat.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <h3>Tab 3</h3>--}}
{{--    <div>--}}
{{--        <p>--}}
{{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit,--}}
{{--            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--            Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--            laboris nisi ut aliquip ex ea commodo consequat.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

{{--    <!DOCTYPE html>--}}
{{--<html>--}}
{{--<body>--}}
{{--<div id="demo">--}}
{{--    <h2>The XMLHttpRequest Object</h2>--}}
{{--    <button type="button" onclick="loadDoc()">Change Content</button>--}}
{{--</div>--}}
{{--<script>--}}
{{--    function loadDoc() {--}}
{{--        var xhttp = new XMLHttpRequest();--}}
{{--        xhttp.open("GET", "ajax_info.txt", false);--}}
{{--        xhttp.send();--}}
{{--        if (xhttp.status == 200) {--}}
{{--            document.getElementById("demo").innerHTML = xhttp.responseText;--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html>
<body>
<div id="demo">
    <h2>The XMLHttpRequest Object</h2>
    <button type="button" onclick="loadDoc()">Change Content</button>
</div>
<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "ajax_info.txt", true);
        xhttp.send();
    }
</script>
</body>
</html>
