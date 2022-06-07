<?php


class curdapp{

 private $con;

 public function __construct(){


      $dbhost="localhost";
      $dbuser="root";
      $dbpass="";
      $dbname="curd";

      $this->con=mysqli_connect($dbhost,$dbuser,$dbpass, $dbname) ;







 }
 
 public function add_data($data){

       $student= htmlspecialchars($data['std_name']);
       $roll= htmlspecialchars($data['std_roll']);
       $imf= $_FILES ['std_img']['name'];
       $tm= $_FILES['std_img']['tmp_name'];

       $query="INSERT INTO usrinfo(name,roll,image) VALUE ('$student', $roll ,'$imf')" ;


    if(mysqli_query($this->con,$query)){

      move_uploaded_file($tm,'upload/'.$imf);

     return "information added";

    }

       


 }
 

 public function  show_data(){


   $qry="SELECT * FROM  usrinfo ";


      if (mysqli_query($this->con,$qry)) {

         $recive=mysqli_query($this->con,$qry) ;

         return $recive;
           
      }





}


public function  show_data_by_id($id){


   $qry="SELECT * FROM  usrinfo  WHERE id=$id";


      if (mysqli_query($this->con,$qry)) {

         $recive=mysqli_query($this->con,$qry) ;

         $edit_data=mysqli_fetch_assoc($recive);

         return $edit_data;

           
      }





}
public function update($edit){


  
   $std_name_edt=htmlspecialchars ($edit ['edit_name']);
   $std_edt_roll=htmlspecialchars($edit['edit_roll']);
   $std_edt_imf= $_FILES ['edit_img']['name'];
   $std_edt_tm= $_FILES['edit_img']['tmp_name'];
   $id=$edit['std_id'];

   $query="UPDATE usrinfo SET name='$std_name_edt',roll=' $std_edt_roll',image='$std_edt_imf' WHERE id='$id'";

   if(mysqli_query($this->con,$query)){

  move_uploaded_file( $std_edt_tm,'upload/'.$std_edt_imf);

     return "information  update";

    }

    

     



}




public function Delete_data_by_id($id ){


 $dlt_info ="SELECT * FROM   usrinfo  WHERE id=$id";

 $qry=mysqli_query($this->con,$dlt_info);

 $std_info_tbl=mysqli_fetch_assoc($qry);
 
 $delete_image = $std_info_tbl['image'];
 

$query="DELETE FROM   usrinfo  WHERE id=$id ";


if(mysqli_query($this->con,$query)){
   if(isset($delete_image)){
     

   unlink('upload/'.$delete_image);
 
}
return "delete data";

 


  
}








}





}















?>