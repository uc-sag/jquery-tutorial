<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
// $(document).ready(function(){
//   $("button").click(function(){
//     $("#div1").load("demo_test.txt");
//   });
// });

// $(document).ready(function(){
//   $("button").click(function(){
//     $("#div1").load("demo_test.txt", function(responseTxt, statusTxt, xhr){
//       if(statusTxt == "success")
//         alert("External content loaded successfully!");
//       if(statusTxt == "error")
//         alert("Error: " + xhr.status + ": " + xhr.statusText);
//     });
//   });
// });

$(document).ready(function(){
  $("button").click(function(){
    $.get("demo_test.asp", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
</head>
<body>

<!-- <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button> -->

<!-- 
<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button> -->
<button>Send an HTTP GET request to a page and get the result back</button>
</body>
</html>


