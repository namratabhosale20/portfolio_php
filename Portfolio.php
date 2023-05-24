<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namrata Bhosale - Front End Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        html,
        body {
            /* min-width: 100%;
            min-height: 100%; */
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            overflow-x: hidden;

        }


        .container {


            display: flex;
            align-items: center;
            padding: 2rem;
            /* border: 1px solid black; */
            /* margin: 3rem 3rem; */
            margin-top: 1rem;

        }
        /* #blur{
            filter: blur(20px);
        } */
        .container#blur.active{
            filter: blur(20px);
          
        }
        .main#blur.active{
            filter: blur(20px);
           
        }

        .container .info {
            width: 40%;
        }

        .info2 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .info h4 {
            margin-top: 1rem;
            color: gray;
            font-size: 1.1rem;
            font-weight: 400;
            width: 100%;
            line-height: 1.7rem;
        }

        .info button {
            color: white;
            background-color: rgba(38, 38, 238, 0.829);
            outline: none;
            border: 1px solid rgba(38, 38, 238, 0.829);
            padding: 1rem 2rem;
            margin-top: 2rem;
            border-radius: 0.5rem;
            /* font-weight: bold; */
            font-size: 1rem;

        }

        .img {

            margin: 1rem auto;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .info button i {
            color: white;
            margin-left: 0.5rem;
            font-size: 1rem;
        }

        .info button:hover {
            background: rgba(38, 38, 238, 0.767);
        }


        .cards {
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
            gap: 1rem;
            padding: 2rem;
            background: #fcda69;
            border-radius: 0.7rem;
            margin: 0px 0.8em;
        }

        .cards .info2 {
            width: 40%;
        }

        .offer {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: flex-start;
            width: 40%;
        }

        .card1 {
            border-top: 2px solid #000;
            padding-top: 2em;
        }


        .img2 {
            margin: 1rem auto;
        }

        .info2 p {
            font-weight: 400;
            opacity: .7;
            font-size: 1.2rem;
            margin-top: 1rem;
            width: 100%;
            line-height: 1.3rem;
        }

        .skill {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* justify-content: center; */
            padding: 2rem;
        }

        .skill p {
            margin-top: 1rem;
            color: gray;
            font-size: 1.1rem;
            font-weight: 400;
            width: 100%;
            line-height: 1.7rem;

        }

        .skills {
            display: flex;
            align-items: center;
            /* display: grid;
            grid-template-columns: repeat(1fr, 3); */
            /* justify-content: center; */
            gap: 5rem;

        }

        .left,
        .right {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .left img,
        .right img {
            width: 100px;
            height: 100px;
            margin-top: 1rem;
        }

        .contact {
            padding: 2rem;
            background: #fcda69;
            margin-left: 0.8em;
            margin-right: 0.8em;
            margin-bottom: 0.8em;
        }

        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin-top: 1rem;

        }

        .info3 p {
            margin-top: 1rem;
            color: #000;
            font-size: 1.1rem;
            font-weight: 400;
            width: 100%;
            line-height: 1.7rem;

        }

        .info3 button {
            color: white;
            background-color: rgba(38, 38, 238, 0.829);
            outline: none;
            border: 1px solid rgba(38, 38, 238, 0.829);
            padding: 1rem 2rem;
            margin-top: 2rem;
            border-radius: 0.5rem;
            /* font-weight: bold; */
            font-size: 1rem;

        }

        .info3 button i {
            color: white;
            margin-left: 0.5rem;
            font-size: 1rem;
        }

        .contact {
            border-radius: 0.7rem;
        }

        .form {
            margin-top: 2rem;
        }

        .form input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border-radius: 0.6em;
            outline: none;
            border: 1px solid gainsboro;
        }

        .form textarea {
            height: 5rem;
            padding: 0.6rem;
            width: 100%;
            outline: none;
            border: 1px solid gainsboro;
            border-radius: 0.6em;
        }

        .form button {

            color: white;
            background-color: rgba(38, 38, 238, 0.829);
            outline: none;
            border: 1px solid rgba(38, 38, 238, 0.829);
            padding: 1rem 2rem;
            margin-top: 2rem;
            border-radius: 0.5rem;
            /* font-weight: bold; */
            font-size: 1rem;

        }

        .form button:hover {
            cursor: pointer;
        }

        .form button i {
            color: white;
            margin-left: 0.5rem;
            font-size: 1rem;
        }

        .links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .icon {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .icon i {
            font-weight: bolder;
        }

        .link {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .link a {
            text-decoration: none;
            color: #000;
        }

        .close i {
            cursor: pointer;
        }

        .contact1 {
            /* min-width: 100%;
            min-width: 100%; */
            visibility: hidden;
            position: absolute;
            top: 0;
            background-color: #fff;
            transform: scale(0.1);
            border-radius: 0.4rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            /* margin: 0.3rem 0.7rem; */
            padding: 2rem;
            transition: transform 0.4s, top 0.4s;
            margin: 2rem 2rem;
        }

         .open-popup {
            visibility: visible;

            transform: scale(1);
        } 

        .close {
            position: absolute;
            top: 5px;
            right: 1rem;
        }

        /* SUBMIT POPUP */
        .contact {
            position: relative;
        }

        .Form1 {
            background: #fff;
            color: #000;
            height: 15rem;
            width: 20rem;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-top: 1rem;
            text-align: center;
            box-shadow: 3px 2px #868686;
            border: 1px solid gainsboro;
            border-radius: 5px;
            visibility: hidden;
            position: absolute;
            top: 3rem;


            transition: transform 0.4s, top 0.4s;

        }

        .Form1 h1 {
            margin-top: 0.4rem;
            margin-bottom: 0.4rem;
            font-size: 3rem;
        }

        .Form1 p {
            font-size: 1.2rem;
            color: green;
            margin-bottom: 1rem;
        }

        .circle {
            height: 70px;
            width: 70px;
            background: skyblue;
            border-radius: 50%;
            text-align: center;
            position: relative;
        }

        .Form1 .circle i {
            position: absolute;
            top: 1.1rem;
            left: 1.1rem;
            color: #fff;
            font-size: 2rem;

        }

        .open-popup1 {
            visibility: visible;
        }

        .close1 {
            position: relative;
        }

        .close1 button i {
            color: black;
            background: transparent;
            top: 0;
            position: absolute;
            right: -8.5em;
            cursor: pointer;
            font-size: 1rem;
        }

        .projects {
            /* border: 2px solid black; */
            padding: 2rem;

        }

        .projects .title {
            padding: 2rem;

        }

        .project-list {
            padding-top: 0;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-bottom: 2rem;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            gap: 2rem;

        }

        /* .food,
        .shop {
            width: 50%;
        } */

        .food img,
        .shop img {
            width: 100%;
        }

        .projects .food a {
            color: red;
        }

        .projects .shop a {
            color: red;
        }

        .projects .title h1 {
            margin-bottom: 3px;

        }

        .projects .project-list p {
            color: gray;

        }

        .projects .project-list .info {
            margin-top: 1rem;



        }

        .food,
        .shop {
            box-shadow: 0 4px 4px 0px #4f4f4f;
            /* border: 2px solid rebeccapurple; */
        }
       
      
        #popup{
            /* position: fixed; */
             top: 53%;
            left: 43%;
            transform: translate(-50%,-50%); 
            visibility: hidden;
            opacity: 0;
        }
        #popup.active{
            visibility: visible;
            opacity: 1;
        }
    

        @media (max-width:600px) {
            .container {
                flex-direction: column;
                /* margin: 0.3em 0.3em; */


            }

            .container .info {
                width: 100%;
            }

            .cards .info2 {
                width: 100%;
            }

            .offer {
                width: 100%;
            }

            .projects .project-list {
                display: grid;
                grid-template-columns: repeat(250px, 2fr);



            }



            img {
                border-radius: 1rem;
                margin-top: 1rem;
                width: 250px;
            }

            .cards {
                flex-direction: column;
            }

            .left img,
            .right img {
                width: 60px;
                height: 60px;
            }


        }
    </style>
</head>

<body>
    <!-- <div class="header">
        <h1>i am header</h1>
    </div> -->
    <div class="main" id="blur">
        <div class="container" id="blur">
            <div class="info">
                <h1>Hello, my name's Namrata. I'm a Full Stack Developer.</h1>
                <h4>A Full-Stack developer with Innovative ideas a team player and passionate about coding.</h4>
                <!-- <button id="contact">Let's Talk<i class="fa fa-paper-plane-o" aria-hidden="true"></i></button> -->
                <button onclick="openPopup()"><a href="#contact">Let's Talk<i class="fa fa-paper-plane-o"
                            aria-hidden="true"></i></a></button>
            </div>
            <div class="img">
                <img src="https://lukaszadam.com/woman_working_2.svg" width="400px" alt="" data-aos="fade-down">
            </div>

           
        </div>
       
        <div class="cards">
            <div class="info2" data-aos="fade-up">
                <h1>Services I Offer</h1>
                <p>I help an ambitious business like yours generate more profits by building awareness, driving web
                    traffic,
                    connecting with customers, and growing overall sales.</p>
                <div class="img2">
                    <img src="https://lukaszadam.com/woman_working_1.svg" data-aos="fade-up" alt="">
                </div>


            </div>
            <div class="offer">
                <div class="card1" data-aos="fade-left">
                    <h2>1. Full Stack Web Development</h2>
                </div>
                <div class="card1" data-aos="fade-left">
                    <h2>2. Website UI Development</h2>
                </div>
                <div class="card1" data-aos="fade-left">
                    <h2>3. Web UI/UX Design</h2>
                </div>
            </div>
        </div>
        <div class="skill">
            <div class="info3">
                <h1>Skills</h1>
                <p>Languages,Technologies and tools that I have learned and applied to my projects</p>
            </div>
            <div class="skills">

                <div class="left">
                    <img src="https://www.kushalgohil.com/skills/1%20Html.svg" data-aos="fade-up" alt="">

                    <img src="https://www.kushalgohil.com/skills/6%20JavaScript.svg" data-aos="fade-up" alt="">
                    <img src="php.png" data-aos="fade-up" alt="">
                    <img src="c++1.png" data-aos="fade-up" alt="" width="10px">

                </div>
                <div class="right">
                    <img src="https://www.kushalgohil.com/skills/2%20Css.svg" data-aos="fade-up" alt="">
                    <img src="https://www.kushalgohil.com/skills/5%20Figma.svg" data-aos="fade-up" alt="">
                    <img src="java1.jpg" data-aos="fade-up" alt="">
                    <img src="MySQL.png" data-aos="fade-up" alt="">


                </div>

            </div>
        </div>
        <div class="projects">
            <div class="title">
                <h1>My projects at a Glance</h1>
                <p>I will let the work I've done speak for me -"Corrine Brown"</p>
            </div>

            <div class="project-list">
                <div class="food">
                    <img src="meal.jpg" alt="">
                    <div class="info">
                        <p>Built the website using HTML5,CCS3, Javascript <br> this websitw fetches food recipies
                            information for an API <br> in this application user can able to search the recipies.</p>
                    </div>
                    <a href="https://namratabhosale20.github.io/Food-Recipe-App/">Link</a>

                </div>
                <div class="food">
                    <img src="movie.jpg" alt="">
                    <div class="info">
                        <p>Built the website using HTML5,CCS3,Javascript <br> this websitw fetches
                            information for an API <br> in this application user can able to search the movies.</p>
                    </div>
                    <a href="https://namratabhosale20.github.io/Movie-App/">Link</a>

                </div>
                <div class="food">
                    <img src="todo.jpg" alt="">
                    <div class="info">
                        <p>Built the website using HTML5,CCS3,Javascript <br> Allows to create multiple lists,in this
                            user can perform the operations like add,delete,and edit the items.</p>
                    </div>
                    <a href="https://namratabhosale20.github.io/TodoApp/">Link</a>

                </div>
                <div class="shop">
                    <img src="Screenshot (347).jpg" alt="">
                    <div class="info">
                        <p>Built the website using HTML5,CCS3, Javascript <br> User can add the items into the cart and
                            can perform the operations like delete,increase or decrease the quantity of the products.
                        </p>
                    </div>
                    <a href="https://namratabhosale20.github.io/Ecommerce/">link</a>

                </div>
            </div>
        </div>
        <div class="contact">
            <div class="info3">
                <h1 class="title" data-aos="flip-up">Let's Discuss Your Project</h1>
                <p class="para" data-aos="flip-up">Feel free to contact me for career prospects, business services, and
                    other professional inquiries!</p>
                <!-- <button>Resume <i class="fa fa-download" aria-hidden="true"></i></button> -->
                <button class="resume-btn" data-aos="flip-up"><a href="./Namrata Bhosale (4).pdf">Resume <i
                            class="fa fa-download" aria-hidden="true"></i></a></button>

            </div>
            <div class="links">
                <div class="icon">
                    <i class="fa fa-envelope-o" aria-hidden="true" data-aos="flip-up"></i>
                    <i class="fa fa-phone" aria-hidden="true" data-aos="flip-up"></i>
                    <i class="fa fa-linkedin-square" aria-hidden="true" data-aos="flip-up"></i>
                    <i class="fa fa-github" aria-hidden="true" data-aos="flip-up"></i>

                </div>
                <div class="link">
                    <a href="namratab1012@gmail.com" data-aos="flip-up">namratab1012@gmail.com</a>
                    <a href="" data-aos="flip-up">+9028285665</a>
                    <a href="https://www.linkedin.com/in/namrata-bhosale-1a9595224"
                        data-aos="flip-up">https://www.linkedin.com/in/namrata-bhosale-1a9595224</a>
                    <a href="https://github.com/namratabhosale20"
                        data-aos="flip-up">https://github.com/namratabhosale20</a>
                </div>

            </div>
            <div class="form" data-aos="fade-up">
                <form action="https://formsubmit.co/7ee24c85d1d4c52809bc328d4bf57803" method="post">
                    <input type="text" placeholder="Name" id="input1" required>
                    <input type="text" name="email" placeholder="Email" id="email" required>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message" name="message" required></textarea>
                    <button name="submit" type="submit" onclick="SopenPopup()" id="submit" value="submit">Submit Talk<i class="fa fa-paper-plane-o"
                            aria-hidden="true"></i></button>
                </form>


            </div>
            <!-- <div class="Form1" id="popup1">
                <div class="close1">
                    <button onclick="Sclosepopup()" id="close1"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
        
                <div class="circle"><i class="fa fa-check" aria-hidden="true"></i></div>
                <h1>Thank You!</h1>
                <p>Your messege has been received. <br> I will update you shortly.</p>
            </div> -->
        </div>
    </div>

    <div class="contact1" id="popup">
                <div class="close" onclick="openPopup()"><i class="fa fa-times" aria-hidden="true"></i></div>
                <!-- onclick="closePopup()" -->
                <div class="info3">
                    <h1 class="title">Let's Discuss Your Project</h1>
                    <p class="para">Feel free to contact me for career prospects, business services,
                        and
                        other professional inquiries!</p>
                    <!-- <button>Resume <i class="fa fa-download" aria-hidden="true"></i></button> -->
                    <button class="resume-btn"><a href="./Namrata Bhosale (4).pdf">Resume <i class="fa fa-download"
                                aria-hidden="true"></i></a></button>

                </div>
                <div class="links">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <i class="fa fa-github" aria-hidden="true"></i>

                    </div>
                    <div class="link">
                        <a href="namratab1012@gmail.com">namratab1012@gmail.com</a>
                        <a href="">+9028285665</a>
                        <a
                            href="https://www.linkedin.com/in/namrata-bhosale-1a9595224">https://www.linkedin.com/in/namrata-bhosale-1a9595224</a>
                        <a href="https://github.com/namratabhosale20">https://github.com/namratabhosale20</a>
                    </div>

                </div>
                <div class="form">
                    <form action="https://formsubmit.co/7ee24c85d1d4c52809bc328d4bf57803" method="post">
                        <input type="text" name="Name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message" name="message" required></textarea>
                        <button type="submit">Submit Talk<i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </form>


                </div>
            </div>
    <!-- our aos data -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>
    <script>

        let popup = document.getElementById("popup");
        function openPopup() {
            
            var blur=document.getElementById('blur');
            blur.classList.toggle('active');
            // var popup=document.getElementById('popup');
            popup.classList.toggle('active');
            // popup.classList.add("open-popup");

        }
        function closePopup() {
            popup.classList.remove("open-popup");

        }
        let submit = document.getElementById("popup1");

        function SopenPopup() {
            submit.classList.add("open-popup1");
        }



        function Sclosepopup() {
            submit.classList.remove("open-popup1");
        }
      
        
    </script>




    <!-- <script>
        document.getElementById("talk").addEventListener("click", function () {
            document.querySelector(".contact1").style.display = "block";
        })
        document.querySelector(".close").addEventListener("click", function () {
            document.querySelector(".contact1").style.display = "none";
        })
    </script> -->
</body>

</html>
