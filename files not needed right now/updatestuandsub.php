<!DOCTYPE html>
<html>
    <body>
        <?php
            include("php/updatestuandsubphp.php");
        ?>
            <div class="head bg-white p-15 between-flex a">
                <div class="newadds">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Student And Subject</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                      </svg>
                                </div>
                                <div class="modal-body">
                                    <form action="#" method="POST">

                                     

                                        <div class="input-group mb-3">
                                           
                                             
                                            
                                                    <select class="form-select" id="inputGroupSelect01" name="SubName" >
                                                        <?php
                                                            while($row=mysqli_fetch_array($query))
                                                            {
                                                        ?>

                                                            <option value="<?php echo $row['subjectName']; ?>" > <?php echo $row['subjectName']; ?></option>

                                                        <?php
                                                            }
                                                        ?>
                                       
                                                    </select>
                                                       
                                       
                                        </div>
                                        <div class="input-group mb-3">

                                           <!-- --------------------------------------------------------- -->
                                          
                                
                                            
                                    <div class="dropdown w-100 ">
                                        <button class="btn btn-secondary dropdown-toggle  w-100 btt" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Students
                                        </button>
                                <!-- #region -->          

                                        <ul class="dropdown-menu w-50 ">


                                                      
                                        <div class="form-check form-switch">
                                        <?php
                                                        
                                                        while($row=mysqli_fetch_array($query1))
                                                        {
                                                        ?>     
                                            <li> 
                                                       
                                                <input class="form-check-input" type="checkbox" value="<?php echo $row['Name']; ?> " role="switch" id="flexSwitchCheckChecked" name="student[]" >
                                                <label class="form-check-label" for="flexSwitchCheckChecked"><?php echo $row['Name']; ?></label>
                                            </li>
                                                   <?php
                                                        }
                                                        ?>
                                        </div>

                                        <div class="form-check form-switch">
                                        <?php
                                                        
                                                        while($row=mysqli_fetch_array($query2))
                                                        {
                                                        ?>     
                                            <li> 
                                                       
                                                <input class="form-check-input" type="checkbox" value="<?php echo $row['Name']; ?> " role="switch" id="flexSwitchCheckChecked" name="student[]" >
                                                <label class="form-check-label" for="flexSwitchCheckChecked"><?php echo $row['Name']; ?></label>
                                            </li>
                                                   <?php
                                                        }
                                                        ?>
                                        </div>

                                        <div class="form-check form-switch">
                                        <?php            
                                            while($row=mysqli_fetch_array($query3))
                                            {
                                        ?>     
                                            <li> 
                                                       
                                                <input class="form-check-input" type="checkbox" value="<?php echo $row['Name']; ?> " role="switch" id="flexSwitchCheckChecked" name="student[]" >
                                                <label class="form-check-label" for="flexSwitchCheckChecked"><?php echo $row['Name']; ?></label>
                                            </li>
                                            <?php
                                                }
                                             ?>
                                        </div>

                                               
                                       
                                        </ul>
                                    </div>
                                     
                                        </div>

                                        <div class="modal-footer">
                                            <input class="loginbt" type="submit" value="Add" name="add">
                                            <input  class="loginbtr" type="reset" value="reset" name="reset">
                                        
                                            
                                        </div>
                                    </form>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons d-flex align-center">

                </div>
            </div>
    </body>
    <?php
        include("php/updatestuandsubphp.php");
    ?>
</html>