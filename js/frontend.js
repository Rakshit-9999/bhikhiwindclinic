<script>
    // Add ripple effect on click
    document.querySelectorAll('.feature-btn').forEach(btn => {
      btn.addEventListener('click', function(e) {
        const ripple = document.createElement('div');
        ripple.className = 'ripple';
        
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        
        this.appendChild(ripple);
        
        setTimeout(() => {
          ripple.remove();
        }, 1000);
        
        e.preventDefault();
      });
    });  
    
      var $cards = $('.card-object'),
          $faceButtons = $('.face');
          
      $faceButtons.on('click', flipCard);
      
      function flipCard(event) {
        event.preventDefault();
        
        var $btnFace = $(this),
            $card = $btnFace.parent('.card-object');
        
        if ($card.hasClass('flip-in')) {
          closeCards();
        } else {
          closeCards();
          openCard($card);
        }
      }
      
      function closeCards() {
        $cards.each(function() {
          $(this)
            .filter('.flip-in')
            .removeClass('flip-in')
            .queue(function() {
              // Force reflow hack
              var reflow = this.offsetHeight;
              $(this)
                .addClass('flip-out')
                .dequeue();
            });
        });
      }
      
      function openCard($card) {
        $card
          .removeClass('flip-out')
          .queue(function() {
            // Force reflow hack
            var reflow = this.offsetHeight;
            $(this)
              .addClass('flip-in')
              .dequeue();
          });
      }

  </script>
  