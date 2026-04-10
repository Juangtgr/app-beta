<html:5>
    <?php
      require("../config/database.php");
      
      $sql_users = "
      select
	      u.firstname ||'  '|| u.lastname as fullname,
		  u.email,
		  u.mobile_phone,
		  case
		     when u.status = true then 'Active' else 'Inactive'
		  End as status, u.profile_photo
	 from
	 users u
";
    ?>
    <!DOCTYPE HTML>

    <body>
         <table border = "1" align = "center">
            <tr>
                <th>Firstname </th>
                <th>E-mail</th>
                <th>Mobile phone</th>
                <th>Status</th>
                <th>photo</th>
                <th>options</th>
            </tr>

            <tr>
                <td>Peter Loza</td>
                <td>peter@mail.com</td>
                <td>300123</td>
                <td>Active</td>
                <td><img src = "profile_photos/user_default.png"
                width = "50" alt = "User photo">
                </td>

            <td>
                <a href = "#">
                    <img src = "icons/edit.png"
                        width = "20" alt = "Edit user">
                </a>

                &nbsp;&nbsp;

                <a href = "#">
                    <img src = "icons/delete.png"
                         width = "20" alt="Delete user">
                </a>
            </td>
        </tr>
    </table>
</html:5>