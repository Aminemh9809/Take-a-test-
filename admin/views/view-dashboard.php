<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
        }

        .sidebar-nav {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar-nav li {
            margin-bottom: 10px;
        }

        .sidebar-nav a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar-nav a:hover {
            color: #ccc;
        }
    </style>
    <script>
        function editTest(id){
           // alert('edit'+id);
            document.getElementById("span"+id).classList.add('d-none');              
            document.getElementById("text"+id ).classList.remove('d-none');
            document.getElementById("edit"+id).classList.add('d-none');              
            document.getElementById("save"+id ).classList.remove('d-none');
        }
        function saveTest(id){
            //alert('save'+id);
            document.getElementById("span"+id).classList.remove('d-none');              
            document.getElementById("text"+id ).classList.add('d-none');
            document.getElementById("edit"+id).classList.remove('d-none');              
            document.getElementById("save"+id ).classList.add('d-none');
            document.getElementById("span"+id).innerHTML = document.getElementById("text"+id ).value;     
             document.forms["form1"].submit();
           
            
        }
        function deleteTest(id){
            alert('delete');
            var result = confirm("Are you sure you want to delete this test");
                if (result) {
                    document.forms["form1"].submit();
                }
            //Are you sure you want to delete this test
            //action="../controllers/controller-dashboard.php"
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4 class="mt-4 mb-4">Admin Dashboard</h4>
                <ul class="sidebar-nav">
                    <li><a href="">Tests</a></li>
                    <li><a href="../controllers/controller-allUsers.php">Users</a></li>
                    <li><a href="../controllers/controller-deconnection.php">Logout</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="my-4">
                    <h2>Tests</h2>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addTestModal">Add Test</button>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Test Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>


                     <form method="POST" name="form1">

                            <?php foreach ($tests as $test) : ?>
                                <tr>
                                    <td>
                                        <span class="test-name" id="span<?= $test['id_tests'] ?>" ><?= $test['name'] ?></span>
                                        <input type="text" id="text<?= $test['id_tests'] ?>" class="form-control edit-test-name d-none" value="<?= $test['name'] ?>">
                                        
                                         
                                    </td>
                                    <td>
                                        <button type="button" id="edit<?= $test['id_tests'] ?>" class="btn btn-primary btn-sm edit-btn" onclick="editTest(<?= $test['id_tests'] ?>)">Edit</button>
                                        <input type="button" name="save"  id="save<?= $test['id_tests'] ?>" class="btn btn-primary btn-sm edit-btn d-none" onclick="saveTest(<?= $test['id_tests'] ?>)" value="Save"> 
                                        <input type="hidden" name="test_id" value="<?= $test['id_tests'] ?>">
                                        <input type="button" name="delete" class="btn btn-danger btn-sm" value="Delete"onclick="deleteTest(<?= $test['id_tests'] ?>)" >  
                                        
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </form>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Delete Test</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this test?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <!-- The "Confirm Delete" button is now removed -->
                                        </div>
                                    </div>
                                </div>
                            </div>







                        </tbody>
                    </table>

                    <!-- Delete Modal -->




                    </table>
                </div>

                <div class="my-4">
                    <h2>Questions</h2>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addQuestionModal">Add Question</button>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Test</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>What is the capital of France?</td>
                                <td>Test 1</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more question rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Test Modal -->
    <div class="modal fade" id="addTestModal" tabindex="-1" role="dialog" aria-labelledby="addTestModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTestModalLabel">Add Test</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="../controllers/controller-dashboard.php">
                        <div class="form-group">
                            <label for="testName">Test Name</label>
                            <input type="text" class="form-control" id="testName" placeholder="Enter test name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Test</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Question Modal -->
    <div class="modal fade" id="addQuestionModal" tabindex="-1" role="dialog" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addQuestionModalLabel">Add Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="testSelect">Test</label>
                            <select class="form-control" id="testSelect">
                                <option value="" disabled>Select Test</option>
                                <option value="1">Test 1</option>
                                <option value="2">Test 2</option>
                                <!-- Add more test options here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="questionText">Question</label>
                            <textarea class="form-control" id="questionText" rows="3" placeholder="Enter question text"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Question</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Edit button click event
            $('.edit-btn').click(function() {
                $(this).closest('tr').find('.test-name').addClass('d-none');
                $(this).closest('tr').find('.edit-test-name').removeClass('d-none');
                $(this).text('Save');
                $(this).removeClass('btn-primary').addClass('btn-success');
            });

            // Save button click event
            $('.btn-success').click(function() {
                var newTestName = $(this).closest('tr').find('.edit-test-name').val();
                $(this).closest('tr').find('.test-name').text(newTestName);
                $(this).closest('tr').find('.test-name').removeClass('d-none');
                $(this).closest('tr').find('.edit-test-name').addClass('d-none');
                $(this).text('Edit');
                $(this).removeClass('btn-success').addClass('btn-primary');
            });

            // Delete button click event
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var testId = button.data('test-id');
                var modal = $(this);
                modal.find('.confirm-delete').data('test-id', testId);
            });

            // Confirm delete button click event
            $('.confirm-delete').click(function() {
                var testId = $(this).data('test-id');
                // Perform the delete operation using AJAX or redirect to a PHP file
                console.log('Test with ID ' + testId + ' will be deleted.');
                $('#deleteModal').modal('hide');
            });
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>