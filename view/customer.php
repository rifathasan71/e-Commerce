<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Registration</title>
</head>
<body>

  <h2>Customer Registration</h2>
  <form>
    <table>
      <tr>
        <td><label for="name">Full Name</label></td>
        <td><input type="text" id="name" name="name" required></td>
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
        <td><label for="phone">Phone Number</label></td>
        <td><input type="tel" id="phone" name="phone"></td>
      </tr>
      <tr>
        <td><label for="address">Address</label></td>
        <td><textarea id="address" name="address" rows="3"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <button type="submit">Register</button>
        </td>
      </tr>
    </table>
  </form>

</body>
</html>
