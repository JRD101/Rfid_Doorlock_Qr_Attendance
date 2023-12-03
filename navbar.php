<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <div class="navbar">
        <a href="home.php">Dashboard</a>
      
        <div class="dropdown">
            <a href="javascript:void(0);" class="dropbtn" >Registration</a>
            <div class="dropdown-content" >
                <a href="registration.php">Faculty</a>
                <!-- <a href="registration_faculty.php">Faculty</a> -->
                <!-- Add more options as needed -->
            </div>
        </div>
        <div class="dropdown">
            <a href="javascript:void(0);" class="dropbtn">Manage Users</a>
            <div class="dropdown-content">
                <a href="user_data.php">Faculty</a>
                <!-- <a href="user_data_faculty.php">Faculty</a> -->
                <!-- Add more options as needed -->
            </div>
        </div>
        <div class="dropdown">
            <a href="javascript:void(0);" class="dropbtn" >Scan</a>
            <div class="dropdown-content">
                <a href="read_tag_rfid.php">RFID</a>
                <!-- <a href="read_tag_qr.php">QR</a> -->
                <!-- Add more options as needed -->
            </div>
        </div>
    </div>

    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>

</body>

<style>
        body {
            /* background-image: url('background.jpg');
             background-repeat: no-repeat;
            background-size: cover;
            */
            font-family: Arial;
            margin: 0;
            padding: 0;
            text-align: center;
          
        }

        .navbar {
            overflow: hidden;
            background-color:dodgerblue;
            display: flex;
            justify-content: flex-start; /* Updated this line to align to the left */
        }

        .navbar a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 16px;
        }
  
        
        .navbar a:hover {
            background-color:lightskyblue;
        }

        .main {
            margin-top: 60px; /* Adjust this value based on your needs */
        }

        @media screen and (max-width: 600px) {
            .navbar a {
                width: 100%;
                text-align: center;
            }

            .main {
                margin-top: 0;
            }
        }
        /* Dropdown styles */
        .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 130px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>

</html>
