// Upload image Preview
let loadFile = function(event,previewClass) {
    var output = document.getElementById(previewClass);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
