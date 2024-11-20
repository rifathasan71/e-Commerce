<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delivery Partner Registration</title>
</head>
<body>

  <h2>Delivery Partner Registration</h2>
  <form action="/register-delivery-partner" method="POST" enctype="multipart/form-data">
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
        <td><input type="tel" id="phone" name="phone" required></td>
      </tr>
      <tr>
        <td><label for="vehicle-type">Vehicle Type</label></td>
        <td>
          <select id="vehicle-type" name="vehicle_type" required>
            <option value="bike">Bike</option>
            <option value="car">Car</option>
            <option value="van">Van</option>
            <option value="truck">Truck</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="license-number">License Number</label></td>
        <td><input type="text" id="license-number" name="license_number" required></td>
      </tr>
      <tr>
        <td><label for="address">Address</label></td>
        <td><textarea id="address" name="address" rows="3"></textarea></td>
      </tr>
      <tr>
        <td><label for="price-list">Upload Price List</label></td>
        <td><input type="file" id="price-list" name="price_list" accept=".csv,.xls,.xlsx,.pdf" required></td>
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
