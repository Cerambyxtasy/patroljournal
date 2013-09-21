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
            ORIENTATION: HT.Hexagon.Orientation.Normal,
            SHOWNUMBERS: Config.displayNumbers,
            SHOWLABELS: Config.displayLabels,
            GRIDCOLOR: Config.currentGridColor,
            ISVISIBLE: Config.displayGrid,
            DRAWSTATS: false
        }
        
        HT.Hexagon.Static.SIDE = getSide();
        drawHexGrid();
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
        $('#displayHexaGrid').on('click', Listeners.displayGrid);
        $('#mesureHexagon').on('click', Listeners.mesureHexagon);
        $('#displayHexaNumbers').on('click', Listeners.showNumbers);
        $('#displayHexaLabels').on('click', Listeners.showLabels);
        $('#greenGrid,#redGrid,#blueGrid,#greyGrid').on('click', Listeners.gridColor);
    },
    defaultValues: function() {
        $('.hexaWidth').attr('placeHolder', Config.hexagonWidth);
        $('.hexaHeight').attr('placeHolder', Config.hexagonHeight);
    }
};