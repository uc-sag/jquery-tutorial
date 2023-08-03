
<!DOCTYPE html>
<html>
<head>
<style>
.ancestors * { 
  display: block;
  border: 2px solid lightgrey;
  color: lightgrey;
  padding: 5px;
  margin: 15px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
// $(document).ready(function(){
//   $("span").parent().css({"color": "red", "border": "2px solid red"});
// });
// $(document).ready(function(){
//   $("span").parents().css({"color": "red", "border": "2px solid red"});
// });

// $(document).ready(function(){
//   $("span").parentsUntil("div");
// });

$(document).ready(function(){
  $("div").find("span");
});
</script>
</head>
<body class="ancestors"> 
  <!-- <div style="width:500px;">div (great-grandparent)
    <ul>ul (grandparent)  
      <li>li (direct parent)
        <span>span</span>
      </li>
    </ul>   
  </div> -->


<div class="descendants" style="width:500px;">div (current element) 
  <p>p (child)
    <span>span (grandchild)</span>   
  </p>
  <p>p (child)
    <span>span (grandchild)</span>
  </p> 
</div>


</body>
</html>
