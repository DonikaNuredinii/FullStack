// var text = " I attend Digital School";
// var result = text.search(/Digital School/);
// var result2 = text.replace(/Digital School/, "Gjin Gazull");

// console.log(result);
// console.log(result2);

// var testi = "abcdef";
// var regexp = new RegExp('abc');

// console.log(regexp.test(testi));

// var text2 = "Hello World, this is my World!";
// var regex = /[A-Za-z0-9]+ World, this is my World!/;

// console.log(text2.match(regex));

function validate(){
   var name = document.getElementById('name').value; 
   var age = document.getElementById('age').value; 
   var city = document.getElementById('city').value; 
   
   var valid_name = /^[A-Za-z]+$/;
   var valid_age = /^[0-9]+$/;
   
   if(!(name.match(valid_name)) || !(age.match(valid_age)) ||city=="" ){
    if(!(name.match(valid_name))){
        document.getElementById('name_error').style.visibility = "visibilty;"
    }
    
    if(!(age.match(age))){
        document.getElementById('age_error').style.visibility = "visibilty;"
    }
    if(city=="" ){
        document.getElementById('city_error').style.visibility = "visibilty;"
    }
    return false;

   }
   else{
    return true;
   }
}

