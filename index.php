
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
#div1 {
  height: 100px;
  width: 300px;
  padding: 10px;
  margin: 3px;
  border: 1px solid blue;
  background-color: lightblue;
}
</style>
</head>
<body>
<!-- <p id="test">This is some <b>bold</b> text in a paragraph.</p>

<button id="btn1">Show Text</button>
<button id="btn2">Show HTML</button> -->
<!-- 
<p><a href="https://www.w3schools.com" title="some title" id="w3s">W3Schools.com</a></p>

<button>Change href and title</button>

<p>Mouse over the link to see that the href attribute has changed and a title attribute is set.</p> -->


<!-- 
<p>This is a paragraph.</p>
<button onclick="appendText()">Append text</button> -->


<!-- <img src="/images/w3jquery.gif" alt="jQuery" width="100" height="140">

<p>Click the button to insert text after the image.</p>

<button onclick="afterText()">Insert after</button> -->

<div id="div1"></div>
<br>

<button>Display dimensions of div</button>

<p>innerWidth() - returns the width of an element (includes padding).</p>
<p>innerHeight() - returns the height of an element (includes padding).</p>


<script>

// $(document).ready(function(){
//   $("#btn1").click(function(){
//     alert("Text: " + $("#test").text());
//   });
//   $("#btn2").click(function(){
//     alert("HTML: " + $("#test").html());
//   });
// });

// $("button").click(function(){
//   $("#w3s").attr({
//     "href" : "https://www.w3schools.com/jquery/",
//     "title" : "W3Schools jQuery Tutorial"
//   });
// });

// function appendText() {
//   var txt1 = "<p>Text.</p>";        
//   var txt2 = $("<p></p>").text("Text."); 
//   var txt3 = document.createElement("p");
//   txt3.innerHTML = "Text.";       
//   $("body").append(txt1, txt2, txt3);   
// }

// function afterText() {
//   var txt1 = "<b>I </b>";                   
//   var txt2 = $("<i></i>").text("love ");    
//   var txt3 = document.createElement("b");  
//   txt3.innerHTML = "jQuery!";
//   $("img").after(txt1, txt2, txt3);        
// }

$("button").click(function(){
  var txt = "";
  txt += "Inner width: " + $("#div1").innerWidth() + "</br>";
  txt += "Inner height: " + $("#div1").innerHeight();
  $("#div1").html(txt);
});



</script>
</body>
</html>
