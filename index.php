<?php
require("header.html");
?>

<div id="indexContent">
	
	<!--PhotoSlider-->
	<div id="ps">
	<?php
	require("photoslider.html");
	?>	
	</div>
	<!--End PhotoSlider-->
	<div id="contentUnderPS" class="">
	<div id="orangeContentBox" class="col-xs-12 col-md-6">
	<div class="indexEventTitle">
			<h3>Upcoming Events</h3>
			<hr></div>
	<!--<div id="indexEvents">-->
		<table class="EventsTable table-responsive">
		<tr>
			<td>
			<span class="EventTitle">Health Expo</span><br/>
			<span class="EventText">Date: Saturday, May 27th 2016</span>
			<div class="indexEventImg">
				<a href="images/event-img/Flyer01.jpg"><img src="images/event-img/Flyer01_thumbnail.jpg" class="EventImg img-responsive"/></a>
			</div>
			
			</td>
			<td>
			<span class="EventTitle">Jagannath Rath Yatra</span><br/>
			<span class="EventText">Date: Sunday, 10th July 2016</span>
			<div class="indexEventImg">
				<a href="images/event-img/Flyer02.jpg"><img src="images/event-img/Flyer02_thumbnail.jpg" class="EventImg img-responsive"/></a>
			</div>
			
			</td>
		</tr>
		<tr>
			<td>
			<span class="EventTitle">Navratri Celebration</span><br/>
			<span class="EventText">Date: 1st - 9th October 2016</span>			
			<div class="indexEventImg">
				<a href="images/event-img/Flyer03.jpg"><img src="images/event-img/Flyer03_thumbnail.jpg" class="EventImg img-responsive"/></a>
			</div>
			
			<td>
			<span class="EventTitle">Ganesh Festival</span><br/>
			<span class="EventText">Date: 4th - 15 September</span>			
			<div class="indexEventImg">
				<a href="images/event-img/Flyer04.jpg"><img src="images/event-img/Flyer04_thumbnail.jpg" class="EventImg img-responsive"/></a>
			</div>
			
			</td>
		</tr>
		</table>
	<!--</div>-->
	
	</div>
	<div id="rightSideIndex" class="col-xs-12 col-md-4">
		<div class="indexWhiteBox">
			<h4>Hours of Operation</h4>
			<hr class="line30">
		<table class="aboutTable">
		<tr>
			<th>Date</th>
			<th>Morning</th>
			<th>Evening</th>
		</tr>
		<tr>
			<th>Monday</th>
			<th>10AM - NOON</th>
			<th>6 - 8PM</th>
		</tr>
		<tr>
			<th>Tuesday</th>
			<th>10AM - NOON</th>
			<th>6 - 8PM</th>
		</tr>
		<tr>
			<th>Wednesday</th>
			<th>-----</th>
			<th>6 - 8PM</th>
		</tr>
		<tr>
			<th>Thursday</th>
			<th>10AM - NOON</th>
			<th>6 - 8PM</th>
		</tr>
		<tr>
			<th>Friday</th>
			<th>-----</th>
			<th>6 - 8PM</th>
		</tr>
		<tr>
			<th>Saturday</th>
			<th>10AM - NOON</th>
			<th>6 - 8PM</th>
		</tr>
		<tr>
			<th>Sunday</th>
			<th>10AM - 3PM</th>
			<th>-----</th>
		</tr>
	</table>
		</div>
		<div class="indexWhiteBox" style="margin-top:40px;">
			<h4>Address</h4>
			<hr class="line30">
			<p><b>Rama Temple And Cultural Center </b><br>
			1234 pruthi chowk, XYZ,ASDF</p>
		</div>
		<a href="https://calendar.google.com/calendar/embed?src=iothqf78ptbbun16bjattcl560%40group.calendar.google.com&ctz=America/Toronto" target="_blank">
		<div class="indexWhiteBox" style="margin-top:40px;">		
			<iframe src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=iothqf78ptbbun16bjattcl560%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FToronto" style="border-width:0" width="100%" height="300" frameborder="0" scrolling="no">				
			</iframe>
			Click here to view in large
		</div></a>	
	</div>
	</div>
	<div class="spacerDiv"></div>
</div>



<?php
require("footer.html");
?>