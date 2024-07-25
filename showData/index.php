<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<!-- <====> Card Section  <====> -->


<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-success text-white">
                        <h1 class="h4 mb-0">PHP WITH AJAX</h1>
                    </div>
                    <div class="card-body text-center">
                        <button id="load-button" class="btn btn-primary mb-4">Load Data</button>
                        <div id="table-data">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/main.js"></script>
</body>

</html>

