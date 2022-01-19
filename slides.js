var i=0;

var images =[];
var time1 =3000;

 //image list 

 images[0]='pru_pic/prudence in red.jpg';
 images[1]='pru_pic/prudence in top red.jpg';
 images[2]='pru_pic/sent 1 (3).jpg';
 images[3]='pru_pic/prudence in kenya.jpg';
 images[4]='pru_pic/prudence in white (2).jpg';
 images[5]='pru_pic/prudence5.jpg';
 images[6]='pru_pic/prudence in dress.jpg';
 images[7]='pru_pic/prudence.jpg';
 images[8]='pru_pic/prudence in smile.jpg';
 images[8]='pru_pic/prudence4.jpg';



 

 //change image

 function changeImg1(){

    document.slide.src=images[i];
    if(i<images.length -1){


        i++;

    }
    else{
        i=0;

    }
    setTimeout("changeImg1()",time1);

 }
 window.onload =changeImg1;










 





 