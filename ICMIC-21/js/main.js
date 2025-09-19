$(".answer").hide();
$(".answer1").hide();
$("#coupon_question").click(function() {
  if($(this).is(":checked")) {
      $(".answer").show();
      $(".answer1").hide();
  } else {
      $(".answer").hide();
  }
});

$("#coupon_question1").click(function() {
  if($(this).is(":checked")) {
    $(".answer").hide();
    $(".answer1").show();
  } else {
      $(".answer1").hide();
  }
});


$(".twentyPerAcademician1").hide();
$("#includeAbsentia").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerAcademician").hide();
    $(".twentyPerAcademician1").show();
  } else {
      $(".twentyPerAcademician1").hide();
      $(".twentyPerAcademician").show();
  }
});

$(".twentyPerAcademician3").hide();
$("#includeAbsentia1").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerAcademician2").hide();
    $(".twentyPerAcademician3").show();
  } else {
      $(".twentyPerAcademician3").hide();
      $(".twentyPerAcademician2").show();
  }
});

$(".twentyPerAcademician5").hide();
$("#includeAbsentia2").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerAcademician4").hide();
    $(".twentyPerAcademician5").show();
  } else {
      $(".twentyPerAcademician5").hide();
      $(".twentyPerAcademician4").show();
  }
});


$(".coauthorAcademician1answer").hide();
$(".coauthorAcademician2answer").hide();
$("#coauthor-academicians1Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorAcademician1answer").show();
    $(".coauthorAcademicianAnswer").hide();
    $(".coauthorAcademician2answer").hide();
  } else {
      $(".coauthorAcademician1answer").hide();
      $(".coauthorAcademicianAnswer").hide();
      $(".coauthorAcademician2answer").hide();
  }
});


$("#coauthor-academicians2Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorAcademician1answer").hide();
    $(".coauthorAcademicianAnswer").hide();
    $(".coauthorAcademician2answer").show();
  } else {
      $(".coauthorAcademician1answer").hide();
      $(".coauthorAcademicianAnswer").hide();
      $(".coauthorAcademician2answer").hide();
  }
});

///research scholar india///
$(".coauthorResearchScholarsIndia1answer").hide();
$(".coauthorResearchScholarsIndia2answer").hide();
$("#coauthor-ResearchScholarsIndia1Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorResearchScholarsIndia1answer").show();
    $(".coauthorResearchScholarsIndiaAnswer").hide();
    $(".coauthorResearchScholarsIndia2answer").hide();
  } else {
      $(".coauthorResearchScholarsIndia1answer").hide();
      $(".coauthorResearchScholarsIndiaAnswer").hide();
      $(".coauthorResearchScholarsIndia2answer").hide();
  }
});

$("#coauthor-ResearchScholarsIndia2Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorResearchScholarsIndia1answer").hide();
    $(".coauthorResearchScholarsIndiaAnswer").hide();
    $(".coauthorResearchScholarsIndia2answer").show();
  } else {
      $(".coauthorResearchScholarsIndia1answer").hide();
      $(".coauthorResearchScholarsIndiaAnswer").hide();
      $(".coauthorResearchScholarsIndia2answer").hide();
  }
});

$(".twentyPerResearchScholarsIndia1").hide();
$("#includeAbsentia3").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerResearchScholarsIndia").hide();
    $(".twentyPerResearchScholarsIndia1").show();
  } else {
      $(".twentyPerResearchScholarsIndia1").hide();
      $(".twentyPerResearchScholarsIndia").show();
  }
});

$(".twentyPerResearchScholarsIndia3").hide();
$("#includeAbsentia4").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerResearchScholarsIndia2").hide();
    $(".twentyPerResearchScholarsIndia3").show();
  } else {
      $(".twentyPerResearchScholarsIndia3").hide();
      $(".twentyPerResearchScholarsIndia2").show();
  }
});

$(".twentyPerResearchScholarsIndia5").hide();
$("#includeAbsentia5").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerResearchScholarsIndia4").hide();
    $(".twentyPerResearchScholarsIndia5").show();
  } else {
      $(".twentyPerResearchScholarsIndia5").hide();
      $(".twentyPerResearchScholarsIndia4").show();
  }
});
///end research scholar india///


///Corporate Delegates India///
$(".coauthorCorpDelIndia1answer").hide();
$(".coauthorCorpDelIndia2answer").hide();
$("#coauthor-CorpDelIndia1Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorCorpDelIndia1answer").show();
    $(".coauthorCorpDelIndiaAnswer").hide();
    $(".coauthorCorpDelIndia2answer").hide();
  } else {
      $(".coauthorCorpDelIndia1answer").hide();
      $(".coauthorCorpDelIndiaAnswer").hide();
      $(".coauthorCorpDelIndia2answer").hide();
  }
});

$("#coauthor-CorpDelIndia2Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorCorpDelIndia1answer").hide();
    $(".coauthorCorpDelIndiaAnswer").hide();
    $(".coauthorCorpDelIndia2answer").show();
  } else {
      $(".coauthorCorpDelIndia1answer").hide();
      $(".coauthorCorpDelIndiaAnswer").hide();
      $(".coauthorCorpDelIndia2answer").hide();
  }
});

$(".twentyPerCorpDelIndia1").hide();
$("#includeAbsentia6").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerCorpDelIndia").hide();
    $(".twentyPerCorpDelIndia1").show();
  } else {
      $(".twentyPerCorpDelIndia1").hide();
      $(".twentyPerCorpDelIndia").show();
  }
});

$(".twentyPerCorpDelIndia3").hide();
$("#includeAbsentia7").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerCorpDelIndia2").hide();
    $(".twentyPerCorpDelIndia3").show();
  } else {
      $(".twentyPerCorpDelIndia3").hide();
      $(".twentyPerCorpDelIndia2").show();
  }
});

$(".twentyPerCorpDelIndia5").hide();
$("#includeAbsentia8").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerCorpDelIndia4").hide();
    $(".twentyPerCorpDelIndia5").show();
  } else {
      $(".twentyPerCorpDelIndia5").hide();
      $(".twentyPerCorpDelIndia4").show();
  }
});
///end Corporate Delegates India///


///Afro-Asian///
$(".coauthorAfroAsian1answer").hide();
$(".coauthorAfroAsian2answer").hide();
$("#coauthor-AfroAsian1Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorAfroAsian1answer").show();
    $(".coauthorAfroAsianAnswer").hide();
    $(".coauthorAfroAsian2answer").hide();
  } else {
      $(".coauthorAfroAsian1answer").hide();
      $(".coauthorAfroAsianAnswer").hide();
      $(".coauthorAfroAsian2answer").hide();
  }
});

$("#coauthor-AfroAsian2Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorAfroAsian1answer").hide();
    $(".coauthorAfroAsianAnswer").hide();
    $(".coauthorAfroAsian2answer").show();
  } else {
      $(".coauthorAfroAsian1answer").hide();
      $(".coauthorAfroAsianAnswer").hide();
      $(".coauthorAfroAsian2answer").hide();
  }
});

$(".twentyPerAfroAsian1").hide();
$("#includeAbsentia9").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerAfroAsian").hide();
    $(".twentyPerAfroAsian1").show();
  } else {
      $(".twentyPerAfroAsian1").hide();
      $(".twentyPerAfroAsian").show();
  }
});

$(".twentyPerAfroAsian3").hide();
$("#includeAbsentia10").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerAfroAsian2").hide();
    $(".twentyPerAfroAsian3").show();
  } else {
      $(".twentyPerAfroAsian3").hide();
      $(".twentyPerAfroAsian2").show();
  }
});

$(".twentyPerAfroAsian5").hide();
$("#includeAbsentia11").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerAfroAsian4").hide();
    $(".twentyPerAfroAsian5").show();
  } else {
      $(".twentyPerAfroAsian5").hide();
      $(".twentyPerAfroAsian4").show();
  }
});
///end Afro-Asian///


///rest world///
$(".coauthorRestWorld1answer").hide();
$(".coauthorRestWorld2answer").hide();
$("#coauthor-RestWorld1Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorRestWorld1answer").show();
    $(".coauthorRestWorldAnswer").hide();
    $(".coauthorRestWorld2answer").hide();
  } else {
      $(".coauthorRestWorld1answer").hide();
      $(".coauthorRestWorldAnswer").hide();
      $(".coauthorRestWorld2answer").hide();
  }
});

$("#coauthor-RestWorld2Quest").click(function() {
  if($(this).is(":checked")) {
    $(".coauthorRestWorld1answer").hide();
    $(".coauthorRestWorldAnswer").hide();
    $(".coauthorRestWorld2answer").show();
  } else {
      $(".coauthorRestWorld1answer").hide();
      $(".coauthorRestWorldAnswer").hide();
      $(".coauthorRestWorld2answer").hide();
  }
});

$(".twentyPerRestWorld1").hide();
$("#includeAbsentia12").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerRestWorld").hide();
    $(".twentyPerRestWorld1").show();
  } else {
      $(".twentyPerRestWorld1").hide();
      $(".twentyPerRestWorld").show();
  }
});

$(".twentyPerRestWorld3").hide();
$("#includeAbsentia13").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerRestWorld2").hide();
    $(".twentyPerRestWorld3").show();
  } else {
      $(".twentyPerRestWorld3").hide();
      $(".twentyPerRestWorld2").show();
  }
});

$(".twentyPerRestWorld5").hide();
$("#includeAbsentia14").click(function() {
  if($(this).is(":checked")) {
    $(".twentyPerRestWorld4").hide();
    $(".twentyPerRestWorld5").show();
  } else {
      $(".twentyPerRestWorld5").hide();
      $(".twentyPerRestWorld4").show();
  }
});
///end rest world///

$(function() {
  $('#Academicians-India').hide();
  $('#Research-Scholars-India').hide(); 
  $('#Corporate-Delegates-India').hide(); 
  $('#International-Afro-Asian-Countries').hide();
  $('#International-Rest-World').hide();
  $('#category').change(function(){
      if($('#category').val() == 'Academicians_India') {
          $('#Academicians-India').show(); 
          $('#Research-Scholars-India').hide(); 
          $('#Corporate-Delegates-India').hide(); 
          $('#International-Afro-Asian-Countries').hide();
          $('#International-Rest-World').hide();
      } else {
          $('#Academicians-India').hide(); 
      } 

      if($('#category').val() == 'Research_Scholars_India') {
          $('#Academicians-India').hide(); 
          $('#Research-Scholars-India').show(); 
          $('#Corporate-Delegates-India').hide(); 
          $('#International-Afro-Asian-Countries').hide();
          $('#International-Rest-World').hide();
      } else {
          $('#Research-Scholars-India').hide(); 
      } 

      if($('#category').val() == 'Corporate_Delegates_India') {
          $('#Academicians-India').hide(); 
          $('#Research-Scholars-India').hide(); 
          $('#Corporate-Delegates-India').show(); 
          $('#International-Afro-Asian-Countries').hide();
          $('#International-Rest-World').hide();
      } else {
          $('#Corporate-Delegates-India').hide(); 
      } 

      if($('#category').val() == 'International_Afro_Asian_Countries') {
          $('#Academicians-India').hide(); 
          $('#Research-Scholars-India').hide(); 
          $('#Corporate-Delegates-India').hide(); 
          $('#International-Afro-Asian-Countries').show();
          $('#International-Rest-World').hide();
      } else {
          $('#International-Afro-Asian-Countries').hide(); 
      } 

      if($('#category').val() == 'International_Rest_World') {
          $('#Academicians-India').hide(); 
          $('#Research-Scholars-India').hide(); 
          $('#Corporate-Delegates-India').hide(); 
          $('#International-Afro-Asian-Countries').hide();
          $('#International-Rest-World').show();
      } else {
          $('#International-Rest-World').hide(); 
      } 
  });
});




//// DELEGATE////
$(function() {
  $('#Academicians-IndiaDelegate').hide();
  $('#Research-Scholars-IndiaDelegate').hide(); 
  $('#Corporate-Delegates-IndiaDelegate').hide(); 
  $('#International-Afro-Asian-CountriesDelegate').hide();
  $('#International-Rest-WorldDelegate').hide();
  $('#category1').change(function(){
      if($('#category1').val() == 'Academicians_IndiaDelegate') {
          $('#Academicians-IndiaDelegate').show(); 
          $('#Research-Scholars-IndiaDelegate').hide(); 
          $('#Corporate-Delegates-IndiaDelegate').hide(); 
          $('#International-Afro-Asian-CountriesDelegate').hide();
          $('#International-Rest-WorldDelegate').hide();
      } else {
          $('#Academicians-IndiaDelegate').hide(); 
      } 

      if($('#category1').val() == 'Research_Scholars_IndiaDelegate') {
          $('#Academicians-IndiaDelegate').hide(); 
          $('#Research-Scholars-IndiaDelegate').show(); 
          $('#Corporate-Delegates-IndiaDelegate').hide(); 
          $('#International-Afro-Asian-CountriesDelegate').hide();
          $('#International-Rest-WorldDelegate').hide();
      } else {
          $('#Research-Scholars-IndiaDelegate').hide(); 
      } 

      if($('#category1').val() == 'Corporate_Delegates_IndiaDelegate') {
          $('#Academicians-IndiaDelegate').hide(); 
          $('#Research-Scholars-IndiaDelegate').hide(); 
          $('#Corporate-Delegates-IndiaDelegate').show(); 
          $('#International-Afro-Asian-CountriesDelegate').hide();
          $('#International-Rest-WorldDelegate').hide();
      } else {
          $('#Corporate-Delegates-IndiaDelegate').hide(); 
      } 

      if($('#category1').val() == 'International_Afro_Asian_CountriesDelegate') {
          $('#Academicians-IndiaDelegate').hide(); 
          $('#Research-Scholars-IndiaDelegate').hide(); 
          $('#Corporate-Delegates-IndiaDelegate').hide(); 
          $('#International-Afro-Asian-CountriesDelegate').show();
          $('#International-Rest-WorldDelegate').hide();
      } else {
          $('#International-Afro-Asian-CountriesDelegate').hide(); 
      } 

      if($('#category1').val() == 'International_Rest_WorldDelegate') {
          $('#Academicians-IndiaDelegate').hide(); 
          $('#Research-Scholars-IndiaDelegate').hide(); 
          $('#Corporate-Delegates-IndiaDelegate').hide(); 
          $('#International-Afro-Asian-CountriesDelegate').hide();
          $('#International-Rest-WorldDelegate').show();
      } else {
          $('#International-Rest-WorldDelegate').hide(); 
      } 
  });
});