<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
        <style>
            body{
                background-color:whitesmoke;
                font-family:'Tajawal','sans-serif';
            }
            #mother{
                width:100%;
                font-size:20px;
                
            }
            main{
                float:right; 
                border:1px solid gray;
                padding :5px;
            }
            input{
                padding :4px;
                border:2px solid black;
                text-align: center;
                font-size: 17px;
                font-family:'Tajawal','sans-serif';
            }
            aside{
                text-align:center;
                width:155%;
                float:center; 
                border:1px solid black;
                padding :10px;
                font-size: 20px;
                background-color:silver;
                color:red;
            }
            #tbl{
                background-color:whitesmoke;
                text-align:center;
                width:890px;
                font-size: 20px;
            }
            #tbl th{
                
                border-color: #96D4D4;
                border-style: dotted;
                background-color:Orange;
                color:black;
                font-size: 20px;
                padding :10px;
                border-collapse: collapse;
            }
            aside button{
                width:190px;
                padding :8px;
                margin-top:7px;
                font-size: 17px;
                font-family:'Tajawal','sans-serif';
                font-weight:bold;
            }
        </style>
    </head>
    <body style="background-color:Orange;">
        <?php
        #contact
        $host='localhost';
        $user='root';
        $pass='';
        $db='project-dc';
        $con= mysqli_connect($host,$user,$pass,$db);
        $res= mysqli_query($con,"select * from project");
        #button variable
        $ID='';
        $NAME='';
        $CLASS='';
        if (isset($_POST['id'])){
            $ID=$_POST['id'];
        }
        if (isset($_POST['name'])){
            $NAME=$_POST['name'];
        }
        if (isset($_POST['class'])){
            $CLASS=$_POST['class'];
        }
        $sqls='';
        if (isset($_POST['add'])){
            $sqls = "insert into project value ($ID,'$NAME','$CLASS')";
            mysqli_query($con,$sqls);
            header("location: My-Project.php");
        }
        if (isset($_POST['del'])){
            $sqls = "delete from project where name='$NAME'";
            mysqli_query($con,$sqls);
            header("location: My-Project.php");
        }
        ?>

       <div id='mother'>
           <form method="POST">
               <!--control panel-->
               <aside>
                   <div id='div'>
                   
                   <canvas id="myCanvas" width="130" height="80"></canvas>

                    <script>
                        var c = document.getElementById("myCanvas");
                        var ctx = c.getContext("2d");
                        ctx.font = "30px Arial";
                        ctx.strokeText("Dragons", 10, 50);
                    </script>
                    <br>
                   
                       <img src="33.jpeg" alt="this is logo of project" width=200px>
                        <h3>attendance of students</h3>
                        <label>ID of student</label><br>
                        <input type="text" name = 'id' id='id'> <br>
                        <label>The Name of student</label><br>
                        <input type="text" name = 'name' id='name'> <br>
                        <label>The Class of student</label><br>
                        <input type="text" name = 'class' id='class'> <br><br>
                        <button name='add'>add student</button> 
                        <button name='del'>delet student</button> 
                        

                   </div>

               </aside>
               <!--show data-->
               <main>
                   <table id='tbl'>
                       <tr>
                           <th>ID</th>
                           <th>NAME</th>
                           <th>CLASS</th>
                       </tr>
                        <?php
                            while ($row = mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                echo "<td>".$row['ID']."</td>";
                                echo "<td>".$row['NAME']."</td>";
                                echo "<td>".$row['CLASS']."</td>";
                                echo "</tr>";
                            }

                        ?>

                   </table>

               </main>

           </form>

       </div>
       <br>
       <svg width="300" height="200" >
             <polygon points="100,10 40,198 190,78 10,78 160,198"
             style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
         </svg>

    </body>
</html>