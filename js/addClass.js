function isMobile() {
    return (
        ( navigator.userAgent.match( /Android/i ) ) ||
        ( navigator.userAgent.match( /webOS/i ) ) ||
        ( navigator.userAgent.match( /iPhone/i ) ) ||
        ( navigator.userAgent.match( /iPod/i ) ) ||
        ( navigator.userAgent.match( /iPad/i ) ) ||
        ( navigator.userAgent.match( /BlackBerry/i ) )
    );
}

function addClasses( elements, classToAdd ) {
    for ( var i = 0 ; i < elements.length ; i++ ) {
        elements[ i ].className += classeToAdd ;
    }
}

var teamInfoDivs = document.getElementsByClassName( 'team-info' )
var clientTexts = document.getElementsByClassName( 'client-text' )

if ( isMobile ) {
    addClasses( clientTexts, 'fs-10' ) ;
    addClasses( teamInfoDivs, 'mt-1' ) ;
}