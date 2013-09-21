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