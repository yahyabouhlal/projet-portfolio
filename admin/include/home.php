
<?php 
include 'datebase.php';
$var1 = "SELECT * FROM  project ORDER BY Id DESC";
$resultat = $db_connect->query($var1);
$data = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>
<section class="panel important">
    <a type="button" class="btn btn-primary m-4 " href="./add.php"><i class="fas fa-plus"></i> add Project</a>
    If you want to add a project click the button
  </section>

<section class="panel important">
<div class="container">
	<div class="row">
		<div class="container">
            <div class="row">
            
                <!-- <div class="col-md-4">
                    <div class="card mb">
                        <img class="card-img-top" src="http://www.placehold.it/286x180" alt="Card image cap">
                        <div class="card-body mb">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>    
                            <a class="btn icon-btn btn-primary" href="#"><span class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary"></span>Like</a>
                            <a class="btn icon-btn btn-success" href="#"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Add</a>
                            <a class="btn icon-btn btn-warning" href="#"><span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Remove</a>
                        </div>
                    </div>
                </div> -->
                <?php 
  foreach($data as $projet) {
    $port_projet = <<<prod
 
    <div class="col-md-4">
    <div class="card mb">
        <img class="card-img-top" src="../images/project/{$projet['Image']}" alt="Card image cap">
        <div class="card-body mb">
            <h5 class="card-title">{$projet['Name']}</h5>  
            <a class="btn icon-btn btn-primary" data-toggle="modal" data-target="#model{$projet['Id']}"><i class="far fa-eye"></i> view</a>
            <a class="btn icon-btn btn-success" href="update.php?id={$projet['Id']}"><i class="far fa-edit"></i> Modify</a>
            <a class="btn icon-btn btn-warning" href="delete.php?id={$projet['Id']}"><i class="far fa-trash-alt"></i> Delete</a>
        </div>
    </div>
</div>

prod;
echo  $port_projet;

}
  ?>

            </div>
        </div>
	</div>
</div>
  </section>
  <!-- Modal -->
<?php 
  foreach($data as $projet) {
    $port_projet = <<<prod
    <div class="modal fade bd-example-modal-lg" id="model{$projet['Id']}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="row">
          <div class="col">
          <img class="mx-auto d-block" src="../images/project/{$projet['Image']}">
          </div>
          <div class="col">
            <p>{$projet['Description']}</p>
          </div>
        </div>
        </div>
        <div class="modal-footer">
        <a class="btn btn-secondary" href="{$projet['Github']}"><i class="fab fa-github"></i> Github</a>
        <a class="btn btn-success" href="{$projet['View']}"><i class="far fa-eye"></i> View</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
prod;
echo  $port_projet;

}
  ?>