<?php
require("header.html");
?>
<div class="whiteContentBox">
<div class="contentContainer">

	<h2 class ="pageHeading" align="center">Photo Gallery</h2>
	<hr class="headingUnderline">


<div class="row" >

 <div class="col-md-3">
	<a href="#"  class="thumbnail">
	<img src="images/photo01.jpg" height="200" width="242">
	<div class="caption" align="center">
		<h4>Pongal Jan 2016</h4>
	</div>
	</a>
 </div>
<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo02.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Pongal Jan 2016</h4>
		</div>
		</a>
	 </div>
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo03.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Pongal Jan 2016</h4>
		</div>
		</a>
	 </div>
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo04.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Pongal Jan 2016</h4>
		</div>
		</a>
	 </div>
</div>
<div class="row">
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo05.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Diwali Celebration  Nov2015</h4>
		</div>
		</a>
	 </div>
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo06.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Annakut  Nov2015</h4>
		</div>
		</a>
	 </div>
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo07.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Annakut  Nov2015</h4>
		</div>
		</a>
	 </div>
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo08.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Annakut  Nov2015</h4>
		</div>
		</a>
	 </div>
</div>
<div class="row">
	<div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo09.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Ashtami havan 2015</h4>
		</div>
		</a>
	 </div>
	 <div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo10.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Ganesh Visarjan Sep 2015</h4>
		</div>
		</a>
	 </div>
	 <div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo11.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Ganesh Visarjan Sep 2015</h4>
		</div>
		</a>
	 </div>
	 <div class="col-md-3">
		<a href="#" class="thumbnail">
		<img src="images/photo12.jpg" height="200" width="242">
		<div class="caption" align="center">
			<h4>Jagannath Rath Yatra July 2015</h4>
		</div>
		</a>
	 </div>
</div>

</div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
<script>
$('.thumbnail').click(function(){

  	$('.modal-body').empty();

	var content = $(this).html();
	content = content.replace('200','');
	content = content.replace('242','560');

	$(content).appendTo('.modal-body');
	
  	$('#myModal').modal();
});
</script>
<div class="row">	
<hr id ="footerHR">
<div id="footer">
	<a href="https://www.facebook.com/hindumandir/" target="_blank">
	<img class="footerImg" src="images/FB.png">
	</a>
	<a href="https://twitter.com/Mandir7007" target="_blank">
	<img class="footerImg" src="images/Twitter.png">
	</a>
	<h4>Hindu Temple And Cultural Center of Windsor</h4>
	<h4>7007 Enterprise Way, Windsor Ontario</h4>
</div>
</div>
</div>
</body>
</html>