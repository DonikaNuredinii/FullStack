function showMessage(){
    alert("This is inside the function")
}

function shuma(nr1,nr2){
    return nr1+nr2;
}
console.log(shuma(4,5))

function toCelsius(f){
    return (5/9)*(f-32);
}
console.log(toCelsius(80));

var arrowFunction=()=> alert("hello world");
//arrowFunction();

var pershendetje = emri =>alert(`Miredita ${emri}`)
//pershendetje("Donika")  

function dsFunction(){
    var localVar="Digital school"
    console.log(localVar)

}
dsFunction();
//alert(localVar); //DUHET MRENA dsFuntion jo jasht se se njeh

function SyprinaTrekendshi(baza,lartesia){
    return 0.5*baza*lartesia;
}
console.log(SyprinaTrekendshi(2,5))

var makina={
    emri:"BMW",
    color:" Red",
    year:2020,
    startEngine:function(){
        alert("Vroom!!!")
    },
    get GetColor(){
        return this.color;
    },
    set SetColor(newColor){
        this.color=newColor
    }
}
console.log(makina['emri'])
console.log(makina.emri)
// makina.startEngine()

var computer = new Object();
computer.name="Lenovo"
computer.CPU="I7"
computer.RAM="16gb"

computer.type=()=>{
    console.log("Start pc")
}

computer.type()
makina.SetColor="Blue"
console.log(makina.GetColor)

