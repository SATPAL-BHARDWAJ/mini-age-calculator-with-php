<?php
    include_once('age.php');

    if(isset($_POST['dob'])){
        $person = new Age($_POST['dob']);
        $person->ageCalculation();
    }
?>
<!-- Add header(link stylesheets, jquery, bootstrap) -->
<?php include_once('layout/header.php'); ?>

<ol class="breadcrumb">
  <li><a href="https://sbsharma.com">Home</a></li>
  <li><a href="https://sbsharma.com/php">PHP</a></li>
  <li class="active">Age calculator</li>
</ol>

    <div class="container">
        <div class="page-header">
            <h1>Age calculator</h1>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default theme-color mt-1">
                    <!-- Default panel contents -->
                    <div class="panel-heading theme-color text-center"><span class="glyphicon glyphicon-calendar"></span> Age Calculator</div>
                    <div class="panel-body">
                        <form class="form-inline text-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                <input type="text" name="dob" class="form-control datepicker" placeholder="Select Date of Birth" 
                                    <?php if(isset($_POST['dob'])) { ?>value="<?= $person->dateOfBirth->format('d-m-Y'); ?>"<?php } ?>
                                />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-dark"><span class="glyphicon glyphicon-check"></span> Calculate</button>
                            </div>
                        </form>
                        <div class="mt-1">
                            <?php if(isset($_POST['dob'])) { ?>
                                <div class="alert alert-warning alert-dismissible text-center" role="alert">
                                    
                                    Today is <?= $person->today->format('d-m-Y'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success text-center" role="alert">
                                    The age is <?= $person->age->y ?> years <?= $person->age->m ?> months <?= $person->age->d ?> days old
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-footer theme-color text-center">Powered by <a class="link-color" href="https://sbsharma.com" target="_blank">www.sbsharma.com</a></div>
                </div>
            </div>
        </div>
        
    </div>
    
<!-- Add footer(js scripts) -->
<?php include_once('layout/footer.php'); ?>
    

