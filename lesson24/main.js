//function showMessage(){
   // alert("This message is inside a function")
//}
//showMessage();

// function sum(x,y){
//     return x+y;
// }

// document.write(sum(20,5));

//var arrowfunction = () => alert("hello world");

//arrowfunction();

// var arrowfunction = name => alert(`Hello ${name}`);

// arrowfunction("Ariana Rexhepi");

//variabel lokale
// function Firstname(){
//     var localVar = "Donika";
//     alert(localVar);
// }

// Firstname();


function seconds(minutes){
    return minutes * 60;
}

seconds();
document.write(seconds(60) + "<br>");

var car = {name:"Mercedes", color:"red",year:2020, kilometers:0,
startEngine: function(){
    alert("Vroom")
},
get getKilometers(){
    return this.kilometers;
},
set setKilometers(km){
    this.kilometers = km;
}
};
console.log(car.getKilometers);

car.setKilometers=100;
console.log(car.getKilometers);
document.write(car.name + car.color + car.year + car.kilometers); 
document.write("<br>" + car[`color`]);

car.startEngine();



var computer = new Object();

computer.name = "Lenovo";
computer.CPU = "Intel core i7";
computer.Ram = "32GB";
computer.GPU = "GeForce GT730 2GB Dual DP HP";

computer.type = function(){
    return this.name + ", " + this.CPU + ", " + this.Ram + " , " + this.GPU;
}

delete computer.GPU;
document.write("<br>" + computer.type());



//konstruktor

function Computer(name, CPU, RAM, GPU){
    this.name = name;
    this.CPU = CPU;
    this.RAM = RAM;
    this.GPU = GPU;
}

var computer1 = new Computer("Mackbook Pro", "M1 Chip", "8GB", "5600 GPU");
var computer2 = new Computer("Mackbook Air", "M2 Chip", "4GB", "Integrated");

// console.log(computer1);
// console.log(computer2);
document.write("Computer1" + computer1.name + " ," + computer1.CPU + " ," + computer1.RAM + " ," + computer1.GPU);
document.write("Computer2" + computer2.name + " ," + computer2.CPU + " ," + computer2.RAM + " ," + computer2.GPU);

