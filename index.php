
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
//     $(document).ready(function(){
//         alert('doc loaded');

// });
// $(document).ready(function(){
//   $("p").click(function(){
//     $(this).hide();
//   });
// });
// $(document).ready(function(){
//   $("#test").click(function(){
//     $(this).hide();
//   });
// });

// $(document).ready(function(){
//   $(".test").click(function(){
//     $(".test").hide();
//   });
// });


// $(document).ready(function(){
//     $("p").dblclick(function(){
//   $(this).hide();
// });
// });






</script>


</head>
<body>
    <!-- <button id="hide">Hide</button>
    <button id="show">Show</button> -->
    <!-- <button id="toggle">Toggle</button>
    <p>This is paragraph</p> -->
<!-- 
    <p>If you click on the "Hide" button, I will disappear.</p>

<button id="hide">Hide</button>
<button id="show">Show</button> -->
<!-- <p>Demonstrate fadeTo() with different parameters.</p>

<button>Click to fade boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;background-color:blue;"></div> -->

<!-- <button>Start Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:100px;width:100px;position:absolute;"></div> -->



<script>

// $("#p1").mousedown(function(){
//   alert("Mouse down over p1!");
// });

// $("#p1").hover(function(){
//   alert("You entered p1!");
// },
// function(){
//   alert("Bye! You now leave p1!");
// });

// $("#check").on({
//   mouseenter: function(){
//     $(this).css("background-color", "lightgray");
//   },
//   mouseleave: function(){
//     $(this).css("background-color", "lightblue");
//   },
//   click: function(){
//     $(this).css("background-color", "yellow");
//   }
// });

// $("#hide").click(function(){
//   $("p").hide(1000);
// });

// $("#show").click(function(){
//   $("p").show(1000);
// });

// $("#toggle").click(function(){
//   $("p").toggle(1000);
// });


// $("#hide").click(function(){
//   $("p").hide();
// });

// $("#show").click(function(){
//   $("p").show();
// });

// $("button").click(function(){
//   $("#div1").fadeTo("slow", 0.15);
//   $("#div2").fadeTo("slow", 0.4);
//   $("#div3").fadeTo("slow", 0.7);
// });

$("button").click(function(){
  $("div").animate({
    left: '250px',
    opacity: '0.5',
    height: '150px',
    width: '150px'
  });
}); 
    </script>
</body>
</html>
