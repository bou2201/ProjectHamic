    var canvas = document.getElementById("canvas")
    var context = canvas.getContext("2d")

    var imgSchool = new Image();
    var imgRatio;
    var specialPoint = [[89.5,53],[77,79],[33.5,50]];
    var specialPath = ["../img/background1.jpg","../img/background2.jpg","../img/background3.jpg"];

    class Point{
        constructor(point,specialPath){
            this.path = specialPath;
            this.pX = point[0];
            this.pY = point[1];
            var imgPoint = new Image();
            imgPoint.onload = function(){
                context.drawImage(imgPoint, 0,0, imgPoint.width, imgPoint.height,
                    (point[0]*canvas.width)/100,(point[1]*canvas.height)/100,imgPoint.width/20, imgPoint.height/20);
            };
            imgPoint.src = "../img/point.png";
        }
        CheckClick(x,y){
            let d = Math.sqrt(((this.pX*canvas.width)/100+20-x)**2 + ((this.pY*canvas.height)/100+35-y)**2);
            if(d<20){
                context.clearRect(0,0,canvas.width,canvas.height);
                var img = new Image();
                img.onload = function(){
                    context.drawImage(img, 0,0, img.width, img.height,
                        0,0,img.width,img.height);
                };
                img.src = this.path;
                console.log(this.path);
            }
        }
    }

    imgSchool.onload = function() {
        imgRatio = imgSchool.width/imgSchool.height;
        resizeCanvas();
        drawImageScaled(imgSchool,context);
    };
    imgSchool.src = "../img/BK.jpg";

    var points = [];
    for(var i=0;i<specialPoint.length;i++){
        points[i] = new Point(specialPoint[i],specialPath[i]);
    }

    function drawImageScaled(img, context) {
        let canvas = context.canvas;
        let hRatio = canvas.height/img.height;
        let vRatio = canvas.width/img.width;
        let ratio  = Math.min ( hRatio, vRatio );  
        context.clearRect(0,0,canvas.width,canvas.height);
        context.drawImage(img, 0,0, img.width, img.height,
                           0,0,img.width*ratio, img.height*ratio);
    }

    function resizeCanvas() {
        canvas.width = window.innerWidth/1.5;
        canvas.height = window.innerWidth/(1.5*imgRatio);
    }

    canvas.addEventListener('click',(event)=>{
        const rect = canvas.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;
        for(let i=0;i<points.length;i++){
            points[i].CheckClick(x,y);
        }
    })