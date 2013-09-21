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
    fillHexaMap: function(mapElement) {
        mapWidth = mapElement.width();
        mapHeight= mapElement.height();
        
        hexagonElement = $("<div class='hexagon'></div>");
        hexagonElement.height(Config.hexagonHeight);
        hexagonElement.width(Config.hexagonWidth);
        
        totalColumns = Math.floor(mapWidth/Config.hexagonWidth);
        totalRows = Math.floor(mapHeight/Config.hexagonHeight);
        
        for(i=0;i<totalRows;i++){
            for(j=0;j<totalColumns;j++){                
                currentX = j * Config.hexagonWidth;
                currentY = i * Config.hexagonHeight * 0.75;                
                $(hexagonElement).offset({top:currentY,left:currentX});
                $(hexagonElement).clone().appendTo($(mapElement));
            }
        }       
    }    
};