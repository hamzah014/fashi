    <!-- Datatable -->
    <link rel="stylesheet" href="css/datatable/dataTables.bootstrap.min.css">


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>List of User</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">

                <h4>Total of User : <?php echo sizeof($dataresult); ?></h4>
                <table id="table_listuser" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Birthdate</th>
                            <th>Email</th>
                            <th>Contact No.</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if( sizeof($dataresult) > 0 ){
                                
                                $count = 0;

                                foreach($dataresult as $key => $value){
                                    
                                    $count++;
                        ?>

                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['username']; ?></td>
                            <td><?php echo $value['fullname']; ?></td>
                            <td><?php echo $value['birthdate']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['contactno']; ?></td>
                            <td><?php echo $value['address']; ?></td>
                            <td>
                            
                            <?php
                                if($value['status']==1){
                            ?>
                            
                                <button class="btn btn-danger" onclick="updatestatus_user('deactivate',<?php echo $value['id']; ?>)">Deactivate</button>

                            <?php
                                }else{
                            ?>

                                <button class="btn btn-success" onclick="updatestatus_user('activate',<?php echo $value['id']; ?>)">Activate</button>

                            <?php
                                }
                            ?>
                            </td>
                        </tr>

                        <?php
                                }
                            }else{
                        ?>

                        <tr>
                            <td class="alert alert-warning text-center" colspan="20">Sorry, there's no user found yet.</td>
                        </tr>

                        <?php
                            }
                        ?>
                        
                    </tbody>
                </table>

                </div>

            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <script src="js/data-table/datatables.min.js"></script>
    <script src="js/data-table/dataTables.bootstrap.min.js"></script>
    <script src="js/data-table/dataTables.buttons.min.js"></script>
    <script src="js/data-table/buttons.bootstrap.min.js"></script>
    <script src="js/data-table/jszip.min.js"></script>
    <script src="js/data-table/vfs_fonts.js"></script>
    <script src="js/data-table/buttons.html5.min.js"></script>
    <script src="js/data-table/buttons.print.min.js"></script>
    <script src="js/data-table/buttons.colVis.min.js"></script>
    <script src="js/datatables-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>

    <script type="text/javascript">

        function updatestatus_user(actions,userid) {

            console.log(actions + " --- " + userid);
            
		    var formData = new FormData();
		    formData.append('actions',actions);
		    formData.append('userid',userid);
            
		    $.ajax({
		    	url:'user/updatestatus_user.php',
		    	type: 'POST',
		    	data: formData,
		    	cache: false,
		    	processData: false,
		    	contentType: false,
		    	success: function (data){
                
		    		console.log(data);
                    if(data==1){
                        alert('The user has been successfully updated');
                    }else{
                        alert('Error occurred, failed to update the user status. Please try again later.');
                    }
                    window.location.reload();
                
		    	},
		    	error: function(){
                
		    	}
            
            
		    });
        }


    </script>