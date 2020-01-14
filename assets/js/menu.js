/*hide/show menu function*/
			let sideMenu = document.getElementById('sideMenu');

			function clickSlide() {
				if (sideMenu.style.transform === 'translateX(300px)') {
						sideMenu.style.transform = 'translateX(0)';
				} else {
						sideMenu.style.transform = 'translateX(300px)';
				}
			}

			let menuIcon = document.getElementById('menuIcon');
			menuIcon.addEventListener("click", clickSlide, false);

            /*hide/show on scroll: logo paced in menu & menu*/
			let prevScrollPos = window.pageYOffset;
			let menuLogo = document.getElementById('menuLogo');
			let headerHeight = document.getElementById('header').offsetHeight;

			window.onscroll = function() {
				let currentScrollPos = window.pageYOffset;
				if (prevScrollPos < currentScrollPos) {
					sideMenu.style.transform = 'translateX(300px)';
				}

				if(currentScrollPos < headerHeight){
					menuLogo.style.opacity = '0';
					menuLogo.style.cursor = 'default';
				} else {
					menuLogo.style.opacity = '1';
					menuLogo.style.cursor = 'pointer';
				}

				prevScrollPos = currentScrollPos;
			}
