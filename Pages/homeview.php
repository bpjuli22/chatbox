<?php
class homeview
  {
    public function init_homeview(){
	  ?>


<!-- POSTS from all users -->
<div id="post" class="post container" align="center">
	<div>What's on your mind?</div>
	<form method="POST">
		<div class="form-group">
    	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Something" name="content"></textarea>
  		</div>
    	<button type="submit" class="btn btn-success" name="post">Post</button>
	</form>

	<!-- Database for post -->

</div>
<!-- For showing Posts -->
<div class="container">
	
</div>


</body>
</html>
<?php
}
}
$Searchq= new homeview();
$Searchq->init_homeview();


