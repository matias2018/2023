// Wait until the page has loaded before accessing the element with the class name 'hoverEffect'
window.addEventListener('load', () => {

  let intervals = []

  const elements = document.querySelectorAll('.scramble')

  const randomInt = max => Math.floor(Math.random() * max)
  const randomFromArray = array => array[randomInt(array.length)]

  const scrambleText = text => {
    const chars = '%~^<>*?><[]&@#)(.%$-_:/;?!'.split('')
    return text
      .split('')
      .map(x => randomInt(3) > 1 ? randomFromArray(chars) : x)
      .join('')
  }

  elements.forEach((element, index) => {
    const originalText = element.innerText
    element.addEventListener('mouseover', () => {
      intervals[index] = setInterval(() =>
        element.innerText = scrambleText(originalText)
      , 170)
    })
    
    element.addEventListener('mouseout', () => {
      clearInterval(intervals[index])
      element.innerText = originalText
    })
  })
  
});


window.addEventListener('load', () => {
  const targets = document.querySelectorAll('.hoverJumpEffect');

  if (targets) {
    targets.forEach((target) => {
      // Check if the element has already been processed
      if (!target.classList.contains('textProcessed')) {
        const text = target.textContent;
        const textContainer = target;

        // Clear the content of the original <p> tag
        textContainer.innerHTML = '';

        for (let i = 0; i < text.length; i++) {
          const span = document.createElement("span");
          span.textContent = text[i];
          span.classList.add("character");
          span.setAttribute("data-content", text[i]);
          textContainer.appendChild(span);
        }

        // Add a class to indicate that the transformation has been applied
        target.classList.add('textProcessed');
      }
    });
  }
});





