<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="js/lib/jsoneditor/jsoneditor.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/lib/require.js" type="text/javascript"></script>
        <script>
            requirejs.config({
                baseUrl: 'js/lib',
                paths: {
                    jsoneditor: 'jsoneditor/jsoneditor.min'
                },
                shim: {
                    jsoneditor: {
                        exports: ['JSONEditor'],
                        deps: ["ace/ace"]
                    }
                }
            });
        </script>
    </head>
    <body>
        <pre id="editor">function foo(items) {
            var i;
                for (i = 0; i &lt; items.length; i++) {
                    alert("Ace Rocks " + items[i]);
                }
            }
        </pre>
        
        <div id="container"></div>

        <script>
            require(['ace/ace'], function () {
//                ace.require("ace/config").set("packaged", false);
                var editor = ace.edit("editor");
                editor.setTheme("ace/theme/twilight");
                editor.getSession().setMode("ace/mode/javascript");
            });
            require(['ace/ace'],function(ace){
                require(['jquery', 'jsoneditor'], function ($, JSONEditor, ace) {
                    var container = $('#container');
                    var editor = new JSONEditor(container[0], {modes: ['code', 'form', 'text', 'tree', 'view'], mode: "code"});
                    // set json
                    var json = {
                        "Array": [1, 2, 3],
                        "Boolean": true,
                        "Null": null,
                        "Number": 123,
                        "Object": {"a": "b", "c": "d"},
                        "String": "Hello World"
                    };
                    editor.set(json);
                    // get json
                    var json = editor.get();
                });
            });
        </script>
    </body>
</html>