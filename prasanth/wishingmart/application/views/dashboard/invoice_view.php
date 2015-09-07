      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
          <h4>Invoice</h4>
        
        </section>

        <!-- Main content -->
        <section class="invoice inside-page">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i>WishingMart
                <small class="pull-right">Date: 2/10/2015</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>Grant User</strong><br>
                No.123<br>
                San Francisco, CA 94107<br>
                Phone: (804) 123-5432<br>
                Email: user@gmail.com
              </address>
            </div><!-- /.col -->
            
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>Wisher</strong><br>
                795 <br>
              	Jalan Pipit, Taman Million<br>
                Phone:0125340408<br>
                Email: user@example.com
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice #007612</b><br>
              <br>
              <b>Transaction ID:</b>T0011<br>
              <b>Wish ID :</b>W9852<br>
              <b>Grant ID:</b>G0089<br>
              <b>Date :</b>22/01/2015
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Country</th>
                    <th>Description</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Iphone</td>
                    <td>USA</td>
                    <td>Apple Product ( Silver)</td>
                    <td>$65.00</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Samsung TV</td>
                    <td>Japan</td>
                    <td>LED TV , CMYK color technology</td>
                    <td>$500.00</td>
                  </tr>
                 
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <img src="<?php echo base_url('assets/images/credit/paypal2.png'); ?>" alt="Paypal">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"> Terms & condition apply <br> Wishingmart is not responsible for the transactions.<br>Shipping Company : UPS Delivery Service <br> Expected Delivery Time : 14 days
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">Amount Due </p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$565.00</td>
                  </tr>
                  <tr>
                    <th>Tax</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="payment.html" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</a>
              
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
