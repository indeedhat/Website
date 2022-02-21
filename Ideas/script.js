window.onscroll = function () { myFunction() };

var h = window.innerHeight;

function myFunction() {
  if (document.body.scrollTop > 0 * h || document.documentElement.scrollTop > 0 * h) {
    document.getElementById("div1").className = "div1";
  } else if (document.body.scrollTop < 0 * h || document.documentElement.scrollTop < 0 * h) {
    document.getElementById("div1").className = "div1-";
  }

  if (document.body.scrollTop > 0.5 * h || document.documentElement.scrollTop > 0.5 * h) {
    document.getElementById("div1").className = "div1-";
  }

  if (document.body.scrollTop > 1 * h || document.documentElement.scrollTop > 1 * h) {
    document.getElementById("div2").className = "div2";
    document.getElementById("html").classList.remove('html1');
    document.getElementById("html").classList.add('html');
    document.getElementById("css").classList.remove('css1');
    document.getElementById("css").classList.add('css');
    document.getElementById("js").classList.remove('js1');
    document.getElementById("js").classList.add('js');
    document.getElementById("php").classList.remove('php1');
    document.getElementById("php").classList.add('php');
  } else if (document.body.scrollTop < 1 * h || document.documentElement.scrollTop < 1 * h) {
    document.getElementById("div2").className = "div2-";
    document.getElementById("html").classList.remove('html');
    document.getElementById("html").classList.add('html1');
    document.getElementById("css").classList.remove('css');
    document.getElementById("css").classList.add('css1');
    document.getElementById("js").classList.remove('js');
    document.getElementById("js").classList.add('js1');
    document.getElementById("php").classList.remove('php');
    document.getElementById("php").classList.add('php1');
  }

  if (document.body.scrollTop > 1.5 * h || document.documentElement.scrollTop > 1.5 * h) {
    document.getElementById("div2").className = "div2-";
    document.getElementById("html").classList.remove('html');
    document.getElementById("html").classList.add('html1');
    document.getElementById("css").classList.remove('css');
    document.getElementById("css").classList.add('css1');
    document.getElementById("js").classList.remove('js');
    document.getElementById("js").classList.add('js1');
    document.getElementById("php").classList.remove('php');
    document.getElementById("php").classList.add('php1');
  }

  if (document.body.scrollTop > 2 * h || document.documentElement.scrollTop > 2 * h) {
    document.getElementById("div3").className = "div3";
  } else if (document.body.scrollTop < 1 * h || document.documentElement.scrollTop < 1 * h) {
    document.getElementById("div3").className = "div3-";
  }

  if (document.body.scrollTop > 2.5 * h || document.documentElement.scrollTop > 2.5 * h) {
    document.getElementById("div3").className = "div3-";
  }

  if (document.body.scrollTop > 3 * h || document.documentElement.scrollTop > 3 * h) {
    document.getElementById("div4").className = "div4";
  } else if (document.body.scrollTop < 1 * h || document.documentElement.scrollTop < 1 * h) {
    document.getElementById("div4").className = "div4-";
  }

  if (document.body.scrollTop > 3.5 * h || document.documentElement.scrollTop > 3.5 * h) {
    document.getElementById("div4").className = "div4-";
  }

  if (document.body.scrollTop > 3.35 * h || document.documentElement.scrollTop > 3.35 * h) {
    document.getElementById("div5").className = "div5";
  } else if (document.body.scrollTop < 1 * h || document.documentElement.scrollTop < 1 * h) {
    document.getElementById("div5").className = "div5-";
  }
}
