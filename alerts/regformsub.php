<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration successful</title>
    <link href="../css/bootstrap.navabar.css" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">
    <link rel = "icon" href =  "../logos/lcb_college_logo_2.png" type = "image/x-icon"> 
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="alertModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 0; background-color: white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You have registered sucessfully.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="background-color: green; border-color: white;">
                        <a href="../login_page.php" style="color: white; text-decoration: dotted;">Login</a>
                    </button>
                    <button type="button" class="btn btn-secondary" style="background-color: red; border-color: white;">
                        <a href="../home.php" style="color: white; text-decoration: dotted;">Close</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#alertModal').modal('show');
        });
    </script>

</body>
</body>
</html>