<!DOCTYPE html>
<html>
    <body>
        <?php
            include("php/update_drphp.php");
        ?>
        <div class="head bg-white p-15 between-flex a">
                <div class="newadds">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Doctor Data</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                      </svg>
                                </div>
                                <div class="modal-body">
                                    <form  method="post"  enctype="multipart/form-data">
                                        <div class="mb-3">

                                            <input type="text" class="form-control name" id="recipient-name" name="Name" placeholder="Name">
                                        </div>
                                        <div class="mb-3">

                                            <input type="text" class="form-control id" id="message-text" name="Password" placeholder="password">
                                        </div>
                                        <div class="mb-3">

                                            <input type="number" class="form-control id" id="message-text" name="Id" placeholder="Id">
                                        </div>
                                        <div class="mb-3">

                                            <input type="email" class="form-control eml" id="message-text" name="Email" placeholder="email">
                                        </div>
                                        <div class="mb-3">

                                            <input type="number" class="form-control nums" id="message-text" name="Phone" placeholder="phone">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" name="Gender" aria-label="Default select example">
                                                <option selected>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>                                              
                                              </select>
                                        </div>
                                        <div class="mb-3">

                                            <input type="text" class="form-control name" id="recipient-name" name="Address" placeholder="Address">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Week days:</label>
                                            <div class="chek">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox1" value="Saturday">
                                                    <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Sunday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Sunday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Monday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Monday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Tuesday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Tuesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Wednesday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Wednesday</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="days[]" type="checkbox" id="inlineCheckbox2" value="Thursday">
                                                    <label class="form-check-label" for="inlineCheckbox2">Thursday</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Sabbatical hours:</label>
                                            <div class="for-tim">
                                                <div class="form-group main-for-tim">
                                                    <label for="number" class="sr-only">Add Free Hours</label>
                                                    <input class="form-control input-lg-tim" name="shours" type="time" placeholder="Add Free Hours" required></input>
                                                </div>
                                                <div class="h2-to">
                                                    <h5>to</h5>
                                                </div>
                                                <div class="form-group main-for-tim">
                                                    <label for="number" class="sr-only">Add Free Hours</label>
                                                    <input class="form-control input-lg-tim" name="ehours" type="time" placeholder="Add Free Hours" required></input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">img:</label>
                                            <input type="file" class="form-control imgs" id="message-text" name="image">
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-primary adds" type="submit" value="Save" name="add">
                                            <!-- <button type="submit" class="btn btn-primary adds" name="add">Save</button> -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icons d-flex align-center">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                            <span>Enquiry</span>
                        </button>
                        <form class="dropdown-menu p-4">
                            <div class="mb-3">

                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="mb-3">

                                <input type="number" class="form-control" placeholder="id">
                            </div>

                            <button type="submit" class="btn btn-primary">Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
    </body>
    <?php
        include("php/update_drphp.php");
    ?>
</html>