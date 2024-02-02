<script>
   Dropzone.options.myAwesomeDropzone = { // camelized version of the `id`
       paramName: "image", // The name that will be used to transfer the file
       maxFilesize: 2, // MB
       accept: function(file, done) {
           if (file.name == "justinbieber.jpg") {
               done("Naha, you don't.");
           } else {
               done();
           }
       }
   };
</script>