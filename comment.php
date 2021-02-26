<html>
    <form action="process_comment.php" method="post">
        Name:
        <input type = "text" name ="name" vaule =""/>
        <br>
        Do you like this page? 
        <input type ="radio" name="likes" value="1"> Yes 
        <input type ="radio" name="likes" value="0"> No 
        <br>
        Comments:
        <textarea rows="4" cols="50" name="comments"></textarea>
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

