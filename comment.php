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
            textarea {vertical-align: top;
            }
        </style>
        <label for="notes">Comments:</label>
        <textarea  row="5" id="notes" name="notes"></textarea>
        <br>
        <select name='ratings' size = 1>
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

