<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPSU Moises Padilla Official Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="../public/assets/images/CPSU_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        .hamburger {
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #000000;
            margin: 2px;
            transition: 0.4s;
            cursor: pointer;
        }
        .menu {
                position: fixed;
                transform: translateX(-500%);
                transition: transform 1.5s ease-in-out;
                z-index: 999;
            }
        .menu.active {
                transform: translateX(0);
            }
         .hamburger {
                display: flex;
            }
        .box-shodow {
            box-shadow: 0px 4px 6px rgb(0, 0, 0, 0.9);
        }
        .shadow-white {
            box-shadow: 0px 4px 6px rgb(255, 255, 255, 0.9);
        }
        #map {
        height: 600px;
        width: 100%;
        pointer-events: none;
        filter: grayscale(10%);
        transition: filter 0.3s ease;
        }
    </style>
</head>
<body class="font-poppins bg-[#000000]">
    <div class="w-full h-auto sticky top-0 z-50 shadow-[0px_10px_20px_rgba(0,0,0,0.5)]">
        <div id="header" class=" w-full h-auto flex justify-evenly items-center bg-[#000000] text-[#FCFCFC] text-[11px] p-3 gap-5">
        <span class="w-auto flex items-center gap-5 max-md:gap-3">
            <a href="#" class="outline-none flex items-center justify-center text-center gap-2 pointer max-md:pr-3 pr-5 border-r border-r-[#FCFCFC]">
                <span class="font-bold text-[13px]">f</span>
                <span class="max-md:hidden">CPSU-MPC Web Admin</span>
            </a>
            <a href="#" class="outline-none flex items-center justify-center text-center gap-2 pointer max-md:pr-3 pr-5 border-r border-r-[#FCFCFC]">
                <i class="bi bi-envelope"></i>
                <span class="max-md:hidden">cpsu_mpc@cpsu.edu.ph</span>
            </a>
            <a href="#" class="outline-none flex items-center justify-center text-center gap-2 pointer max-md:pr-3">
                <i class="bi bi-telephone"></i>
                <span class="max-md:hidden">+6399-3117-4271</span>
            </a>
        </span>
        <a href="../admin/index.php" target="blank" class="outline-none flex items-center justify-center text-center gap-2 pointer pl-5 max-md:pl-3 border-l pointer border-l-[#FCFCFC]">
            <i class="bi bi-wifi"></i>
            <span class="mx-md:hidden">Cpsu Web Admin</span>
        </a>
    </div>

        <div class="w-full h-auto flex justify-evenly items-center text-center bg-[#104618] text-[#fafafa] p-2 gap-10">
            <span class="flex items-center justify-center text-center gap-2">
                <img src="../public/assets/images/CPSU_logo.png" alt="CPSU Logo" class="w-[50pxpx] h-[49.73px]">
                <span class="flex flex-col items-start max-md:items-center justify-center text-center pl-3 border-l border-l-gray-300">
                    <span class="text-[16px] font-semibold tracking-widest">CENTRAL PHILIPPINES STATE UNIVERSITY</span>
                    <span class="text-[12px] font-semibold tracking-wide">MOISES PADILLA CAMPUS</span>
                </span>
            </span>
            <span class="max-md:hidden flex flex-wrap items-center justify-center text-center gap-1 p-1">
                <a href="https://ched.gov.ph/" target="blank"><img src="../public/assets/images/CHED.png" alt="ched_logo" class="w-[35px] h-[35px] pointer"></a>
                <a href="https://www.foi.gov.ph/" target="blank"><img src="../public/assets/images/FOI.webp" alt="foi_logo" class="w-[35px] h-[35px] rounded-full pointer"></a>
                <img src="../public//assets//images/CCS.png" alt="css_logo" class="w-[39px] h-[37px] pointer">
                <img src="../public//assets//images/logo-coted.png" alt="coted_logo" class="w-[42px] h-[42px] pointer">
                <img src="../public//assets//images/BSAB.png" alt="bsab_logo" class="w-[44px] h-[42px] pointer">
            </span>
        </div>

                <div class="w-full h-auto flex justify-center items-center text-center bg-[#FFFFFF] gap-10 text-[#474747] p-4">
                    <ul class="max-md:hidden flex items-center justify-center text-center gap-10 text-[16px] font-bold text-[16px]">
                        <li><a class="hover:border-b-[2px] hover:border-[#474747]" href="./index.php">HOME</a></li>
                        <li><a class="hover:border-b-[2px] hover:border-[#474747]" href="./about.php">ABOUT</a></li>
                        <div class="relative group">
                        <button class="flex items-center gap-2 text-gray-800 hover:text-[#15421C]">
                            ACADEMICS
                            <i class="bi bi-caret-down-fill"></i>
                        </button>
                        <div class="absolute left-0 z-20 hidden group-hover:block bg-white border shadow-md mt-0 rounded-lg">
                            <ul class="w-48 py-2">
                            <li><a href="academics/program-offers.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Program Offers</a></li>
                            <li><a href="academics/admission.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Admission</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="relative group">
                        <button class="flex items-center gap-2 text-gray-800 hover:text-[#15421C]">
                            ADMINISTRATION
                            <i class="bi bi-caret-down-fill"></i>
                        </button>
                        <div class="absolute left-0 z-20 hidden group-hover:block bg-white border shadow-md mt-0 rounded-lg">
                            <ul class="w-48 py-2 items-center">
                            <li><a href="administration/key-officials.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Key Officials</a></li>
                            <li><a href="administration/program-heads.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Program Head</a></li>
                            <li><a href="administration/faculty.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Faculty</a></li>
                            <li><a href="administration/administrative-functions.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Administrative Functions</a></li>
                            </ul>
                        </div>
                        </div>
                    </ul>
                    <div class="hamburger flex max-md:w-full max-md:items-end flex-col pointer" onclick="toggleMenu()">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                        <div class="menu flex flex-col top-0 left-0 h-[100dvh] w-[300px] max-md:w-[250px] bg-white  items-center text-center text-[#fafafa] gap-2 p-5 box-shadow border-4 border-green-900">
                            <ul class="flex flex-col gap-5 pt-10 max-md:pt-1 font-[500] text-[15px] text-[#000000]">
                                <span class="flex flex-col items-center justify-center text-center text-green-900 mb-5">
                                    <img src="assets/images/CPSU_logo.png" alt="cpsu_logo" class="w-[100px] h-[80px]">
                                    <span class="text-[16px]">CENTRAL PHILIPPINES STATE UNIVERSITY</span>
                                    <span class="text-[12px]">MOISES PADILLA CAMPUS</span>
                                </span>
                                <li class="bg-green-900 text-white p-2 rounded-[12px]">
                                    <a href="./index.php">HOME</a>
                                </li>
                                <li class="bg-white text-green-900 hover:bg-green-900 hover:text-white p-2 rounded-[12px]">
                                    <a href="./about.php">ABOUT</a>
                                </li>
                                  <div class="relative inline-block text-center items-center justify-center">
                                    <button id="dropdownButton" class="bg-white text-green-900 hover:text-white w-full h-auto p-2 rounded-[12px] hover:bg-green-900 gap-2 flex text-center items-center justify-center">
                                    ACADEMICS
                                    <i class="bi bi-caret-down-fill"></i>
                                    </button>
                                    <div id="dropdownMenu" class="z-10 absolute mt-2 w-full bg-white border py-2 border-gray-200 rounded-[12px] shadow-lg hidden">
                                    <a href="academics/program-offers.php" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Program Offers</a>
                                    <a href="academics/admission.php" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Admission</a>
                                    </div>
                                </div>
                                    <div class="relative inline-block text-center items-center justify-center">
                                        <button id="dropdownButtontwo" class="bg-white text-green-900 hover:text-white w-full h-auto p-2 rounded-[12px] hover:bg-green-900 gap-2 flex text-center items-center justify-center">
                                            ADMINISTRATION
                                            <i class="bi bi-caret-down-fill"></i>
                                        </button>
                                        <div id="dropdownMenutwo" class="z-10 absolute mt-2 w-full bg-white border py-2 border-gray-200 rounded-[12px] shadow-lg hidden">
                                            <a href="./administration/key-officials.php" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Key Official</a>
                                            <a href="./administration/program-heads.php" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Program Head</a>
                                            <a href="./administration/faculty.php" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Faculty</a>
                                            <a href="./administration/administrative-functions.php" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Administrative Functions</a>
                                      </div>
                                  </div>
                            </ul>
                                <div class=" w-full h-auto flex flex-col items-left justify-left text-left gap-1 p-2 pt-10 max-md:pt-2">
                                    <span class="text-[18px] max-md:text-[14px] text-green-900 font-semibold italic">Follow us:</span>
                                    <div class="w-full h-auto flex flex-col items-left justify-left text-left gap-1">
                                        <span class="flex gap-2 max-md:text-[12px]">
                                            <i class="bi bi-facebook text-[20px] max-md:hidden text-blue-600"></i>
                                            <a href="" target="blank" class="text-[#585858] font-semibold italic">CPSU-Moises Padilla</a>
                                        </span>
                                        <span class="flex gap-2 max-md:text-[12px]">
                                            <i class="bi bi-facebook text-[20px] max-md:hidden text-blue-600"></i>
                                            <a href="" target="blank" class="text-[#585858] font-semibold italic">SAFE Center CPSU-MPC</a>
                                        </span>
                                        <span class="flex gap-2 max-md:text-[12px]">
                                            <i class="bi bi-facebook text-[20px] max-md:hidden text-blue-600"></i>
                                            <a href="" target="blank" class="text-[#585858] font-semibold italic">CPSU-MPC CSS</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full h-auto flex flex-col items-left justify-left font-semibold text-left text-[16px] text-[#585858] pt-5 p-1">
                                    <span>System Adviser : Elmilver Arquero</span>
                                    <span>Developed by : CPS</span>
                                </div>
                        </div>
                </div>
    </div>

            <div>
                <video class="w-full h-[448px] bg-black object-cover" autoplay  loop playsinline>
                 <source src="assets/videos/Love-Song-for-Illusion.Episode-1.kisskh.mp4" type="video/mp4">
                </video>
            </div>

                <div class="w-full h-auto flex flex-col justify-center items-center text-center bg-[#FFFDFD] text-[#fafafa] p-3 gap-4 pb-10">
                    <span class="flex items-center justify-center text-center gap-2 p-2 pt-5 border-b-2 border-b-[#000000]">
                        <img src="assets/images/leaves_one.png" alt="leaves_one" class="w-[88px] h-[75px] max-sm:w-[60px] h-[40px]">
                        <span class="flex flex-col items-center justify-center text-center p-1">
                            <span class="text-[32px] max-md:text-[25px] text-[#15421C] font-medium tracking-widest">PROGRAM OFFERS</span>
                            <span class="text-[15px] max-md:text-[10px] text-[#000000] font-medium">CENTRAL PHILIPPINES STATE UNIVERSITY - MOISES PADILLA CAMPUS</span>
                        </span>
                        <img src="assets/images/leaves.png" alt="leaves_two" class="w-[88px] h-[75px] max-sm:w-[60px] h-[40px]">
                    </span>
                    <div class="w-full h-auto flex flex-wrap justify-center items-center text-center gap-4 p-1 bg-[#FFFDFD]">
                        <div class="text-[#000000] w-[400px] h-[500px] border relative bg-cover bg-center flex flex-col justify-center items-center text-center text-[#fafafa]  transition-all duration-500 ease-in-out shadow-[0px_25px_45px_rgba(34,72,123,0.9)] border-none hover:translate-y-[-10px]" style="background-image: url(assets/images/coted.webp);">
                            <div class="absolute inset-0 bg-[#22487B] bg-opacity-85 flex flex-col justify-center items-center text-center text-[#fafafa] gap-5 p-2 px-3">
                                <img src="assets/images/logo-coted.png" alt="beed_logo" class="w-[117px] h-[117px] object-cover">
                                <span class="text-[25px] font-semibold tracking-widest leading-tight max-sm:text-[20px]">Bachelor of Science in <br> Secondary Education</span>
                                <span class="text-[15px] text-center max-md:text-[14px] max-sm:text-justify">The Bachelor of Science in Elementary Education (BSEd) at CPSU Moises Padilla is a four-year program that prepares future educators to teach at the elementary level. It equips students with teaching strategies, child-centered approaches, and a strong foundation in both content and pedagogy.</span>
                            </div>
                        </div>
                        <div class="text-[#000000] w-[400px] h-[500px] border relative bg-cover bg-center flex flex-col justify-center items-center text-center transition-all duration-500 ease-in-out shadow-[0px_25px_45px_rgba(43,36,84,0.9)] border-none hover:translate-y-[-10px]" style="background-image: url(assets/images/cssbg.jpg);">
                            <div class="absolute inset-0 bg-[#2B2454] bg-opacity-85 flex flex-col justify-center items-center text-center text-[#fafafa] gap-5 p-2 px-3">
                                <img src="assets/images/CCS.png" alt="css_logo" class="w-[117px] h-[117px] object-cover">
                                <span class="text-[25px] font-semibold tracking-widest leading-tight max-sm:text-[20px]">Bachelor of Science in Information Technology</span>
                                <span class="text-[15px] max-sm:text-[14px] max-sm:text-justify">The College of Computer Studies (CCS) at CPSU Moises Padilla offers innovative and industry-relevant programs that prepare students for careers in IT and computing. With hands-on training in programming, web development, networking, and system analysis, CCS equips future professionals with the technical skills and critical thinking needed in today’s digital world.</span>
                            </div>
                        </div>
                        <div class="text-[#000000] w-[400px] h-[500px] border relative bg-cover bg-center transition-all duration-500 ease-in-out shadow-[0px_25px_45px_rgba(17,55,22,0.9)] hover:translate-y-[-10px] border-none" style="background-image: url(assets/images/bsabbg.jpg);">
                            <div class="absolute inset-0 bg-[#113716] bg-opacity-85 flex flex-col justify-center items-center text-center text-[#fafafa] gap-5 p-2 px-3">
                                <img src="assets/images/BSAB.png" alt="bsab_logo" class="w-[117px] h-[117px] object-cover">
                                <span class="text-[25px] font-semibold tracking-widest leading-tight max-sm:text-[20px]">Bachelor of Science in Agricultural Business</span>
                                <span class="text-[15px] max-sm:text-[14px] max-sm:text-justify">The Bachelor of Science in Agricultural Business (BSAB) program at CPSU Moises Padilla equips students with the knowledge and skills needed to excel in the agricultural industry. It covers areas such as agribusiness management, marketing, and sustainable practices, preparing graduates for diverse roles in agriculture and agribusiness.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="w-full-h-auto flex flex-col justify-center items-center text-center bg-[#ffffff] text-[#000000] p-3 pt-10 pb-10 gap-5">
                    <span class="w-full h-auto flex items-center justify-evenly text-center text-[#000000] gap-[25px]">
                        <span class="flex flex-col items-left justify-left text-left p-2 pl-4 border-l-4 border-l-[#104618]">
                            <span class="text-[24px] tracking-widest font-semibold">LATEST UPDATE</span>
                            <span class="text-[18px]">Check the latest updates, important reminders, and other activities</span>
                        </span>
                        <span class="max-md:hidden"></span>
                        <span class="max-md:hidden"></span>
                    </span>
                    <div class="w-full h-auto flex flex-wrap justify-center text-center  gap-4 max-md:gap-10 p-2 pt-10 pb-5 bg-[#ffffff]">
                        <div class="text-[#000000] w-[400px] h-auto flex flex-col justify-center items-center text-center gap-10">
                            <div class="w-full h-[545px] flex flex-col  items-center text-center shadow-[0px_10px_20px_rgba(0,0,0,0.5)] rounded-[1px]">
                                <img src="assets/images/cssbg.jpg" alt="post-image" class="w-full h-[200px] object-cover object-center">
                                <span class="w-full flex items-start gap-3 px-4 p-2 text-[14px] text-[#685F5F] max-sm:text-[10px]">
                                    <i class="bi bi-calendar-fill text-[12px] max-sm:text-[10px]"></i>
                                    <span>July 25,2025</span>
                                    <i class="bi bi-person-fill text-[15px] max-sm:text-[10px]"></i>
                                    <span>Published by CPSU-MPC</span>
                                </span>
                                <span class="px-4 items-left justify-left max-sm:text-[14px] text-left font-semibold">CPSU 2025 AQUINTANCE PARTY, a warm celebration for the new student’s in CPSU - MPC 2025</span>
                                <span class="p-2 py-4 px-4 text-center text-[14px] max-sm:text-[12px] leading-loose">Giving the new student’s there memorable experienced in their college journey, many activities and games that officers had set up just for them. About 400 new students in different courses have enjoyed in this program a lifetime memories that they will cherished.</span>
                                <button class="w-full items-end justiy-end text-end p-2 px-10">
                                    <a class="p-3 bg-[#D9D9D9] text-[12px]" href="#">Read more</a>
                                </button>
                            </div>
                            <div class="w-full h-[545px] flex flex-col  items-center text-center shadow-[0px_10px_20px_rgba(0,0,0,0.5)] rounded-[1px]">
                                <img src="assets/images/bsabbg.jpg" alt="post-image" class="w-full h-[200px] object-cover object-center">
                                <span class="w-full flex items-start gap-3 px-4 p-2 text-[14px] text-[#685F5F] max-sm:text-[10px]">
                                    <i class="bi bi-calendar-fill text-[12px] max-sm:text-[10px]"></i>
                                    <span>July 25,2025</span>
                                    <i class="bi bi-person-fill text-[15px] max-sm:text-[10px]"></i>
                                    <span>Published by CPSU-MPC</span>
                                </span>
                                <span class="px-4 items-left justify-left max-sm:text-[14px] text-left font-semibold">CPSU 2025 AQUINTANCE PARTY, a warm celebration for the new student’s in CPSU - MPC 2025</span>
                                <span class="p-2 py-4 px-4 text-center text-[14px] max-sm:text-[12px] leading-loose">Giving the new student’s there memorable experienced in their college journey, many activities and games that officers had set up just for them. About 400 new students in different courses have enjoyed in this program a lifetime memories that they will cherished.</span>
                                <button class="w-full items-end justiy-end text-end p-2 px-10">
                                    <a class="p-3 bg-[#D9D9D9] text-[12px]" href="#">Read more</a>
                                </button>
                            </div>
                            <div class="w-full h-[545px] flex flex-col  items-center text-center shadow-[0px_10px_20px_rgba(0,0,0,0.5)] rounded-[1px]">
                                <img src="assets/images/coted.webp" alt="post-image" class="w-full h-[200px] object-cover object-center">
                                <span class="w-full flex items-start gap-3 px-4 p-2 text-[14px] text-[#685F5F] max-sm:text-[10px]">
                                    <i class="bi bi-calendar-fill text-[12px] max-sm:text-[10px]"></i>
                                    <span>July 25,2025</span>
                                    <i class="bi bi-person-fill text-[15px] max-sm:text-[10px]"></i>
                                    <span>Published by CPSU-MPC</span>
                                </span>
                                <span class="px-4 items-left justify-left max-sm:text-[14px] text-left font-semibold">CPSU 2025 AQUINTANCE PARTY, a warm celebration for the new student’s in CPSU - MPC 2025</span>
                                <span class="p-2 py-4 px-4 text-center text-[14px] max-sm:text-[12px] leading-loose">Giving the new student’s there memorable experienced in their college journey, many activities and games that officers had set up just for them. About 400 new students in different courses have enjoyed in this program a lifetime memories that they will cherished.</span>
                                <button class="w-full items-end justiy-end text-end p-2 px-10">
                                    <a class="p-3 bg-[#D9D9D9] text-[12px]" href="#">Read more</a>
                                </button>
                            </div>
                        </div>

                        <div class="text-[#000000] w-[400px] h-auto flex flex-col justify-center items-center text-center gap-10">
                            <div class="w-full h-[545px] flex flex-col  items-center text-center shadow-[0px_10px_20px_rgba(0,0,0,0.5)] rounded-[1px]">
                                <img src="assets/images/bsabbg.jpg" alt="post-image" class="w-full h-[200px] object-cover object-center">
                                <span class="w-full flex items-start gap-3 px-4 p-2 text-[14px] text-[#685F5F] max-sm:text-[10px]">
                                    <i class="bi bi-calendar-fill text-[12px] max-sm:text-[10px]"></i>
                                    <span>July 25,2025</span>
                                    <i class="bi bi-person-fill text-[15px] max-sm:text-[10px]"></i>
                                    <span>Published by CPSU-MPC</span>
                                </span>
                                <span class="px-4 items-left justify-left max-sm:text-[14px] text-left font-semibold">CPSU 2025 AQUINTANCE PARTY, a warm celebration for the new student’s in CPSU - MPC 2025</span>
                                <span class="p-2 py-4 px-4 text-center text-[14px] max-sm:text-[12px] leading-loose">Giving the new student’s there memorable experienced in their college journey, many activities and games that officers had set up just for them. About 400 new students in different courses have enjoyed in this program a lifetime memories that they will cherished.</span>
                                <button class="w-full items-end justiy-end text-end p-2 px-10">
                                    <a class="p-3 bg-[#D9D9D9] text-[12px]" href="#">Read more</a>
                                </button>
                            </div>
                            <div class="w-full h-[545px] flex flex-col  items-center text-center shadow-[0px_10px_20px_rgba(0,0,0,0.5)] rounded-[1px]">
                                <img src="assets/images/coted.webp" alt="post-image" class="w-full h-[200px] object-cover object-center">
                                <span class="w-full flex items-start gap-3 px-4 p-2 text-[14px] text-[#685F5F] max-sm:text-[10px]">
                                    <i class="bi bi-calendar-fill text-[12px] max-sm:text-[10px]"></i>
                                    <span>July 25,2025</span>
                                    <i class="bi bi-person-fill text-[15px] max-sm:text-[10px]"></i>
                                    <span>Published by CPSU-MPC</span>
                                </span>
                                <span class="px-4 items-left justify-left max-sm:text-[14px] text-left font-semibold">CPSU 2025 AQUINTANCE PARTY, a warm celebration for the new student’s in CPSU - MPC 2025</span>
                                <span class="p-2 py-4 px-4 text-center text-[14px] max-sm:text-[12px] leading-loose">Giving the new student’s there memorable experienced in their college journey, many activities and games that officers had set up just for them. About 400 new students in different courses have enjoyed in this program a lifetime memories that they will cherished.</span>
                                <button class="w-full items-end justiy-end text-end p-2 px-10">
                                    <a class="p-3 bg-[#D9D9D9] text-[12px]" href="#">Read more</a>
                                </button>
                            </div>
                           <div class="w-full h-[545px] flex flex-col  items-center text-center shadow-[0px_10px_20px_rgba(0,0,0,0.5)] rounded-[1px]">
                                <img src="assets/images/cssbg.jpg" alt="post-image" class="w-full h-[200px] object-cover object-center">
                                <span class="w-full flex items-start gap-3 px-4 p-2 text-[14px] text-[#685F5F] max-sm:text-[10px]">
                                    <i class="bi bi-calendar-fill text-[12px] max-sm:text-[10px]"></i>
                                    <span>July 25,2025</span>
                                    <i class="bi bi-person-fill text-[15px] max-sm:text-[10px]"></i>
                                    <span>Published by CPSU-MPC</span>
                                </span>
                                <span class="px-4 items-left justify-left max-sm:text-[14px] text-left font-semibold">CPSU 2025 AQUINTANCE PARTY, a warm celebration for the new student’s in CPSU - MPC 2025</span>
                                <span class="p-2 py-4 px-4 text-center text-[14px] max-sm:text-[12px] leading-loose">Giving the new student’s there memorable experienced in their college journey, many activities and games that officers had set up just for them. About 400 new students in different courses have enjoyed in this program a lifetime memories that they will cherished.</span>
                                <button class="w-full items-end justiy-end text-end p-2 px-10">
                                    <a class="p-3 bg-[#D9D9D9] text-[12px]" href="#">Read more</a>
                                </button>
                            </div>
                        </div>

                        <div class="sticky top-0 text-[#000000] w-[400px] h-full flex flex-col text-center gap-9 pl-5 max-md:pl-0">
                            <div class="w-full h-auto flex flex-col  items-center text-center rounded-[1px] pt-10 text-[#808080]">
                                <span class=" w-full flex flex-col justify-start items-start text-left p-1 gap-4">
                                    <span class="w-full flex justify-start font-semibold text-[17px] tracking-wide">SEARCH</span>
                                    <span class="w-full h-auto flex items-center">
                                        <input class="outline-none bg-gray-200 w-full items-center placeholder:pl-4 p-3" type="text" placeholder="Search here">
                                        <i class="bi bi-search p-3 px-6 text-[#fafafa] bg-[#16471C]"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="w-full h-auto flex flex-col items-center text-center rounded-[2px] text-[#000000] border border-gray-200 gap-2">
                                <div class="w-full h-auto flex items-center jusitify-center gap-2 py-5 px-5 border-b border-b-gray-200">
                                    <img src="assets/images/CPSU_logo.png" alt="cpsu_logo" class="w-[91px] h-[91px] object-contain object-center">
                                    <span class="text-[15px] text-left font-semibold text-[#565656] border-l-4 pl-5 border-[#1F5627]">CENTRAL PHILIPPINES STATE UNIVERSITY - MOISES PADILLA CAMPUS</span>
                                </div>
                                    <div class="w-full h-auto flex flex-col items-center text-center rounded-[2px] text-[#000000] px-5 pb-5">
                                        <span class="text-[24px] font-semibold text-[#565656] p-2 pt-5 w-full items-left text-left tracking-wide">QUICK LINKS</span>
                                        <div class="w-full h-auto flex flex-col items-left justify-left text-left px-4 pt-3">
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-mortarboard-fill text-[#24552A]"></i>
                                                <span>Courses Offered</span>
                                            </a>
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-cpu text-[#24552A]"></i>
                                                <span>Technology and Innovation</span>
                                            </a>
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-journal-bookmark-fill text-[#24552A]"></i>
                                                <span>Campus Library</span>
                                            </a>
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-send-fill text-[#24552A]"></i>
                                                <span>Webmail Access</span>
                                            </a>
                                        </div>
                                        <span class="text-[18px] font-semibold text-[#565656] p-2 pt-5 w-full items-left text-left tracking-wide">OUR GALLARY</span>
                                        <div class="w-full h-auto flex flex-wrap items-center justify-center text-center gap-2 p-2 py-5 px-1 pointer">
                                            <a href="#">
                                                <img src="assets/images/bsabbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/cssbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/coted.webp" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/bsabbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/coted.webp" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/bsabbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                        </div>
                                        <a href="./gallary.php" class="p-2 px-3 rounded-[3px] text-[13px] text-gray-200 font-semibold bg-[#24552A]">
                                            <span>See more</span>
                                        </a>
                                    </div>
                            </div>
                        </div>      
                    </div>
                        <div class="w-full h-auto flex items-center justify-center text-center py-5 gap-1 text-[#A39F9F]">
                            <button class="p-3 px-4 bg-[#EBEBEB] text-[15px] font-semibold flex items-center justify-center rounded-[5px]">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="bg-green-900 text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] font-semibold flex items-center justify-center rounded-[5px]">
                                1
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                2
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                3
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                4
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                5
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                6
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                7
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                8
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                9
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                10
                            </button>
                            <button class="hover:bg-green-900 hover:text-white max-md:hidden p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                ...
                            </button>
                            <button class="p-3 px-4 bg-[#EBEBEB] text-[15px] flex font-semibold items-center justify-center rounded-[5px]">
                                <i class="bi bi-chevron-right"></i> 
                            </button>
                        </div>
                </div> -->

<div class="w-full h-auto flex flex-wrap justify-center items-start bg-white p-2 py-10">
    <span class="w-full h-auto flex items-center justify-evenly text-center text-[#000000] gap-[25px]">
                        <span class="flex flex-col items-left justify-left text-left p-2 pl-4 border-l-4 border-l-[#104618]">
                            <span class="text-[24px] tracking-widest font-semibold">LATEST UPDATE</span>
                            <span class="text-[18px]">Check the latest updates, important reminders, and other activities</span>
                        </span>
                        <span class="max-md:hidden"></span>
                        <span class="max-md:hidden"></span>
                    </span>
    
<div class="w-[900px] h-auto flex justify-center items-center p-2">
     <!-- Left: News Cards -->
<div class="w-full flex flex-col justify-center p-2 gap-4">
<?php
include('../includes/config.php'); // DB connection

// Pagination setup
$limit = 9; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

// ✅ Check DB connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// ✅ Run safe query
$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM news");

if (!$result) {
    die("Error running query: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$totalRecords = $row['total'];
$totalPages = ceil($totalRecords / $limit);

// ✅ Fetch news
$query = "SELECT * FROM news ORDER BY created_at DESC LIMIT $start, $limit";
$newsResult = mysqli_query($conn, $query);

if (!$newsResult) {
    die("Error fetching news: " . mysqli_error($conn));
}
?>

<?php
if (mysqli_num_rows($newsResult) == 0) {
    echo "<p class='text-red-600'>No news found in the database.</p>";
}
?>

<div class="w-full h-auto flex flex-wrap justify-center text-center gap-2">
    <?php while ($news = mysqli_fetch_assoc($newsResult)) { ?>
        <div class="w-full h-auto flex flex-wrap justify-center items-center">
             <div class="w-auto h-auto flex flex-wrap items-center text-center shadow-lg rounded-[4px] py-5">
                <img src="../admin/uploads/<?php echo $news['image']; ?>" 
                     alt="post-image" 
                     class="w-full h-[500px] object-cover object-center">
                
                <span class="w-full flex items-start gap-3 font-bold p-4 px-5 text-[14px] text-[#685F5F]">
                    <i class="bi bi-calendar-fill"></i>
                    <span><?php echo date("F d, Y", strtotime($news['created_at'])); ?></span>
                    <i class="bi bi-person-fill"></i>
                    <span><?php echo $news['author']; ?></span>
                </span>
                
                <span class=" px-5 items-start text-[25px] text-left text-gray-700 font-semibold max-sm:text-[14px]">
                    <?php echo $news['title']; ?>
                </span>
                
                <span class="p-2 py-10 px-10 text-center font-semibold text-gray-700 text-[18px] max-sm:text-[12px] leading-tight italic">
                    <?php echo nl2br($news['content']); ?>
                </span>
                
                <button class="w-full text-end p-2 px-10">
                    <a class="p-3 bg-[#D9D9D9] text-[15px] font-semibold text-gray-800" 
                       href="news_detail.php?id=<?php echo $news['id']; ?>">Read more</a>
                </button>
            </div>
        </div>
    <?php } ?>
</div>

<div class="w-full flex justify-center items-center gap-2 py-5">
    <?php if ($page > 1) { ?>
        <a href="?page=<?php echo $page - 1; ?>" 
           class="p-3 px-4 bg-gray-200 rounded hover:bg-green-900 hover:text-white">
           <i class="bi bi-chevron-left"></i>
        </a>
    <?php } ?>

    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
        <a href="?page=<?php echo $i; ?>" 
           class="p-3 px-4 rounded <?php echo ($i == $page) ? 'bg-green-900 text-white' : 'bg-gray-200 hover:bg-green-900 hover:text-white'; ?>">
           <?php echo $i; ?>
        </a>
    <?php } ?>

    <?php if ($page < $totalPages) { ?>
        <a href="?page=<?php echo $page + 1; ?>" 
           class="p-3 px-4 bg-gray-200 rounded hover:bg-green-900 hover:text-white">
           <i class="bi bi-chevron-right"></i>
        </a>
    <?php } ?>
</div>
    </div>
   </div>

    <!-- Right: Sidebar -->
        <div class="sticky top-0 text-[#000000] w-[400px] h-full flex flex-col text-center gap-9 pl-5 max-md:pl-0">
                            <div class="w-full h-auto flex flex-col  items-center text-center rounded-[1px] pt-10 text-[#808080]">
                                <span class=" w-full flex flex-col justify-start items-start text-left p-1 gap-4">
                                    <span class="w-full flex justify-start font-semibold text-[17px] tracking-wide">SEARCH</span>
                                    <span class="w-full h-auto flex items-center">
                                        <input class="outline-none bg-gray-200 w-full items-center placeholder:pl-4 p-3" type="text" placeholder="Search here">
                                        <i class="bi bi-search p-3 px-6 text-[#fafafa] bg-[#16471C]"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="w-full h-auto flex flex-col items-center text-center rounded-[2px] text-[#000000] border border-gray-200 gap-2">
                                <div class="w-full h-auto flex items-center jusitify-center gap-2 py-5 px-5 border-b border-b-gray-200">
                                    <img src="assets/images/CPSU_logo.png" alt="cpsu_logo" class="w-[91px] h-[91px] object-contain object-center">
                                    <span class="text-[15px] text-left font-semibold text-[#565656] border-l-4 pl-5 border-[#1F5627]">CENTRAL PHILIPPINES STATE UNIVERSITY - MOISES PADILLA CAMPUS</span>
                                </div>
                                    <div class="w-full h-auto flex flex-col items-center text-center rounded-[2px] text-[#000000] px-5 pb-5">
                                        <span class="text-[24px] font-semibold text-[#565656] p-2 pt-5 w-full items-left text-left tracking-wide">QUICK LINKS</span>
                                        <div class="w-full h-auto flex flex-col items-left justify-left text-left px-4 pt-3">
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-mortarboard-fill text-[#24552A]"></i>
                                                <span>Courses Offered</span>
                                            </a>
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-cpu text-[#24552A]"></i>
                                                <span>Technology and Innovation</span>
                                            </a>
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-journal-bookmark-fill text-[#24552A]"></i>
                                                <span>Campus Library</span>
                                            </a>
                                            <a href="#" class="flex p-1 gap-2 text-[#565656] text-[14px] items-center font-semibold border-b border-b-gray-200 hover:translate-x-[-10px] transition-all duration-300 ease-in-out">
                                                <i class="bi bi-send-fill text-[#24552A]"></i>
                                                <span>Webmail Access</span>
                                            </a>
                                        </div>
                                        <span class="text-[18px] font-semibold text-[#565656] p-2 pt-5 w-full items-left text-left tracking-wide">OUR GALLARY</span>
                                        <div class="w-full h-auto flex flex-wrap items-center justify-center text-center gap-2 p-2 py-5 px-1 pointer">
                                            <a href="#">
                                                <img src="assets/images/bsabbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/cssbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/coted.webp" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/bsabbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/coted.webp" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                            <a href="#">
                                                <img src="assets/images/bsabbg.jpg" alt="gallery_image" class="w-[100px] h-[100px] object-cover object-center rounded-[2px]">
                                            </a>
                                        </div>
                                        <a href="./gallary.php" class="p-2 px-3 rounded-[3px] text-[13px] text-gray-200 font-semibold bg-[#24552A]">
                                            <span>See more</span>
                                        </a>
                                    </div>
                            </div>
                        </div>      
                    </div>


                <div class="w-full h-auto flex relative  flex-wrap items-center justify-evenly text-center p-5 bg-top bg-cover" style="background-image: url(assets/images/cssbg.jpg);">
                    <div class="absolute inset-0 bg-[#183517] bg-opacity-75"></div>
                    <span class="text-[#2EC357] z-10 flex flex-col p-5">
                        <span class="text-[64px] font-bold">3</span>
                        <span class="text-[20px] font-bold">PROGRAM OFFERED</span>
                    </span>
                    <span class="text-[#2EC357] z-10 flex flex-col p-5">
                        <span class="text-[64px] font-bold">1,500+</span>
                        <span class="text-[20px] font-bold">TOTAL OF STUDENTS</span>
                    </span>
                    <span class="text-[#2EC357] z-10 flex flex-col p-5">
                        <span class="text-[64px] font-bold">120+</span>
                        <span class="text-[20px] font-bold">ACHIEVEMENTS</span>
                    </span>
                    <span class="text-[#2EC357] z-10 flex flex-col p-5">
                        <span class="text-[64px] font-bold">#5</span>
                        <span class="text-[20px] font-bold">RANKING</span>
                    </span>
                </div>

                <div class="w-full h-auto flex flex-col justify-center items-center text-center bg-[#FAFAFA] p-3 gap-4 pt-10 pb-10">
                   <span class="flex items-center justify-center text-center gap-2 p-2 pt-5">
                        <img src="assets/images/leaves_one.png" alt="leaves_one" class="w-[88px] h-[75px] max-sm:w-[60px] h-[40px]">
                        <span class="border-b-4 border-b-[#656363] flex flex-col items-center justify-center text-center pb-2 max-sm:px-1 px-5 leading-none">
                            <img src="assets/images/crown.png" alt="crown" class="w-[135px] h-[90] object-cover">
                            <span class="text-[32px] max-md:text-[25px] text-[#656363] font-medium tracking-widest">HIGHLIGHTS</span>
                        </span>
                        <img src="assets/images/leaves.png" alt="leaves_two" class="w-[88px] h-[75px] max-sm:w-[60px] h-[40px]">
                    </span>
                    <div class="w-full h-auto flex flex-wrap justify-center items-center text-center gap-2 p-1">
                        <span class="w-[600px] h-[553px] max-sm:h-[300px] flex">
                            <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-cover object-center rounded-[4px]">
                        </span>
                        <div class="w-[600px] h-[553px] max-sm:h-[300px] flex flex-col justify-center items-center gap-1">
                                <div class="flex w-full h-1/2 gap-1">
                                    <div class="w-1/2 h-auto flex">
                                        <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-center object-cover rounded-[5px]">
                                    </div>
                                    <div class="w-1/2 h-auto flex">
                                        <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-center object-cover rounded-[5px]">
                                    </div>
                                </div>
                                <div class="flex w-full h-1/2 gap-1">
                                    <div class="w-1/2 h-auto bg-blue-500 flex">
                                        <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-center object-cover rounded-[5px]">
                                    </div>
                                    <div class="w-1/2 h-auto bg-blue-500 flex">
                                        <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-center object-cover rounded-[5px]">
                                    </div>
                                </div>
                        </div>
                            <div class="w-full h-auto flex justify-center items-center text-center p-2">
                                <span class="w-[60%] max-sm:w-full max-sm:text-justify text-[16px] text-[#524C4C]">The College of Computer Studies (CCS) at CPSU Moises Padilla offers innovative and industry-relevant programs that prepare students for careers in IT and computing. With hands-on training in programming, web development, networking, and system analysis, CCS equips future professionals with the technical skills and critical thinking needed in today’s digital world.</span>
                            </div>
                    </div>
                            <div class="w-full h-auto flex flex-wrap justify-center items-center text-center gap-2 py-5">
                                <span class="w-[590px] h-[302px] max-sm:h-[300px] flex">
                                    <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-cover object-center rounded-[4px]">
                                </span>
                                <span class="w-[590px] h-[302px] max-sm:h-[300px] flex flex-col p-1 gap-2">
                                    <span class="text-left px-5 max-sm:px-1 text-[25px] max-sm:text-[18px] tracking-wide font-semibold text-[#5A5C5B]">
                                        <span class="text-[#2D7E44]">CENTRAL PHILIPPINES UNIVERSITY</span>  MOISES PADILLA CAMPUS CLINIC 
                                    </span>
                                    <span class="text-[#5A5C5B] text-[16px] text-left max-sm:px-1 px-5 max-sm:text-[14px]">The College of Computer Studies (CCS) at CPSU Moises Padilla offers innovative and industry-relevant programs that prepare students for careers in IT and computing. With hands-on training in programming, web development, networking, and system analysis, CCS equips future professionals with the technical skills and critical thinking needed in today’s digital world.</span>
                                </span>
                            </div>
                                    <div class="w-full h-auto flex flex-wrap justify-center items-center text-center gap-2">
                                        <span class="w-[590px] h-[302px] max-sm:h-[300px] flex flex-col p-1 gap-2">
                                            <span class="text-center px-5 text-[25px] max-sm:text-[18px] tracking-wide font-semibold text-[#5A5C5B]">
                                                <span class="text-[#2D7E44]">CENTRAL PHILIPPINES UNIVERSITY</span>  MOISES PADILLA CAMPUS CLINIC 
                                            </span>
                                            <span class="text-[#5A5C5B] text-[16px] text-justify max-sm:px-2 px-5 max-sm:text-[14px]">The College of Computer Studies (CCS) at CPSU Moises Padilla offers innovative and industry-relevant programs that prepare students for careers in IT and computing. With hands-on training in programming, web development, networking, and system analysis, CCS equips future professionals with the technical skills and critical thinking needed in today’s digital world.</span>
                                        </span>
                                        <span class="w-[590px] h-[302px] max-sm:h-[300px] flex">
                                            <img src="assets/images/cssbg.jpg" alt="image_one" class="w-full h-full object-cover object-center rounded-[4px]">
                                        </span>
                                    </div>
                                    <div class="w-full h-auto flex flex-col justify-center items-center text-left p-2 py-4 pt-10">
                                        <span class="w-[60%] max-sm:w-full italic max-sm:text-justify text-[16px] text-[#5A5C5B]">CPSU is committed to produce competent graduates who can generate and extend leading technologies under the areas of this community being able to give a high quality education and best performing students in this country. Also improving everyday and leading the ennovation and give results to showcase what cpsu organization can do.</span>
                                    </div>
                                        <div class="w-[60%] flex justify-end px-4 ">
                                            <span class="text-[16px] font-semibold text-gray-500 tracking-widest italic">-President of Central Philippines State University “</span>
                                        </div>
                </div>

                        <div class="w-full h-auto flex flex-col justify-center items-center text-center p-1 py-10 bg-[#FDFFFF]">
                            <span class="w-full h-auto flex justify-evenly items-center text-center p-2 py-10">
                                <span class="flex items-center gap-5">
                                    <img src="assets/images/CPSU_logo.png" alt="cpsu_logo" class="w-[100px] h-[100px] object-contain">
                                    <span class="flex flex-col text-left leading-none tracking-widest border-l-4 border-[#104618] px-5 py-3">
                                        <span class="text-[25px] max-sm:text-[18px] text-[#656363] font-semibold">CENTRAL PHILIPPINES STATE UNIVERSITY <br> MOISES PADILLA CAMPUS</span>
                                        <span class="text-[16px] pt-2 font-semibold max-sm:text-[12px] text-[#656363]">MISSION, VISION, STRATEGIC GOALS, OBJECTIVES</span>
                                    </span>
                                </span>
                                <span></span>
                                <span></span>
                            </span>

                            <div class="w-full h-auto flex flex-wrap items-center justify-center gap-2 px-10 max-md:px-2">
                                <div class="relative w-[600px] h-[753px] flex flex-col bg-contain bg-no-repeat bg-center rounded-[8px] pt-5 gap-8 justify-center" style="background-image: url(assets/images/CPSU_logo.png);">
                                    <div class="absolute inset-0 bg-gradient-to-b from-green-900 to-[#D4FF53] opacity-95 rounded-[8px]"></div>
                                    <span class="flex text-center justify-center text-green-900 z-10 text-[48px] font-bold tracking-wide bg-[#EBDC36]">MISSION</span>
                                    <span class="text-[#fafafa] z-10 text-[25px] max-md:text-[18px] px-10 tracking-wide leading-[25px]">CPSU as the leading technology - driven multi-disciplinary university by 2030</span>
                                        <div class="z-10 gap-[60px] max-md:gap-10 flex flex-col">
                                            <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANANAW
                                                <span class="text-[15px] font-normal">(FILIPINO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal max-md:text-[18px] flex leading-none">Ang CPSU bilang nangungunang unibersidad na pinapatakbo ng teknolohiya at multi-disiplina sa taong 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PALANAN-AWON
                                                <span class="text-[15px] font-normal">(HILIGAYNON)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[18px]">CPSU bilang nagapanguna nga unibersidad nga ginatuytuyan sang teknolohiya sa tuig 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide pb-10 max-sm:pb-0 max-md:pb-5">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANAN-AWON
                                                <span class="text-[15px] font-normal">(CEBUANO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[19px]">Ang CPSU isip nanguna nga teknolohiya - gimaneho sa multi-disciplinary nga unibersidad sa 2030</span>
                                    </span>
                                        </div>
                                    <span class="flex text-center justify-center p-1 text-white z-10 text-[11px] tracking-wide bg-[#3E523C] rounded-b">@2023 Central Philippines State university</span>
                                </div>

                                <div class="relative w-[600px] h-[753px] flex flex-col bg-contain bg-no-repeat bg-center rounded-[8px] pt-5 gap-8 justify-center" style="background-image: url(assets/images/CPSU_logo.png);">
                                     <div class="absolute inset-0 bg-gradient-to-b from-green-900 to-[#D4FF53] opacity-95 rounded-[8px]"></div>
                                    <span class="flex text-center justify-center text-green-900 z-10 text-[48px] font-bold tracking-wide bg-[#EBDC36]">MISSION</span>
                                    <span class="text-[#fafafa] z-10 text-[25px] max-md:text-[18px] px-10 tracking-wide leading-[25px]">CPSU as the leading technology - driven multi-disciplinary university by 2030</span>
                                        <div class="z-10 gap-[60px] max-md:gap-10 flex flex-col">
                                            <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANANAW
                                                <span class="text-[15px] font-normal">(FILIPINO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal max-md:text-[18px] flex leading-none">Ang CPSU bilang nangungunang unibersidad na pinapatakbo ng teknolohiya at multi-disiplina sa taong 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PALANAN-AWON
                                                <span class="text-[15px] font-normal">(HILIGAYNON)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[18px]">CPSU bilang nagapanguna nga unibersidad nga ginatuytuyan sang teknolohiya sa tuig 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide pb-10 max-sm:pb-0 max-md:pb-5">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANAN-AWON
                                                <span class="text-[15px] font-normal">(CEBUANO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[19px]">Ang CPSU isip nanguna nga teknolohiya - gimaneho sa multi-disciplinary nga unibersidad sa 2030</span>
                                    </span>
                                        </div>
                                    <span class="flex text-center justify-center p-1 text-white z-10 text-[11px] tracking-wide bg-[#3E523C] rounded-b">@2023 Central Philippines State university</span>
                                </div>
                                <div class="relative w-[600px] h-[753px] flex flex-col bg-contain bg-no-repeat bg-center rounded-[8px] pt-5 gap-8 justify-center" style="background-image: url(assets/images/CPSU_logo.png);">
                                     <div class="absolute inset-0 bg-gradient-to-b from-green-900 to-[#D4FF53] opacity-95 rounded-[8px]"></div>
                                    <span class="flex text-center justify-center text-green-900 z-10 text-[48px] font-bold tracking-wide bg-[#EBDC36]">MISSION</span>
                                    <span class="text-[#fafafa] z-10 text-[25px] max-md:text-[18px] px-10 tracking-wide leading-[25px]">CPSU as the leading technology - driven multi-disciplinary university by 2030</span>
                                        <div class="z-10 gap-[60px] max-md:gap-10 flex flex-col">
                                            <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANANAW
                                                <span class="text-[15px] font-normal">(FILIPINO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal max-md:text-[18px] flex leading-none">Ang CPSU bilang nangungunang unibersidad na pinapatakbo ng teknolohiya at multi-disiplina sa taong 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PALANAN-AWON
                                                <span class="text-[15px] font-normal">(HILIGAYNON)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[18px]">CPSU bilang nagapanguna nga unibersidad nga ginatuytuyan sang teknolohiya sa tuig 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide pb-10 max-sm:pb-0 max-md:pb-5">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANAN-AWON
                                                <span class="text-[15px] font-normal">(CEBUANO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[19px]">Ang CPSU isip nanguna nga teknolohiya - gimaneho sa multi-disciplinary nga unibersidad sa 2030</span>
                                    </span>
                                        </div>
                                    <span class="flex text-center justify-center p-1 text-white z-10 text-[11px] tracking-wide bg-[#3E523C] rounded-b">@2023 Central Philippines State university</span>
                                </div>
                                <div class="relative w-[600px] h-[753px] flex flex-col bg-contain bg-no-repeat bg-center rounded-[8px] pt-5 gap-8 justify-center" style="background-image: url(assets/images/CPSU_logo.png);">
                                     <div class="absolute inset-0 bg-gradient-to-b from-green-900 to-[#D4FF53] opacity-95 rounded-[8px]"></div>
                                    <span class="flex text-center justify-center text-green-900 z-10 text-[48px] font-bold tracking-wide bg-[#EBDC36]">MISSION</span>
                                    <span class="text-[#fafafa] z-10 text-[25px] max-md:text-[18px] px-10 tracking-wide leading-[25px]">CPSU as the leading technology - driven multi-disciplinary university by 2030</span>
                                        <div class="z-10 gap-[60px] max-md:gap-10 flex flex-col">
                                            <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANANAW
                                                <span class="text-[15px] font-normal">(FILIPINO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal max-md:text-[18px] flex leading-none">Ang CPSU bilang nangungunang unibersidad na pinapatakbo ng teknolohiya at multi-disiplina sa taong 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PALANAN-AWON
                                                <span class="text-[15px] font-normal">(HILIGAYNON)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[18px]">CPSU bilang nagapanguna nga unibersidad nga ginatuytuyan sang teknolohiya sa tuig 2030</span>
                                    </span>
                                    <span class="flex flex-col z-10 text-[20px] text-[#fafafa] tracking-wide pb-10 max-sm:pb-0 max-md:pb-5">
                                            <span class="flex flex-col leading-none font-semibold">
                                                PANAN-AWON
                                                <span class="text-[15px] font-normal">(CEBUANO)</span>
                                            </span>
                                            <span class="px-10 max-md:px-5 text-[25px] text-normal flex leading-none max-md:text-[19px]">Ang CPSU isip nanguna nga teknolohiya - gimaneho sa multi-disciplinary nga unibersidad sa 2030</span>
                                    </span>
                                        </div>
                                    <span class="flex text-center justify-center p-1 text-white z-10 text-[11px] tracking-wide bg-[#3E523C] rounded-b">@2023 Central Philippines State university</span>
                                </div>
                            </div>
                                    <div class="w-[80%] h-auto flex justify-center text-[#4F4E4E] items-center text-center p-5">
                                       <span class="max-md:text-[12px]">
                                         <span class="font-bold">Central Philippines State University (CPSU)</span> envisions becoming a center of excellence attuned to global diversity by producing responsive and skilled graduates. Its mission focuses on delivering quality instruction, research, extension, and production programs that empower communities and promote sustainable development. To achieve this, CPSU pursues strategic goals such as enhancing academic quality, fostering research and innovation, strengthening community engagement, promoting environmental sustainability, and advancing digital transformation. The university’s objectives include providing inclusive education, expanding lifelong learning, supporting economic access for underserved students, boosting research productivity, and cultivating leadership across disciplines.
                                       </span>
                                    </div>
                        </div>

                            <div class="w-full h-auto flex justify-center items-center p-1 bg-[#383C38] p-5 py-10">
                                <div class="w-[1200px] h-[600px] max-md:h-[400px]" id="map">
                                </div>
                            </div>

                            <div class="w-full h-auto flex justify-center items-center text-left">
                               <div class="relative w-full h-auto flex flex-wrap justify-center text-center gap-5 max-sm:px-10 py-10 bg-top bg-cover" style="background-image: url(assets/images/cssbg.jpg);">
                                    <div class="absolute inset-0 bg-green-900 opacity-95"></div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] text-left font-bold text-gray-400 p-1 border-b-2 border-gray-400">QUICK LINKS</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <a href="#4" class="flex gap-1 hover:translate-x-[-2%] duration-300">
                                                >
                                                Courses Offered
                                            </>
                                            <a href="#" class="flex gap-2 hover:translate-x-[-2%] duration-300">
                                                >
                                                Campus Library
                                            </a>
                                            <a href="#" class="flex hover:translate-x-[-2%] duration-300">
                                                >
                                                Technology and Innovation
                                            </a>
                                            <a href="#" class="flex hover:translate-x-[-2%] duration-300">
                                                >
                                                Webmail Access
                                            </a>
                                       </span>
                                    </div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] text-left font-bold text-gray-400 p-1 border-b-2 border-gray-400">NAVIGATIONS</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <a href="#" class="flex gap-1 hover:translate-x-[-2%] duration-300">
                                                >
                                                Home
                                            </a>
                                            <a href="#" class="flex gap-2 hover:translate-x-[-2%] duration-300">
                                                >
                                                About us
                                            </a>
                                            <a href="#" class="flex hover:translate-x-[-2%] duration-300">
                                                >
                                                Academics
                                            </a>
                                            <a href="#" class="flex hover:translate-x-[-2%] duration-300">
                                                >
                                                Administration
                                            </a>
                                       </span>
                                    </div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] text-left font-bold text-gray-400 p-1 border-b-2 border-gray-400">HELP CENTER</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <a href="#" class="flex gap-1 hover:translate-x-[-2%] duration-300">
                                                >
                                                Report
                                            </a>
                                            <a href="#" class="flex gap-2 hover:translate-x-[-2%] duration-300">
                                                >
                                                FAQ's
                                            </a>
                                            <a href="#" class="flex hover:translate-x-[-2%] duration-300">
                                                >
                                                Security & Policy
                                            </a>
                                            <span></span>
                                       </span>
                                    </div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] font-bold text-gray-400 text-left p-1 border-b-2 border-gray-400">CONTACT US</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <a href="#" class="flex gap-2 items-center hover:translate-x-[-2%] duration-300">
                                                <span class="font-bold text-[15px]">f</span>
                                                CPSU Moises Padilla
                                            </a>
                                            <a href="#" class="flex gap-2 items-center hover:translate-x-[-2%] duration-300">
                                                <span class="font-bold text-[15px]">f</span>
                                                CPSU-MPC Web Admin
                                            </a> 
                                            <a href="#" class="flex gap-2 items-center hover:translate-x-[-2%] duration-300">
                                                <i class="bi bi-envelope-fill text-[12px]"></i>
                                                cpsu_mpc@cpsu.edu.ph
                                            </a>
                                            <a href="#" class="flex gap-2 items-center hover:translate-x-[-2%] duration-300">
                                                <i class="bi bi-telephone-fill text-[12px]"></i>
                                                +6399-3117-4271
                                            </a>
                                       </span>
                                    </div>
                               </div> 
                            </div>

                                            <div class="w-full h-auto flex justify-center items-center text-center p-5 max-md:text-[10px] text-[16px] text-[#ADADAD] bg-[#1A1A1A]">
                                                <span>@2023 Central Philippines State University - Moises Padilla Campus || Maintained by Management Information System Office (MISO).</span>
                                            </div>

    <script>
        function toggleMenu() {
            const menutwo = document.querySelector('.menu');
            menutwo.classList.toggle('active');
        }

        window.addEventListener('click', (e) => {
            if (!document.querySelector('.hamburger').contains(e.target) && !document.querySelector('.menu').contains(e.target)) {
                document.querySelector('.menu').classList.remove('active');
            }
        })

        const button = document.getElementById('dropdownButton');
        const menu = document.getElementById('dropdownMenu');

        button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        });

        window.addEventListener('click', (e) => {
        if (!button.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
        }
        });
        const dropdownBtn = document.getElementById('dropdownButtontwo');
        const dropdownMenu = document.getElementById('dropdownMenutwo');

        dropdownBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
        });
        const map = L.map('map').setView([10.2774, 123.06656], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([10.2774, 123.06656]).addTo(map)
        .bindPopup('CPSU Moises Padilla Campus')
        .openPopup();
    </script>
</body>
</html>