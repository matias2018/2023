window.addEventListener('load', () => {

  // Get all of the elements to copy the text from
  const elementsToCopy = document.querySelectorAll('.toCopy');

  // Add an event listener to each element
  for (const element of elementsToCopy) {
    element.addEventListener('click', function(event) {
      // Copy the text of the element to the clipboard
      navigator.clipboard.writeText(element.innerText);

        // Create a small box to display the feedback
      const feedbackBox = document.createElement('div');
      feedbackBox.classList.add('feedback-box');
      feedbackBox.innerHTML = 'Email copied to clipboard!';

      // Add the feedback box to the document body
      document.body.appendChild(feedbackBox);

      // Position the feedback box next to the cursor
      // feedbackBox.style.left = `${event.clientX}px`;
      // feedbackBox.style.top = `${event.clientY}px`;

      // Hide the feedback box after a few seconds
      setTimeout(() => {
        feedbackBox.remove();
      }, 2000);

      // Display the feedback box
      feedbackBox.style.display = 'block';
    });
  }
});

