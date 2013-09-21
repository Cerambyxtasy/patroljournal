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