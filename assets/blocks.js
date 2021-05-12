console.log("Sources");

var sources = document.querySelector(".single-sources");

var numberOfChildren = sources.getElementsByTagName('p').length
var sources_span_data = document.querySelector(".single-sources data");
var number = document.createElement("i");
number.innerHTML = numberOfChildren +'+ ';
sources_span_data.parentNode.insertBefore(number, sources_span_data);


var container = document.getElementById('sources');
document.querySelector(".single-sources span").addEventListener('click', function (event) {
	event.preventDefault();

	if (!container.classList.contains('active')) {
    container.classList.add('active');
    container.style.height = 'auto';

    var height = container.clientHeight + 'px';

    container.style.height = '0px';

    setTimeout(function () {
      container.style.height = height;
    }, 0);
  } else {
    container.style.height = '0px';

    container.addEventListener('transitionend', function () {
      container.classList.remove('active');
    }, {
      once: true
    });
  }
});


// var sources_span = document.querySelector(".single-sources span");
// 		sources_span.addEventListener("click", slideToggle);