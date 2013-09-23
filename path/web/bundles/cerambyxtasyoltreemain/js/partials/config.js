var Config = {
    hexagonWidth: 50,
    hexagonHeight: 50,
    displayNumbers: false,
    displayLabels: false,
    displayGrid: true,
    isGridDrawing: false,
    //0 normal, 1 pointy hat
    orientation: 0,
    currentGridColor: 'grey',
    imagePath: '',
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
    },
    selectionFlag: {
        topX: 0,
        topY: 0,
        width: 0,
        height: 0,
        bgPositionY: 0,
        element: $("<div class='flagSelection'></div>")
    }
}