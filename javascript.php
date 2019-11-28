<?php include 'templates/header.html'; ?>
<?php include 'templates/navbar.html'; ?>
<main>
  <form method="post">

    <h2 class="heading">Menu</h2>
    <fieldset id="menu">
      <div class="order">
        <label for="burger">Classic Rock Burger...........$8.99</label>
        <input name="burger" id="burger" type="checkbox" value="8.99"/>
      </div>
      <div class="order">
        <label for="dblburger">Double Rock Burger..........$11.99</label>
        <input name="dblburger" id="dblburger" type="checkbox" value="11.99"/>
      </div>
      <div class="order">
        <label for="chicken">Fried Chicken Sandwich.....$10.99</label>
        <input name="chicken" id="chicken" type="checkbox" value="10.99"/>
      </div>
      <div class="order">
        <label for="vegburger">Portobella Burger..............$8.99</label>
        <input name="veggie" id="vegburger" type="checkbox" value="8.99"/>
      </div>
      <div class="order">
        <label for="fish">Smoked Fish Sandwich.......$11.99</label>
        <input name="fish" id="fish" type="checkbox" value="11.99" />
      </div>
    </fieldset>


    <fieldset class="getFood">
      <legend>Will your order be Delivery or Carryout?</legend>
      <label for="delivery">Delivery</label>
      <input name="orderPref" id="delivery" value="delivery" type="radio" onclick="getCustInfo()" required />
      <label for="carryout">Carryout</label>
      <input name="orderPref" id="carryout" value="carryout" type="radio" onclick="hideCustInfo()" required />
    </fieldset>


    <fieldset id="deliveryAddr">
      <legend class="custData heading">Customer Information</legend>
      <div class="custData">
        <label for="name">Name</label>
        <input name="custName" id="name" type="text" required />
      </div>
      <div class="custData">
        <label for="street">Street Address</label>
        <input name="custStreet" id="street" type="text" required />
      </div>
      <div class="custData">
        <label for="city">City</label>
        <input name="custCity" id="city" type="text" required />
      </div>
      <div class="custData">
        <label for="state">State</label>
        <input name="custState" id="state" type="text" required />
      </div>
      <div class="custData">
        <label for="zip">Zip</label>
        <input name="custZip" id="zip" type="text" required />
      </div>
    </fieldset>

    <input type="button" class="button submit_button" value="Submit" onclick="processOrder();" />
    <h3 id="total">Your total is: $0.00</h3>
  </form>
</main>

<aside>
<table id="order_table">
  <thead>
    <tr>
      <th>#</th>
      <th>Item</th>
      <th>Name</th>
    </tr>
  </thead>
  <tfoot id="tablefoot">
    <tr>
      <td colspan="3">
        <input type="button" class="button" value="Place Order">
      </td>
    </tr>
  </tfoot>
  <tbody id="tablebody">
  </tbody>
</table>
<form id="create_rows" method="post">
  <input type="number" id="add_rows" placeholder="0" />
  <input type="button" class="button" onclick="showOrderTable(); generateRows();" value="Add Rows"/>
</form>
</aside>
<?php include 'templates/footer.html'; ?>
