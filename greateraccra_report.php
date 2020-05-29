<?php include('includes/banner.php'); ?>
<?php include('session.php'); ?>
<style type="text/css">
    body{
      background-image: url(images/colorful.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
</style>
    <body >
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('report_sidebar_greateraccra.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                        <?php
                            $query=mysqli_query($mysqli,"SELECT *, region.name,diocese.diocese_name,deanery.deanery_name,parish.parish_name,unit.unit_name FROM crusaders LEFT JOIN region on crusaders.region=region.reg_id LEFT JOIN diocese ON crusaders.diocese = diocese.diocese_id LEFT JOIN deanery on crusaders.deanery=deanery.deanery_id LEFT JOIN parish on crusaders.parish=parish.parish_id LEFT JOIN unit on crusaders.unit=unit.unit_id where region.name='GREATER ACCRA'")or die(mysqli_error($mysqli));

                            //$query_greateraccra = mysqli_query($mysqli," select * from crusaders where region ='GREATER ACCRA'")or die(mysqli_error($mysqli));
                                $count_greateraccra = mysqli_num_rows($query);
                            
                        ?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large"></i><strong>GREATER ACCRA REGIONAL LIST</strong></div>
                                <div class="muted pull-right" style="color:green;">
                                    <strong>Number of Crusaders:</strong> <span class="badge badge-info"><?php  echo $count_greateraccra;  ?></span>
                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">
                                
                                <h2 id="noch"><center><img src="images/favi.jpeg" class="img-responsive"  style="margin:0;padding:0;height: 60px;width: 60px;"></center>
                                    <center>CATHOLIC YOUTH ORGANIZATION</center>
                                    
                    <center><p style="margin:0;padding:0;">(C. Y. O)</p></center> <br>
                    <p style="margin:0;padding:0;font-weight:bold; font-size: 20px;text-align: center;">GREATER ACCRA REGION: LIST OF CRUSADERS</p>
                    <small style="margin:0;padding:0; font-style: italic;">printed on: &nbsp;<?php echo date('d-m-Y')?></small>
                                </h2>
                                    <?php include('greateraccra_table_report.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <br><br> <br><br>
            <h2 id="noch">
            <?php 

        echo "<p> _________________________</p>"; 
        echo "<p> Signature </p>"; 


        ?>
    </h2>
        <?php include('footer.php'); ?>
        </div>
        <?php include('script.php'); ?>
    </body> 
</html>