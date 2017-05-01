

  /** Vytvori Slideshow objekt pro zadany identifikator DIV elementu. */
  function Slideshow(containerElementId) {
    this.images = [];
    var container = document.getElementById(containerElementId);
    var child = container.firstChild;
    while (child != null) {
      if (child.nodeName === "IMG") {
        this.images.push(child);
      }
      child = child.nextSibling;
    }
    this.previousIndex = 0;
    this.currentIndex = 0;
    this.timerId = null;
    this.updateTimeout = 25;
    this.updateStep = 0.05;
  }

  /** Aktualizuje snimek. */
  Slideshow.prototype.update = function() {
    var img1 = this.images[this.previousIndex];
    var img2 = this.images[this.currentIndex];
    var op = 0.0;
    var timeout = this.updateTimeout;
    var step = this.updateStep;
    var f = function() {
      img1.style.opacity = 1 - op;
      img2.style.opacity = op;
      op += step;
      if (op < 1) {
        setTimeout(f, timeout);
      } else {
        img1.style.opacity = 0;
        img2.style.opacity = 1;
      }
    };
    setTimeout(f, timeout);
  }

  /** Zobrazi nasledujici snimek. */
  Slideshow.prototype.next = function() {
    this.previousIndex = this.currentIndex++;
    if (this.currentIndex >= this.images.length) {
      this.currentIndex = 0;
    }
    this.update();
  };

  /** Zobrazi predchozi snimek. */
  Slideshow.prototype.previous = function() {
    this.previousIndex = this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.images.length - 1;
    }
    this.update();
  };

  /** Spusti slideshow. Snimky se stridaji po zadanem poctu milisekund. */
  Slideshow.prototype.start = function(millisec) {
    if (this.timerId == null) {
      var t = this;
      this.timerId = setInterval(function() {
        t.next();
      }, millisec);
    }
  };

  /** Zastavi slideshow. */
  Slideshow.prototype.stop = function(time) {
    if (this.timerId != null) {
      clearInterval(this.timerId);
      this.timerId = null;
    }
  }

  /** Povoli/zakaze tlacitko. */
  function setButtonEnabled(buttonId, enabled) {
    document.getElementById(buttonId).disabled = enabled ? null : 'disabled';
  }

  /** Inicializuje obsluhu tlacitek a spusti slideshow. */
  function initialize() {
    var slideshow = new Slideshow('slideshow');
    var timeout = 5000;
    slideshow.start(timeout);        
  }