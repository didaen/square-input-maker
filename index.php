<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="js\tinymce\plugins\tiny_mce_wiris/integration/WIRISplugins.js"></script>
    <script src="script.js"></script>

    <!-- TinyMCE Offline -->
    <script src="js\tinymce\tinymce.min.js"></script>

    
    <link rel="stylesheet" href="style.css">
    <title>Square Input Maker</title>
  </head>
  <body>
    <h1>Square Input Maker</h1>
    
    
    <!--
      Adding the `tinymce-editor` element with various options set as attributes.
    -->
    <tinymce-editor
      api-key="no-api-key"
      height="500"
      menubar="false"
      plugins="advlist autolink lists link image charmap preview anchor
        searchreplace visualblocks code fullscreen
        insertdatetime media table code help wordcount tiny_mce_wiris"
      toolbar="undo redo | blocks | bold italic backcolor |
        alignleft aligncenter alignright alignjustify |
        bullist numlist outdent indent | removeformat | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry help"
      content_style="body
      {
        font-family:Helvetica,Arial,sans-serif;
        font-size:14px
      }"
      >

      <!-- Adding some initial editor content -->
      &lt;p&gt;Welcome to the TinyMCE Web Component example!&lt;/p&gt;

    </tinymce-editor>
    
    <!--
      Sourcing the `tinymce-webcomponent` from jsDelivr,
      which sources TinyMCE from the Tiny Cloud.
    -->
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent@2/dist/tinymce-webcomponent.min.js"></script>

    
</body>
</html>