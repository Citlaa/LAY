<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?> " media="screen" title="no title" charset="utf-8">

<?php
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 16px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>

<body>
<!-- Beginning header -->
    <!--<div>
        <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> |
        <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |
        <a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
        <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
        <a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
        <a href='<?php echo site_url('examples/film_management')?>'>Films</a>

    </div>-->
<!-- End of header-->
    <div id="search">
    <div class="tab-content">
 </div>
    </div>
        <?php echo $output; ?>
<!-- Beginning footer -->

<!-- End of Footer -->
</body>
</html>
