//演習　★の出力

//問１
var number =1;
while(number <=5){
    document.write("★");
    number++;
}
document.write("<br>");



//問２
for(var i = 1; i<3; i++){
    document.write("★★★"+ "<br>");
}

for(var a=1; a<=2; a++){
    for(var b=1; b<=3; b++){
        document.write("★");
    }
    document.write("<br>");
}

//問３
var a =1;
while(a<3){
    document.write("☆☆☆☆☆"+ "<br>");
    a++;
}

for(var a=1; a<=2; a++){
    for(var b=1; b<6; b++){
        document.write("☆");
    }
    document.write("<br>");
}


//問４
for(var b=1; b<=4; b++){
    document.write("★★★★★"+ "<br>");
}

for(var a=1; a<=4; a++){
    for(var b=1; b<=5; b++){
        document.write("★");
    }
    document.write("<br>");
}


//問５
var c=1;
while(c<5){
    document.write("★★★"+"<br>");
    c++;
}

for(var a=1; a<=4; a++){
    for(var b=1; b<4; b++){
        document.write("★");
    }
    document.write("<br>");
}


//問６
for(var d=1; d<4; d++){
    document.write("★☆★"+ "<br>");
}

for(var a=1; a<4; a++){
    for(var b=1; b<=3; b++){
        if(b % 2 ==0){
            document.write("☆");
        }else{
            document.write("★")
        }
    }
    document.write("<br>");
}


//問７
var e=1;
while(e<5){
    document.write("★☆★☆★" + "<br>");
    e++;
}

for(var a=1; a<5; a++){
    for(var b=1; b<6; b++){
        if(b % 2==0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}


//問８
for (var a=1; a<6; a++){
    for(var b=1; b<=a; b++){
        document.write("★");
    }
    document.write("<br>");
}


for(i=0; i<=4; i++){
    for(j=0; j<=4; j++){
        document.write("★");
    if(j == i){
        document.write("<br>");
    }
    break;    
    }
}


//演習　関数

function menseki(hankei){
    return hankei*hankei*3.14;
}

document.write(menseki(5)+'<br>');
document.write(menseki(7)+'<br>');
document.write(menseki(10)+'<br>');


function park(adult, child){
    return 500*adult+200*child;
}

document.write(park(2,4)+'<br>');
document.write(park(1,5)+'<br>');
document.write(park(3,7)+'<br>');



//演習　星の出力　上級

//問１
for(var a=1; a<6; a++){
    for(var b=1; b<6; b++){
        document.write("★");
    }
    document.write("<br>");
}


//問２
var a=1;
while(a <=25){
    if(a % 2 ==0){
        document.write("☆");
    }else{
        document.write("★");
    }
    if(a % 5 ==0){
        document.write("<br>");
    }
    a++;
}


//問３
for(i=0; i<=4; i++){
    for(j=0; j<=5; j++){
        if(j==i){
            document.write("☆");
        }else if(j==5){
            document.write("<br>");
        }else{
            document.write("★");
        }
    }
}


//問４（基礎でもあったやつ）
for(a=1; a<6; a++){
    for(b=1; b<=a; b++){
        document.write("★");
    }
    document.write("<br>");
}


//問５
var i=0;
while(i<5){
    var j=0;
    while(j<=i){
        if(j==i){
            document.write("☆");
        }else{
            document.write("★");
        }
    j++;
    }
    document.write("<br>");
    i++;
}






