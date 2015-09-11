<?php
//$head = "admin/head.php"; 
//include_once($head); 
require('admin/head.php');
$head_top = "admin/head_top.php"; 
include_once($head_top); 
//require('admin/head_top.php');
?>

<div class="content inside-page">
<div class="main container "> 
       
            
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
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/1.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Silver beet</h3>
          <div class="cbp-vm-price">Malaysia</div>
          <div class="cbp-vm-details">
            Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/2.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Wattle seed</h3>
          <div class="cbp-vm-price">UK</div>
          <div class="cbp-vm-details">
            Wattle seed bunya nuts spring onion okra garlic bitterleaf zucchini.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a
        ></li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/3.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Kohlrabi bok</h3>
          <div class="cbp-vm-price">Italy</div>
          <div class="cbp-vm-details">
            Kohlrabi bok choy broccoli rabe welsh onion spring onion tatsoi ricebean kombu chard.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a
        ></li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/4.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Melon sierra</h3>
          <div class="cbp-vm-price">France</div>
          <div class="cbp-vm-details">
            Melon sierra leone bologi carrot peanut salsify celery onion jícama summer purslane.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/5.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Celery carrot</h3>
          <div class="cbp-vm-price">Country</div>
          <div class="cbp-vm-details">
            Celery carrot napa cabbage wakame zucchini celery chard beetroot jícama sierra leone.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a
        ></li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/6.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Catsear</h3>
          <div class="cbp-vm-price">China</div>
          <div class="cbp-vm-details">
            Catsear cabbage tomato parsnip cucumber pea brussels sprout spring onion shallot swiss .
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/7.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Mung bean</h3>
          <div class="cbp-vm-price">India</div>
          <div class="cbp-vm-details">
            Mung bean taro chicory spinach komatsuna fennel.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/8.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Epazote</h3>
          <div class="cbp-vm-price">Turkey</div>
          <div class="cbp-vm-details">
            Epazote soko chickpea radicchio rutabaga desert raisin wattle seed coriander water.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/9.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Tatsoi caulie</h3>
          <div class="cbp-vm-price">Greece</div>
          <div class="cbp-vm-details">
            Tatsoi caulie broccoli rabe bush tomato fava bean beetroot epazote salad grape.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/10.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Bush tomato</h3>
          <div class="cbp-vm-price">Japan</div>
          <div class="cbp-vm-details">
            Bush tomato peanut shallot turnip prairie turnip gram desert raisin.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/11.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Yarrow leek</h3>
          <div class="cbp-vm-price">Country</div>
          <div class="cbp-vm-details">
            Yarrow leek cabbage amaranth onion salsify caulie kale desert raisin prairie turnip garlic.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
                    <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/12.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Tatsoi caulie</h3>
          <div class="cbp-vm-price">Country</div>
          <div class="cbp-vm-details">
            Tatsoi caulie broccoli rabe bush tomato fava bean beetroot epazote salad grape.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/13.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Endive okra</h3>
          <div class="cbp-vm-price">Country</div>
          <div class="cbp-vm-details">
            Endive okra chard desert raisin prairie turnip cucumber maize avocado.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/14.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Bush tomato</h3>
          <div class="cbp-vm-price">Country</div>
          <div class="cbp-vm-details">
            Bush tomato peanut shallot turnip prairie turnip gram desert raisin.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
        <li>
          <a class="cbp-vm-image" href="#"><img src="<?php echo base_url('assets/images/products/images/15.jpg'); ?>"></a>
          <h3 class="cbp-vm-title">Yarrow leek</h3>
          <div class="cbp-vm-price">Country</div>
          <div class="cbp-vm-details">
            Yarrow leek cabbage amaranth onion salsify caulie kale desert raisin prairie turnip garlic.
          </div>
          <a class="btn btn-danger" href="<?php echo base_url('wishgrant/granting'); ?>"><span class="fa fa-star"></span> Grant Wish</a>
        </li>
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
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>