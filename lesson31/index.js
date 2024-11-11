// for(i=0;i<10;i++){
//     document.write(i + "<br>")
// }
// var car = {brand:"BMW", year:2020, color:"red"};

// var x;

// for(x in car){
//     document.write(car[x] + "<br>" );
// }

// var names = ['Ariana', 'Leon', 'Nika' ];
// var x;

// for(x of names){
//     document.write(x + "<br>")
// }

// var text = 'Ariana';
// var x;


//in shfaq indexin 
// for(x of text){
//     document.write(x + "<br>")
// }

// let i = 0; 
// do{
//     i+=1;
//     document.write(i);
// }while(i<5);

// let x=0;
// let y=0;

// while(x<3){
//     x++;
//     document.write(y+=x);
    
// }

// var names = ['Donika' , 'Siar' , 'Olkin'];
// names.push('Nusha'); 
// names.unshift("Dona"); //emrat fillim me shtu
// for (i=0; i<names.length ; i++){
//     document.write(names[i] + "<br>") ;
// }

var add = document.getElementById("add");
var show = document.getElementById("show");
var names = document.getElementById("names");

var emrat=[];

add.addEventListener("click", function addNames(){
    emrat.push(names.value);
})
show.addEventListener("click", function showNames(){
    for(i=0;i<names.clientHeight;i++){
        document.write(emrat[i]);
    }
});