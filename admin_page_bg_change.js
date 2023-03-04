setInterval(myTimer, 5000);
        var i=0;
        function myTimer() {
            image = document.getElementById("collegeimage");          
            var arr = new Array("college_image/image1.jpg","college_image/image2.jpg","college_image/image3.jpg","college_image/image4.jpg","college_image/image5.jpg","college_image/image6.jpg");
            var srcpath = arr[i];
            console.log(srcpath);
            if(i<5){
                i++;
            }else{
                i=0;
            }
            image.src = srcpath;
        }