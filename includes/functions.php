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