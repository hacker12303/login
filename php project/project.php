<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
    </head>
    <body>

       <div id='mother'>
           <form method="POST">
               <!--control panel-->
               <aside>
                   <div id='div'>
                       <img src="11.png" alt="this is logo of project">
                        <h3>attendance of students</h3>
                        <label>ID of student</label><br>
                        <input type="text" name = 'id' id='ID'> <br>
                        <label>The Name of student</label><br>
                        <input type="text" name = 'NAME' id='NAME'> <br>
                        <label>The Class of student</label><br>
                        <input type="text" name = 'CLASS' id='CLASS'> <br><br>
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

                   </table>

               </main>

           </form>

       </div>

    </body>
</html>