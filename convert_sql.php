
<!DOCTYPE HTML>
<html lang="en">
    <head><title>Convert Sql</title></head>
    <body>
        <?php
        // define variables and set to empty values
        $input = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'] ?? "";
        }
        ?>
        <form action="" method="post">
            <fieldset>
                <legend style="text-transform: uppercase;
                   font-size: 40px;color: red">input</legend>
                <label><textarea placeholder="Please enter the content" rows="20" cols="202" name="input" style="background: transparent;color: red"><?php echo $input;?></textarea></label><br>
            </fieldset>
            <br>
            <input id="button" type="submit" value="Convert SQL" style="color: red;border: 2px solid black;background: transparent;font-family: century gothic,serif;width: 1500px;height: 50px;font-size: 40px;text-align: center">
        </form>
        <br>
        <fieldset>
            <legend style="text-transform: uppercase;
                   font-size: 40px;color: red">output</legend>
            <label><textarea rows="20" cols="202" name="input" style="background: transparent;color: red"">
                    <?php
                    $input = str_replace("\n", "\n &nbsp;&nbsp;&nbsp;&nbsp;", $input);
                    $trimInput = preg_replace('/\' +\./','',$input);
                    echo str_replace(array('\'.','\'') ,'',$trimInput);
                    ?>
                </textarea></label>
            <br><br><br>
        </fieldset>
    </body>
</html>

<style>
    body {
        height: 100%;
        background: url("https://uphinh.vn/images/2022/12/08/a147bdc6f7c888594b9ee1c4f3e6c85f.jpg") no-repeat fixed ;
    },
</style>
