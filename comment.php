<html>
    <form action="process_comment.php" method="post">
        Name:
        <input type = "text" name ="name" vaule =""/>
        <br>
        Do you like this page? 
        <input type ="radio" name="likes" value="1"> Yes 
        <input type ="radio" name="likes" value="0"> No 
        <br>
        <style type='text/css'>
            textarea {<!-- w  w w.  j a v  a  2  s .c  o m-->
            vertical-align: center;
            }
        </style>
        Comments:
        <textarea  row="4" cols="20" name="comments"></textarea>
        <br>
        <select name='rating' size = 1>
	        <option value='1'>1</option> 
	        <option value='2'>2</option>
        	<option value='3'>3</option> 
            <option value='4'>4</option> 
            <option value='5'>5</option>
        </select>
        <br>
        <input type = "submit" value = "go"/>
    </form>
</html>

