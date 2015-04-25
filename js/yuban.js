/**
 * Created by Vilkaz on 01.11.2014.
 */


function readMaster(string) {
    var data = JSON.parse(string);
    console.log(data);
    switch (data.type) {
        case ('auth'):
            switch (data.status) {
                case ('ok'):
                    switch (data.msg) {
                        case('true'):
                            logedId();
                            break;
                        case('false'):
                            initNotLogedIn();
                            break;
                    }

            }
    }
}

function askMaster(msg) {
    $.post('master.php', msg, function (data) {
        readMaster(data);
    })
}


//region Sidebar

function works() {
    alert('works');
}


function init() {
    askMaster({get: 'auth'});
    askMaster({get: 'language'});
}

function initNotLogedIn() {
    loadIntocontent('content', 'content/php/de/home.php');
    loadIntocontent('sidebar', 'php/de/sidebar-login.php');
    $('#createNewUser').bind('click', function () {
        works();
    });
}

function logedId() {
    loadIntocontent('content', 'php/de/home.php');
    loadIntocontent('sidebar', 'php/de/sidebar.php')
};


function loadIntocontent(div, file) {
    $('#' + div).load(file);
}
//endregion sidebar

