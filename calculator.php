<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculator</title>

    <style>
        body {
            width: 100%;
            height: 100%;
            background-color: orangered;
        }

        h1 {
            color: burlywood;
            text-align: center;
        }

        table {
            border-color: #000000;
            height: 20rem;
            width: 10rem;
        }

        #container {
            height: 20rem;
            max-width: 19rem;
            margin: auto;
            text-align: center;
            background-color: firebrick;
        }

        #screen {
            background-color: burlywood;
        }
    </style>

    <script>
        function scrval(val) {

            document.getElementById("screen").value += val;

        }

        function solve() {
            let x = document.getElementById("screen").value
            let y = eval(x)
            document.getElementById("screen").value = y
        }

        function clr() {
            document.getElementById("screen").value = " ";
        }

        function del() {
            document.getElementById("screen").value = " ";
        }
    </script>
</head>

<body>


    <h1>Calculator</h1>

    <div id="container">
        <table border="15">

            <tr>
                <td colspan="4">
                    <input type="text" id="screen">
                </td>
            </tr>

            <tr->
                <td><input type="button" value="+" onclick="scrval('+')"></td>
                <td><input type="button" value="-" onclick="scrval('-')"></td>
                <td><input type="button" value="*" onclick="scrval('*')"></td>
                <td><input type="button" value="/" onclick="scrval('/')"></td>
            </tr->

            <tr>
                <td><input type="button" value="7" onclick="scrval('7')"></td>
                <td><input type="button" value="8" onclick="scrval('8')"></td>
                <td><input type="button" value="9" onclick="scrval('9')"></td>
                <td><input type="button" value="DEL" onclick="del()"></td>
            </tr>

            <tr>
                <td><input type="button" value="4" onclick="scrval('4')"></td>
                <td><input type="button" value="5" onclick="scrval('5')"></td>
                <td><input type="button" value="6" onclick="scrval('6')"></td>
                <td><input type="button" value="CE" onclick="clr()"></td>
            </tr>

            <tr>
                <td><input type="button" value="1" onclick="scrval('1')"></td>
                <td><input type="button" value="2" onclick="scrval('2')"></td>
                <td><input type="button" value="3" onclick="scrval('3')"></td>
                <td><input type="button" value="." onclick="scrval('.')"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="button" value="0" onclick="scrval('0')"></td>
                <td colspan="2"><input type="button" value="=" onclick="solve()"></td>
            </tr>

        </table>
    </div>


</body>

</html>