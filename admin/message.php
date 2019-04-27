<?php include 'index.html';

$con=mysqli_connect('localhost','root','','az');
$query="select * from message";
$select=mysqli_query($con,$query); 
?>

 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            	<div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>

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
                                                <td><?php echo $result['name'];?></td>
                                                <td><?php echo $result['email'];?></td>
                                                <td><?php echo $result['message'];?></td>
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