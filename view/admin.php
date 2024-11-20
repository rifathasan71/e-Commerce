<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Admin</title>
</head>
<body>

  <h2>Add New Admin</h2>
  <form action="/add-admin" method="POST">
    <table>
      <tr>
        <td><label for="full-name">Full Name</label></td>
        <td><input type="text" id="full-name" name="full_name" required></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" id="email" name="email" required></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password" id="password" name="password" required></td>
      </tr>
      <tr>
        <td><label for="confirm-password">Confirm Password</label></td>
        <td><input type="password" id="confirm-password" name="confirm_password" required></td>
      </tr>
      <tr>
        <td><label for="role">Role</label></td>
        <td>
          <select id="role" name="role" required>
            <option value="admin">Admin</option>
            <option value="super-admin">Super Admin</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <button type="submit">Add Admin</button>
        </td>
      </tr>
    </table>
  </form>

</body>
</html>
