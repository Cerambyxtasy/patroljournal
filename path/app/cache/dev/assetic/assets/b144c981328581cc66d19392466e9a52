$(document).ready(function() {

    //Ajax hexamap handler
    {
//        $.ajax({
//            url: '/ajax/grabMap',
//            dataType: 'json',
//            type: 'POST',
//            success: function(data) {
//                console.log(data);
//            }
//        });
    }

    //Hexadonal map operations
    {
        if ($('#hexaGrid').length != 0) {
            Utils.fillHexaMap($('#hexaGrid'));
            Utils.bindListeners();
            Utils.defaultValues();
        }
    }

    //Button init
    {
        $('button, .button').button();
        $('.buttonSet,#gridColors').buttonset();
    }

    //Form operations 
    {
        var editor = new TINY.editor.edit('journalEntry_terrain', {
            id: 'tinyeditor',
            width: 584,
            height: 175,
            cssclass: 'tinyeditor',
            controlclass: 'tinyeditor-control',
            rowclass: 'tinyeditor-header',
            dividerclass: 'tinyeditor-divider',
            controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
                'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
                'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
                'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
            footer: true,
            fonts: ['Verdana', 'Arial', 'Georgia', 'Trebuchet MS'],
            xhtml: true,
            cssfile: 'custom.css',
            bodyid: 'editor',
            footerclass: 'tinyeditor-footer',
            toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
            resize: {cssclass: 'resize'}
        });
    }

});