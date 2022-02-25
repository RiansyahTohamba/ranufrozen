var checkboxes = document.querySelectorAll("input[type = 'checkbox']");

function checkAll(myCheckbox){
    if(myCheckbox.checked == true){
        checkboxes.forEach(function(checkbox){
            checkbox.checked = true;
        });
    } else {
        checkboxes.forEach(function(checkbox){
            checkbox.checked = false;
        });
    }
    // bagaimana cara console.log?
    console.log(checkboxes)
}


// I have one 1 correction for this code : 

// in the if condition use 'checkboxes[0]' instead of 'myCheckbox'

// this will work on each and every platform