<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <hr size="3" color ="black">
    <h3>Buat Account baru!</h3>
    <form action="/welcome1">
     <div>
        <h4>Sign up Form</h4>
        <table>
            <form>
            <div>
                <tr>
                    <td><label for = "firname" >First Name :</label></td> 
                    <br>
                </tr>
                <tr>
                    <td><input id= "firstname" name="firstname"></td> 
                </tr>
                <tr>
                    <td><label for="lastname">Last Name :</label></td> 
                </tr>
                <tr>
                    <td><input id= "lastname" name="lastname"></td> 
                </tr>
            </div>
            <div>
                <tr>
                    <td><label>Gender </label></td>
                </tr>
                <tr>
                    <td><input type="radio">Male</td>
                </tr>
                <tr>
                    <td><input type="radio">female</td>
                </tr>
                <tr>
                    <td><input type="radio">Other</td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label>Nationality</label></td>
                </tr>
                <tr>
                    <td><select >
                    <option value="">Indonesia</option>
                    <option value="">Malaysia</option>
                    <option value="">Amerika</option>
                    </select>
                    </td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label> Lenguage Spoken</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox">Indonesia</td>
                </tr>
                <tr>
                    <td><input type="checkbox">english</td>
                </tr>
                <tr>
                    <td><input type="checkbox">other</td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label>Bio</label></td>
                </tr>
                <tr>
                    <td><textarea cols="20" rows="8"></textarea></td>
                </tr>
            </div>
            <div>
                <tr>
                    <td><label>password</label></td> 
                    <br>
                </tr>
                <tr>
                    <td><label><input type="password"></label></td> 
                    <br>
                </tr>
            </div>
            <div>
                
            </div>
            <tr>
                <td><input type="submit" value="Sign Up"></td>
            </tr>
            </form>
        </table>
     </div>
    </form>
</body>
</html>