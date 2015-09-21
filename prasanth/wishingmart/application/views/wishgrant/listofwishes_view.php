<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>

<div class="content inside-page">
<div class="main container "> 
    <div class="form-group">
      <div class="help-block center h2">
        <?php if(isset($flashmsg)){echo $flashmsg;} ?>            
      </div>        
    </div>    
    <div id="cbp-vm" class="  cbp-vm-switcher cbp-vm-view-grid">

      <div class="cbp-vm-options">
<div class="">
        
        <div class="form-group col-sm-2">
    <select class="form-control">
      <option>10 wishes</option>
      <option>25 wishes</option>
      <option>50 wishes</option>
      <option>100 wishes</option>
      </select>
      </div>
    
            <div class="form-group col-sm-2 ">
    <select class="form-control">
      <option>Country</option>
      <option>Australia</option>
      <option>America</option>
      <option>Russia</option>
                <option>India</option>
      <option>Singapore</option>
      <option>Malaysia</option>
      <option>China</option>
      <option>Nepal</option>
                <option>United Kingdom</option>
      </select>
      </div>
                
                <div class="form-group col-sm-2">
    <select class="form-control">
      <option>Category</option>
      <option>Cat1</option>
      <option>CAt2</option>
      <option>Cat3</option>
                <option>Cat4</option>
      </select>
      </div>
                
              <div class="form-group col-sm-2">
    <select class="form-control">
      <option>Sub-Category</option>
      <option>Cat1</option>
      <option>CAt2</option>
      <option>Cat3</option>
                <option>Cat4</option>
      </select>
      </div>
                
                <div class="form-group col-sm-2">
    <select class="form-control">
      <option>Sort by</option>
      <option>A-Z</option>
      <option>Date</option>
      </select>
      </div>
                
    </div>
           
        <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
        <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
                              
            <div class="">
            <div class="input-group col-sm-12" >
            
          <input type="text" class="form-control" Placeholder="Keywords or Descriptions" />
            <span class=" input-group-addon add-on">
            <span class="fa fa-search "></span>
           </span>
         
          </div>
            </div>  
                </div>

<ul>
<?php
//print_r($allwishes);exit();
$count=count($allwishes);
for($i=0;$i<=($count-1);$i++){
  //echo $allwishes[$i]['wpn'];
  //echo $allwishes[$i]['cnid'];
  //echo $allwishes[$i]['wpdec'];
?>

  <li>
    <form action="<?php echo base_url('wishgrant/listofwishes'); ?>" method="post">
    <a class="cbp-vm-image" href="#">
      <img src="<?php echo base_url()."images/thumbs/".$allwishes[$i]['wpimg']; ?>" class="listimg" width="280px" height="280px">
    </a>
    <h3 class="cbp-vm-title">
      <?php echo $allwishes[$i]['wpn']; ?>
    </h3>
    <div class="cbp-vm-price">
      <?php echo $allwishes[$i]['cname']; ?>
    </div>
    <div class="cbp-vm-details">
      <?php echo $allwishes[$i]['wpdec']; ?>
    </div>
      <input type="hidden" name="wid" value="<?php echo $allwishes[$i]['wid']; ?>">
      <input type="hidden" name="wrid" value="<?php echo $allwishes[$i]['rid']; ?>">
      <input type="hidden" name="wpname" value="<?php echo $allwishes[$i]['wpn']; ?>">
      <input type="hidden" name="wcountry" value="<?php echo $allwishes[$i]['cname']; ?>">
      <input type="hidden" name="wscatugery" value="<?php echo $allwishes[$i]['scid']; ?>">
      <input type="hidden" name="wbrand" value="<?php echo $allwishes[$i]['brand']; ?>">
      <input type="hidden" name="wcolour" value="<?php echo $allwishes[$i]['wpcolour']; ?>">
      <input type="hidden" name="wdesc" value="<?php echo $allwishes[$i]['wpdec']; ?>">
      <input type="hidden" name="wimg" value="<?php echo $allwishes[$i]['wpimg']; ?>">
      <input type="submit" class="btn btn-danger" value="&#9733; Grant Wish" name="sub">

<!--    <a class="btn btn-danger" href="<?php //echo base_url('wishgrant/granting/'.$allwishes[$i]['wid']); ?>">
      <span class="fa fa-star"></span> Grant Wish
    </a>
    -->
</form>
  </li>

<?php }// FOR END ?>
</ul>
                
                 
    </div>
            <div class="center">
                 <ul class="pagination ">
                 <li class="disabled"><a href="#">«</a></li>
                 <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                 <li><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a href="#">4</a></li>
                 <li><a href="#">5</a></li>
                 <li><a href="#">»</a></li>
                 </ul>
                 </div>
  </div><!-- /main -->
</div><!-- /container -->

<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
