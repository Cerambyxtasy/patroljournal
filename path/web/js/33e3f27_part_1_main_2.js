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
        Utils.fillHexaMap($('#map'));
    }

});