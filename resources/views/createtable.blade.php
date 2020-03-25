@include('inclues.header')
<?php

require('J:\xampp\htdocs\Telecom\resources\views\connect.blade.php');

$sql = "DROP TABLE if exists user_status;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'user_status' Table deleted successfully</center>";
    echo "<br>";
} else {
    echo "<center>Error deleting table:</center> " . $link->error;
    echo "<br>";
}

$sql = "DROP TABLE if exists data_packs;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'data_packs' Table deleted successfully</center>";
    echo "<br>";
} else {
    echo "<center>Error deleting table:</center>" . $link->error;
    echo "<br>";
}

$sql = "DROP TABLE if exists sms_packs;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'sms_packs' Table deleted successfully</center>";
    echo "<br>";
} else {
    echo "<center>Error deleting table: </center>" . $link->error;
    echo "<br>";
}

$sql = "DROP TABLE if exists call_packs;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'call_packs' Table deleted successfully</center>";
    echo "<br>";
} else {
    echo "<center>Error deleting table: " . $link->error;
    echo "<br>";
}

$sql = "DROP TABLE if exists sms;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'sms' Table deleted successfully</center>";
    echo "<br>";
} else {
    echo "<center>Error deleting table:</center> " . $link->error;
    echo "<br>";
}

$sql = "DROP TABLE if exists calls;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'calls' Table deleted successfully</center>";
    echo "<br>";
} else {
    echo "<center>Error deleting table:</center> " . $link->error;
    echo "<br>";
}

$sql = "DROP TABLE if exists user_bio;";

if ($link->query($sql) === TRUE) {
    echo "'<center>'user_bio' Table deleted successfully</center>";
    echo "<br><br><br>";
} else {
    echo "<center>Error deleting table:</center> " . $link->error;
    echo "<br>";
}

$sql = "CREATE TABLE data_packs (
ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Data INT(10) NOT NULL,
Price INT(10) NOT NULL,
Life_Time INT(10) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "'<center>'data_packs' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE data_packs');
      echo"<center>Description of data_packs</center>";
      echo "<br>";

    while($row = mysqli_fetch_array($q)) {
      echo "<center>{$row['Field']} - {$row['Type']}</center>";
       echo "<br>";
    }

    echo "<br><br><br>";
} else {
    echo "<center>Error creating table: </center>" . $link->error;
    echo "<br>";
}

$sql = "CREATE TABLE sms_packs (
ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Sms INT(10) NOT NULL,
Price INT(10) NOT NULL,
Life_Time INT(10) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "'<center>'sms_packs' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE sms_packs');
      echo"<center>Description of sms_packs</center>";
      echo "<br>";

    while($row = mysqli_fetch_array($q)) {
      echo "<center>{$row['Field']} - {$row['Type']}</center>";
       echo "<br>";
    }

    echo "<br><br><br>";
} else {
    echo "<center>Error creating table: </center>" . $link->error;
    echo "<br>";
}

$sql = "CREATE TABLE call_packs (
ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
TalkTime INT(10) NOT NULL,
Price INT(10) NOT NULL,
Life_Time INT(10) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "'<center>'call_packs' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE call_packs');
      echo"<center>Description of call_packs</center>";
      echo "<br>";

    while($row = mysqli_fetch_array($q)) {
      echo "<center>{$row['Field']} - {$row['Type']}</center>";
       echo "<br>";
    }

    echo "<br><br><br>";
} else {
    echo "<center>Error creating table: </center>" . $link->error;
    echo "<br>";
}
$sql = "CREATE TABLE user_bio (
Mobile_No INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Full_Name VARCHAR(30) NOT NULL,
NID INT(20) NOT NULL,
DateOfBirth  date NOT NULL,
Address VARCHAR(50) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "<center>'user_bio' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE user_bio');
    while($row = mysqli_fetch_array($q)) {
        echo "<center>{$row['Field']} - {$row['Type']}</center>";
        echo "<br>";
    }
    echo "<br><br><br>";
} else {
    echo "Error creating table: " . $link->error;
    echo "<br>";
}

$sql = "CREATE TABLE calls (
ID INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Caller_ID INT(15) UNSIGNED NOT NULL,
Receiver_ID INT(15) UNSIGNED NOT NULL,
Call_Date_Time  DATETIME NOT NULL,
Duration INT(10) NOT NULL,
FOREIGN KEY(Caller_Id) REFERENCES user_bio(Mobile_No) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Receiver_Id) REFERENCES user_bio(Mobile_No) ON DELETE CASCADE ON UPDATE CASCADE
)";

if ($link->query($sql) === TRUE) {
    echo "<center>'calls' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE calls');
    while($row = mysqli_fetch_array($q)) {
        echo "<center>{$row['Field']} - {$row['Type']}</center>";
        echo "<br>";
    }
    echo "<br><br><br>";
} else {
    echo "Error creating table: " . $link->error;
    echo "<br>";
}

$sql = "CREATE TABLE sms (
ID INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Sender_ID INT(15) UNSIGNED NOT NULL,
Receiver_ID INT(15) UNSIGNED NOT NULL,
Sms_Date_Time  DATETIME NOT NULL,
FOREIGN KEY(Sender_Id) REFERENCES user_bio(Mobile_No) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Receiver_Id) REFERENCES user_bio(Mobile_No) ON DELETE CASCADE ON UPDATE CASCADE
)";

if ($link->query($sql) === TRUE) {
    echo "<center>'sms' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE sms');
    while($row = mysqli_fetch_array($q)) {
        echo "<center>{$row['Field']} - {$row['Type']}</center>";
        echo "<br>";
    }
    echo "<br><br><br>";
} else {
    echo "Error creating table: " . $link->error;
    echo "<br>";
}

$sql = "CREATE TABLE user_status (
ID INT(15) UNSIGNED NOT NULL UNIQUE,
Balance INT(15),
Sms INT(15),
Data INT(15),
Call_Packs  INT(10) UNSIGNED NOT NULL,
SMS_Packs  INT(10) UNSIGNED NOT NULL,
Data_Packs  INT(10) UNSIGNED NOT NULL,
FOREIGN KEY(ID)REFERENCES user_bio(Mobile_No),
FOREIGN KEY(Call_Packs)REFERENCES Call_Packs(ID) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(SMS_Packs)REFERENCES SMS_Packs(ID) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(Data_Packs)REFERENCES Data_Packs(ID) ON DELETE CASCADE ON UPDATE CASCADE
)";

if ($link->query($sql) === TRUE) {
    echo "<center>'user_status' Table created successfully</center>";
    echo "<br>";
    $q = mysqli_query($link,'DESCRIBE user_status');
    while($row = mysqli_fetch_array($q)) {
        echo "<center>{$row['Field']} - {$row['Type']}</center>";
        echo "<br>";
    }
    echo "<br><br><br>";
} else {
    echo "Error creating table: " . $link->error;
    echo "<br>";
}


 ?>
 @include('inclues.footer')
