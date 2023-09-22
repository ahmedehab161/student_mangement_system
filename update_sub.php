<!DOCTYPE html>
<html>
    <body>
        <?php    
            include("php/update_subphp.php");
        ?>
            <div class="head bg-white p-15 between-flex a">
                <div class="newadds">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Student Data</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                      </svg>
                                </div>

                                <div class="modal-body">
                                    

                                    <form action="#" method="post">

                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Code:</label>
                                        <input type="text" class="form-control id" id="message-text" name="code"></input>
                                    </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control name" id="recipient-name" name="Name">
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">number of hours:</label>
                                            <input type="number" class="form-control name" id="recipient-name" name="numofhou">
                                        </div>
                                      
                                            
                                        
                                       
                                                                                
                                                                                   

                                    <div class="dropdown w-100 ">
                                        <button class="btn btn-secondary dropdown-toggle  w-100 btt" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        class Room
                                        </button>
                                        <ul class="dropdown-menu w-50 ">
                                        <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value="Hall" role="switch" id="flexSwitchCheckChecked" name="classr[]" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Hall</label>
                                                </div>

                                                <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value="Section" role="switch" id="flexSwitchCheckChecked" name="classr[]" >
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Section</label>
                                                </div>
                                                                                                    
                                                <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value="Lab" role="switch" id="flexSwitchCheckChecked" name="classr[]"  >
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Lab</label>
                                                </div>
                                        </ul>
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
    </body> </div>
    <?php    
        include("php/update_subphp.php");
    ?>
</html>