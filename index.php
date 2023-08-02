
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

$(document).ready(function(){
  $(".test").click(function(){
    $(".test").hide();
  });
});


$(document).ready(function(){
    $("p").dblclick(function(){
  $(this).hide();
});
});






</script>


</head>
<body>
    <h2 id="test">Hello Jquery</h2>
    <p>Para 1</p>
    <p>Para 2</p>
    <p>Para 3</p>

    <span class="test">dsfsda</span>
    <span class="test">dsfsdasdfasdfad</span>
    <span class="test">dsfsdasdfasdfaddsfad</span>
    <h3 id="p1">lkcnsdja</h3>

    <h5 id="check">check on</h5>
    <script>

$("#p1").mousedown(function(){
  alert("Mouse down over p1!");
});

$("#p1").hover(function(){
  alert("You entered p1!");
},
function(){
  alert("Bye! You now leave p1!");
});

$("#check").on({
  mouseenter: function(){
    $(this).css("background-color", "lightgray");
  },
  mouseleave: function(){
    $(this).css("background-color", "lightblue");
  },
  click: function(){
    $(this).css("background-color", "yellow");
  }
});
    </script>
</body>
</html>
