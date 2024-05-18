/**
 * File utilties.js.
 *
 * Provides utility functions in JavaScript
 */

const currentYear = () => {
  const date = new Date();
  if (date) {
    const year = date.getFullYear();
    if (year) {
      const element = document.getElementById("site-copyright-year");
      if (element) {
        element.innerText = year;
      }
    }
  }
};
