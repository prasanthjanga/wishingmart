<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div><h3 class="title">My Wish</h3></div>

<!-- Main content-->        
<section class="content create-account inside-page">
    <div class="row">
        <div class="col-sm-6">
        <div class="row">
<form action="<?php echo base_url('dashboard/shippingadd'); ?>" method="post">
            <div id="registerForm"  class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11" >
            <div class="panel-body">

        <div class="form-group">
          <div class="col-sm-9 image">
            <h1>Grant Requests</h1>
          </div>
          <div class="col-sm-2 pull-left wishform">
            <?php if($online['online']== '1'){ ?>
            <a href="#" onclick="javascript:chatWith('<?php echo $grant_pro[0]['gid']; ?>')">
                <h4 class="label label-success">User Online</h4>
            </a>
            <?php }else{//if end ?>
            <a href="#" onclick="javascript:chatWith('<?php echo $grant_pro[0]['gid']; ?>')">
                <h4 class="label label-danger">User Offline</h4>
            </a>
            <?php }//else end ?>
          </div>
        </div>
        <hr>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Grant User Id</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['gid']; ?></p>
                <input type="hidden" name="gid" value="<?php echo $grant_pro[0]['gid']; ?>" >
                <input type="hidden" name="wpid" value="<?php echo $grant_pro[0]['wid']; ?>" >
            </div>        
        </div>
        
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Name</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wpn']; ?></p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Country</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['gtcname']; ?></p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Category</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wcategory']; ?></p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Sub-Category</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wscname']; ?></p>
            </div>        
        </div>

        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Description</label>
            <div class="col-sm-8">
                <p class="wishform">
                    Brand : <?php echo $grant_pro[0]['brand']; ?> <br>
                    Color : <?php echo $grant_pro[0]['wpcolour']; ?> <br>
                    <?php echo $grant_pro[0]['gtdesc']; ?>
                </p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Image</label>
            <div class="col-sm-8">
                <img src="<?php echo base_url()."images/products/granted/".$grant_pro[0]['gtimg']; ?>" width="200px" height="200px" alt=""/>
            </div>        
        </div>
    
         
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Price</label>
            <div class="col-sm-8">
                <p class="wishform">USD <?php echo $grant_pro[0]['gtprice']; ?></p>
            </div>        
        </div>

        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Shipping cost</label>
            <div class="col-sm-8">
                <p class="wishform">USD <?php echo $grant_pro[0]['escost']; ?></p>
            </div>        
        </div>

        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Quantity</label>
            <div class="col-sm-8">
                <p class="wishform">
                    <select class="form-control" name="quantity" required="">
                        <?php
                        for($i=1;$i<=1;$i++){
                            echo "<option value=".$i.">".$i."</options>";
                        }
                        ?>
                    </select>
                </p>
            </div>        
        </div>
    
<!--                <a href="<?php //echo base_url('dashboard/shippingadd'); ?>" class="btn btn-danger pull-left" >Approve</a>
-->
                <input type="submit" name="sub" value="Approve" class="btn btn-danger pull-left">
                <button href="#" class="btn btn-danger pull-right" >Delete Request </button>      
            </div>
            </div>
</form>            
        </div><!--ROW END-->
        </div><!--col-sm-6 END-->

    <div class="col-sm-6">
    <div class="row">

        <div id="registerForm"  class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11" >
        <div class="panel-body">

        <div><h1>Wish Details</h1></div>
            <hr>
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Id</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wid']; ?></p>
            </div>        
        </div>

        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Name</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wpn']; ?></p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Country</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wpcname']; ?></p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Category</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wcategory']; ?></p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Sub-Category</label>
            <div class="col-sm-8">
                <p class="wishform"><?php echo $grant_pro[0]['wscname']; ?></p>
            </div>        
        </div>

        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Description</label>
            <div class="col-sm-8">
                <p class="wishform">
                    Brand : <?php echo $grant_pro[0]['brand']; ?> <br>
                    Color : <?php echo $grant_pro[0]['wpcolour']; ?> <br>
                    <?php echo $grant_pro[0]['wpdec']; ?>
                </p>
            </div>        
        </div>
            
        <div class="form-group">
            <label for="" class="col-sm-4 control-label">Product Image</label>
            <div class="col-sm-8">
                <img src="<?php echo base_url()."images/products/wished/".$grant_pro[0]['wpimg']; ?>" width="200px" height="200px" alt=""/>
            </div>        
        </div>
        </div><!-- panel-body END-->
        </div><!-- registerForm END-->
    </div><!-- ROW END-->
    </div><!-- col-sm-6 END-->
    </div><!-- ROW END-->

</section>
</div>