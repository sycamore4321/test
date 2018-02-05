//演習　★の出力

var number =1;
while(number <=5){
    document.write("★");
    number++;
}

document.write("<br>");

for(var i = 1; i<3; i++){
    document.write("★★★"+ "<br>");
}


var a =1;
while(a<3){
    document.write("☆☆☆☆☆"+ "<br>");
    a++;
}


for(var b=1; b<=4; b++){
    document.write("★★★★★"+ "<br>");
}


var c=1;
while(c<5){
    document.write("★★★"+"<br>");
    c++;
}


for(var d=1; d<4; d++){
    document.write("★☆★"+ "<br>");
}

//問8

var e=1;
while(e<6){
    document.write("★☆★☆★" + "<br>");
    e++;
}



for(var f=0; f<5; f++){
    for(var y =0; y<=f; y++){

    document.write("★" + "<br>");
    }
}


for(var i=0; i<=4; i++)
    for(var j=0; J<=4; j++){
        document.write("★");
    if(j==i){
        document.write("<br>");
    }
    break;
    }




//演習　関数

function menseki(hankei){
    return hankei*hankei*3.14;
}

document.write(menseki(5)+ "<br>");
document.write(menseki(7)+ "<br>");
document.write(menseki(10)+ "<br>");






