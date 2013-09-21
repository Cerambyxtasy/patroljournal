var Config = {
    hexagonWidth: 50,
    hexagonHeight: 50,
    displayNumbers: true,
    displayLabels: true,
    displayGrid: true,    
    //0 normal, 1 pointy hat
    orientation: 0,
    currentGridColor: 'grey',
    selectionRectangle: {
        topX: 0,
        topY: 0,
        width: 0,
        height: 0,
        element: $("<div class='selectionRectangle'></div>")
    },
    mesureRectangle: {
        topX: 0,
        topY: 0,
        width: 0,
        height: 0,
        element: $("<div class='mesureRectangle'></div>")
    }
}
var Listeners = {
//Update site of hexagons when input changed
    hexagonSize: function() {
        var dimensionsType = ['Width', 'Height'];
        for (var i = 0; i < dimensionsType.length; i++) {
            if ($("input.hexa" + dimensionsType[i]).val().match("^[0-9]{2,3}\.?[0-9]{0,2}$")) {
                var value = $("input.hexa" + dimensionsType[i]).val();
                console.log(value);
                switch (dimensionsType[i]) {
                    case 'Width':
                        Config.hexagonWidth = value;
                        break;
                    case 'Height':
                        Config.hexagonHeight = value;
                        break;
                }
                Utils.fillHexaMap($('#hexaGrid'));
            }
        }
    },
    //use to draw a rectangle around an hexagon, to take it's measures
    selectableHexagon: {
        start: function(event, ui) {
            var mesureRectangle = Config.mesureRectangle;
            mesureRectangle.topX = event.pageX - $('#map').offset().left;
            mesureRectangle.topY = event.pageY - $('#map').offset().top;
            $('#map').focus();
            $(document).on('keydown', function(event) {
//with shift, change hexagon size
                switch (event.keyCode) {
//key q
                    case 81:
                        mesureRectangle.topX--;
                        break;
                        //key z
                    case 90:
                        mesureRectangle.topY--;
                        break;
                        //key d
                    case 68:
                        mesureRectangle.topX++;
                        break;
                        //key s
                    case 83:
                        mesureRectangle.topY++;
                        break;
                }
                $('.mesureRectangle').css('left', mesureRectangle.topX);
                $('.mesureRectangle').css('top', mesureRectangle.topY);
                $('.mesureRectangle').css('width', mesureRectangle.width);
                $('.mesureRectangle').css('height', mesureRectangle.height);
            });
            $('#map').append($(mesureRectangle.element));
            $('.mesureRectangle').show();
            $('#map').bind('mousemove', Listeners.moveRuler);
        },
        stop: function(event, ui) {
            var selectionRectangle = Config.selectionRectangle;
            ;
            //remove key bindings
            $('#map').unbind('mousemove');
            $(document).unbind('keydown,keyup');
            $('.selectionRectangle').width(0);
            $('.selectionRectangle').height(0);
            $('.selectionRectangle').remove();
        }
    },
    //Display the hexagon map dynamically in drag'n'drop
    selectableHexagonmap: {
        shiftPressed: false,
        start: function(event, ui) {
            var selectionRectangle = Config.selectionRectangle;
            selectionRectangle.topX = event.pageX - $('#map').offset().left;
            selectionRectangle.topY = event.pageY - $('#map').offset().top;
            //we suspend costly events
            $('.hexaWidth, .hexaHeight').unbind('change paste');
            //Handle keyboard events
            $(document).on('keyup', function(event) {
                switch (event.keyCode) {
//key shift
                    case 16:
                        Listeners.selectableHexagonmap.shiftPressed = false;
                        break;
                }
            });
            $(document).on('keydown', function(event) {
//with shift, change hexagon size
                if (Listeners.selectableHexagonmap.shiftPressed) {
                    switch (event.keyCode) {
//key q
                        case 81:
                            Config.hexagonWidth -= 0.1;
                            break;
                            //key z
                        case 90:
                            Config.hexagonHeight -= 0.1;
                            break;
                            //key d
                        case 68:
                            Config.hexagonWidth += 0.1;
                            break;
                            //key s
                        case 83:
                            Config.hexagonHeight += 0.1;
                            break;
                    }
//update dedicated inputs and map
                    $('.hexaWidth').val(Config.hexagonWidth);
                    $('.hexaHeight').val(Config.hexagonHeight);
                    //without shift, move hexagon grid
                } else {
                    switch (event.keyCode) {
//key q
                        case 81:
                            selectionRectangle.topX -= 1;
                            break;
                            //key z
                        case 90:
                            selectionRectangle.topY -= 1;
                            break;
                            //key d
                        case 68:
                            selectionRectangle.topX += 1;
                            break;
                            //key s
                        case 83:
                            selectionRectangle.topY += 1;
                            break;
                            //key shift
                        case 16:
                            Listeners.selectableHexagonmap.shiftPressed = true;
                            break;
                    }
                }
                Listeners.updateGridSelection(selectionRectangle);
            });
            $('#map').append($(selectionRectangle.element));
            $('.selectionRectangle').show();
            $('#map').bind('mousemove', Listeners.moveGrid);
        },
        stop: function(event, ui) {
            //remove key bindings
            $('#map').unbind('mousemove');
            $(document).unbind('keydown,keyup');
            //we reinstall removed bindings
            $('.hexaWidth, .hexaHeight').on('change paste', Listeners.hexagonSize);
            $('.selectionRectangle').width(0);
            $('.selectionRectangle').height(0);
            $('.selectionRectangle').remove();
        }
    },
    //Internal heaxagon dra'n'drop logic
    moveGrid: function(event) {
        var selectionRectangle = Config.selectionRectangle;
        selectionRectangle.width = event.pageX - selectionRectangle.topX - $('#map').offset().left;
        selectionRectangle.height = event.pageY - selectionRectangle.topY - $('#map').offset().top;
        Listeners.updateGridSelection(selectionRectangle);
    },
    //Internal ruler dra'n'drop logic
    moveRuler: function(event) {
        var mesureRectangle = Config.mesureRectangle;
        mesureRectangle.width = event.pageX - mesureRectangle.topX - $('#map').offset().left;
        mesureRectangle.height = event.pageY - mesureRectangle.topY - $('#map').offset().top;
        $('.mesureRectangle').css('left', mesureRectangle.topX);
        $('.mesureRectangle').css('top', mesureRectangle.topY);
        $('.mesureRectangle').css('width', mesureRectangle.width);
        $('.mesureRectangle').css('height', mesureRectangle.height);
        Listeners.updateMesureSelection(mesureRectangle);
    },
    //update hexagon size inputs        
    updateMesureSelection: function(rectangle) {
        $('.hexaWidth').val(rectangle.width);
        $('.hexaHeight').val(rectangle.height);
    },
    //update hexagon fillin
    updateGridSelection: function(rectangle) {
        $('.selectionRectangle').css('left', rectangle.topX);
        $('.selectionRectangle').css('top', rectangle.topY);
        $('.selectionRectangle').css('width', rectangle.width);
        $('.selectionRectangle').css('height', rectangle.height);
        $('#hexaGrid').css('width', rectangle.width);
        $('#hexaGrid').css('height', rectangle.height);
        $('#hexaGrid').css('top', rectangle.topY);
        $('#hexaGrid').css('left', rectangle.topX);
        Utils.fillHexaMap($('#hexaGrid'));
    },
    //put the hexagonal grid in it's original state
    resetGrid: function(event) {
        $('#hexaGrid').css({'width': '100%', 'height': '100%', 'top': '0', 'left': '0'});
        Utils.fillHexaMap($('#hexaGrid'));
    },
    //display numbers toggling
    showNumbers: function(event) {
        $('.hexaNumber').toggle(Config.displayNumbers);
        Config.displayNumbers = Config.displayNumbers ? false : true;
        Utils.fillHexaMap($('#hexaGrid'));
    },
    //display labels toggling
    showLabels: function(event) {
        $('.hexaNumber').toggle(Config.displayLabels);
        Config.displayLabels = Config.displayLabels ? false : true;
        Utils.fillHexaMap($('#hexaGrid'));
    },
    //launch grid drag'n'drop
    setGrid: function(event) {
        $('#map').selectable({
            start: Listeners.selectableHexagonmap.start,
            stop: Listeners.selectableHexagonmap.stop
        });
    },
    displayGrid: function(event) {
        Config.displayGrid = Config.displayGrid ? false : true;
        Utils.fillHexaMap($('#hexaGrid'));
    },
    gridColor: function(event) {
        var className = $(this).data('classcolor');
        Config.currentGridColor = className;
        Utils.fillHexaMap($('#hexaGrid'));
    },
    //display a drag'n'drop measure rectangle
    mesureHexagon: function(event) {
        $('#map').selectable({
            start: Listeners.selectableHexagon.start,
            stop: Listeners.selectableHexagon.stop
        });
    }

}
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

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