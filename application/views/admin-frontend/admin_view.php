<div id="wrapper">
    <?php $this->load->view("admin-frontend/nav_horizontal.php"); ?>
    <!-- /. NAV TOP  -->
    <?php $this->load->view("admin-frontend/nav_vertical.php"); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line"><?php echo $page_title ?></h1>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                    <?php if($this->session->flashdata('login_success')) : ?>
                            <p class="alert alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php $this->load->view($admin_main); ?>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<div id="footer-sec">
    &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
</div>
