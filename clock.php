<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clock</title>

    <style>
        body {
            background-color: #091929;
        }

        #clock {
            position: relative;
            margin: auto;
            height: 45vw;
            width: 45vw;
            background: url(clock.png) no-repeat;
            background-size: cover  ;
        }

        #hour,
        #min,
        #sec {
            position: absolute;
            background: black;
            border-radius: 10px;
            transform-origin: bottom;
        }

        #hour {
            width: 1.8%;
            height: 25%;
            top: 25%;
            left: 48.85%;
            opacity: 0.8;
        }

        #min {
            width: 1.6%;
            height: 30%;
            top: 19%;
            left: 48.9%;
            opacity: 0.8;
        }

        #sec {
            width: 1%;
            height: 40%;
            top: 9%;
            left: 49.25%;
            opacity: 0.8;

        }
    </style>

    <script>
            setInterval(()=>{
            date = new Date();
            hourtime = date.getHours();
            mintime = date.getMinutes();
            sectime = date.getSeconds();

            hourrotation = (30*hourtime) + (mintime/2);
            minuterotation = (6*mintime) + (sectime/10);
            secondrotation = 6*sectime;

            hour.style.transform = `rotate(${hourrotation}deg)`;
            min.style.transform = `rotate(${minuterotation}deg)`;
            sec.style.transform = `rotate(${secondrotation}deg)`;
        }, 1000)
    </script>
</head>

<body>

    <div id="clock">
        <div id="hour"></div>
        <div id="min"></div>
        <div id="sec"></div>
    </div>

</body>

</html>