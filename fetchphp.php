<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <?php
include("./db.php");

$sql ="select * from users";
$res = mysqli_query($conn, $sql);
      
    

                
?>
    <?php  while ($data = mysqli_fetch_assoc($res)){ ?>
    <div class="container mt-3">
        <h4><span> <?php echo $data['id']?>. </span>
            <?php echo $data['questions']?></h4>
        <p><?php  echo $data['answers']?></p>
        <?php } ?>
    </div>

    <!-- <table class="table table-striped">
            <thead>
                <th>Question</th>
                <th>Answer</th>
            </thead>
            <?php  //while ($data = mysqli_fetch_assoc($res)){ ?> -->
    <!-- <tbody>
                <td><?php //echo $data['questions']?></td>
                <td><?php // echo $data['answers']?></td>
                <?php //} ?>
            </tbody> -->


    <!-- </table> -->
</body>

</html>