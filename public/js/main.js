$(document).ready(function() {
    //build breadcrumb and nav bar active
    addMenuActive();
});

function addMenuActive(){
    //check if it is an index page
    var path = window.location.pathname;
    var lastpathchar = path.substr(path.length-1);
    
    if ( lastpathchar === '/' ){
        // Index (home) page
        $('#home').addClass('active');     
    } else {
        //add active to the navbar
        //if not index page, check for the page
        $("nav [href]").each(function() {
            if (this.href === window.location.href) {
                $(this).closest('li').addClass('active');

                //add to active to parent link
                if($(this).closest('ul').hasClass('dropdown-menu')){
                    $(this).closest('ul').closest('li').addClass('active');
                }
            }
        });       
    }
}



