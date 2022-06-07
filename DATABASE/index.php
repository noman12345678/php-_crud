
<?php    include("config.php");     




 $obj= new curdapp();


if(isset($_POST['pass'])){

   $msg= $obj->add_data($_POST);


}
   $student = $obj-> show_data();


   if(isset($_GET['status'])){

    if ($_GET['status']='delete') {
  
      $dl_id =  $_GET['id'];
  
      $delete = $obj->Delete_data_by_id( $dl_id);

     
        
    }
  
  
  }


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> STUDENT  DTABASE </title>
</head>

<body>





    <div class="container my-4 p-4 shadow">

    <?php  if(isset($updt_std)){echo  $updt_std ; }?>
      <?php  if(isset($msg)){echo $msg;} ?>
    <?php  if(isset($delete)){echo  $delete; if (isset($delete)) {
       header("location:index.php");
    }} ?>
         <div style="text-align: center;">
               <a href="index.php" style="text-decoration: none;"> <h1>STUDENT  DATABASE </h1></a>
            </div>

        <form action="" method="POST" enctype="multipart/form-data">
      
            <div class="input-group input-group-sm mb-3"><span class="input-group-text"
                    id="inputGroup-sizing-sm">student name </span>
                <input type="text" class="form-control mb-2" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="std_name">
            </div>


            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Student roll </span>
                <input type="number" class="form-control mb-2" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" name="std_roll">
            </div>

            <div class="input-group">
                <input type="file" class="form-control mb-2" id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="std_img">
            </div>

            <input type="submit" class="form-control mb-2  bg-warning" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm" name="pass">



        </form>


        <table class="table" style="margin-top: 10PX;">
            <thead>
                <tr>
                   
                    <th scope="col">NO.</th>
                    <th scope="col">  NAME  </th>
                    <th scope="col">ROLL </th>
                    <th scope="col">IMAGE</th>
                    <th scope="col"> DATE </th>
                    <th scope="col"> ACTION </th>
                </tr>
            </thead>
            <tbody>
             <?php  while($show=mysqli_fetch_assoc($student)){?>  
                    <th scope="row"><?php echo $show ['id'] ; ?> </th>
                    <td> <?php echo $show ['name']  ; ?></td>
                    <td><?php echo $show ['roll'] ; ?> </td>
                    <td><img style="width: 100px;" src="upload/<?php  echo $show['image'];?>"> </td>
                    <td><?php echo date("d-m-y  h:i"); date_default_timezone_set ('Asia/Dhaka');?></td>
                    <td>

                      <a href="?status=delete&&id=<?php echo $show ['id'] ; ?> "> <button class="btn-success" name="DELETE_STD">DELETE</button></a> 
                       <a href="edit.php?status=edit&&id=<?php echo $show ['id'] ; ?>"><button class="btn-warning ">EDIT</button></a> 


                    </td>
                </tr>
                 <?php   } ?>   

            </tbody>
        </table>
    </div>
























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>