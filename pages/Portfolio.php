<?php 
include './admin/include/datebase.php';
$var1 = "SELECT * FROM  project ORDER BY Id DESC";
$resultat = $db_connect->query($var1);
$data = $resultat->fetchAll(PDO::FETCH_ASSOC);
?>



<section class="section-Portfolio A-bottom" id="PORTFOLIO">
    <h1 class="h1 text-center pt-4"><?= _H1Portfolio ?></h1> 
  <ul id="filters" class="clearfix d-flex justify-content-center">
    <li><span class="filter list-inline-item" data-filter=".app, .icon, .logo, .web">All</span></li>
    <li><span class="filter list-inline-item" data-filter=".app">HTML CSS</span></li>
    <li><span class="filter list-inline-item" data-filter=".icon">JavaScript</span></li>
    <li><span class="filter list-inline-item" data-filter=".logo">PHP</span></li>
    <li><span class="filter list-inline-item" data-filter=".web">Autre</span></li>
  </ul>
  
  <div id="portfoliolist" class="container">
  <?php 
  foreach($data as $projet) {
    $port_projet = <<<prod
 
  <div class="portfolio {$projet['Category']}" data-cat="{$projet['Category']}">
  <div class="portfolio-wrapper" data-toggle="modal" data-target="#model{$projet['Id']}">			
    <img src="images/project/{$projet['Image']}" alt="" />
    <div class="label">
      <div class="label-text">
        <a class="text-title" >Visual Infography</a>
        <span class="text-category">APP</span>
      </div>
      <div class="label-bg"></div>
    </div>
  </div>
</div>
prod;
echo  $port_projet;

}
  ?>
																									          
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
          <img class="mx-auto d-block" src="images/project/{$projet['Image']}">
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
