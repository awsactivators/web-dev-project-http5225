<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loop</title>
</head>
<body>
  <h1>Github API</h1>

  <?php

    // GitHub username, repository name, and personal access token
    $username = 'awsactivators';
    $repo = 'AD-DL-Final-Project';
    $token = '';

    // GitHub API endpoint for collaborators
    $url = "https://api.github.com/repos/$username/$repo/collaborators";

    // Initialize cURL session
    $ch = curl_init(); // function will initialize a new session and return a cURL handle.

    // Set cURL options
    // set an option for a cURL session identified by the ch parameter. Option specifies which option is to set, and value specifies the value for the given option.

    //pass URL as a parameter. This is your target server website address. This is the URL you want to get from the internet.
    curl_setopt($ch, CURLOPT_URL, $url);

    //return page contents. If set 0 then no output will be returned.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "User-Agent: PHP Script", // GitHub API requires a User-Agent header
        "Authorization: token $token"
    ]);

    // Execute cURL request
    // curl_exec() function should be called after initialize a cURL session and all the options for the session are set. Its purpose is simply to execute the predefined CURL session (given by ch).

    // grab URL and pass it to the variable for showing output.
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Decode the JSON response
        $collaborators = json_decode($response, true);

        // Check if the response is an array and display collaborators
        if (is_array($collaborators)) {
            foreach ($collaborators as $collaborator) {
                echo "Collaborator: " . $collaborator['login'] . "<br>";
            }
        } else {
            echo "Error: " . $response;
        }
    }

    // Close cURL session
    // close curl resource, and free up system resources.
    curl_close($ch);
  ?>
</body>
</html>