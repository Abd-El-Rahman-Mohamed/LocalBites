const darkModeToggle = document.querySelector('.dark-mode-toggle');
        const body = document.body;
        const dishesSection = document.querySelector('#dishes');
        const menuSection = document.querySelector('#menu');
        const orderSection = document.querySelector('#order');
        const darkModeKey = 'darkMode';
        const toggleIcon = darkModeToggle.querySelector('i'); // Select the icon

        function setTheme(theme) {
            if (theme === 'dark') {
                body.classList.add('dark');
                dishesSection.classList.add('dark');
		menuSection.classList.add('dark');
		orderSection.classList.add('dark');
                localStorage.setItem(darkModeKey, 'dark');
                toggleIcon.classList.remove('fa-moon'); // Change to sun
                toggleIcon.classList.add('fa-sun');
            } else {
                body.classList.remove('dark');
                dishesSection.classList.remove('dark');
		menuSection.classList.remove('dark');
		orderSection.classList.remove('dark');
                localStorage.setItem(darkModeKey, 'light');
                toggleIcon.classList.remove('fa-sun'); // Change to moon
                toggleIcon.classList.add('fa-moon');
            }
        }

        const storedTheme = localStorage.getItem(darkModeKey);
        if (storedTheme) {
            setTheme(storedTheme);
        } else {
          // Ensure the correct icon is displayed on initial load if no theme is stored
          setTheme('light'); // Set default to light if no theme is stored
        }

        darkModeToggle.addEventListener('click', () => {
            const currentTheme = localStorage.getItem(darkModeKey);
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
        });
