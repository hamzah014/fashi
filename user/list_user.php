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
                                <button class="btn btn-info">Show Details</button>
                                <button class="btn btn-danger">Deactivated</button>
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
    $(document).ready(function() {
        
        $('#table_listuser').DataTable();
    
    });
</script>