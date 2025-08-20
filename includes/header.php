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
        <a href="#" class="outline-none flex items-center justify-center text-center gap-2 pointer pl-5 max-md:pl-3 border-l pointer border-l-[#FCFCFC]">
            <i class="bi bi-wifi"></i>
            <span class="mx-md:hidden">Student Wifi-Portal</span>
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
                            <li><a href="#key-officials" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Key Officials</a></li>
                            <li><a href="#program-head" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Program Head</a></li>
                            <li><a href="#faculty" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Faculty</a></li>
                            <li><a href="#administrative-functions" class="block px-4 py-2 hover:bg-green-900 hover:text-white">Administrative Functions</a></li>
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
                                    <a href="#programs" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Program Offers</a>
                                    <a href="#admission" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Admission</a>
                                    </div>
                                </div>
                                    <div class="relative inline-block text-center items-center justify-center">
                                        <button id="dropdownButtontwo" class="bg-white text-green-900 hover:text-white w-full h-auto p-2 rounded-[12px] hover:bg-green-900 gap-2 flex text-center items-center justify-center">
                                            ADMINISTRATION
                                            <i class="bi bi-caret-down-fill"></i>
                                        </button>
                                        <div id="dropdownMenutwo" class="z-10 absolute mt-2 w-full bg-white border py-2 border-gray-200 rounded-[12px] shadow-lg hidden">
                                            <a href="#key-officials" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Key Official</a>
                                            <a href="#program-head" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Program Head</a>
                                            <a href="#faculty" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Faculty</a>
                                            <a href="#administrative-function" class="block px-4 py-2 text-gray-700 hover:text-white hover:bg-green-900">Administrative Functions</a>
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