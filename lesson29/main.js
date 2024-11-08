var sum = 0;
for(i = 15 ; i<=47; i++){
    sum+=i;
}
console.log(sum);

var num = [5, 10, 15, 20,25];
var sum1=0;
for(j=0;j<num.length;j++){
    sum1+=num[j];
}
console.log(sum1);

for(x of num){
    sum1+=x;
}
console.log(sum1);

for(x in num){
    sum1+=x;
}
console.log(sum1);


var emri = document.getElementById("name");
var save = document.getElementById("saveBtn");
var emrat = [];  
save.addEventListener("click", function addElements() {
    emrat.push(emri.value); 
    console.log(emrat);
})

