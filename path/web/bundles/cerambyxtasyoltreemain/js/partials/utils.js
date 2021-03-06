var Utils = {
// Setup
    init: function(options) {
        this.onResize();
        $(window).trigger('resize');
    },
    // Actions on window resize
    onResize: function() {
    },
    stretch: function(element) {
        $(element).width($(window).width());
        $(element).height($(window).height());
    },
    scrollTo: function(element) {
        $('html, body').animate({
            scrollTop: element.offset().top
        }, 1000);
    },
    getUrlParameters: function(name) {
//thanks http://stackoverflow.com/questions/1403888/get-url-parameter-with-jquery
        return decodeURIComponent((RegExp(name + '=' + '(.+?)(&|$)', 'i').exec(location.search) || [, ""])[1]);
    },
    //thanks for inspiration : http://www.redblobgames.com/grids/hexagons/
    fillHexaMapOld: function(hexaGrid) {
//We grab some vars to optimize things
        var mapWidth = hexaGrid.width();
        var mapHeight = hexaGrid.height();
        var configWidth = Config.hexagonWidth;
        var configHeight = Config.hexagonHeight;
        var hexagonElement = $("<div class='hexagon " + Config.currentGridColor + "'><span class='hexaNumber'></span></div>");
        hexagonElement.height(configHeight);
        hexagonElement.width(configWidth);
        $("#hexaGrid").empty();
        var totalColumns = mapWidth / (configWidth * 0.75);
        var totalRows = mapHeight / configHeight;
        var currentX = 0;
        var currentY = 0;
        for (i = 0; i < totalRows; i++) {
            for (j = 0; j < totalColumns; j++) {

                var currentX = j * configWidth * 0.75;
                var currentY = i * configHeight;
                var hexagonNumber = (i.toString().length < 2 ? '0' + i.toString() : i.toString()) + (j.toString().length < 2 ? '0' + j.toString() : j.toString());
                if (j % 2 == 0) {
                    currentY += (configHeight / 2);
                }

                $(hexagonElement).css({top: currentY, left: currentX});
                $(hexagonElement).clone().attr('id', hexagonNumber).appendTo($(hexaGrid));
            }
        }
    },
    //Huge thanks to http://www.mattpalmerlee.com/2012/04/10/creating-a-hex-grid-for-html5-games-in-javascript/
    fillHexaMap: function(hexaGrid) {
//First, variables mapping ladies and gentlemen !
        HT.Hexagon.Static = {
            ELEMENTNAME: $(hexaGrid).attr('id'),
            HEIGHT: Config.hexagonHeight,
            WIDTH: Config.hexagonWidth,
            LINEWIDTH: Config.lineWidth,
            ORIENTATION: HT.Hexagon.Orientation.Normal,
            SHOWNUMBERS: Config.displayNumbers,
            SHOWLABELS: Config.displayLabels,
            GRIDCOLOR: Config.currentGridColor,
            ISVISIBLE: Config.displayGrid,
            DRAWSTATS: false
        }

        HT.Hexagon.Static.SIDE = getSide();
        HT.CurrentGrid = drawHexGrid();
        //fill hexagons select box
        var hexes = HT.CurrentGrid.Hexes;
        $("#hexagonId option").remove();
        for (var i = 0; i < hexes.length; i++) {
            var hexId = hexes[i].Id + ' (' + hexes[i].PathCoOrdX + ' ' + hexes[i].PathCoOrdY + ')';
            var option = "<option id='" + hexes[i].Id + "' value='" + hexes[i].Id + "'>" + hexId + "</option>";
            $("#hexagonId").append(option);
        }
    },
    mapHexaListeners
            : function(hexaGrid) {
        $(hexaGrid).on('click', function(event) {

        });
    },
    bindListeners: function() {
        $('.hexaWidth, .hexaHeight').on('change paste', Listeners.hexagonSize);
        $('#resetGrid').on('click', Listeners.resetGrid);
        $('#setGrid').on('click', Listeners.setGrid);
        $('#hexaGrid').on('click', Listeners.clickGrid);
        $('#displayHexaGrid').on('click', Listeners.displayGrid);
        $('#mesureHexagon').on('click', Listeners.mesureHexagon);
        $('#displayHexaNumbers').on('click', Listeners.showNumbers);
        $('#displayHexaLabels').on('click', Listeners.showLabels);
        $('#greenGrid,#redGrid,#blueGrid,#greyGrid').on('click', Listeners.gridColor);
        $('#map').on('dragenter', Listeners.mapImageDragEnter);
        $('#map').on('dragleave', Listeners.mapImageDragLeave);
        $('#map').on('dragover', Listeners.mapImageDragOver);
        $('#map').on('drop', Listeners.mapImageDrop);
        $('#journalEntry_save').on('click submit', Listeners.uploadJournalEntry);
        $("#hexagonId").on('change', Listeners.hexalistChange);
    },
    defaultValues: function() {
        $('.hexaWidth').attr('placeHolder', Config.hexagonWidth);
        $('.hexaHeight').attr('placeHolder', Config.hexagonHeight);
    },
    //receive the image from drag'n'drop operations
    uploadMapImage: function(files) {
        var f = files[0];
        // Only process image files.
        if (!f.type.match('image/(jpeg)|(png)')) {
            alert('The file must be a jpeg image');
            return false;
        }
        var reader = new FileReader();
        // When the image is loaded : ajax the beast
        reader.onload = function(event) {
            var pic = {};
            pic.file = event.target.result.split(',')[1];
            var str = jQuery.param(pic);
            var datas = {
                fileData: pic.file,
            }

            var ajaxUrl = Routing.generate('ajax_map_grabber') + '/uploadmap';
            $.ajax({
                type: 'POST',
                url: ajaxUrl,
                data: datas,
                dataType: 'json',
                success: function(fileName) {
                    console.log(fileName);
                    Config.imagePath = "/bundles/cerambyxtasyoltreemain/images/uploads/" + fileName + '?' + $.now();
                    $("#mapImage").css('background-image', "url('" + Config.imagePath + "')");
                }
            });
        };
        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
    },
    fillJournalEntryForm: function(hexagonId) {
        var ajaxUrl = Routing.generate('ajax_map_grabber') + '/getJournalEntry';
        var data = {
            hexid: hexagonId
        }

//we clone previous hexagons list
        var hexaList = $("#hexagonId").clone();
        //we clean previous form
        $("#JournalEntry form").find("input[type=text], textarea, hidden").val("");
        $.ajax({
            type: 'POST',
            url: ajaxUrl,
            data: data,
            dataType: 'html',
            success: function(data) {
                if (data != 'false') {
//we save current hexagon list      
                    $('#JournalEntry').replaceWith(data);
                    //and put hxalist back
                    $('#hexagonId').replaceWith(hexaList);
                    //we reattach listeners
                    $('#journalEntry_save').on('click submit', Listeners.uploadJournalEntry);
                    $('#hexagonId').on('change', Listeners.hexalistChange);
                    $('#journalEntry_save').button();
                }
            }
        });
    },
    updateFlag: function() {
//managing selection pawn
        var flag = $(Config.selectionFlag.element);
        $('#map').append(flag);
        //hide then show flag to avoid loss of width()/height() properties first time clicked
        flag.hide();
        var flagTop = $('#hexaGrid').position().top + HT.CurrentHexagon.MidPoint.Y - flag.height() + 15;
        var flagLeft = $('#hexaGrid').position().left + HT.CurrentHexagon.MidPoint.X - flag.width() / 3;
        flag.css('top', flagTop);
        flag.css('left', flagLeft);
        flag.show();
    }


};