<html>

<head>
    <title>Glenn's Site</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="splash">
        <div class="sp-container">
            <div class="sp-content">
                <h2 class="frame-5">
                    <span>Welcome</span>
                    <span>To</span>
                    <span>Glenn Site.</span>
                </h2>
            </div>
        </div>
        
    </div>

    <header>
        <div class="main-nav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="Exam/CLE1 (Midterm)/index.php">Exam</a></li>
                <li><a href="https://final-glenn.herokuapp.com/activity/mod6/index.php">Activity</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="text">
            <p>My Glenn Nicole B Labayen im 27years old and i live in Fortune Town Brgy Estefania Bacolod City</p>
        </div>

    </main>


    <script>
        const splash = document.querySelector('.splash');
        document.addEventListener('DOMContentLoaded', (e) => {
            setTimeout(() => {
                splash.classList.add('display-none');
            }, 6000);
        })

        const header = document.querySelector('header');
        window.onscroll = function () {
            var top = window.scrollY;
            console.log(top);

            if (top >= 50) {
                header.classList.add('active')
            } else {
                header.classList.remove('active')
            }
        }
    </script>
</body>

</html>