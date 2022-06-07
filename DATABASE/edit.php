
<?php    include("config.php");     




$obj= new curdapp();


if(isset($_GET['status'])){

  if ($_GET['status']='edit') {

    $id=$_GET['id'];

    $edit = $obj-> show_data_by_id($id);
      
  }


}
if (isset($_POST['edit_std'])){
   
  header("location:index.php");

    $updt_std = $obj-> update($_POST);

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

   <title>   EDIT   STUDENT  INFORMATION  </title>
</head>

<body>





   <div class="container my-4 p-4 shadow">

       <form action="" method="POST" enctype="multipart/form-data">
     <?php  if(isset($updt_std)){echo   $updt_std ;}?>
        <div style="text-align: center;">
               <h1> <a href="index.php" style="text-decoration:none;">  EDIT   STUDENT  INFORMATION </a> </h1>
           </div>
           <div class="input-group input-group-sm mb-3"><span class="input-group-text"
                   id="inputGroup-sizing-sm">student name </span>
               <input type="text" class="form-control mb-2" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-sm" name=" edit_name"value="<?php echo $edit['name'];?>">
           </div>


           <div class="input-group input-group-sm mb-3">
               <span class="input-group-text" id="inputGroup-sizing-sm">Student roll </span>
               <input type="number" class="form-control mb-2" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-sm" name=" edit_roll"value="<?php echo $edit['roll'];?>">
           </div>

           <div class="input-group">
               <input type="file" class="form-control mb-2" id="inputGroupFile04"
                   aria-describedby="inputGroupFileAddon04" aria-label="Upload" name=" edit_img">
           </div>
          <input type="hidden"     name="std_id" value="<?php  echo $edit['id'];  ?>"       >

           <input type="submit" class="form-control mb-2  bg-warning" aria-label="Sizing example input"
               aria-describedby="inputGroup-sizing-sm" name=" edit_std">



       </form>


 


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