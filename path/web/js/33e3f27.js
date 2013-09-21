$(document).ready(function() {

    //Ajax hexamap handler
    {
        $.ajax({
            url: '/ajax/grabMap',
            dataType: 'json',
            type: 'POST',
            success: function(data) {
                console.log(data);
            }
        });
    }

    //Hexadonal map operations
    {
        Utils.fillHexaMap($('#hexaGrid'));
        Utils.bindListeners();
        Utils.defaultValues();
    }

    //Button init
    {
        $('button').button();
        $('.buttonSet,#gridColors').buttonset();
    }

});