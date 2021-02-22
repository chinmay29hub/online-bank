<?php
 require('config.php');
 require('connection.php');


?>


<!DOCTYPE html>
<html>
<title>Online Bank</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-button w3-block">Transfer</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Customer</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">About</a>
    </div>
    
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>BANKING</b></h1>
    
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="bank_1.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Internet Banking</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="bank_2.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Easy Transfer</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="bank_3.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Your Online Bank</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  

  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Money Transfer</h3>
      <p>Choose amount and customers to transfer to.</p>
    </div>

    <hr>

<div class="w3-container w3-teal w3-black">
  <h2>Money Transfer</h2>
</div>
<form class="w3-container w3-card-4" action="transfer.php" method="POST">

<br>
<p>      
<label class="w3-text-grey">From</label>
<select class="w3-select w3-border" name="from" required>
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Jill Smith</option>
    <option value="2">Eve Jackson</option>
    <option value="3">Adam Johnson</option>
    <option value="4">Alexander Perkins</option>
    <option value="5">Milton Field</option>
    <option value="6">Ash King</option>
    <option value="7">Robert Silva</option>
    <option value="8">Brooke Holmes</option>
    <option value="9">Sydney Harper</option>
    <option value="10">Stan Harris</option>
  </select>
</p>
<p>      
<label class="w3-text-grey">To</label>
<select class="w3-select w3-border" name="to" required>
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Jill Smith</option>
    <option value="2">Eve Jackson</option>
    <option value="3">Adam Johnson</option>
    <option value="4">Alexander Perkins</option>
    <option value="5">Milton Field</option>
    <option value="6">Ash King</option>
    <option value="7">Robert Silva</option>
    <option value="8">Brooke Holmes</option>
    <option value="9">Sydney Harper</option>
    <option value="10">Stan Harris</option>
  </select>
</p>
<p>      
<label class="w3-text-grey">Amount</label>
<input class="w3-input w3-border w3-animate-input" type="number" name="amount" style="width:30%;" placeholder="Enter Amount in numbers" required></p>
</p>
<br>
  
  <p><button type="submit" class="w3-btn w3-padding w3-teal w3-black" style="width:120px">Send &nbsp; &#10095;</button></p>
</form>
<hr>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="contact">
    <div class="w3-center w3-padding-64">
      <h3>Our Customers</h3>
      <p>List of customers using our services.</p>
    </div>

    <hr>

<div class="w3-container w3-teal w3-black">
  <h2>Customers</h2>
</div>
<form class="w3-container w3-card-4">
<br>
<div class="w3-container">


<div class="w3-responsive">
<table class="w3-table-all  w3-hoverable">
<tr>
  <th class="w3-center">First Name</th>
  <th class="w3-center">Last Name</th>
  <th class="w3-center">Email</th>
  <th class="w3-center">Current Balance</th>
  <th class="w3-center">View Customer</th>
  
</tr>
<tr>
  <td class="w3-center">Jill</td>
  <td class="w3-center">Smith</td>
  <td class="w3-center">jillsmith@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=1';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
}
?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Jill Smith</h3>
          <label>Age:</label><h3>36</h3>
          <label>Email:</label><h3>jillsmith@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=1';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
}?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Eve</td>
  <td class="w3-center">Jackson</td>
  <td class="w3-center">evejackson@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=2';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Eve Jackson</h3>
          <label>Age:</label><h3>25</h3>
          <label>Email:</label><h3>evejackson@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=2';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Adam</td>
  <td class="w3-center">Johnson</td>
  <td class="w3-center">adamjohnson@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=3';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Adam Johnson</h3>
          <label>Age:</label><h3>40</h3>
          <label>Email:</label><h3>adamjohnson@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=3';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Alexander</td>
  <td class="w3-center">Perkins</td>
  <td class="w3-center">alexanderperkins@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=4';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Alexander Perkins</h3>
          <label>Age:</label><h3>29</h3>
          <label>Email:</label><h3>alexanderperkins@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=4';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Milton</td>
  <td class="w3-center">Field</td>
  <td class="w3-center">miltonfield@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=5';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id05" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Milton</h3>
          <label>Age:</label><h3>28</h3>
          <label>Email:</label><h3>miltonfield@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=5';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Ash</td>
  <td class="w3-center">King</td>
  <td class="w3-center">ashking@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=6';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id06').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id06" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id06').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Ash King</h3>
          <label>Age:</label><h3>50</h3>
          <label>Email:</label><h3>ashking@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=6';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Robert</td>
  <td class="w3-center">Silva</td>
  <td class="w3-center">robertsilva@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=7';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id07').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id07" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id07').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Robert Silva</h3>
          <label>Age:</label><h3>40</h3>
          <label>Email:</label><h3>robertsilva@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=7';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Brooke</td>
  <td class="w3-center">Holmes</td>
  <td class="w3-center">brookeholmes@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=8';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id08').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id08" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id08').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Brooke</h3>
          <label>Age:</label><h3>60</h3>
          <label>Email:</label><h3>brookeholmes@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=8';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Sydney</td>
  <td class="w3-center">Harper</td>
  <td class="w3-center">sydneyharper@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=9';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id09').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id09" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id09').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Jill Smith</h3>
          <label>Age:</label><h3>21</h3>
          <label>Email:</label><h3>sydneyharper@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=9';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
<tr>
  <td class="w3-center">Stan</td>
  <td class="w3-center">Harris</td>
  <td class="w3-center">stanharris@gmail.com</td>
  <td class="w3-center"><?php $sql = 'SELECT balance FROM transaction WHERE id=10';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></td>
  <td class="w3-center">
    <div class="w3-container">
  
  <button onclick="document.getElementById('id10').style.display='block'" class="w3-button w3-green w3-tiny w3-black">View</button>

  <div id="id10" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id10').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="user.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section w3-center">
          
          <label>Name:</label><h3>Stan Harris</h3>
          <label>Age:</label><h3>43</h3>
          <label>Email:</label><h3>stanharris@gmail.com</h3>
          <label>Account Balance:</label><h3><?php $sql = 'SELECT balance FROM transaction WHERE id=10';
 $result = mysqli_query($connection, $sql);
 
 if (mysqli_num_rows($result) > 0){
  while($rowData = mysqli_fetch_assoc($result)){
    echo $rowData["balance"];
  }
} ?></h3>
          
        </div>
      </form>

      

    </div>
  </div>
</div>
  </td>
  
</tr>
</table>
</div>
</div>
<br>
  
  
</form>
<hr>
  </div>

  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="about">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact</span>
  </div>

  <form class="w3-container">
     <div class="w3-card-4">

<header class="w3-container w3-light-grey">
  <h3>Chinmay Sonawane</h3>
</header>

<div class="w3-container">
  
  <hr>
  <img style="width: 130px;" src="user_2.png" alt="Avatar" class="w3-left w3-circle">
  <p class="w3-center">LinkedIn</p>
  <hr>
  <p class="w3-center">Github</p>
  <hr>
</div>
<br>

<button class="w3-button w3-block w3-dark-grey">+ Connect</button>

</div> 
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Made by <a href="https://www.linkedin.com/in/chinmay-sonawane-38474019a/" title="W3.CSS" target="_blank" class="w3-hover-text-green">Chinmay Sonawane</a></p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
