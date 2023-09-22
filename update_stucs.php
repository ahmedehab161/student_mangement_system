<!DOCTYPE html>
<html>
    <body>
        <?php
            include("php/updatestucsphp.php");
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
                                        

                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control name" id="recipient-name" name="Name">
                                            </div>
                                            <div class="mb-3">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping">@</span>
                                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="Username">
                                                    </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">password:</label>
                                                <input type="number" class="form-control id" id="message-text" name="Password"></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Id:</label>
                                                <input type="number" class="form-control id" id="message-text" name="Id"></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">email:</label>
                                                <input type="email" class="form-control eml" id="message-text" name="Email"></input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">phone:</label>
                                                <input type="number" class="form-control nums" id="message-text" name="Phone"></input>
                                            </div>
                                        
                                                <div class="mb-3">
                                                    <label  class="col-form-label">Gender:</label>
                                                <select name="Gender"  required>
                                                <option value="">No select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                </div>
                                        
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Address:</label>
                                                <input type="text" class="form-control name" id="recipient-name" name="Address">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Birth Date:</label>
                                                <input type="date" class="form-control name" id="recipient-name" name="Birth_date">
                                            </div> 
                                            <div class="mb-3">
                                                                <label for="message-text" class="col-form-label">img:</label>
                                                                <input type="file" class="form-control imgs" id="message-text" name="image"></input>
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
            include("php/updatestucsphp.php");
    ?>
</html>