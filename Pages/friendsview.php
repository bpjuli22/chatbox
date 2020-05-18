<?php
class friendview
  {
    public function init_friendview(){
	  ?>
    <div class="container">
  <!-- Content here -->
  <br>
        <div>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search friend</button>
          </form>
        </div>

        <div>
          
        </div>

    </div>
    
<?php
}
}
$Searchq= new friendview();
$Searchq->init_friendview();


