import './bootstrap';

import 'baguettebox.js/dist/baguetteBox.min.css';
import baguetteBox from 'baguettebox.js';

document.addEventListener('DOMContentLoaded', () => {
  baguetteBox.run('.gallery', {
    captions: false,  
    buttons: 'auto',
    async: true,   
  });
});
