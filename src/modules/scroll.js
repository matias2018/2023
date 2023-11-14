var sm = new ScrollMagic.Controller({
	refreshInterval: 0
});

var marquee = document.querySelector(".fp-marquee");

if (marquee) {
	var scene = new ScrollMagic.Scene({
		triggerElement: marquee,
		triggerHook: "onEnter",
		offset: 0,
		duration: window.innerHeight + marquee.offsetHeight * 2
	});
	
	scene.on("progress", function ({ progress }) {
		// change this number to increase or decrease the speed
		var amount = -800;
		var startingOffset = 350;
	
		marquee.style.transform = `translate3d(0, 0, 0) translateX(${
			amount * progress + startingOffset
		}px)`;
	});
	
	scene.addTo(sm);
} else {
	console.log('no marquee. All ok.');
}

