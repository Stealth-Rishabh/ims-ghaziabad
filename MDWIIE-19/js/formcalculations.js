/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the size of the fee
 //The values represent the cost of the fee i.e A 10" fee cost's $35
 var coauth = new Array();
 coauth["Round6"]=20;
 coauth["Round8"]=25;

 
 //Set up an associative array 
 //The keys represent the category type
 //The value represents the cost of the category i.e. Lemon category is $5,Dobash category is $9
 //We use this this array when the user selects a category from the form

 var category_prices= new Array();
 category_prices["None"]=00;
 category_prices["Academicians_India"]=2500;
 category_prices["Research_Scholars_India"]=1500;
 category_prices["Corporate_Delegates_India"]=5000;
 category_prices["International_Afro_Asian_Countries)"]=100;
 category_prices["International_Rest_World)"]=300;
 
 
	 
	 
// getcoauthPrice() finds the price based on the size of the fee.
// Here, we need to take user's the selection from radio button selection
function getcoauthPrice()
{  
    var coauthorPrice=0;
    //Get a reference to the form id="feeCalform"
    var theForm = document.forms["feeCalform"];
    //Get a reference to the fee the user Chooses name=selectedco":
    var selectedco = theForm.elements["selectedco"];
    //Here since there are 4 radio buttons selectedco.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedco.length; i++)
    {
        //if the radio button is checked
        if(selectedco[i].checked)
        {
            //we set coauthorPrice to the value of the selected radio button
            //i.e. if the user choose the 8" fee we set it to 25
            //by using the coauth array
            //We get the selected Items value
            //For example coauth["Round8".value]"
            coauthorPrice = coauth[selectedco[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the coauthorPrice
    return coauthorPrice;
}

//This function finds the category price based on the 
//drop down selection
function getcategoryPrice()
{
    var categoryPrice=0;
    //Get a reference to the form id="feeCalform"
    var theForm = document.forms["feeCalform"];
    //Get a reference to the select id="category"
     var selectedcategory = theForm.elements["category"];
     
    //set feecategory Price equal to value user chose
    //For example category_prices["Lemon".value] would be equal to 5
    categoryPrice = category_prices[selectedcategory.value];

    //finally we return categoryPrice
    return categoryPrice;
}



//price() finds the candles price based on a check box selection
function price()
{
    var discountPrice=0;
    //Get a reference to the form id="feeCalform"
    var theForm = document.forms["feeCalform"];
    //Get a reference to the checkbox id="includedatediscount"
    var includedatediscount = theForm.elements["includedatediscount"];

    //If they checked the box set discountPrice to 5
    if(includedatediscount.checked==true)
    {
        discountPrice=5;
    }
    //finally we return the discountPrice
    return discountPrice;
}

function absentiaPrice()
{
    //This local variable will be used to decide whether or not to charge for the inscription
    //If the user checked the box this value will be 20
    //otherwise it will remain at 0
    var absentiaPrice=0;
    //Get a refernce to the form id="feeCalform"
    var theForm = document.forms["feeCalform"];
    //Get a reference to the checkbox id="includeAbsentia"
    var includeAbsentia = theForm.elements["includeAbsentia"];
    //If they checked the box set absentiaPrice to 20
    if(includeAbsentia.checked==true){
        absentiaPrice=50;
    }
    //finally we return the absentiaPrice
    return absentiaPrice;
}
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var feePrice = getcoauthPrice() + getcategoryPrice() + price() + absentiaPrice();
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the fee "+feePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}