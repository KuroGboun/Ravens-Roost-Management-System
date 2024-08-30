<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/culogo.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"></head>

</head>
<body class="page2">
    <header class="page2">
       
        <a href="index.html">
        <img src="images/culogo.png" alt="CU Logo" class="logo1"></a>
        <nav class="navbar">
            <a href="#">Games</a>
            <a href="#">Sign Out</a>
            <a href="#"></a>
            <a href="#"></a>
        </nav>
    </header>
    <header class="gam"> GAMES
        </header>
    <div class="cards-container">
        
        <div class="card1" onclick="togglePop1()">
            <img src="images/tt.png" alt="tt" class="tt">    
            <h5>Ping Pong</h5>
            <p>2-4 supported</p>
        </div>
        <div class="card1" onclick="togglePop2()">
            <img src="images/pool.png" alt="pool" class="poo">    
            <h5>Pool Table</h5>
            <p>2-4 supported</p>
        </div>
        <div class="card1" onclick="togglePop3()">
            <img src="images/ps4.png" alt="ps4" class="poo">    
            <h5>PS4</h5>
            <p>1-4 players supported</p>
        </div>
        <div class="card1" onclick="togglePop4()">
            <img src="images/nin.png" alt="nin" class="tt">    
            <h5 class="switch-tex">Nintendo Switch</h5>
            <p>1-4 players supported</p>
        </div>
        <div class="card1" onclick="togglePop5()">
            <img src="images/xbox.png" alt="xbox" class="xb">    
            <h5 class="xb-tex">Xbox 360</h5>
            <p>1-4 players supported</p>
        </div>
    </div>

    <header class="tittle">
        EQUIPMENT
    </header>
    <div class="equip-container">
        <div class="card1" onclick="togglePopi1()">
            <img src="images/board.png" alt="board" class="bb">    
            <h5>Board Games</h5>
            <p>multiple supported</p>
        </div>
        <div class="card1" onclick="togglePopi2()">
            <img src="images/foos.png" alt="foos" class="poo">    
            <h5>Foosball</h5>
            <p>2-4 supported</p>
        </div>
        <div class="card1" onclick="togglePopi3()">
            <img src="images/uno.png" alt="uno" class="uno">    
            <h5>Uno</h5>
            <p>2-10 players supported</p>
        </div>
        <div class="card1" onclick="togglePopi4()">
            <img src="images/chess.png" alt="chess" class="ch">    
            <h5>Chess</h5>
            <p>2 players supported</p>
        </div>
        <div class="card1" onclick="togglePopi5()">
            <img src="images/jenga.png" alt="jenga" class="jengo">    
            <h5 class="jen-tex">Jenga</h5>
            <p>1-4 players supported</p>
        </div>
    </div>

    <?php
    // Check if the user was redirected with a success message
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
    echo '<script>alert("Entry Successful!");</script>';
    }
    ?> 
     
<div class="popup" id="pop1">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePop1()">&times;</div>
        <h1 id="popup-title">Ping Pong</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="ping-pong">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname" required><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" required><br>
            
                <label for="time">Time Slot:</label>
                <input type="text" id="time" name="time" required><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="data-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Time Slot</th>
            </tr>

            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Time Slot` FROM `ping-pong` ORDER BY `id` DESC LIMIT 9";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Time Slot'] . "<br></td></tr>";
                    }
                }
                $conn->close();

            ?>
            

        </table>
      
    </div>
    </div>
    <div class="popup" id="pop2">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePop2()">&times;</div>
        <h1 id="popup-title">Pool Table</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="pool-table">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname" required><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" required><br>
            
                <label for="time">Time Slot:</label>
                <input type="text" id="time" name="time" required><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="data-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Time Slot</th>
            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Time Slot` FROM `pool-table` ORDER BY `id` DESC LIMIT 9";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Time Slot'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            

        </table>
      
    </div>
    </div>
    <div class="popup" id="pop3">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePop3()">&times;</div>
        <h1 id="popup-title">PS4</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="ps4">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname" required><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" required><br>
            
                <label for="time">Time Slot:</label>
                <input type="text" id="time" name="time" required><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="data-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Time Slot</th>
            </tr>

            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Time Slot` FROM `ps4` ORDER BY `id` DESC LIMIT 9";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Time Slot'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            

        </table>
      
    </div>
    </div>
    <div class="popup" id="pop4">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePop4()">&times;</div>
        <h1 id="popup-title">Nintendo Switch</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="switch">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname" required><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" required><br>
            
                <label for="time">Time Slot:</label>
                <input type="text" id="time" name="time" required><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="data-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Time Slot</th>
            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Time Slot` FROM `switch` ORDER BY `id` DESC LIMIT 9";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Time Slot'] . "<br></td></tr>";
                    }
                }
                $conn->close();

            ?>
            

        </table>
      
    </div>
    </div>
    <div class="popup" id="pop5">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePop5()">&times;</div>
        <h1 id="popup-title">Xbox 360</h1>
            <p id="popup-description">Add a Student:</p>
            
            
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="xbox">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname" required><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" required><br>
            
                <label for="time">Time Slot:</label>
                <input type="text" id="time" name="time" required><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="data-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Time Slot</th>
            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Time Slot` FROM `xbox` ORDER BY `id` DESC LIMIT 9";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Time Slot'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            

        </table>
        </div>
        </div>
    <div class="popup" id="popi1">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePopi1()">&times;</div>
        <h1 id="popup-title">Board Games</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname"><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname"><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id"><br>
            
                <label for="time">Check Out:</label>
                <input type="text" id="out" name="out"><br>
            
            
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <form action="equip.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" ><br>
            
                <label for="time">Check In:</label>
                <input type="text" id="in" name="in" ><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="bdata-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Check Out</th>
                <th>Check In</th>

            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Check Out` FROM `board` ORDER BY `id` DESC LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Check Out'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            </table>
            </div>
            </div>
    <div class="popup" id="popi2">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePopi2()">&times;</div>
        <h1 id="popup-title">Foosball</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname"><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname"><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id"><br>
            
                <label for="time">Check Out:</label>
                <input type="text" id="out" name="out"><br>
            
            
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <form action="equip.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" ><br>
            
                <label for="time">Check In:</label>
                <input type="text" id="in" name="in" ><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="bdata-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Check Out</th>
                <th>Check In</th>

            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Check Out` FROM `foosball` ORDER BY `id` DESC LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Check Out'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            </table>
            </div>
            </div>
    <div class="popup" id="popi3">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePopi3()">&times;</div>
        <h1 id="popup-title">Uno</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname"><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname"><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id"><br>
            
                <label for="time">Check Out:</label>
                <input type="text" id="out" name="out"><br>
            
            
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <form action="equip.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" ><br>
            
                <label for="time">Check In:</label>
                <input type="text" id="in" name="in" ><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="bdata-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Check Out</th>
                <th>Check In</th>

            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Check Out` FROM `uno` ORDER BY `id` DESC LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Check Out'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            </table>
            </div>
            </div>
    <div class="popup" id="popi4">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePopi4()">&times;</div>
        <h1 id="popup-title">Chess</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname"><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname"><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id"><br>
            
                <label for="time">Check Out:</label>
                <input type="text" id="out" name="out"><br>
            
            
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <form action="equip.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" ><br>
            
                <label for="time">Check In:</label>
                <input type="text" id="in" name="in" ><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="bdata-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Check Out</th>
                <th>Check In</th>

            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Check Out` FROM `chess` ORDER BY `id` DESC LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Check Out'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            </table>
            </div>
            </div>
    <div class="popup" id="popi5">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn" onclick="togglePopi5()">&times;</div>
        <h1 id="popup-title">Jenga</h1>
            <p id="popup-description">Add a Student:</p>
            <form action="connect.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">

                <label for="fname">First Name:</label> 
                <input type="text" id="fname" name="fname"><br>
            
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname"><br>
            
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id"><br>
            
                <label for="time">Check Out:</label>
                <input type="text" id="out" name="out"><br>
            
            
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <form action="equip.php" method="POST" class="regis">
            <input type="hidden" id="table" name="table" value="board">
                <label for="id">Student ID:</label>
                <input type="number" id="id" name="id" ><br>
            
                <label for="time">Check In:</label>
                <input type="text" id="in" name="in" ><br>
            
                <input type="submit" id="submit" name="submit" />
            </form>
            <h1 class=tada>Table Data</h1>
            <table class="bdata-table">
            <tr class='udon'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                <th>Check Out</th>
                <th>Check In</th>

            </tr>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT `First Name`, `Last Name`, `Student ID`, `Check Out` FROM `jenga` ORDER BY `id` DESC LIMIT 4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['First Name'] . "</td><td>" . $row['Last Name'] . "</td><td>" . $row['Student ID'] . "</td><td>" . $row['Check Out'] . "<br></td></tr>";
                    }
                } 

                $conn->close();

            ?>
            </table>
            </div>
            </div>
    <script src="popup.js"></script>
    
</body>
</html>
<!-- Use: http://localhost/Ravens%20Roost%20Management/Front%20End/home.php -->
