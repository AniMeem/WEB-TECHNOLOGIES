<?php
session_start();

$_SESSION['login'] = 'off';
$_SESSION['Credentia'] = '';
$_SESSION['msg'] = '';

$data = array(
    'currentpassword' => '12345678#',
    'newpassword' => '',

);


if (isset($_POST)) {

    $currentpassword = (!empty($_POST['currentpassword'])) ? htmlentities(htmlspecialchars($_POST['currentpassword'])) : '';
    $newpassword = (!empty($_POST['newpassword'])) ? htmlentities(htmlspecialchars($_POST['newpassword'])) : '';
    $retypenewpassword = (!empty($_POST['retypenewpassword'])) ? htmlentities(htmlspecialchars($_POST['retypenewpassword'])) : '';

    if (
        
        (strlen($currentpassword) >= 8 && preg_match("/[\@|\#|\$|\%]/", $currentpassword) == 1) &&
        (strlen($newpassword) >= 8 && preg_match("/[\@|\#|\$|\%]/", $newpassword) == 1) &&
        (strlen($retypenewpassword) >= 8 && preg_match("/[\@|\#|\$|\%]/", $retypenewpassword) == 1) 
    ) {
        if ( $data['currentpassword'] == $currentpassword && $data['newpassword'] == $newpassword && $data['retypenewpassword'] == $retypenewpassword ) {
            $_SESSION['login'] = 'on';
            $_SESSION['Credentia'] = 'off';
            $_SESSION['msg'] = "<h4 style=\"text-align:center;color:green;\">change password successfully.";
        } else {
            $_SESSION['login'] = 'off';
            $_SESSION['Credentia'] = 'on';
            $_SESSION['msg'] = "<h4 style=\"text-align:center;color:red;\">your credential is incorrect!!</h4>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        *,
        *::after,
        *::before {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #d35400;
        }

        header,
        footer {
            width: 70%;
            margin: 0 auto;
            background-color: #3c345e;
            padding: 20px;
            text-align: center;
            color: white;
        }

        main {
            width: 70%;
            margin: 10px auto;
            min-height: 300px;
            border: 1px solid black;
            padding: 5px;
        }

        table {
            width: 80%;
            margin: 20px auto 0 auto;
            text-align: center;
        }

        table tr td {
            padding: 10px 10px;
        }

        table tr td:first-child {
            text-align: right;
        }

        table tr td:last-child {
            text-align: left;
        }

        button {
            padding: 10px 20px;
            background-color: green;
            border: none;
            border-radius: 3px;
            color: white;
            font-size: medium;
        }
    </style>
</head>

<body>

    <header>
        <h1>Change Passwoord</h1>
    </header>

    <main>
        <?php echo ($_SESSION['Credentia'] == 'on' || $_SESSION['login'] == 'on') ? $_SESSION['msg'] : ''; ?>
        <form action="index.php" method="post">
            <table>
                <tbody>
                   
                    <tr>
                        <td><label for="currentpassword">Current Password</label></td>
                        <td><input id="currentpassword" type="passwrod" name="currentpassword" required></td>
                    </tr>
                    <tr>
                        <td><label for="newpassword">New Password</label></td>
                        <td><input id="newpassword" type="passwrod" name="newpassword" required></td>
                    </tr>
                    <tr>
                        <td><label for="retypenewpassword">Retype New Password</label></td>
                        <td><input id="retypenewpassword" type="passwrod" name="retypenewpassword" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button id="submit" type="submit" name="submit">Submit</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>

    >
</body>

</html>