<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brand Manager Registration</title>
</head>
<body>

  <h2>Brand Manager Registration</h2>
  <form action="../control/registration_process.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td><label for="name">Full Name</label></td>
        <td><input type="text" id="name" name="name" ></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email"  name="email" ></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><input type="password"  name="password" ></td>
      </tr>
      <tr>
        <td><label for="confirm-password">Confirm Password</label></td>
        <td><input type="password" id="confirm-password" name="confirm_password" ></td>
      </tr>
      <tr>
        <td><label for="phone">Phone Number</label></td>
        <td><input type="tel" id="phone" name="phone" ></td>
      </tr>
     
      <tr>
        <td><label for="brand-category">Brand Category</label></td>
        <td>
          <select id="brand-category" name="brand_category" >
            <option value="fashion">Fashion</option>
            <option value="electronics">Electronics</option>
            <option value="home-goods">Home Goods</option>
            <option value="beauty">Beauty</option>
            <option value="sports">Sports</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="address">Address</label></td>
        <td><textarea id="address" name="address" rows="3"></textarea></td>
      </tr>
      <tr>
        <td><label for="cv">Upload CV</label></td>
        <td><input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required></td>
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
