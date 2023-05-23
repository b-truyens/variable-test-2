import './bootstrap';

import Alpine from 'alpinejs';
import AlpineFloatingUI from '@awcodes/alpine-floating-ui';
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm';
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm';
import focus from '@alpinejs/focus';
import('preline');

window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.plugin(AlpineFloatingUI);
Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(NotificationsAlpinePlugin);
Alpine.start();


function global() {
    return {
      isMobileMenuOpen: false,
      isDarkMode: false,
      themeInit() {
        if (
          localStorage.theme === "dark" ||
          (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
          localStorage.theme = "dark";
          document.documentElement.classList.add("dark");
          this.isDarkMode = true;
        } else {
          localStorage.theme = "light";
          document.documentElement.classList.remove("dark");
          this.isDarkMode = false;
        }
      },
      themeSwitch() {
        if (localStorage.theme === "dark") {
          localStorage.theme = "light";
          document.documentElement.classList.remove("dark");
          this.isDarkMode = false;
        } else {
          localStorage.theme = "dark";
          document.documentElement.classList.add("dark");
          this.isDarkMode = true;
        }
      },
    };
  }