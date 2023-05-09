// input : persamaan latex
// output : ukuran grid-template-columns dan grid-template-rows

// Gimana caranya bikin masukan persamaan latex tuh??
// Apa gak persamaannya ditampilin dulu baru dihitung grid template-nya??
tinymce.init({
    selector: 'textarea',  // change this value according to your HTML
    menu: {
      happy: { title: 'Happy', items: 'code' }
    },
    external_plugins: { tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js' },
    menubar: 'happy'  // adds happy to the menu bar
  });