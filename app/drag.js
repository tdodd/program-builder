// .draggable behaviour
interact('.draggable').draggable({

  inertia: true,
  restrict: { // Restrict movement to drag-area container.
    restriction: "#program",
    // Resctrict using element dimensions instead of cursor position.
    elementRect: { left: 0, right: 1, top: 0, bottom: 1 }
  },
  onstart: function(event) {
    // Get the id of the program that is dropped.
    draggedProgram = event.target.id;
  },
  // Movement controls.
  onmove: function (event) {
    var target = event.target,
        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    target.style.webkitTransform =
    target.style.transform =
      'translate(' + x + 'px, ' + y + 'px)';

    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
  },
  onend: function() {
    // On drag end.
  }

});

// .dropzone behaviour
interact('.dropzone').dropzone({

  accept: '.draggable', // Accept this css selector.
  overlap: 0.9, // Require 90% overlap to detect drop.

  // dropzone feedback
  ondropactivate: function (event) {
      event.target.classList.add('drop-active');
  },
  ondropdeactivate: function (event) {
      event.target.classList.remove('drop-active');
  },
  ondragenter: function (event) {
      var draggableElement = event.relatedTarget,
          dropzoneElement = event.target;
      dropzoneElement.classList.add('drop-target');
  },
  ondragleave: function (event) {
      event.target.classList.remove('drop-target');
  },

  // On successful drop.
  ondrop: function (event) {
    
    // Hide dropped program.
    $('#' + draggedProgram).hide();
    generateChart();

  },
  ondropdeactivate: function (event) {
    event.target.classList.remove('drop-active');
    event.target.classList.remove('drop-target');
  }

});