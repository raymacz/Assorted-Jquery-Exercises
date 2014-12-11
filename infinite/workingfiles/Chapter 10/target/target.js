/*
	jQuery Target Practice
	By Craig Buckler
	http://craigbuckler.com/
	http://optimalworks.net/
*/

$(Init);

// game configuration parameters
var config = {
	targetlayers: 3,
	targetsperlayer: 5,
	gameover: 5,
	minlayerwidth: 40,
	maxlayerwidth: 90,
	minwidth: 70,
	fallheight: 22,
	fallduration: 300,
	riseduration: 600,
	raisedelay: 2000,
	raisedelaydec: 30,
	raisedelaymin: 300,
	shotfade: 1500,
	buttonfade: 1000,
	messagefade: 2000,
	bullscore: 10,
	images: {
		target: { src: "images/target.png", width: 0, height: 0 },
		shot: { src: "images/shot.png", width: 0, height: 0 }
	}
};

// globals
var run = {
	start: false,
	hiscore: 0
};

// initialize
function Init() {

	// cached objects
	run.Main = $("#main");
	run.startButton = $("header h2")[0];
	run.ScoreCounter = $("p#score strong");
	run.HiScoreCounter = $("p#hiscore strong");

	// easing functions
	$.easing["fall"] = function(i) { return i*i; };
	$.easing["rise"] = Math.sqrt;

	// load images
	ImageInfo("target", DrawTargets);
	ImageInfo("shot", DrawTargets);

	// shot handler
	$(document).click(Shoot);
}


// draw targets
function DrawTargets() {

	// images loaded?
	if (config.images.target.width == 0 || config.images.shot.width == 0) return;
	
	// play area size
	run.Main.empty();
	var mw = run.Main.width(), mh = run.Main.height();
	var l, x, y, a, w, h, div;
	
	for (l = 0; l < config.targetlayers; l++) {
	
		// vertical location
		y =  (l / config.targetlayers) * (90 - (mh / config.images.target.height)) - 3;
		
		// width and height
		w = Math.round((l / config.targetlayers) * (config.images.target.width - config.minwidth) + config.minwidth);
		h = Math.round(config.images.target.height * w / config.images.target.width);
	
		for (x = 0; x < config.targetsperlayer; x++) {
	
			// target div, width, height and location
			a = ((l / config.targetlayers) * (config.maxlayerwidth - config.minwidth) + config.minwidth);
			a = ((100 - a) / 2) + (x / config.targetsperlayer * a);
			div = $('<div><img src="'+config.images.target.src+'" /></div>');
			div.width(w).height(h).css({ left: a+"%", top: y+"%" });
			run.Main.append(div);

		}
		
	}
	
	// ready to start
	run.targets = $("img", run.Main);
	run.targetnum = config.targetlayers * config.targetsperlayer;
	Ready();

}


// ready to start game
function Ready(msg) {
	run.start = false;
	$(run.startButton).fadeIn(config.buttonfade);
	$("<div id=\"msg\"><p>Game Over</p><p>"+(msg ? msg : "Game ends when "+config.gameover+" or more targets are left standing.")+"</p></div>").appendTo("body").fadeIn(config.messagefade);
}


// start new game
function StartGame() {

	if (!run.start) {
	
		// collapse all targets and setup
		$("#msg").remove();
		TargetFall(run.targets);
		$(run.startButton).fadeOut(config.buttonfade);
		run.activetargets = 0;
		run.score = 0;
		run.delay = config.raisedelay;
		run.start = true;
		UpdateScore(0);
		setTimeout(RaiseTarget, run.delay);
	
	}

}


// game over
function EndGame() {

	var msg = "";

	// update high-score?
	if (run.score > run.hiscore) {
		run.hiscore = run.score;
		run.HiScoreCounter.text(run.hiscore);
		msg = "New high score!";
	}

	Ready(msg);
}


// raise a target
function RaiseTarget() {

	// find unused target
	var t = Math.round(Math.random() * (run.targetnum - 1));
	while(run.targets.eq(t).hasClass("ready")) t = (t+1) % run.targetnum;
	TargetRise(run.targets.eq(t));
	run.activetargets++;
	
	// game over?
	if (run.activetargets >= config.gameover) EndGame();
	else {
		// raise another
		if (run.delay > config.raisedelaymin) {
			run.delay = Math.max(config.raisedelaymin, run.delay - config.raisedelaydec);
		}
		setTimeout(RaiseTarget, run.delay);
	}

}


// shoot effect
function Shoot(e) {

	var s = $('<img src="'+config.images.shot.src+'" />');
	s.css("position", "absolute").width(config.images.shot.width).height(config.images.shot.height).offset({ left: e.pageX - config.images.shot.width/2, top: e.pageY - config.images.shot.height/2 });
	s.appendTo("body").fadeOut(config.shotfade, function() { s.remove(); });
	
	if (run.start) {
		// target shot?
		if (e.target.nodeName.toLowerCase() == "img" && $(e.target).hasClass("ready")) ShootTarget(e.pageX, e.pageY, e.target);
	}
	// start new game
	else if (e.target == run.startButton) StartGame();
	
}


// target shot
function ShootTarget(x, y, img) {

	// find distance from target center
	img = $(img);
	var os = img.offset();
	var w = img.width()/2, h = img.height()/2;
	var dx = os.left + w - x;
	var dy = os.top + h - y;
	var d = (dx*dx) + (dy*dy);
	w = w*w;
	if (d < w) {
		// target hit
		run.activetargets--;
		UpdateScore(Math.max(1, Math.round((w-d) / w  * config.bullscore)));
		TargetFall(img);
	}

}


// update score
function UpdateScore(inc) {
	run.score += inc;
	run.ScoreCounter.text(run.score);
}


// knock down target
function TargetFall(e) {

	$(e).removeClass("ready").stop().animate({
		height: config.fallheight+"%"
	}, {
		duration: config.fallduration,
		easing: "fall"
	});

}


// rise target
function TargetRise(e) {

	$(e).addClass("ready").stop().animate({
		height: "100%"
	}, {
		duration: config.riseduration,
		easing: "rise"
	});

}


// get image information
function ImageInfo(name, callback) {

	LoadImage(config.images[name].src, function(img) {
		config.images[name].width = img.width;
		config.images[name].height = img.height;
		if (callback) callback();
	});

}


// preload images
function LoadImage(src, callback) {
	var img = new Image();
	img.src = src;
	if (callback) {
		if (img.complete) callback(img);
		else img.onload = function() { callback(img); };
	}
}