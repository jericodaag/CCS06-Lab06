<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect user input
    $name = htmlspecialchars($_POST['complete_name']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $email = htmlspecialchars($_POST['email']);
    $program = htmlspecialchars($_POST['program']);
    $color = htmlspecialchars($_POST['favorite_color']);
    $superpower = htmlspecialchars($_POST['superpower_level']);

    // Display user input
    echo "<hr>";
    echo "<h1>Your Profile</h1>";
    echo "<p><strong>Full Name:</strong> $name</p>";
    echo "<p><strong>Birthdate:</strong> $birthdate</p>";
    echo "<p><strong>Email Address:</strong> $email</p>";
    echo "<p><strong>Program:</strong> $program</p>";
    echo "<p><strong>Favorite Color:</strong> <span style='color:$color;'>$color</span></p>";
    echo "<p><strong>Superpower Level:</strong> $superpower</p>";
    echo "<hr>";

    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
else {
?>
    <h1>Enter Data</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="complete_name">Name:</label>
        <input type="text" name="complete_name" id="complete_name" required><br>

        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" id="birthdate" required><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="program">Program:</label>
        <select name="program" id="program" required>
            <option value="">--Select Program--</option>
            <option value="BSCS">B.S. Computer Science</option>
            <option value="BSIT">B.S. Information Technology</option>
            <option value="BSIS">B.S. Information Systems</option>
        </select><br>

        <label for="favorite_color">Favorite Color:</label>
        <input type="color" name="favorite_color" id="favorite_color" required><br>

        <label for="superpower_level">Superpower Level:</label>
        <input type="range" name="superpower_level" id="superpower_level" min="1" max="1000000" step="5000" required><br>

        <button type="submit">Submit</button>
    </form>
<?php
}
?>