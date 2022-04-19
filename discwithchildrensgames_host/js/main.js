const body = document.querySelector("body");

if ( body.offsetWidth > 1024) {
	// 3D Scroll

let zSpacing = -1000,
lastPos = zSpacing / 5,
$frames = document.getElementsByClassName('frame'),
frames = Array.from($frames),
zVals = []

window.onscroll = function() {

let top = document.documentElement.scrollTop,
	delta = lastPos - top

lastPos = top

frames.forEach(function(n, i) {
zVals.push((i * zSpacing) + zSpacing)
zVals[i] += delta * -5.5
let frame = frames[i],
		transform = `translateZ(${zVals[i]}px)`,
		opacity = zVals[i] < Math.abs(zSpacing) / 1.8 ? 1 : 0,
		visibilityProperty = zVals[i];
		if (visibilityProperty < 1) {
			var visibilityValue = "visibility: visible"
		} else {
			var visibilityValue = "visibility: hidden"
		}

		// здесь я сделал переменную visibilityProperty для того чтобы можно было функционировать с кнопками, ссылкам в слайдах

frame.setAttribute('style', `transform: ${transform}; opacity: ${opacity}; ${visibilityValue};`)
})

}

window.scrollTo(0, 1)
}