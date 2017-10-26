

var viewer = new Cesium.Viewer('cesiumContainer', {
    skyBox : false,
    skyAtmosphere : false,
    animation: false,
    timeline: false,
    contextOptions : {
        webgl: {
            alpha: true
        }
    }
});
viewer.scene.backgroundColor = Cesium.Color.TRANSPARENT;

//Add basic drag and drop functionality
viewer.extend(Cesium.viewerDragDropMixin);

//Show a pop-up alert if we encounter an error when processing a dropped file
viewer.dropError.addEventListener(function(dropHandler, name, error) {
    console.log(error);
    window.alert(error);
});
var dataPath = "";
function setData(path){
    dataPath = path;
}

var dataSource = Cesium.GeoJsonDataSource.load(path);
        viewer.dataSources.add(dataSource);