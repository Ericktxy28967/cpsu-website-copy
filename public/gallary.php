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
                    <span class="text-[16px] font-semibold">CENTRAL PHILIPPINES STATE UNIVERSITY</span>
                    <span class="text-[12px] font-semibold">MOISES PADILLA CAMPUS</span>
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
                            <li><a href="./academics/program-offers.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Program Offers</a></li>
                            <li><a href="./academics/admission.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Admission</a></li>
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
                            <li><a href="./administration/key-officials.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Key Officials</a></li>
                            <li><a href="./administration/program-heads.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Program Head</a></li>
                            <li><a href="./administration/faculty.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Faculty</a></li>
                            <li><a href="./administration/administrative-functions.php" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Administrative Functions</a></li>
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

        <div class="w-full h-auto flex flex-col justify-center items-center bg-white p-2 py-10">
           <span class="flex items-center justify-center text-center gap-2 p-2 pb-5 pt-5">
                    <img src="./assets/images/leaves_one.png" alt="leaves_one" class="w-[88px] h-[75px] max-sm:w-[60px] h-[40px]">
                        <span class="border-b-4 border-b-[#656363] flex flex-col items-center justify-center text-center pb-2 max-sm:px-1 px-5 leading-none">
                            <img src="./assets/images/crown.png" alt="crown" class="w-[135px] h-[90] object-cover">
                            <span class="text-[32px] max-md:text-[25px] text-[#656363] font-medium tracking-widest">GALLARY</span>
                            <span class="text-[15px] font-bold text-[#656363] max-md:text-[11px]">CENTRAL PHILIPPINES STATE UNIVERSITY MOISES PADILLA CAMPUS</span>
                        </span>
                    <img src="./assets/images/leaves.png" alt="leaves_two" class="w-[88px] h-[75px] max-sm:w-[60px] h-[40px]">
             </span>
             <div class="flex flex-wrap w-full h-auto justify-center items-center gap-2 text-center">
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
                    <div class="w-[300px] h-[300px] flex bg-green-900">
                        <img src="" alt="images" class="w-full h-auto object-center object-cover">
                    </div>
             </div>
        </div>

            <div class="w-full h-auto flex justify-center items-center text-left">
                               <div class="relative w-full h-auto flex flex-wrap justify-center text-center gap-5 max-sm:px-10 py-10 bg-top bg-cover" style="background-image: url(assets/images/cssbg.jpg);">
                                    <div class="absolute inset-0 bg-green-900 opacity-95"></div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] text-left font-bold text-gray-400 p-1 border-b-2 border-gray-400">QUICK LINKS</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <span class="flex gap-1">
                                                >
                                                Courses Offered
                                            </span>
                                            <span class="flex gap-2">
                                                >
                                                Campus Library
                                            </span>
                                            <span class="flex">
                                                >
                                                Technology and Innovation
                                            </span>
                                            <span class="flex">
                                                >
                                                Webmail Access
                                            </span>
                                       </span>
                                    </div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] text-left font-bold text-gray-400 p-1 border-b-2 border-gray-400">NAVIGATIONS</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <span class="flex gap-1">
                                                >
                                                Home
                                            </span>
                                            <span class="flex gap-2">
                                                >
                                                About us
                                            </span>
                                            <span class="flex">
                                                >
                                                Academics
                                            </span>
                                            <span class="flex">
                                                >
                                                Administration
                                            </span>
                                       </span>
                                    </div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] text-left font-bold text-gray-400 p-1 border-b-2 border-gray-400">HELP CENTER</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <span class="flex gap-1">
                                                >
                                                Report
                                            </span>
                                            <span class="flex gap-2">
                                                >
                                                FAQ's
                                            </span>
                                            <span class="flex">
                                                >
                                                Security & Policy
                                            </span>
                                            <span></span>
                                       </span>
                                    </div>
                                    <div class="flex z-10 w-[400px] h-auto flex flex-col p-1">
                                       <span class="text-[16px] font-bold text-gray-400 text-left p-1 border-b-2 border-gray-400">CONTACT US</span>
                                       <span class="flex flex-col text-[#A2A2A2] text-[13px] font-bold pt-5 gap-1">
                                            <span class="flex gap-2 items-center">
                                                <span class="font-bold text-[15px]">f</span>
                                                CPSU Moises Padilla
                                            </span>
                                            <span class="flex gap-2 items-center">
                                                <span class="font-bold text-[15px]">f</span>
                                                CPSU-MPC Web Admin
                                            </span>
                                            <span class="flex gap-2 items-center">
                                                <i class="bi bi-envelope-fill text-[12px]"></i>
                                                cpsu_mpc@cpsu.edu.ph
                                            </span>
                                            <span class="flex gap-2 items-center">
                                                <i class="bi bi-telephone-fill text-[12px]"></i>
                                                cpsu_mpc@cpsu.edu.ph
                                            </span>
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
    </script>
</body>
</html>