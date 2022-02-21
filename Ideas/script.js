// This file has had its indentation changed to 4 spaces, ignore this change
// it is just something my editor does automatically for js files
// use whatever indentation you like

window.onscroll = function() { handlePageScroll() };

// It is often tempting to shorten variable names like this and to be honest in this case 
// i would likely use h also but its definatly a smell
var windowHeight = window.innerHeight;

// The name myFunction is meaningless
/**
 * Fade in/out the different sections of content based on the scroll position of the page
 *
 * @returns void
 */
function handlePageScroll() {
    // if lines are getting longer because of the more descriptive variable names then you can always break them up
    if (document.body.scrollTop > 0 * windowHeight
        || document.documentElement.scrollTop > 0 * windowHeight) {
        document.getElementById("about-me").className = "fade-show";
    } else if (document.body.scrollTop < 0 * windowHeight
        || document.documentElement.scrollTop < 0 * windowHeight) {
        document.getElementById("about-me").className = "fade-hide";
    }

    // now persaonally i am not a fan of this method of splitting up if statements i did it this way so i could make this point
    // if you are working for a company it in probable that there will be a style guide for how to do things like this
    // for now just do whatever you find most readable, consistency is more important than the how
    if (document.body.scrollTop > 0.5 * windowHeight
        || document.documentElement.scrollTop > 0.5 * windowHeight) {
        document.getElementById("about-me").className = "fade-hide";
    }

    // i personally like this method
    if (
        document.body.scrollTop > 1 * windowHeight
        || document.documentElement.scrollTop > 1 * windowHeight
    ) {
        document.getElementById("my-skills").className = "fade-show";

        document.getElementById("html").classList.remove('html1');
        document.getElementById("html").classList.add('html');
        document.getElementById("css").classList.remove('css1');
        document.getElementById("css").classList.add('css');
        document.getElementById("js").classList.remove('js1');
        document.getElementById("js").classList.add('js');
        document.getElementById("php").classList.remove('php1');
        document.getElementById("php").classList.add('php');
    } else if (
        document.body.scrollTop < 1 * windowHeight
        || document.documentElement.scrollTop < 1 * windowHeight
    ) {
        document.getElementById("my-skills").className = "fade-hide";

        document.getElementById("html").classList.remove('html');
        document.getElementById("html").classList.add('html1');
        document.getElementById("css").classList.remove('css');
        document.getElementById("css").classList.add('css1');
        document.getElementById("js").classList.remove('js');
        document.getElementById("js").classList.add('js1');
        document.getElementById("php").classList.remove('php');
        document.getElementById("php").classList.add('php1');
    }

    if (
        document.body.scrollTop > 1.5 * windowHeight
        || document.documentElement.scrollTop > 1.5 * windowHeight
    ) {
        document.getElementById("my-skills").className = "fade-hide";

        document.getElementById("html").classList.remove('html');
        document.getElementById("html").classList.add('html1');
        document.getElementById("css").classList.remove('css');
        document.getElementById("css").classList.add('css1');
        document.getElementById("js").classList.remove('js');
        document.getElementById("js").classList.add('js1');
        document.getElementById("php").classList.remove('php');
        document.getElementById("php").classList.add('php1');
    }

    if (
        document.body.scrollTop > 2 * windowHeight
        || document.documentElement.scrollTop > 2 * windowHeight
    ) {
        document.getElementById("box-car").className = "fade-show";
    } else if (
        document.body.scrollTop < 1 * windowHeight
        || document.documentElement.scrollTop < 1 * windowHeight
    ) {
        document.getElementById("box-car").className = "fade-hide";
    }

    if (
        document.body.scrollTop > 2.5 * windowHeight
        || document.documentElement.scrollTop > 2.5 * windowHeight
    ) {
        document.getElementById("box-car").className = "fade-hide";
    }

    if (
        document.body.scrollTop > 3 * windowHeight
        || document.documentElement.scrollTop > 3 * windowHeight
    ) {
        document.getElementById("the-cuuuube").className = "fade-show";
    } else if (
        document.body.scrollTop < 1 * windowHeight
        || document.documentElement.scrollTop < 1 * windowHeight
    ) {
        document.getElementById("the-cuuuube").className = "fade-hide";
    }

    if (
        document.body.scrollTop > 3.5 * windowHeight
        || document.documentElement.scrollTop > 3.5 * windowHeight
    ) {
        document.getElementById("the-cuuuube").className = "fade-hide";
    }

    if (
        document.body.scrollTop > 3.35 * windowHeight
        || document.documentElement.scrollTop > 3.35 * windowHeight
    ) {
        document.getElementById("contact").className = "fade-show";
    } else if (
        document.body.scrollTop < 1 * windowHeight
        || document.documentElement.scrollTop < 1 * windowHeight
    ) {
        document.getElementById("contact").className = "fade-hide";
    }
}
