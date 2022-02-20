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
  } else if (document.body.scrollTop < 1 * h || document.documentElement.scrollTop < 1 * h) {
    document.getElementById("div2").className = "div2-";
  }

  if (document.body.scrollTop > 1.5 * h || document.documentElement.scrollTop > 1.5 * h) {
    document.getElementById("div2").className = "div2-";
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

  if (document.body.scrollTop > 4 * h || document.documentElement.scrollTop > 4 * h) {
    document.getElementById("div5").className = "div5";
  } else if (document.body.scrollTop < 1 * h || document.documentElement.scrollTop < 1 * h) {
    document.getElementById("div5").className = "div5-";
  }

  if (document.body.scrollTop > 4.5 * h || document.documentElement.scrollTop > 4.5 * h) {
    document.getElementById("div5").className = "div5-";
  }
}
