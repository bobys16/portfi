<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PortFi is Coming Soon - 3 Days</title>
      <style>
         @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;600&display=swap');

         body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
         }

         .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
         }

         h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
            animation: slideInFromLeft 1s ease-in-out;
         }

         .subtitle {
            font-size: 1.5em;
            margin-bottom: 2em;
            animation: slideInFromRight 1s ease-in-out;
         }

         #countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            font-size: 1.5em;
         }

         #countdown div {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            animation: fadeIn 3s ease-in-out;
         }

         @keyframes fadeIn {
            from {
               opacity: 0;
            }

            to {
               opacity: 1;
            }
         }

         @keyframes slideInFromLeft {
            from {
               transform: translateX(-100%);
               opacity: 0;
            }

            to {
               transform: translateX(0);
               opacity: 1;
            }
         }

         @keyframes slideInFromRight {
            from {
               transform: translateX(100%);
               opacity: 0;
            }

            to {
               transform: translateX(0);
               opacity: 1;
            }
         }
      </style>
   </head>
   <body>
      <div class="container">
         <h1>We're Coming Soon</h1>
         <p class="subtitle">Our website is under construction. We'll be here soon with our new awesome site.</p>
         <div id="countdown">
            <div>
               <span id="days"></span> Days
            </div>
            <div>
               <span id="hours"></span> Hours
            </div>
            <div>
               <span id="minutes"></span> Minutes
            </div>
            <div>
               <span id="seconds"></span> Seconds
            </div>
         </div>
      </div>
      <script>
         function countdown() {
            const now = new Date().getTime();
            const launchDate = new Date(now + 10 * 24 * 60 * 60 * 1000).getTime();
            const interval = setInterval(() => {
               const current = new Date().getTime();
               const distance = launchDate - current;
               const days = Math.floor(distance / (1000 * 60 * 60 * 24));
               const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
               const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
               const seconds = Math.floor((distance % (1000 * 60)) / 1000);
               document.getElementById('days').innerText = days;
               document.getElementById('hours').innerText = hours;
               document.getElementById('minutes').innerText = minutes;
               document.getElementById('seconds').innerText = seconds;
               if (distance < 0) {
                  clearInterval(interval);
                  document.querySelector('.container').innerHTML = ' < h1 > We Have Launched! < /h1>';
               }
            }, 1000);
         }
         countdown();
      </script>
   </body>
</html>