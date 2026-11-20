<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Asset Tracker</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
            <h1>Smart Asset Tracker</h1>
    </header>
    <br>

<?php
include 'db.php';

$sql = "SELECT * FROM asset ";
$result = $conn -> query($sql);
?>


    <div class="tools">
        <div id = "text">
        <p>Filter by Category</p>
        <select>
            <option>ID</option>
            <option>Name</option>
            <option>Category</option>
            <option>Status</option>
        </select>
        <button id = "OpenBtn">Add Asset</button>
</div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th class="head">ID</th>
                    <th class="head">Name</th>
                    <th class="head">Category</th>
                    <th class="head">Quantity</th>
                    <th class="head">Status</th>
                    <th class="head">Action</th>
                </tr>
            </thead>
                      <?php
    if($result && $result -> num_rows > 0){
        while($product = $result-> fetch_assoc()){
        ?>
            <tbody>
                <tr>
                    <td><?php echo $product ['id']; ?></td>
                    <td><?php echo $product ['name']; ?></td>
                    <td><?php echo $product ['category']; ?></td>
                    <td><?php echo $product ['quantity']; ?></td>
                    <td><?php echo $product ['status']; ?></td>
                    <td class= "btn-grop"><button>Active</button><button>Archived</button></td>    
                </tr>
            </tbody>
            <?php
        }
    }else{
        echo("");
    }
    $conn->close();
    ?>
        </table>
    </div>

    <div id="OpenModal" class="modal">
        <div class="modal-content">
           <button id = "exit" onclick="">X</button>
        <form action="">
            <div class="label">
                <label for="">ID:</label>
                <input type="text">
            </div>

             <div class="label">
                <label for="">Name:</label>
                <input type="text">
            </div>

             <div class="label">
                <label for="">Category:</label>
                <input type="text">
            </div>

             <div class="label">
                <label for="">Quantity:</label>
                <input type="text">
            </div>

             <div class="label">
                <label for="">Status:</label>
                <select name="" id="" required>
                    <option>Archived</option>
                    <option>Active</option>
                </select>

                <div class="btn-grp-modal ">
                    <button>Cancel</button>
                    <button>Submit</button>   
                </div>
             </div>
            </div>
        </form>
    </div>
   
</body>
    <script src = "script.js" defer ></script>
</html>