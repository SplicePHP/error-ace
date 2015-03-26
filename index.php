<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="js/jsoneditor/jsoneditor.min.css" rel="stylesheet" type="text/css"/>
        <script>
            requirejs = {
                baseUrl: 'js',
                paths: {
                    jsoneditor: 'jsoneditor/jsoneditor',
                    ace: 'ace/src-min-noconflict'
                },
                shim: {
                    jsoneditor: {
                        deps: ['ace/ace'],
                        exports: 'JSONEditor'
                    }
                }
            };
        </script>
        <script src="js/require.js" type="text/javascript"></script>
    </head>
    <body>
        <pre id="editor">
            function foo(items) {
            var i;
                for (i = 0; i &lt; items.length; i++) {
                    alert("Ace Rocks " + items[i]);
                }
            }
        </pre>
        <div id="container"></div>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>