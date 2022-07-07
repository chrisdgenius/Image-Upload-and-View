<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CAnvas Tutorial</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">
        <link href="assets/css/shapes.css" rel="stylesheet" type="text/css"/>
        <style>
            ul.list_fonts{
                background:#ccc;
                width:150px;
                padding:5px;
                margin:0px;
                display:none;
            }
            ul.list_fonts li{
                list-style:none;
                font-size:14px;
                cursor:pointer;
            }
            #display_fonts{
                background:#444;
                margin:0;
                width:150px;
                padding:5px;
                height:20px;
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <header>
                <!--page header menu-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </header>

            <div  style="height: 100vh;" class="content container-fluid">

                <div class="row">  
                    <div class="col-sm-2 col-md-2 col-lg-2"  style="background: #03a9f4"> 
                        <div class="main-leftsidebar-div" id="sidebar" data-component="leftsidebar">
                            <div style="height: 20vh" class="leftsidebar">
                                <ul class="nav list-group flex-column d-inline-block first-menu scrollbar-indigo thin first-main-menu">
                                                      

                                    <li class="nav-item list-group-item ps-1 py-2"><a class="nav-link" href="#"><i class="fa fa-ticket"><span class="ml-2 align-middle" href="#">Shapes</span></i></a>
                                        <ul class="nav list-group flex-column d-inline-block submenu">
                                           // <li> <div style="display:inline" class="diamond"></div>Polygon</li>
                                            <li onclick="addPolygon()"> Polygon</li>
                                            <li onclick="addTriangle()">Triangle</li> 

                                            <li onclick="addTriangle()">triangle</li>
                                            <li onclick="addTrapezoid()"> Trapezoid</li> 
                                            <!--<li class="">Rhombus</li>--> 
                                            <!--<li> Square</li>-->  
                                            <li onclick="addRect()"> Rectangle</li>  
                                            <li  onclick="addCircle()">Circle</li> 
                                            <!--<li> <div class="oval"></div>Oval</li>--> 
                                            <!--<li> <div class="heart"></div> Heart</li>-->
                                            <!--<li>Cross</li>-->
                                            <!--<li>Arrow</li>--> 
                                            <!--<li><div class="square"></div> Cube</li>--> 
                                            <!--<li>Cylinder</li>-->
                                            <li onclick="addStar()"> <div class="star-six"></div>Star</li> 
                                            <!--<li>Crescent</li>-->
                                        </ul>
                                    </li>
<!--                                    <li class="nav-item list-group-item ps-1 py-2"><a class="nav-link" href="#"><i class="fa fa-ticket"><span class="ml-2 align-middle" href="#">Photo</span></i></a>
                                        <ul class="nav list-group flex-column d-inline-block submenu">

                                        </ul>
                                    </li>-->
<!--                                    <li onclick="drawLine()" class="nav-item list-group-item ps-1 py-2"><a class="nav-link" href="#"><i class="fa fa-ticket"><span class="ml-2 align-middle" href="#">Elements</span></i></a>
                                        <ul class="nav list-group flex-column d-inline-block submenu">

                                        </ul>
                                    </li>-->
                                    <li onclick="addText()" class="nav-item list-group-item ps-1 py-2"><a class="nav-link" href="#"><i class="fa fa-ticket"><span class="ml-2 align-middle" href="#">Text</span></i></a>
                                        <ul class="nav list-group flex-column d-inline-block submenu">

                                        </ul>
                                    </li>
                                    <li class="nav-item list-group-item ps-1 py-2"><a class="nav-link" href="#"><i class="fa fa-image"><span class="ml-2 align-middle" href="#">Background</span></i></a>
                                        <ul class="nav list-group flex-column d-inline-block submenu">
                                            <ul class="nav list-group flex-column d-inline-block submenu">
                                                <li class="nav-item list-group-item ps-3">
                                                    <a style="color:#007ac1!important; text-align: center" class="nav-link" href="#">Background</a>

                                                    <div id="appBg" style="height: 20em; overflow-y: auto">
                                                        <background-images></background-images>
                                                    </div>
                                                </li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li onclick="fun()" class="nav-item list-group-item ps-1 py-2"><a class="nav-link" href="#"><i class="fa fa-file"><span class="ml-2 align-middle" href="#">My Files</span></i></a>
                                        <ul class="nav list-group flex-column d-inline-block submenu">

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-7" style="background: #007ac1 ; height: 100vh;">
                        <div class="d-flex flex-row">

                            <div class="p-2"><button class="btn btn-outline-primary" style="color:snow" onclick="moveBackward()"> Backward </button></div>
                            <div class="p-2"><button class="btn" onclick="moveForeward()">Foreward</button></div>
                            <div class="p-2"><button class="btn" onclick="deleteObjects()"> Delete</button></div>
                            <div class="p-2"><button class="btn" onclick="imgMask()">Apply Mask</button></div>
                        </div>
                        <canvas style="margin: 1em;" id="myCanvas"></canvas>
                        <div id="appModal">
                            <modal-component></modal-component>
                        </div>
                        <!-- Button trigger modal -->

                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3" style="">
                        <div class="d-flex flex-row">
                            <div class="p-2">Color</div>
                            <div class="p-2">    <input style="width: 3em;" id="text-color" class="form-control" type="color" value="#ff0000"/></div>
                            <hr>
<div class="p-2">Stroke:</div>
                            <div class="p-2">    <input style="width: 3em;" id="stroke-color" class="form-control" type="color" value="#ff0000"/></div>

                        </div>

                        <div id="textProperties">
                            <select id="fontF" class="form-select" aria-label="Default select example">
                                <option disabled selected>Font family</option>
                                <option>Arial</option>
                                <option>Verdana</option>
                                <option>Helvetica</option>
                                <option>Tahoma</option>
                                <option>Trebuchet MS</option>
                                <option>Times New Roman</option>
                                <option>Georgia</option>
                                <option>Garamond</option>
                                <option>Courier New</option>
                                <option>Brush Script MT</option>
                            </select>
                            <div class="d-flex flex-row">
                                <div class="p-2"><button type="button" onclick="f1()" class=" shadow-sm btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Bold Text">Bold</button></div>
                                <div class="p-2"> <button type="button" onclick="f2()" class="shadow-sm btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Italic Text">Italic</button></div>
                                <div class="p-2"><button type="button" onclick="f9()" class="btn shadow-sm btn-outline-primary side" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Clear Text</button></div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-2"><button type="button" onclick="f3()" class=" shadow-sm btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Left Align"><i class="fa fa-align-left"></i></button></div>

                                <div class="p-2"> <button type="button" onclick="f4()" class="btn shadow-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Center Align"><i class="fa fa-align-center"></i></button></div>
                                <div class="p-2"> <button type="button" onclick="f5()" class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Right Align"><i class="fa fa-align-right"></i></button></div>              
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-2"><button type="button" onclick="f6()" class="btn shadow-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Uppercase Text">AA</button></div>
                                <div class="p-2"><button type="button" onclick="f7()" class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Lowercase Text">aa</button></div>
                                <div class="p-2"><button type="button" onclick="f8()" class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Capitalize Text">Aa</button></div>
                            </div>

                        </div>
                        <div>
                            <select id="imgF" class="form-select" aria-label="Default select example">
                                <option disabled selected>Effects</option>
                                <option value="0">Grayscale</option>
                                <!--<option value="{name:invert,index:1}">Invert</option>-->
                                <!--<option value="{name:remove-color,ind`ex:2}">Remove-color</option>-->
                                <!--<option value="{name:sepia,index:3}">Sepia</option>-->
                                <option value="4">Brownie</option>
                                <!--<option value="{name:brightness,index:5}">Brightness</option>-->
                                <!--<option value="{name:contrast,index:6}" >Contrast</option>-->
                                <!--<option value="{name:saturation,index:7}">Saturation</option>-->
                                <!--<option value="{name:vibrance,index:8}">Vibrance</option>-->
                                <option value="9">Noise</option>
                                <!--<option value="{name:vintage,index:10}">Vintage</option>-->
                                <!--<option value="{name:pixelate,index:11}">pixelate</option>-->
                                <!--<option value="{name:blur,index:12}">Blur</option>-->
                                <!--<option value="{name:sharpen,index:13}">Sharpen</option>-->
                                <option value="14">Bmboss</option>
                                <option value="15">Technicolor</option>
                                <!--<option value="{name:polaroid,index:16}">Polaroid</option>-->
                                <!--<option value="{name:blend-color,index:17}">blend-color</option>-->
                                <option value="18">Gamma</option>
                                <option value="19">Kodachrome</option>
                                <!--<option value="{name:blackwhite,index:20}">Blackwhite</option>-->
                                <!--<option value="{name:blend-image,index:21}">Blend-image</option>-->
                                <!--<option value="{name:hue,index:22}">Hue</option>-->
                                <!--<option value="{name:blend-image,index:23}">Blend-image</option>-->
                            </select>
                            <button class="btn" onclick="addFilter()">Apply Filter</button>

                        </div>
                        <input style="display: none;" type="file" name="foto-file" id="foto-file"/>
                        <input style="display: none;" type="file" name="foto-file1" id="foto-file1"/>
                    </div>
                </div>
            </div>
            <script src="disk/jquery.min.js" type="text/javascript"></script>
            <script src="disk/bootstrap5.bundle.min.js" type="text/javascript"></script>
            <script src="disk/vue.global.js" type="text/javascript"></script>
            <script src="disk/notify.js" type="text/javascript"></script>
            <script src="disk/func.js" type="text/javascript"></script>
            <script src="disk/fabric.min.js" type="text/javascript"></script>
            <div id="disImage"></div>
         

            <script>
                        var filters = ['grayscale', 'invert', 'remove-color', 'sepia', 'brownie',
                            'brightness', 'contrast', 'saturation', 'vibrance', 'noise', 'vintage',
                            'pixelate', 'blur', 'sharpen', 'emboss', 'technicolor',
                            'polaroid', 'blend-color', 'gamma', 'kodachrome',
                            'blackwhite', 'blend-image', 'hue', 'resize'];
                var canvas = null;
                let imgInput = null;
                function fun() {
                    imgInput = document.getElementById("foto-file");
                    imgInput.addEventListener('change', function (e) {
                        if (e.target.files) {
                            //alert("hi");
                            let imageFile = e.target.files[0]; //here we get the image file
                            var reader = new FileReader();
                            reader.readAsDataURL(imageFile);
                            reader.onloadend = function (e) {
                                var myImage = new Image(); // Creates image object
                                // myImage.src = e.target.result; // Assigns converted image to image object
                                addImgUri(e.target.result);
                            };
                        }
                    });
                    imgInput.click();
                }
                ;
                // let imgInput = document.getElementById('foto-file');
                // var canvas = new fabric.Canvas('myCanvas',{width:900, height:900,background-color:'red'});
                // canvas.setDimensions();
                const initCanvas = (myImage) => {
                    let canvas = new fabric.Canvas('myCanvas', {width: 500, height: 500, backgroundColor: 'gray'});
                    var imgInstance = new fabric.Image(myImage, {
                        left: 100,
                        top: 100,
                        angle: 30,
                        opacity: 0.85
                    });
                    return canvas;
                };
                const addImageElement = (img) => {
                    canvas.add(img);
                    canvas.renderAll();
                    document.getElementById("disImage").appendChild(myImage);
                };
                const addImgUri = (imgUri) => {
                    fabric.Image.fromURL(imgUri, function (oImg) {
                        // scale image down, and flip it, before adding it onto canvas
                        console.log(oImg);
                        oImg.scale(0.5); //.set('flipX', true);
                        bindSelectEvent(oImg, "IMAGE");
                        canvas.add(oImg);
                        bindSelectEvent(oImg, "IMAGE");
                    });
                };
                var line, isDown;
                window.addEventListener('load', (event) => {
                    canvas = initCanvas();
                });
                function drawLine() {
                    // 
                    canvas.on('mouse:down', function (o) {
                        // alert("hi");
                        isDown = true;
                        var pointer = canvas.getPointer(o.e);
                        var points = [pointer.x, pointer.y, pointer.x, pointer.y];
                        line = new fabric.Line(points, {
                            strokeWidth: 5,
                            fill: 'red',
                            stroke: 'red',
                            originX: 'center',
                            originY: 'center'
                        });
                        canvas.add(line);
                    });
                    canvas.on('mouse:move', function (o) {
                        if (!isDown)
                            return;
                        var pointer = canvas.getPointer(o.e);
                        line.set({x2: pointer.x, y2: pointer.y});
                        canvas.renderAll();
                    });
                    canvas.on('mouse:up', function (o) {
                        isDown = false;
                    });
                    canvas.renderAll();
                }


                function addText(e) {
                    var custontxt = new fabric.IText('Tap and Type', {
                        fontFamily: 'helvetica',
                        fontSize: 30,
                        fontWeight: 400,
                        fill: 'red',
                        fontStyle: 'normal',
                        top: 250,
                        cursorDuration: 500,
                        left: 250
                    });
                    canvas.add(custontxt);
                    bindSelectEvent(custontxt, "TEXT");
                }

                var elt = null;
                function bindSelectEvent(object, type) {
                    object.set('uiType', type);
                    object.on('selected', function (object) {
                        console.log('you selected ', object.target.get('uiType'));
                        elt = object;
                        //canvas.getActiveObject().set("fill","white");
                        //  object.target.text='hell, text changed invent trigad';
                        // object.setColor('#000');
                        canvas.renderAll();
                    });
                }
                function propertyWindow(type) {

                }

                function propertyType() {

                }

                const log = document.getElementById('text-color');
                log.addEventListener('change', updateValue);
                function updateValue(e) {
                    console.log(elt);
                    if (elt != null) {
                        canvas.getActiveObject().set("fill", e.target.value);
                        canvas.renderAll();
                    }
                    //log.textContent = e.target.value;
                }
const log1 = document.getElementById('stroke-color');
                log1.addEventListener('change', updateValue);
                function updateValue(e) {
                    //alert('hi');
                    console.log(elt);
                    if (elt != null) {
                        canvas.getActiveObject().set("strokeUniform", e.target.value);
                        canvas.renderAll();
                    }
                    //log.textContent = e.target.value;
                }

                const font = document.getElementById('fontF');
                font.addEventListener("change", (e) => {
                    canvas.getActiveObject().set("fontFamily", e.target.value);
                    canvas.renderAll();
                    //console.log(e.target.value);
                });
                function addFilter() {
                    const filterSelector = document.getElementById('imgF');
                    f = fabric.Image.filters;
                    appFilter(filterSelector.value);
                }
                let f = null;
                function applyFilter(index, filter) {
                    var obj = canvas.getActiveObject();
                    obj.filters[index] = filter;
                    obj.applyFilters();
                    canvas.renderAll();
                }
                //var $ = function(id){return document.getElementById(id);};
                function moveBackward() {
                    var obj = canvas.getActiveObject();
                    obj.sendBackwards();
                }
                function moveForeward() {
                    var obj = canvas.getActiveObject();
                    obj.bringForward();
                }
                function setBk(link) {
                    fabric.Image.fromURL(link, function (img) {
                        // add background image
                        canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
                            scaleX: canvas.width / img.width,
                            scaleY: canvas.height / img.height
                        });
                    });
                }
                function addRect() {
                    alert('hi');
                    var object = new fabric.Rect({
                        width: 100,
                        height: 100,
                        fill: 'blue',
                        opacity: 1,
                        left: 0,
                        top: 0
                    });
                    canvas.add(object);
                    canvas.renderAll();
                }

                function addCircle() {
                    var object = new fabric.Circle({
                        radius: 15,
                        fill: 'blue',
                        left: 100,
                        top: 100
                    });
                    canvas.add(object);
                }
                function deleteObjects() {
                    //alert('hello');
                    let activeObject = canvas.getActiveObject();
                    if (activeObject) {
                        if (confirm('Are you sure?')) {
                            canvas.remove(activeObject);
                        }
                    }
                }
                function imgMask() {
                    //fabric.util.loadImage('https://assets-cdn.github.com/images/modules/site/integrators/slackhq.png', function (img) {
                    let  imgInput1 = document.getElementById("foto-file1");
                    imgInput1.addEventListener('change', function (e) {
                        if (e.target.files) {
                            //alert("hi");
                            let imageFile1 = e.target.files[0]; //here we get the image file
                            var reader1 = new FileReader();
                            reader1.readAsDataURL(imageFile1);
                            reader1.onloadend = function (e) {
                                let activeObject = canvas.getActiveObject();
                                loadPattern(e.target.result);
                            };
                        }
                    });
                    imgInput1.click();
                    //canvas.renderAll();
                }

                function loadPattern(url) {
                    fabric.Object.prototype.transparentCorners = false;
                    var radius = 300;
                    fabric.Image.fromURL(url, function (img) {
                        img.scale(0.5).set({
                            left: 100,
                            top: 100,
                            angle: -15,
                            clipPath: new fabric.Circle({
                                radius: 300,
                                originX: 'center',
                                originY: 'center',
                            })
                        });
                        let rad = prompt("Clip Radius (% Image Size)", "100");
                        img.clipPath.set('radius', rad);
                        img.set('dirty', true);

                        canvas.add(img).setActiveObject(img);
                    });
                }

                function appFilter(x) {
                    x = parseInt(x);
                    switch (x) {
                        case 4:
                            applyFilter(4, true && new f.Brownie());
                            break;
                        case 9:
                            applyFilter(9, true && new f.Vintage());
                            break;
                        case 14:
                            applyFilter(14, true && new f.Technicolor());
                            break;
                        case 15:
                            applyFilter(15, true && new f.Polaroid());
                            break;
                        case 18:
                            applyFilter(18, true && new f.Kodachrome());
                            break;
                        case 19:
                            applyFilter(19, true && new f.BlackWhite());
                            break;
                        case 0:
                            alert('0   f');
                            applyFilter(0, true && new f.Grayscale());
                            break;
                        default:
                        // code block
                    }
                }
            </script>
   <script>

                                var tri = new fabric.Triangle({
                                    top: 10,
                                    left: 200,
                                    width: 200,
                                    height: 100,
                                    fill: '',
                                    stroke: 'blue',
                                    strokeWidth: 2
                                });

                                var eli = new fabric.Ellipse({
                                    top: 150,
                                    left: 10,
                                    /* Try same values rx, ry => circle */
                                    rx: 75,
                                    ry: 50,
                                    fill: '',
                                    stroke: 'blue',
                                    strokeWidth: 4
                                });

                                var trapezoid = [{x: -100, y: -50}, {x: 100, y: -50}, {x: 150, y: 50}, {x: -150, y: 50}];
                                var emerald = [{x: 850, y: 75},
                                    {x: 958, y: 137.5},
                                    {x: 958, y: 262.5},
                                    {x: 850, y: 325},
                                    {x: 742, y: 262.5},
                                    {x: 742, y: 137.5},
                                ];
                                var star4 = [
                                    {x: 0, y: 0},
                                    {x: 100, y: 50},
                                    {x: 200, y: 0},
                                    {x: 150, y: 100},
                                    {x: 200, y: 200},
                                    {x: 100, y: 150},
                                    {x: 0, y: 200},
                                    {x: 50, y: 100},
                                    {x: 0, y: 0}
                                ];
                                var star5 = [{x: 350, y: 75},
                                    {x: 380, y: 160},
                                    {x: 470, y: 160},
                                    {x: 400, y: 215},
                                    {x: 423, y: 301},
                                    {x: 350, y: 250},
                                    {x: 277, y: 301},
                                    {x: 303, y: 215},
                                    {x: 231, y: 161},
                                    {x: 321, y: 161}, ];
                                var shape = new Array(trapezoid, emerald, star4, star5);

                                var polyg = new fabric.Polygon(shape[1], {
                                    top: 180,
                                    left: 200,
                                    fill: '',
                                    stroke: 'blue',
                                    strokeWidth: 2
                                });
                                var sta = new fabric.Polygon(shape[2], {
                                    top: 180,
                                    left: 200,
                                    fill: '',
                                    stroke: 'blue',
                                    strokeWidth: 2
                                });
                                var trapez = new fabric.Polygon(shape[0], {
                                    top: 180,
                                    left: 200,
                                    fill: '',
                                    stroke: 'blue',
                                    strokeWidth: 2
                                });

                                canvas.add(rec, cir, tri, eli, polyg);
                                canvas.renderAll();
                                
                  function addTriangle(){
                       canvas.add(tri);
                       canvas.renderAll();
                  }
                   function addPolygon(){
                       canvas.add(polyg);
                       canvas.renderAll();
                  }
                   function addStar(){
                       canvas.add(sta);
                       canvas.renderAll();
                  }
                  
                  function addTrapezoid(){
                       canvas.add(trapez);
                       canvas.renderAll();
                  }
            </script>
            <script>
                window.addEventListener('load', (event) => {
                const appModal = Vue.createApp({});
                        appModal.component('modalComponent', {
                        data() {
                        return  {
                        title:'',
                                disc:'',
                                keyword:'',
                                myModal:null
                        }
                        }
                        ,
                                methods: {
                                loadPst() {
                                //alert('hi');
                                this.myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                                keyboard: false,
                                        backdrop:'static'
                                })
                                        this.myModal.show();
                                        //console.log($('##exampleModal').modal('show'));
                                },
                                        modalClose(){
                                console.log('modal close');
                                },
                                        modalOk(){
                                console.log('modal save');
                                        let data = {title:this.title, disc:this.disc, keyword:this.keyword};
                                        console.log(data);
                                        this.myModal.hide();
                                }
                                }
                        ,
                                mounted() {
                        //$('#modal').modal({backdrop: 'static', show: true});
                        // ($('#appModal').find('myModal')).modal('show');
                        this.loadPst();
                        }
                        ,
                                template: `
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Banner Info</h5>
                                    <div><i class="fa fa-image" style="color:#007ac1"></i></div>
                                    </div>
                                    <div class="modal-body">
                                    <div class="mb-3">
                                    <input v-model="title" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Title: ">
                                    </div>
                                <div class="mb-3">
                                <input v-model="disc" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Note: ">
                                    </div>
                                    <div class="mb-3">
                                    <input v-model="keyword" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Keywords: ">
                                </div>
                                </div>
                                <div class="modal-footer">
            
                        <button v-on:click="modalOk()" style="color:#007ac1" type="button" class="btn btn-outliine-primary primary">Apply and Continue</button>
                            </div>
                            </div>
                            </div>
                            </div>`
                            });
                            //alert('hi');
                            appModal.mount('#appModal');
                const  appBackgroud = Vue.createApp({});
                appBackgroud.component('backgroundImages',{
                                                        data(){
                                                return {
                                                imageLlinks:['https://m.media-amazon.com/images/I/71+17bVYHxL._SL1000_.jpg',
                                                        'https://images.unsplash.com/photo-1516617442634-75371039cb3a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGhvdG8lMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
                                                        'https://images.unsplash.com/photo-1483232539664-d89822fb5d3e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGhvdG8lMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
                                                        'https://images.unsplash.com/photo-1542684377-0b875fde9563?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBob3RvJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',          'https://images.unsplash.com/photo-1561360301-4048f2dd531a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHBob3RvJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                                                'https://images.unsplash.com/photo-1565660761890-0ecd9606690f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHBob3RvJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                                                'https://images.unsplash.com/photo-1542924597-e73e0e35c010?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHBob3RvJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                                                'https://images.unsplash.com/photo-1623181392406-bbbc10235da8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBob3RvJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                                                'https://expertphotography.b-cdn.net/wp-content/uploads/2018/10/add-photo-to-background-introduction.jpg']
                                        }
          },
                                                    methods:{
                                                    selectImage(link){
                                                    console.log(link);
                                                            setBk(link);
                                                    }
                       },                                        template:`
      <template v-for="item in imageLlinks">
                                                            <img v-on:click="selectImage(item)"  style="width: 10em;" v-bind:src="item"/>
                                                                <hr>
                                                        </template>`
                            });
                            appBackgroud.mount('#appBg');
                            });
                            
                      
            </script>
                <script><script/>
                                                        </body>
                                                        </html>
