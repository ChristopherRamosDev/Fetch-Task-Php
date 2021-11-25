<?php require_once 'select.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Task-Fetch App</title>
</head>

<body>
    <h1 class="text-center mt-4 mb-5 color text-secondary">Task-Fetch App</h1>
    <div class="container">
        <div class="row row-cols-2 contain">
            <div class="col">
                <form id="formSend" method="POST">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Tasks</h2>
                            <div class="form-group">
                                <label for="nameTask">Name:</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nameTask" id="nameTask" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">Type:</label>
                            </div>
                            <div class="form-group">
                                <select name="type" id="type" class="form-control">
                                    <option value="works">Works</option>
                                    <option value="cleaning">Cleaning</option>
                                    <option value="sports">Sports</option>
                                    <option value="home">Home</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="desc">Desc:</label>
                            </div>
                            <div class="form-group">
                                <textarea name="desc" id="desc" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary form-control" id="send">Send</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <form method="POST" class="form-row mb-4">


                    <div class="col-8">
                        <input type="searchInput" name="search" class="form-control" id="searchInput">
                    </div>
                    <div class="col-3">
                        <button type="submit" id="search" class="btn btn-primary">Search</button>
                    </div>

                </form>
                <table class="table table-bordered table-sm data-resizable">
                    <thead>
                        <tr>
                            <td class="text-center">Id</td>
                            <td class="text-center">Name</td>
                            <td class="text-center">Type</td>
                            <td class="text-center">Description</td>
                        </tr>
                    </thead>
                    <tbody class="task" id="task" class="data-resizable">
                        <?php
                        foreach ($arr as $a) :
                        ?>
                            <tr>
                                <td><?php echo $a->id?></td>
                                <td><?php echo $a->name?></td>
                                <td><?php echo $a->type?></td>
                                <td><?php echo $a->description?></td>
                        
                            </tr>
                        <?php
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="app.js"></script>

</html>