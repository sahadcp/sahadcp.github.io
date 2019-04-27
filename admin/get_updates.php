<?php include 'index.html';



$con=mysqli_connect('localhost','root','','az');
$query="select * from get_updates";
$select=mysqli_query($con,$query); 

?>

 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-9">
                            	<div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Email</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$i=1;
                                        	
                                        	while($result=mysqli_fetch_array($select))
											{
												
											?>
											
                                        	<tr>
                                        		<td><?php echo $i; ?></td>
                                        		<td><?php echo $result['email'];?></td>
                                        	</tr>
                                        	<?php
                                        	$i++;

                                        }
                                       ?>
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>     
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>