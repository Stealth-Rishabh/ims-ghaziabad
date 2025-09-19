
 var coauth = new Array();
 coauth["Round6"]=2500;
 coauth["Round8"]=5000;

 coauth["Round10"]=1500;
 coauth["Round11"]=3000;

 coauth["Round12"]=5000;
 coauth["Round13"]=10000;

 coauth["Round14"]=100;
 coauth["Round15"]=200;

 coauth["Round16"]=300;
 coauth["Round17"]=600;

 var category_prices= new Array();
 category_prices["None"]=00;
 category_prices["Academicians_India"]=2500;
 category_prices["Research_Scholars_India"]=1500;
 category_prices["Corporate_Delegates_India"]=5000;
 category_prices["International_Afro_Asian_Countries"]=100;
 category_prices["International_Rest_World"]=300;

 var category_prices1= new Array();
 category_prices1["None"]=00;
 category_prices1["Academicians_IndiaDelegate"]=2500;
 category_prices1["Research_Scholars_IndiaDelegate"]=1500;
 category_prices1["Corporate_Delegates_IndiaDelegate"]=5000;
 category_prices1["International_Afro_Asian_CountriesDelegate"]=100;
 category_prices1["International_Rest_WorldDelegate"]=300;
 
 function getcoauthPrice()
{  
    var coauthorPrice=0;
    var theForm = document.forms["feeCalform"];
    var selectedco = theForm.elements["selectedco"];
    for(var i = 0; i < selectedco.length; i++)
    {
        if(selectedco[i].checked)
        {
            coauthorPrice = coauth[selectedco[i].value];
            break;
        }
    }
    return coauthorPrice;
}

//divider

function getcategoryPrice()
{
    var categoryPrice=0;
    var theForm = document.forms["feeCalform"];
     var selectedcategory = theForm.elements["category"];
    categoryPrice = category_prices[selectedcategory.value];
    return categoryPrice;
}

function getcategoryPrice1()
{
    var categoryPrice1=0;
    var theForm = document.forms["feeCalform"];
     var selectedcategory = theForm.elements["category1"];
    categoryPrice1 = category_prices1[selectedcategory.value];
    return categoryPrice1;
}


//divider

function priceDelegateAcademicians()
{
    var discountPriceDelegateAcademicians=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountDelegateAcademicians = theForm.elements["includedatediscountDelegateAcademicians"];

    if(includedatediscountDelegateAcademicians.checked==true)
    {
        discountPriceDelegateAcademicians=-500;
    }
    return discountPriceDelegateAcademicians;
}

function priceDelegateResearchScholarsIndia()
{
    var discountpriceDelegateResearchScholarsIndia=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountResearchScholarsIndia = theForm.elements["includedatediscountResearchScholarsIndia"];

    if(includedatediscountResearchScholarsIndia.checked==true)
    {
        discountpriceDelegateResearchScholarsIndia=-300;
    }
    return discountpriceDelegateResearchScholarsIndia;
}

function priceDelegateCorporateDelegates()
{
    var discountpriceDelegateCorporateDelegates=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountCorporateDelegates = theForm.elements["includedatediscountCorporateDelegates"];

    if(includedatediscountCorporateDelegates.checked==true)
    {
        discountpriceDelegateCorporateDelegates=-1000;
    }
    return discountpriceDelegateCorporateDelegates;
}


function priceDelegateAfroAsianCountriesDelegate()
{
    var discountpriceDelegateAfroAsianCountriesDelegate=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountAfroAsianCountriesDelegate = theForm.elements["includedatediscountAfroAsianCountriesDelegate"];

    if(includedatediscountAfroAsianCountriesDelegate.checked==true)
    {
        discountpriceDelegateAfroAsianCountriesDelegate=-20;
    }
    return discountpriceDelegateAfroAsianCountriesDelegate;
}

function priceDelegateRestWorldDlegate()
{
    var discountpriceDelegateRestWorldDlegate=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountRestWorldDlegate = theForm.elements["includedatediscountRestWorldDlegate"];

    if(includedatediscountRestWorldDlegate.checked==true)
    {
        discountpriceDelegateRestWorldDlegate=-60;
    }
    return discountpriceDelegateRestWorldDlegate;
}


function price()
{
    var discountPrice=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount = theForm.elements["includedatediscount"];

    if(includedatediscount.checked==true)
    {
        discountPrice=-625;
    }
    return discountPrice;
}

function priceTwentyPerAcade()
{
    var discountPriceTwentyPerAca=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountTwentyPerAca = theForm.elements["includedatediscountTwentyPerAca"];

    if(includedatediscountTwentyPerAca.checked==true)
    {
        discountPriceTwentyPerAca=-500;
    }
    return discountPriceTwentyPerAca;
}

function price1()
{
    var discountPrice1=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount1 = theForm.elements["includedatediscount1"];

    if(includedatediscount1.checked==true)
    {
        discountPrice1=-1250;
    }
    return discountPrice1;
}

function priceTwentyPerAcade1()
{
    var discountPriceTwentyPerAca1=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountTwentyPerAca1 = theForm.elements["includedatediscountTwentyPerAca1"];

    if(includedatediscountTwentyPerAca1.checked==true)
    {
        discountPriceTwentyPerAca1=-1000;
    }
    return discountPriceTwentyPerAca1;
}

function price2()
{
    var discountPrice2=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount2 = theForm.elements["includedatediscount2"];

    if(includedatediscount2.checked==true)
    {
        discountPrice2=-1875;
    }
    return discountPrice2;
}

function priceTwentyPerAcade2()
{
    var discountPriceTwentyPerAca2=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountTwentyPerAca2 = theForm.elements["includedatediscountTwentyPerAca2"];

    if(includedatediscountTwentyPerAca2.checked==true)
    {
        discountPriceTwentyPerAca2=-1500;
    }
    return discountPriceTwentyPerAca2;
}

function price3()
{
    var discountPrice3=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount3 = theForm.elements["includedatediscount3"];

    if(includedatediscount3.checked==true)
    {
        discountPrice3=-375;
    }
    return discountPrice3;
}

function priceTwentyPerResSchoIndia()
{
    var discountPriceTwentyPerResSchoIndia=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountTwentyResSchoIndia = theForm.elements["includedatediscountTwentyResSchoIndia"];

    if(includedatediscountTwentyResSchoIndia.checked==true)
    {
        discountPriceTwentyPerResSchoIndia=-300;
    }
    return discountPriceTwentyPerResSchoIndia;
}

function price4()
{
    var discountPrice4=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount4 = theForm.elements["includedatediscount4"];

    if(includedatediscount4.checked==true)
    {
        discountPrice4=-750;
    }
    return discountPrice4;
}

function priceTwentyPerResSchoIndia1()
{
    var discountPriceTwentyPerResSchoIndia1=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountTwentyResSchoIndia1 = theForm.elements["includedatediscountTwentyResSchoIndia1"];

    if(includedatediscountTwentyResSchoIndia1.checked==true)
    {
        discountPriceTwentyPerResSchoIndia1=-600;
    }
    return discountPriceTwentyPerResSchoIndia1;
}


function price5()
{
    var discountPrice5=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount5 = theForm.elements["includedatediscount5"];

    if(includedatediscount5.checked==true)
    {
        discountPrice5=-1125;
    }
    return discountPrice5;
}

function priceTwentyPerResSchoIndia2()
{
    var discountPriceTwentyPerResSchoIndia2=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountTwentyResSchoIndia2 = theForm.elements["includedatediscountTwentyResSchoIndia2"];

    if(includedatediscountTwentyResSchoIndia2.checked==true)
    {
        discountPriceTwentyPerResSchoIndia2=-900;
    }
    return discountPriceTwentyPerResSchoIndia2;
}

function price6()
{
    var discountPrice6=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount6 = theForm.elements["includedatediscount6"];

    if(includedatediscount6.checked==true)
    {
        discountPrice6=-1250;
    }
    return discountPrice6;
}

function priceTwentyPerCorpDelIndia()
{
    var discountPricePerCorpDelIndia=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerCorpDelIndia = theForm.elements["includedatediscountPerCorpDelIndia"];

    if(includedatediscountPerCorpDelIndia.checked==true)
    {
        discountPricePerCorpDelIndia=-1000;
    }
    return discountPricePerCorpDelIndia;
}

function price7()
{
    var discountPrice7=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount7 = theForm.elements["includedatediscount7"];

    if(includedatediscount7.checked==true)
    {
        discountPrice7=-2500;
    }
    return discountPrice7;
}

function priceTwentyPerCorpDelIndia1()
{
    var discountPricePerCorpDelIndia1=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerCorpDelIndia1 = theForm.elements["includedatediscountPerCorpDelIndia1"];

    if(includedatediscountPerCorpDelIndia1.checked==true)
    {
        discountPricePerCorpDelIndia1=-2000;
    }
    return discountPricePerCorpDelIndia1;
}

function price8()
{
    var discountPrice8=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount8 = theForm.elements["includedatediscount8"];

    if(includedatediscount8.checked==true)
    {
        discountPrice8=-3750;
    }
    return discountPrice8;
}

function priceTwentyPerCorpDelIndia2()
{
    var discountPricePerCorpDelIndia2=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerCorpDelIndia2 = theForm.elements["includedatediscountPerCorpDelIndia2"];

    if(includedatediscountPerCorpDelIndia2.checked==true)
    {
        discountPricePerCorpDelIndia2=-3000;
    }
    return discountPricePerCorpDelIndia2;
}

function price9()
{
    var discountPrice9=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount9 = theForm.elements["includedatediscount9"];

    if(includedatediscount9.checked==true)
    {
        discountPrice9=-25;
    }
    return discountPrice9;
}

function priceTwentyPerAfroAsian()
{
    var discountPricePerAfroAsian=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerAfroAsian = theForm.elements["includedatediscountPerAfroAsian"];

    if(includedatediscountPerAfroAsian.checked==true)
    {
        discountPricePerAfroAsian=-20;
    }
    return discountPricePerAfroAsian;
}


function price10()
{
    var discountPrice10=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount10 = theForm.elements["includedatediscount10"];

    if(includedatediscount10.checked==true)
    {
        discountPrice10=-50;
    }
    return discountPrice10;
}

function priceTwentyPerAfroAsian1()
{
    var discountPricePerAfroAsian1=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerAfroAsian1 = theForm.elements["includedatediscountPerAfroAsian1"];

    if(includedatediscountPerAfroAsian1.checked==true)
    {
        discountPricePerAfroAsian1=-40;
    }
    return discountPricePerAfroAsian1;
}


function price11()
{
    var discountPrice11=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount11 = theForm.elements["includedatediscount11"];

    if(includedatediscount11.checked==true)
    {
        discountPrice11=-75;
    }
    return discountPrice11;
}

function priceTwentyPerAfroAsian2()
{
    var discountPricePerAfroAsian2=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerAfroAsian2 = theForm.elements["includedatediscountPerAfroAsian2"];

    if(includedatediscountPerAfroAsian2.checked==true)
    {
        discountPricePerAfroAsian2=-60;
    }
    return discountPricePerAfroAsian2;
}

function price12()
{
    var discountPrice12=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount12 = theForm.elements["includedatediscount12"];

    if(includedatediscount12.checked==true)
    {
        discountPrice12=-75;
    }
    return discountPrice12;
}

function priceTwentyPerRestWorld()
{
    var discountPricePerRestWorld=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerRestWorld = theForm.elements["includedatediscountPerRestWorld"];

    if(includedatediscountPerRestWorld.checked==true)
    {
        discountPricePerRestWorld=-60;
    }
    return discountPricePerRestWorld;
}


function price13()
{
    var discountPrice13=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount13 = theForm.elements["includedatediscount13"];

    if(includedatediscount13.checked==true)
    {
        discountPrice13=-150;
    }
    return discountPrice13;
}

function priceTwentyPerRestWorld1()
{
    var discountPricePerRestWorld1=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerRestWorld1 = theForm.elements["includedatediscountPerRestWorld1"];

    if(includedatediscountPerRestWorld1.checked==true)
    {
        discountPricePerRestWorld1=-120;
    }
    return discountPricePerRestWorld1;
}


function price14()
{
    var discountPrice14=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscount14 = theForm.elements["includedatediscount14"];

    if(includedatediscount14.checked==true)
    {
        discountPrice14=-225;
    }
    return discountPrice14;
}

function priceTwentyPerRestWorld2()
{
    var discountPricePerRestWorld2=0;
    var theForm = document.forms["feeCalform"];
    var includedatediscountPerRestWorld2 = theForm.elements["includedatediscountPerRestWorld2"];

    if(includedatediscountPerRestWorld2.checked==true)
    {
        discountPricePerRestWorld2=-180;
    }
    return discountPricePerRestWorld2;
}

//divider

function absentiaPrice()
{
    var absentiaPrice=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia = theForm.elements["includeAbsentia"];
    if(includeAbsentia.checked==true){
        absentiaPrice=625;
    }
    return absentiaPrice;
}

function absentiaPrice1()
{
    var absentiaPrice1=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia1 = theForm.elements["includeAbsentia1"];
    if(includeAbsentia1.checked==true){
        absentiaPrice1=1250;
    }
    return absentiaPrice1;
}

function absentiaPrice2()
{
    var absentiaPrice2=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia2 = theForm.elements["includeAbsentia2"];
    if(includeAbsentia2.checked==true){
        absentiaPrice2=1875;
    }
    return absentiaPrice2;
}

function absentiaPrice3()
{
    var absentiaPrice3=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia3 = theForm.elements["includeAbsentia3"];
    if(includeAbsentia3.checked==true){
        absentiaPrice3=375;
    }
    return absentiaPrice3;
}

function absentiaPrice4()
{
    var absentiaPrice4=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia4 = theForm.elements["includeAbsentia4"];
    if(includeAbsentia4.checked==true){
        absentiaPrice4=750;
    }
    return absentiaPrice4;
}

function absentiaPrice5()
{
    var absentiaPrice5=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia5 = theForm.elements["includeAbsentia5"];
    if(includeAbsentia5.checked==true){
        absentiaPrice5=1125;
    }
    return absentiaPrice5;
}

function absentiaPrice6()
{
    var absentiaPrice6=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia6 = theForm.elements["includeAbsentia6"];
    if(includeAbsentia6.checked==true){
        absentiaPrice6=1250;
    }
    return absentiaPrice6;
}

function absentiaPrice7()
{
    var absentiaPrice7=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia7 = theForm.elements["includeAbsentia7"];
    if(includeAbsentia7.checked==true){
        absentiaPrice7=2500;
    }
    return absentiaPrice7;
}

function absentiaPrice8()
{
    var absentiaPrice8=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia8 = theForm.elements["includeAbsentia8"];
    if(includeAbsentia8.checked==true){
        absentiaPrice8=3750;
    }
    return absentiaPrice8;
}

function absentiaPrice9()
{
    var absentiaPrice9=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia9 = theForm.elements["includeAbsentia9"];
    if(includeAbsentia9.checked==true){
        absentiaPrice9=25;
    }
    return absentiaPrice9;
}

function absentiaPrice10()
{
    var absentiaPrice10=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia10 = theForm.elements["includeAbsentia10"];
    if(includeAbsentia10.checked==true){
        absentiaPrice10=50;
    }
    return absentiaPrice10;
}

function absentiaPrice11()
{
    var absentiaPrice11=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia11 = theForm.elements["includeAbsentia11"];
    if(includeAbsentia11.checked==true){
        absentiaPrice11=75;
    }
    return absentiaPrice11;
}

function absentiaPrice12()
{
    var absentiaPrice12=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia12 = theForm.elements["includeAbsentia12"];
    if(includeAbsentia12.checked==true){
        absentiaPrice12=75;
    }
    return absentiaPrice12;
}


function absentiaPrice13()
{
    var absentiaPrice13=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia13 = theForm.elements["includeAbsentia13"];
    if(includeAbsentia13.checked==true){
        absentiaPrice13=150;
    }
    return absentiaPrice13;
}

function absentiaPrice14()
{
    var absentiaPrice14=0;
    var theForm = document.forms["feeCalform"];
    var includeAbsentia14 = theForm.elements["includeAbsentia14"];
    if(includeAbsentia14.checked==true){
        absentiaPrice14=225;
    }
    return absentiaPrice14;
}
//divider

function calculateTotalDelegate()
{
    var feePrice = getcategoryPrice1();
    var divobj = document.getElementById('totalPrice1');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}

function calculateTotalDelegateAcademicians()
{
    var feePrice = getcategoryPrice1() + priceDelegateAcademicians();
    var divobj = document.getElementById('totalPrice1');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}

function calculateTotalDelegateResearchScholarsIndia()
{
    var feePrice = getcategoryPrice1() + priceDelegateResearchScholarsIndia();
    var divobj = document.getElementById('totalPrice1');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}

function calculateTotalDelegateCorporateDelegates()
{
    var feePrice = getcategoryPrice1() + priceDelegateCorporateDelegates();
    var divobj = document.getElementById('totalPrice1');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}

function calculateTotalDelegateAfroAsianCountriesDelegate()
{
    var feePrice = getcategoryPrice1() + priceDelegateAfroAsianCountriesDelegate();
    var divobj = document.getElementById('totalPrice1');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}

function calculateTotalDelegateRestWorldDlegate()
{
    var feePrice = getcategoryPrice1() + priceDelegateRestWorldDlegate();
    var divobj = document.getElementById('totalPrice1');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}
        
function calculateTotal()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- "+feePrice;

}

function calculateTotalTwentyPerAcad()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerAcade() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal1()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price1() + absentiaPrice1();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerAcad1()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerAcade1() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal2()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price2() + absentiaPrice2();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerAcad2()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerAcade2() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal3()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price3() + absentiaPrice3();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerResSchoIndia()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerResSchoIndia() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal4()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price4() + absentiaPrice4();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerResSchoIndia1()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerResSchoIndia1() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal5()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price5() + absentiaPrice5();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerResSchoIndia2()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerResSchoIndia2() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal6()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price6() + absentiaPrice6();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerCorpDelIndia()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerCorpDelIndia() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal7()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price7() + absentiaPrice7();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerCorpDelIndia1()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerCorpDelIndia1() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal8()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price8() + absentiaPrice8();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotalTwentyPerCorpDelIndia2()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerCorpDelIndia2() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- Rs. "+feePrice;

}

function calculateTotal9()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price9() + absentiaPrice9();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotalTwentyPerAfroAsian()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerAfroAsian() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotal10()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price10() + absentiaPrice10();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotalTwentyPerAfroAsian1()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerAfroAsian1() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotal11()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price11() + absentiaPrice11();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotalTwentyPerAfroAsian2()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerAfroAsian2() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotal12()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price12() + absentiaPrice12();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotalTwentyPerRestWorld()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerRestWorld() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotal13()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price13() + absentiaPrice13();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotalTwentyPerRestWorld1()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerRestWorld1() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotal14()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + price14() + absentiaPrice14();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}

function calculateTotalTwentyPerRestWorld2()
{
    var feePrice = getcoauthPrice() + getcategoryPrice() + priceTwentyPerRestWorld2() + absentiaPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Fee :- USD "+feePrice;

}
//divider

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
