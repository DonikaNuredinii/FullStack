var input = document.getElementById("input_id");
var button = document.getElementById("btn_id");
var text = document.getElementById("text_id");

button.onclick = function(){
    text.innerHTML = input.value;

}
var btn2 = document.getElementById("answer");
var input1 = document.getElementById("input1_id");
var input2 = document.getElementById("input2_id");
var answer = document.getElementById("text1_id");

btn2.addEventListener("click", function(){
    answer.innerHTML = parseInt(input1.value) + parseInt(input2.value);
})

button.onclick = function(){
    if(input.value >10){
        text.innerHTML = "Numri eshte me i madh se 10";
    }
    else if(input.value < 10){
        text.innerHTML = "Numri eshte me i vogel se 10";
    }
    else{
        text.innerHTML = "Numri eshte i barabart me 10";
    }
}