<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>

<div class="content inside-page">
<div class="main container"> 
    <div class="form-group">
      <div class="help-block center h2">
      </div>        
    </div>    
    <div id="cbp-vm" class="  cbp-vm-switcher cbp-vm-view-grid">
      <div class="form-group">
        <div class="help-block center h2">
          <?php if(isset($flashmsg)){echo $flashmsg;} ?>            
        </div>        
      </div> 
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
        <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" onclick="myFunction()">List View</a>
                              
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
//$count=count($allwishes);
//for($i=0;$i<=($count-1);$i++){
  //echo $allwishes[$i]['wpn'];
  //echo $allwishes[$i]['cnid'];
  //echo $allwishes[$i]['wpdec'];
$count=count($allwishes);
$page=$this->uri->segment(3);
if(!is_numeric($page)) $page=1;
$num = $count;
$per_page=4; //default 5 results per page
$start=$per_page*($page-1); //start for select on next page (page2, 3, 4,5)
$end=min($num,$page*$per_page); //end
for($i=$start;$i<=($end-1);$i++){
?>
 
  <li>
    <a class="cbp-vm-image" href="#">
      <img src="<?php echo base_url('images/products/wished').'/'.$allwishes[$i]['wpimg']; ?>">
    </a>
    <h3 class="cbp-vm-title">
      <?php echo ucwords($allwishes[$i]['wpn']); ?>
    </h3>
    <div class="cbp-vm-price">
      <?php echo $allwishes[$i]['cname']; ?>
    </div>
    <div class="cbp-vm-details">
      <?php 
        $str_wpdec=$allwishes[$i]['wpdec'];
        $str_count=strlen($allwishes[$i]['wpdec']);

        $small = substr($str_wpdec, 0, 25);
        echo "<span title='$str_wpdec'>".$small." ...</span>";
        //echo $wish_list[$i]['wpdec']; 
      ?>
      <?php //echo $allwishes[$i]['wpdec']; ?>
    </div>
    <?php
    if($allwishes[$i]['rid']!=$this->session->userdata('uid')){
    ?>
      <a href="<?php echo base_url('wishgrant/granting').'/'.$allwishes[$i]['wid']; ?>" class="btn btn-danger"><span class="fa fa-magic"></span> Grant Wish</a>
    <?php
    }else{
    ?>
      <a href="#" class="btn btn-danger disabled">&#9733; Your Wish</a>
    <?php
    }//ELSE END
    ?>

<!--    <a class="btn btn-danger" href="<?php //echo base_url('wishgrant/granting/'.$allwishes[$i]['wid']); ?>">
      <span class="fa fa-star"></span> Grant Wish
    </a>
    -->
  </li>

<?php }// FOR END ?>
</ul>
    </div>


<!--PAGING START-->

<div class="center">
  <ul class="pagination ">

<?php
$pages=ceil($num/$per_page);
$numpage="";
for($s=1; $s<=$pages; $s++){
  if($s==$page)
    $numpage .= "<li class='active disabled'><a href='#'>".$s."<span class='sr-only'>(current)</span></a></li> ";
  else
    $numpage .= "<li><a href=".base_url("wishgrant/listofwishes")."/$s>$s</a></li> ";
}

echo $numpage;


?>

  </ul>
</div>
<!--PAGING END-->

  </div><!-- /main -->
</div><!-- /container -->

<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
