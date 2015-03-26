
require(['ace/ace'], function () {
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.getSession().setMode("ace/mode/javascript");
});
require(['jsoneditor', 'jquery'], function (JSONEditor) {
    var container = $('#container');
    var editor = new JSONEditor(container[0], {mode: "tree", modes: ["tree", "code"]});
    editor.set({some: 'json'});
    var json = editor.get();
});